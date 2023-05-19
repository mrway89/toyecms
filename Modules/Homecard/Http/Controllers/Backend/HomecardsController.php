<?php

namespace Modules\Homecard\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class HomecardsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Homecards';

        // module name
        $this->module_name = 'homecards';

        // directory path of the module
        $this->module_path = 'homecard::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Homecard\Models\Homecard";
    }

}
