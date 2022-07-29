<?php

namespace App\Models;

use App\Models\Personal\PostUserLike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false;

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function userLikes () : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }
}
