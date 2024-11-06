<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Company extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'email',
        'city',
        'country',
        'postcode',
        'vat_id',
        'company_number',
        'owner_id',
        'status',
        'region',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
