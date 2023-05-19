<?php

namespace Modules\Contactu\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactu extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contactus';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Contactu\database\factories\ContactuFactory::new();
    }
}
