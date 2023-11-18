<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
