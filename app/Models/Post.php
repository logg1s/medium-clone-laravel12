<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
        'published_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function readTime($wordsPerMin = 200)
    {
        $wordsCount = str_word_count($this->content);
        $readTime = ceil($wordsCount / $wordsPerMin);
        return max(1, $readTime);
    }
}
