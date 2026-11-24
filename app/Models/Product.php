<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    //fillable name description photo price discount photo stock_quantity new category_id fields
    protected $fillable = [
        'name',
        'description',
        'photo',
        'price',
        'discount',
        'stock_quantity',
        'new',
        'category_id'
    ];

    protected $casts = [
        'new' => 'boolean',
    ];

    // Liaison avec le model Category
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
