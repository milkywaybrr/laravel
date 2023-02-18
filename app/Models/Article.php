<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'anons_title',
      'content',
      'image_path',
      'status',
      'view_count',
      'author_id',
      'category_id'
    ];

    public  function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id')->first();
    }

    public  function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id')->first();
    }

//    camelCase
    public function getImageUrlAttribute()
    {
        return asset('public' . Storage::url($this->image_path));
    }
}
