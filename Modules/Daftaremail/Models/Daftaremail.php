<?php

namespace Modules\Daftaremail\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daftaremail extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'daftaremails';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Daftaremail\database\factories\DaftaremailFactory::new();
    }
}
