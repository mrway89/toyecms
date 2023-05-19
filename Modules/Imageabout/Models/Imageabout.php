<?php

namespace Modules\Imageabout\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imageabout extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'imageabouts';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Imageabout\database\factories\ImageaboutFactory::new();
    }
}
