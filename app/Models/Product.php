<?php
// app/Models/Product.php
// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['Test_Name', 'Rate', 'Sample Required', 'Performed'];
}
