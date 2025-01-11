<?php

namespace App\Models;
// app/Models/Price.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';
    protected $primaryKey = 'price_id';
    public $timestamps = true;

    protected $fillable = ['product_id', 'price', 'start_date', 'end_date'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
