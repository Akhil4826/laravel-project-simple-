<?php
// app/Models/Supplier.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primaryKey = 'supplier_id';
    public $timestamps = true;

    protected $fillable = ['supplier_name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'supplier_id');
    }
}
