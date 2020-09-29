<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Slide extends Model
{
    use Translatable;

    protected $translatable = ['title', 'teaser', 'tag_line'];

    protected $guarded = [];
}
