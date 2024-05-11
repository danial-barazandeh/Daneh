<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'url',
        'title',
        'description',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
