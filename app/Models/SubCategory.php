<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class SubCategory extends Model
{
    use HasFactory;
    use Sluggable;
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function sluggable(): array
    {
        return [
            'sub_category_slug' => [
                'source' => 'sub_category_name',
                'onUpdate' => true
            ]
        ];
    }
}
