<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use category;

class Item extends Model
{
    protected $fillable = ['name', 'description'];

    use HasFactory;

    // de category daar de item bijhoort
    public function category() {
        return $this->belongsTo(Category::class);
    }
}