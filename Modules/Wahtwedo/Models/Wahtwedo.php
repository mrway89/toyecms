<?php

namespace Modules\Wahtwedo\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wahtwedo extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'wahtwedos';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Wahtwedo\database\factories\WahtwedoFactory::new();
    }
}
