<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    } //end of getNameAttribute

    //scopes

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('name', 'like', '%' . $search . '%');
        });
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_category');
    }
}
