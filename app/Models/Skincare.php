<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skincare extends Model
{
   protected $fillable = ['product', 'brand', 'category', 'price'];
 
    protected function casts(): array
    {
        return [
            'price' => 'integer',     
            'category' => 'string',    
        ];
    }
}
