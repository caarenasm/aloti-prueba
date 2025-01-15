<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
    ];

    /**
     * Relación muchos a muchos con Category.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }
}
