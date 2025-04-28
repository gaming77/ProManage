<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, $search = null, $sort = null)
    {
        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        if ($sort) {
            if ($sort === 'name') {
                $query->orderBy('name');
            } elseif ($sort === 'price') {
                $query->orderBy('price');
            }
            // tambahkan sorting lain kalau mau
        }

        return $query;
    }
}
