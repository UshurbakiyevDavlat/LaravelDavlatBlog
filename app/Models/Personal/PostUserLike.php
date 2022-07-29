<?php

namespace App\Models\Personal;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostUserLike extends Model
{
    use HasFactory;
    protected $table = 'post_user_likes';
    protected $guarded = ['id'];

    public function users (): HasMany
    {
        return $this->hasMany(User::class,'user_id','id');
    }

    public function posts (): HasMany
    {
        return $this->hasMany(Post::class,'post_id','id');
    }
}
