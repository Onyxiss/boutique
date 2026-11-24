<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    //fillable icon name fields
    protected $fillable = [
        'name',
        'icon'
    ];

    //Liaison avec le model Product
    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }

}
