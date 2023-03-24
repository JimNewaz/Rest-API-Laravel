<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;

    // Customer -> Invoice (One to Many Relations)
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
