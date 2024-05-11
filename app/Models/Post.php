<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'seo_title',
        'seo_description',
        'seo_keys',
        'published',
        'user_id',
        'image_id',
        'deleted_at',
    ];

    // public function image(): HasOne
    // {
    //     return $this->hasOne(Image::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
