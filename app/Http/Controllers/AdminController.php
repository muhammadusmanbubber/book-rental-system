<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Book;
use App\Models\Rental;

use DB;
use Session;
class AdminController extends Controller
{
    public function rented_books(){
        $data = Rental::whereNotNull('return_date')
            ->with(['user', 'book'])
            ->get();
            return view('rented_books',compact('data'));
    }

    public function admin_login(){
        return view('admin_login');
    }

    public function edit($id){
        $data=User::find($id);
        return view('update_by_admin',compact('data'));
    }

    public function update($id,Request $request){
        $shows=User::find($id);
        $shows->name= $request->name;
        $shows->email= $request->email;
        $shows->password=$request->password;
        $imageName= time().'.'.$request->image->extension();
        $request->image->move(public_path('upload'),$imageName);
        $shows->image=$imageName;
        $shows->save();
        return view('admin_home')->with('success','Update User Profile Successfuly!!'); 
        }
        public function update_book_page($id){
            $update=Book::find($id);
            return view('update_book',compact('update'));
        }

        public function update_book($id,Request $request){
            $update=Book::find($id);
            $update->book_name= $request->book_name;
            $update->auther_name= $request->auther_name;
            $update->pages=$request->pages;
            $imageName= time().'.'.$request->image->extension();
            $request->image->move(public_path('books'),$imageName);
            $update->image=$imageName;
            $update->save();
            return redirect('all_books'); 
            }

    public function logout1(){
        session()->forget('id');
        return redirect('admin_login');
    }
    
    public function admin_home(Request $request){
        $shows=User::all();
    $id=$request->session()->get('id');
        return view('admin_home',compact('shows'));
    }

    public function trash(){
        $shows=User::onlyTrashed()->get();
        return view('trash',compact('shows'));
    }

    public function forceDelete($id){
        $shows=User::withTrashed()->find($id);
        if(!is_null($shows)){
        $shows->forceDelete();
        }
        return back();
    }

    public function restore($id){
        $shows=User::withTrashed()->find($id);
        if(!is_null($shows)){
            $shows->restore();
        }
        return redirect('admin_home');
    }

    public function search(Request $request)
    {
      $search = $request->input('search');
      $shows = DB::table('users')->where('name', 'like','%'. $search.'%')->get();
      return view('admin_home', compact('shows'));
    }

    // public function add_book(){
    //     return view('add_book');
    // }

public function delete($id){
 User::destroy($id);
//  DB::table('users')->where('id',$id)->delete();
 return back();
    }
// public function all_books(){
//     $show=Book::all()->paginate(6);
//     return view('all_books',compact('show'));
// }  
public function all_books(Request $request){
    $show = Book::latest()->paginate(6);
    return view('all_books', compact('show'));
} 
    // ===========================Admin Login Section===============================

    public function admin_login_qry(Request $request){
        $show=Admin::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
        if($show){
           session()->put('id',$show->id);
            return redirect('admin_home');
        }else{
            return back()->with('error', 'Email or Password are incorrect');
        }
    }
}

