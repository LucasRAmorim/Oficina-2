<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $table = 'budgets';

    protected $fillable = ['budget_amount', 'seller_name', 'client_name', 'description'];
}
