<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'description',
        'price',
        'category',
        'situation',
        'image',
        'delivaryCharge',
        'delivaryMethod',
        'delivaryArea',
        'delivaryDays',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
