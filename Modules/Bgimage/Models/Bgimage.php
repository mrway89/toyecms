<?php

namespace Modules\Bgimage\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bgimage extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bgimages';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Bgimage\database\factories\BgimageFactory::new();
    }
}
