<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'package', 'price', 'start_date', 'end_date', 'notes', 'status','company_id',
    ];

    protected $dates = ['deleted_at']; // Add this line for soft delete dates

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
