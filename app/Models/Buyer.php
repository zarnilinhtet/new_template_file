<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    use HasFactory;
    protected $fillable = ['buyer_name', 'active_status', 'remark', 'created_at', 'updated_at'];
}
