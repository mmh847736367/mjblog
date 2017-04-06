<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    /**
     * 把路由的空格转化为'-'
     * @param $value
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if(! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }

    /**
     * 路由模型绑定
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
