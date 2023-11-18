<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\User;
use App\Models\Admin;
use App\Models\Rented;
use DB;
use Session;

class BookController extends Controller
{
    public function add_book()
    {
        return view('add_book');
    }
    public function add_book_data(Request $request)
    {
        $add_book = new Book();
        $add_book->book_name = $request->book_name;
        $add_book->auther_name = $request->auther_name;
        $add_book->pages = $request->pages;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('books'), $imageName);
        $add_book->image = $imageName;
        $add_book->save();
        return back()->with('success', 'Book Added Successfully!!');
    }
    public function book_details($id)
    {
        $show_details = Book::find($id);
        return view('book_detail', compact('show_details'));
    }

    public function order_details($id)
    {
        $show_details = Book::find($id);
        return view('order_book', compact('show_details'));
    }
}
