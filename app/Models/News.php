<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public static function createNews(array $data)
    {
        $news = new self;
        $news->user_id      = $data['user_id'];
        $news->title        = $data['title'];
        $news->content      = $data['content'];
        $news->image_url    = $data['saved_image_url'];
        $news->save();
    }
}
