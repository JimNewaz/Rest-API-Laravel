<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Customer -> Invoice (One to Many Relations)
    public function invoices(){
        return $this->hasMany(Invoices::class);
    }
}
