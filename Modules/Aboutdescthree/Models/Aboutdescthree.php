<?php

namespace Modules\Aboutdescthree\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutdescthree extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'aboutdescthrees';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Aboutdescthree\database\factories\AboutdescthreeFactory::new();
    }
}
