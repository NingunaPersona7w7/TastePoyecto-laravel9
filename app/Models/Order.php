<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['seller_id','buyer_id', 'post_id', 'quantity', 'price'];

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }
    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id',  'id');
    }
    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
