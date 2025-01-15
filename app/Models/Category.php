<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Relación muchos a muchos con Book.
     */
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category');
    }
}
