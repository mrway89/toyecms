<?php

namespace Modules\Homecard\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homecard extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'homecards';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Homecard\database\factories\HomecardFactory::new();
    }
}
