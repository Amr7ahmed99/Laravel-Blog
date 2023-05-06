<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    use HasFactory;

    //to prevent vulnerability
    protected $fillable= [
        'title',
        'description',
        'user_id'
    ];

    // public function myUserRelationship(){
    //     return $this->belongsTo(User::class, 'user_id');//Post related to User by user_id foreign
    // }

    public function user(){ //functionName + _id= user + _id= user_id = foreignKey  
        return $this->belongsTo(User::class);
    }

}
