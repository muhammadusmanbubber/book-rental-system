<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\User;
use App\Models\Admin;
use App\Models\Rented;

use DB;
use Session;

class BookController extends Controller
{

        public function add_book(){
            return view('add_book');
        }
        public function add_book_data(Request $request){
            $add_book=new Book;
            $add_book->book_name=$request->book_name;
            $add_book->auther_name=$request->auther_name;
            $add_book->pages=$request->pages;
            $imageName= time().'.'.$request->image->extension();
            $request->image->move(public_path('books'),$imageName);
            $add_book->image=$imageName;
            $add_book->save(); 
            return view('add_book');
        }
    public function book_details($id){
        $show_details=Book::find($id);
        return view('book_detail',compact('show_details'));
    }
    // orignal

    public function order_details($id){
        $show_details=Book::find($id);
        return view('order_book',compact('show_details'));
    }


    public function rented_book(Request $request){
    // $user_id=$request->session()->get('id');
        $add_book=new Rented;
        $add_book->user_id=$request->user_id;
        $add_book->book_name=$request->book_name;
        $add_book->book_name=$request->book_name;
        $add_book->book_name=$request->book_name;
        $add_book->auther_name=$request->auther_name;
        $add_book->pages=$request->pages;
        $add_book->save();
        return view('home');
    }

}