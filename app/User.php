<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Auth;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get Articles associated with the given User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articles(){

        return $this->hasMany('App\Article');
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    }

    public function isOwner($articleID){
        return !empty(Auth::user()->articles()->find($articleID));
    }

    public function numberOfArticles(){
        /*$number = 0;
        $articles = Article::all();
        foreach($articles as $article){
            if(Auth::user()->articles()->find($article))
                $number++;
        }
        return $number;*/

        return count(Auth::user()->articles()->get());
    }
}
