<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'time', 'description', 'directions', 'ingredients', 'picture', 'user_id'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('ingredients', 'like', '%' . request('search') . '%');
        }
    }

    //Relationship To User(ownership of recipe)
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}