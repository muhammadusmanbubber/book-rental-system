<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Rental;

class RentalController extends Controller
{

    public function store($book_id){
        
        $user = User::find(auth()->user()->id);
        $book = Book::find($book_id);
        // Check if user can rent more books
        if ($user->rentals->count() >= 4) {
            return back()->with('error', 'You have reached the maximum limit for book rentals.');

        }
        
        // Check if the book is available
        if (!$book->is_available) {
            return back()->with('error', 'Sorry, the book is currently not available for rental.');
        }
        
        // Rent the book
        $rental = new Rental();
        $rental->user_id = auth()->user()->id;
        $rental->book_id = $book_id;
        $rental->rental_date = now(); // Use Carbon for date formatting
        $rental->return_date = Carbon::now()->addDays(3);; // Set a return date
        
        $rental->save();
        
        // Update book availability
        $book->is_available = false;
        $book->save();
        // dd($user,$book);
        
        return back()->with('success', 'Book order successfuly');
    }
} 
