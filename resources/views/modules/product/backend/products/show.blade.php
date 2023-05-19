@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
        {{ __($module_title) }}
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small class="text-muted">{{ __($module_action) }}</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
            </x-slot>
            <x-slot name="toolbar">
                <x-backend.buttons.return-back />
                <a href="{{ route("backend.$module_name.index") }}" class="btn btn-secondary" data-toggle="tooltip" title="{{ ucwords($module_name) }} List"><i class="fas fa-list"></i> List</a>
                @can('edit_'.$module_name)
                <x-buttons.edit route='{!!route("backend.$module_name.edit", $$module_name_singular)!!}' title="{{__('Edit')}} {{ ucwords(Str::singular($module_name)) }}" class="ms-1" />
                @endcan
            </x-slot>
        </x-backend.section-header>

        <hr>

        <div class="row mt-4">
            <div class="col-12">

            <p>
                        @lang("Displaing all the values of :module_name (Id: :id)", ['module_name'=>ucwords($module_name_singular), 'id'=>$$module_name_singular->id]).
                    </p>
                    <table class="table table-responsive-sm table-hover table-bordered">
                        <?php
                        $all_columns = $$module_name_singular->getTableColumns();
                        ?>
                        <thead>
                            <tr>
                                <th scope="col">
                                    <strong>
                                        @lang('Name')
                                    </strong>
                                </th>
                                <th scope="col">
                                    <strong>
                                        @lang('Value')
                                    </strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($detail_prod as $row) {
                                    $id = $row->id;
                                    $image1 = $row->image1;
                                    $image2 = $row->image2;
                                    $image3 = $row->image3;
                                    $image4 = $row->image4;
                                    $name = $row->name;
                                    $slug = $row->slug;
                                    $category_name = $row->category_name;
                                    $content = $row->content;
                                    $file = $row->featured_image;
                                    $price = $row->price;
                                    $specification = $row->specification;
                                    $filter_type = $row->filter_type;
                                    $guarantee = $row->guarantee;
                                }
                            ?>
                            <tr>  
                                <td><strong>Id</strong></td>
                                <td>{{ $id }}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Name</strong></td>
                                <td>{{ $name }}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Slug</strong></td>
                                <td>{{ $slug }}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Catgeory Name</strong></td>
                                <td>{{ $category_name }}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Content</strong></td>
                                <td>{!! $content !!}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>File</strong></td>
                                <td><a href="{{ $file }}">Dowbload File</a></td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Price</strong></td>
                                <td>{{ $price }}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Specification</strong></td>
                                <td>{{ $specification }}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Filter Type</strong></td>
                                <td>{{ $filter_type }}</td>                                  
                            </tr>
                            <tr>  
                                <td><strong>Guarantee</strong></td>
                                <td>{{ $guarantee }}</td>                                  
                            </tr>
                            <tr>    
                                <td>
                                    <strong>
                                        Image1
                                    </strong>
                                </td>                        
                                <td>
                                    <figure class="figure">
                                        <a href="{{ $image1 }}" data-lightbox="image-set" data-title="{{ $image1 }}">
                                            <img src="{{ $image1 }}" style="max-width:200px;" class="figure-img img-fluid rounded img-thumbnail" alt="">
                                        </a>
                                        <figcaption class="figure-caption">Path: {{ $image1 }}</figcaption>
                                        <?php if(!empty($image1)) { ?>
                                        <a href='{!! route("backend.$module_name.imgdelone", $id) !!}' class='btn btn-sm btn-danger mt-1' data-toggle="tooltip" title="Delete Image {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-trash-alt"></i></a>
                                        <?php } ?>
                                    </figure>                                    
                                </td>                               
                            </tr>
                            <tr>    
                                <td>
                                    <strong>
                                        Image2
                                    </strong>
                                </td>                        
                                <td>
                                    <figure class="figure">
                                        <a href="{{ $image2 }}" data-lightbox="image-set" data-title="{{ $image2 }}">
                                            <img src="{{ $image2 }}" style="max-width:200px;" class="figure-img img-fluid rounded img-thumbnail" alt="">
                                        </a>
                                        <figcaption class="figure-caption">Path: {{ $image2 }}</figcaption>
                                        <?php if(!empty($image2)) { ?>
                                        <a href='{!! route("backend.$module_name.imgdeltwo", $id) !!}' class='btn btn-sm btn-danger mt-1' data-toggle="tooltip" title="Delete Image {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-trash-alt"></i></a>
                                        <?php } ?>
                                    </figure>                                    
                                </td>                               
                            </tr>
                            <tr>    
                                <td>
                                    <strong>
                                        Image3
                                    </strong>
                                </td>                        
                                <td>
                                    <figure class="figure">
                                        <a href="{{ $image3 }}" data-lightbox="image-set" data-title="{{ $image3 }}">
                                            <img src="{{ $image3 }}" style="max-width:200px;" class="figure-img img-fluid rounded img-thumbnail" alt="">
                                        </a>
                                        <figcaption class="figure-caption">Path: {{ $image3 }}</figcaption>
                                        <?php if(!empty($image3)) { ?>
                                        <a href='{!! route("backend.$module_name.imgdelthree", $id) !!}' class='btn btn-sm btn-danger mt-1' data-toggle="tooltip" title="Delete Image {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-trash-alt"></i></a>
                                        <?php } ?>
                                    </figure>                                    
                                </td>                               
                            </tr>
                            <tr>    
                                <td>
                                    <strong>
                                        Image4
                                    </strong>
                                </td>                        
                                <td>
                                    <figure class="figure">
                                        <a href="{{ $image4 }}" data-lightbox="image-set" data-title="{{ $image4 }}">
                                            <img src="{{ $image4 }}" style="max-width:200px;" class="figure-img img-fluid rounded img-thumbnail" alt="">
                                        </a>
                                        <figcaption class="figure-caption">Path: {{ $image4 }}</figcaption>
                                        <?php if(!empty($image4)) { ?>
                                        <a href='{!! route("backend.$module_name.imgdelfour", $id) !!}' class='btn btn-sm btn-danger mt-1' data-toggle="tooltip" title="Delete Image {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-trash-alt"></i></a>
                                        <?php } ?>
                                    </figure>                                    
                                </td>                               
                            </tr>
                           
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-end text-muted">
                    Updated: {{$$module_name_singular->updated_at->diffForHumans()}},
                    Created at: {{$$module_name_singular->created_at->isoFormat('LLLL')}}
                </small>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- Lightbox2 Library --}}
<x-library.lightbox />