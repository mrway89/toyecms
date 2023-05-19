<?php

namespace Modules\Toplink\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Toplink extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'toplinks';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Toplink\database\factories\ToplinkFactory::new();
    }
}
