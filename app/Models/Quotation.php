<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
