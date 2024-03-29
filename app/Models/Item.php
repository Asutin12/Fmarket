<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Like;
use App\Models\Category;

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
        'category_id',
        'delivaryCharge',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function likes(){
        return $this->hasMany(Like::class, 'item_id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function purchase(){
        return $this->hasMany(Purchase::class);
    }

    public function is_liked_by_auth_user(){
        $id = Auth::id();

        $likers = array();
        foreach ($this->likes as $like) {
            array_push($likers, $like->user_id);
        }

        if (in_array($id,$likers)) {
            return true;
        } else {
            return false;
        }
    }
}
