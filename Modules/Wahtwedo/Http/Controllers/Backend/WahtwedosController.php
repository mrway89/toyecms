<?php

namespace Modules\Wahtwedo\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class WahtwedosController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Wahtwedos';

        // module name
        $this->module_name = 'wahtwedos';

        // directory path of the module
        $this->module_path = 'wahtwedo::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Wahtwedo\Models\Wahtwedo";
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::select('id', 'title1', 'title2', 'title3', 'title4', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
                        ->addColumn('action', function ($data) {
                            $module_name = $this->module_name;

                            return view('backend.includes.action_column', compact('module_name', 'data'));
                        })
                        ->editColumn('updated_at', function ($data) {
                            $module_name = $this->module_name;

                            $diff = Carbon::now()->diffInHours($data->updated_at);

                            if ($diff < 25) {
                                return $data->updated_at->diffForHumans();
                            } else {
                                return $data->updated_at->isoFormat('LLLL');
                            }
                        })
                        ->rawColumns(['title1', 'title2', 'title3', 'title4', 'update_at', 'action'])
                        ->orderColumns(['id'], '-:column $1')
                        ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $$module_name_singular = $module_model::create($request->except('images'));

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image = $filename;
            $$module_name_singular->featured_image = url('storage/media/'.$filename);

            $$module_name_singular->save();
        }

        if($request->file('image2')){
            $file= $request->file('image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image2 = $filename;
            $$module_name_singular->featured_image2 = url('storage/media/'.$filename);

            $$module_name_singular->save();
        }

        if($request->file('image3')){
            $file= $request->file('image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image3 = $filename;
            $$module_name_singular->featured_image3 = url('storage/media/'.$filename);

             $$module_name_singular->save();
        }

        if($request->file('image4')){
            $file= $request->file('image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image4 = $filename;
            $$module_name_singular->featured_image4 = url('storage/media/'.$filename);

             $$module_name_singular->save();
        }

        flash(icon().' '.Str::singular($module_title)."' Created.")->success()->important();

        //logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::findOrFail($id);

       //$posts = $$module_name_singular->posts()->latest()->paginate();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "$module_path.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';

        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->update($request->except('image', 'image_remove'));

        // Image
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image = $filename;
            $$module_name_singular->featured_image = url('storage/media/'.$filename);

             $$module_name_singular->save();
        }
        
        if ($request->image_remove == 'image_remove') {
            if (!empty($_FILES['image']['name'])){
                $$module_name_singular->$module_name->first()->delete();

                $$module_name_singular->image = '';
                $$module_name_singular->featured_image = '';

                $$module_name_singular->save();
            }
        }

        if($request->file('image2')){
            $file= $request->file('image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image2 = $filename;
            $$module_name_singular->featured_image2 = url('storage/media/'.$filename);

             $$module_name_singular->save();
        }
        
        if ($request->image_remove == 'image_remove') {
            if (!empty($_FILES['image2']['name'])){
                $$module_name_singular->$module_name->first()->delete();

                $$module_name_singular->image2 = '';
                $$module_name_singular->featured_image2 = '';

                $$module_name_singular->save();
            }
        }

        if($request->file('image3')){
            $file= $request->file('image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image3 = $filename;
            $$module_name_singular->featured_image3 = url('storage/media/'.$filename);

             $$module_name_singular->save();
        }
        
        if ($request->image_remove == 'image_remove') {
            if (!empty($_FILES['image3']['name'])){
                $$module_name_singular->$module_name->first()->delete();

                $$module_name_singular->image3 = '';
                $$module_name_singular->featured_image3 = '';

                $$module_name_singular->save();
            }
        }

        if($request->file('image4')){
            $file= $request->file('image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/media'), $filename);
            $$module_name_singular->image4 = $filename;
            $$module_name_singular->featured_image4 = url('storage/media/'.$filename);

             $$module_name_singular->save();
        }
        
        if ($request->image_remove == 'image_remove') {
            if (!empty($_FILES['image4']['name'])){
                $$module_name_singular->$module_name->first()->delete();

                $$module_name_singular->image4 = '';
                $$module_name_singular->featured_image4 = '';

                $$module_name_singular->save();
            }
        }

        flash(icon().' '.Str::singular($module_title)."' Updated Successfully")->success()->important();

        //logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect()->route('backend.wahtwedos.show', $$module_name_singular->id);
    }

}
