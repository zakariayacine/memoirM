<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
