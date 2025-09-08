<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'short_description', 'full_content', 'thumbnail_image',
        'publish_date', 'tags', 'meta_title', 'meta_description',
        'is_featured', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
