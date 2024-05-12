<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'products';

    protected $fillable = [
        'title',
        'content',
        'seoTitle',
        'seoDescription',
        'seoKeys',
        'published',
        'user_id',
        'image_id',
        'price',
        'salePrice',
        'free',
        'time',
        'introUrl',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    
}
