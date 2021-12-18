<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'house_id',
        'user_id',
        'ip',
        'subject',
        'review',
        'rate',
    ];
    public function house(){
        return $this->belongsTo(House::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
