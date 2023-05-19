<?php

namespace Modules\Homesolution\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homesolution extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'homesolutions';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Homesolution\database\factories\HomesolutionFactory::new();
    }
}
