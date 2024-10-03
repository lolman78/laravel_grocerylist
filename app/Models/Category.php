<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // alle items die de behorende category hebben
    public function items() {
        return $this->hasMany(Item::class);
    }
}