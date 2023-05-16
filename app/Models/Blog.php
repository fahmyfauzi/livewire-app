<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_title', 'slug'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'blog_title'
            ]
        ];
    }
}
