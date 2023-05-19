<?php

namespace Modules\Productexcellence\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productexcellence extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'productexcellences';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Productexcellence\database\factories\ProductexcellenceFactory::new();
    }
}
