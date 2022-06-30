<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    public function contracts()
    {
        return $this->hasMany(Contract::class());
    }
    public function quotations()
    {
        return $this->hasMany(Quotation::class());
    }
    public function users()
    {
        return $this->hasMany(User::class());
    }
    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class());
    }
}
