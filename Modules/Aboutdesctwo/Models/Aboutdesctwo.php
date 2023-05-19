<?php

namespace Modules\Aboutdesctwo\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutdesctwo extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'aboutdesctwos';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Aboutdesctwo\database\factories\AboutdesctwoFactory::new();
    }
}
