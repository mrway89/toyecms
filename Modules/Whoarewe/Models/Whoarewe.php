<?php

namespace Modules\Whoarewe\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Whoarewe extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'whoarewes';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Whoarewe\database\factories\WhoareweFactory::new();
    }
}
