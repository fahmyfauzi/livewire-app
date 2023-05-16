<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'blog_title', 'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'blog_title'
            ]
        ];
    }
}
