<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

//plusieurs personnes peuvent ecrire un commentaire et chaque commentaire appartient à un seul utilisateur

class Comment extends Model
{
    protected $guarded =[];

    public function commentable()
    {
      return $this ->morphTo();

    }
    public  function comments()
    {
     return $this->morphMany(Comment::class,'commentable')->latest();
    }


    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
