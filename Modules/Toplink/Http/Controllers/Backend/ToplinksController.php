<?php

namespace Modules\Toplink\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ToplinksController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Toplinks';

        // module name
        $this->module_name = 'toplinks';

        // directory path of the module
        $this->module_path = 'toplink::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Toplink\Models\Toplink";
    }

}
