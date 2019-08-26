<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attribute_values';

    protected $fillable = [
                'attribute_id', 'value','price',
        ];
    
    protected $cast = [ 
            'attribute_id' => 'integer',
    ];

    public function attribute()
    {
        return $this->belongTo(Attribute::class);
    }
}
