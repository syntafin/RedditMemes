<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meme extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'memes';

    protected $fillable = [
        'name',
        'subreddit',
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
