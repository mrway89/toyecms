<?php

namespace Modules\Headerabout\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Headerabout extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'headerabouts';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Headerabout\database\factories\HeaderaboutFactory::new();
    }
}
