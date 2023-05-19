<?php

namespace Modules\Daftaremail\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Carbon\Carbon;
use Flash;
use Yajra\DataTables\DataTables;
use DB;

class DaftaremailsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Daftaremails';

        // module name
        $this->module_name = 'daftaremails';

        // directory path of the module
        $this->module_path = 'daftaremail::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Daftaremail\Models\Daftaremail";
    }

    
}
