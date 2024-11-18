<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['test_id', 'product_id', 'type', 'criteria', 'result', 'remarks', 'tested_by'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
