<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    //
    protected $fillable = ["title","content","slug"];

    public static function getSlug($title){
        $slug = Str::slug($title);
        $aSlug = $slug;
        $postFound = Post::where("slug",$slug)->first();
        $count = 1;
        while($postFound)
        {
            $aSlug = $slug."-".$count;
            $count++;
            $postFound = Post::where("slug",$aSlug)->first();
        }

        return $aSlug;
    }
}
