<?php

namespace Modules\Contactu\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ContactusController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Contactus';

        // module name
        $this->module_name = 'contactus';

        // directory path of the module
        $this->module_path = 'contactu::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Contactu\Models\Contactu";
    }

}
