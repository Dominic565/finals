<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houseinstallments extends Model
{
    use HasFactory;
    protected $fillable =['Housename','Address','price'];
}
