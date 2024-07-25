<?php

namespace App\Models;

use App\Models\frontend\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'registration_data_id',
        'review',
        'rating',
        'is_moderated',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(RegistrationData::class, 'registration_data_id');
    }
}