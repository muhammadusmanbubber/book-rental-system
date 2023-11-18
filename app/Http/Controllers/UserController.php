<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Book;
use App\Models\Rental;
use DB;
use Session;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('user_login');
    }
    public function user_login()
    {
        return view('user_login');
    }
    public function rented()
    {
        $data = Rental::whereNotNull('return_date')
            ->with(['user', 'book'])
            ->get();
        return view('rented', compact('data'));
    }
    public function home(Request $request)
    {
        $show_books = Book::latest()->paginate(6);
        return view('home', compact('show_books'));
    }

    // public function book_details($id){
    //     $id=$request->session()->get('id');
    //     $show_detail=Book::find($id);
    //     return view('book_detail',compact('show_detail'));
    // }

    // ===========================Signup Section===============================

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $signup = new User();
        $signup->name = $request->name;
        $signup->email = $request->email;
        $signup->password = Hash::make($request->password);
        // 'password' => Hash::make($data['password']),
        // ( insert Image into database )
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);
        $signup->image = $imageName;
        $signup->save();
        return redirect('user_login')->with('success', 'Signup Successfuly!!');
    }

    // ===========================User Login Section===============================

    public function user_login_qry(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($request->all());
        if (Auth::attempt($credentials)) {
            session()->put('id', auth()->user()->id);
            return redirect('/home');
        }
        // Authentication failed
        return back()->with('error', 'Email or Password are incorrect');
    }

    // ===========================Show Data in User Profile===============================

    public function profile(Request $request)
    {
        $id = $request->session()->get('id');
        $show = User::find($id);
        return view('profile', compact('show'));
    }
    // ===========================Update Data in User Profile===============================

    public function edit_profile($id)
    {
        $data = User::find($id);
        return view('update_user_profile', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);
        $data->image = $imageName;
        $data->save();
        return redirect('profile')->with('success', 'Update User Profile Successfuly!!');
    }

    public function order_book()
    {
        // $show_user_data=user::find($id);
        return view('order_book');
    }
}
