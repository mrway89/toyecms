<?php

namespace Modules\Bgimage\Entities\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait BgimagePresenter
{
    public function getFeaturedImageAttribute($value)
    {
        $featured_image = $value;

        if (Str::startsWith($featured_image, 'https://picsum.photos')) {
            $return_text = $featured_image.'?random='.$this->id;
        } else {
            $return_text = $featured_image;
        }

        return $return_text;
    }
}
