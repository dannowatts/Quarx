<?php

namespace Yab\Quarx\Models;

use Yab\Quarx\Models\QuarxModel;

class Pages extends QuarxModel
{

    public $table = "pages";

    public $primaryKey = "id";

    public $fillable = [
        "title",
        "template",
        "url",
        "entry",
        "seo_description",
        "seo_keywords",
        "is_published",
        "published_at",
    ];

    public static $rules = [
        'title' => 'required',
        'url' => 'required',
    ];
}
