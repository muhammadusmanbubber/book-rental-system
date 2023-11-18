<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\DatabaseEloquent\Collection;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

class Book extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
