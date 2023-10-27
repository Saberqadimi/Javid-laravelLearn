<?php

namespace Modules\Blog\Entities;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory , \Conner\Tagging\Taggable;
    protected $guarded = [];

    public function getCreatedAtAttribute($query): Verta
    {
        return verta($query);
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class , 'commentable');
    }

    public static function insertQuery($user , $request)
    {
        $user->blogs()->create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $request->image,
            'type_file' => $request->type_file,
            'path_file' => $request->type_file !== "blog" ? $request->path_file : null,
            'status' => $request->status,
            'author' => $user->name,
        ]);
    }
}
