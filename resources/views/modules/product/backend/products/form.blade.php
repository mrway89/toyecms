<div class="row mb-3">
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "required";
            $select_options = [
                '1'=>'Published',
                '0'=>'Unpublished',
                '2'=>'Draft'
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'specification';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'filter_type';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'guarantee';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-8">
        <div class="form-group">
            <?php
            $field_name = 'category_id';
            $field_lable = label_case($field_name);
            $field_relation = "category";
            $field_placeholder = __("Select an option");
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'')->placeholder($field_placeholder)->class('form-control select2-category')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'price';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'content';
            $field_labelset = 'description'; 
            $field_lable = label_case($field_labelset);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
			

        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'featured_image';
            $label ='File Download';
            $field_lable = label_case($label);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label'=>'Image', 'aria-describedby'=>'button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image1';
                    $title  = 'Image';
                    $field_lable = label_case($title);
                    $field_placeholder = $field_lable;
                    $required = "";
                    ?>
                    {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                    {{ html()->input("file", $field_name)->class('form-control')->attributes(["$required"]) }}
                </div>
            </div>
            @if(isset($$module_name_singular) && $$module_name_singular->getMedia($module_name)->first())
            <div class="col-4">
                <div class="float-end">
                    <figure class="figure">
                        <img src="{{ asset($$module_name_singular->$field_name) }}" class="figure-img img-fluid rounded img-thumbnail" alt="">
                        <!-- <figcaption class="figure-caption">Path: </figcaption> -->
                    </figure>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image2';
                    $title  = 'Image2';
                    $field_lable = label_case($title);
                    $field_placeholder = $field_lable;
                    $required = "";
                    ?>
                    {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                    {{ html()->input("file", $field_name)->class('form-control')->attributes(["$required"]) }}
                </div>
            </div>
            @if(isset($$module_name_singular) && $$module_name_singular->getMedia($module_name)->first())
            <div class="col-4">
                <div class="float-end">
                    <figure class="figure">
                        <img src="{{ asset($$module_name_singular->$field_name) }}" class="figure-img img-fluid rounded img-thumbnail" alt="">
                        <!-- <figcaption class="figure-caption">Path: </figcaption> -->
                    </figure>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image3';
                    $title  = 'Image3';
                    $field_lable = label_case($title);
                    $field_placeholder = $field_lable;
                    $required = "";
                    ?>
                    {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                    {{ html()->input("file", $field_name)->class('form-control')->attributes(["$required"]) }}
                </div>
            </div>
            @if(isset($$module_name_singular) && $$module_name_singular->getMedia($module_name)->first())
            <div class="col-4">
                <div class="float-end">
                    <figure class="figure">
                        <img src="{{ asset($$module_name_singular->$field_name) }}" class="figure-img img-fluid rounded img-thumbnail" alt="">
                        <!-- <figcaption class="figure-caption">Path: </figcaption> -->
                    </figure>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image4';
                    $title  = 'Image4';
                    $field_lable = label_case($title);
                    $field_placeholder = $field_lable;
                    $required = "";
                    ?>
                    {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                    {{ html()->input("file", $field_name)->class('form-control')->attributes(["$required"]) }}
                </div>
            </div>
            @if(isset($$module_name_singular) && $$module_name_singular->getMedia($module_name)->first())
            <div class="col-4">
                <div class="float-end">
                    <figure class="figure">
                        <img src="{{ asset($$module_name_singular->$field_name) }}" class="figure-img img-fluid rounded img-thumbnail" alt="">
                        <!-- <figcaption class="figure-caption">Path: </figcaption> -->
                    </figure>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<x-library.select2 />

@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push ('after-scripts')
<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
            document.querySelector('.select2-container--open .select2-search__field').focus();
        });

        $('.select2-category').select2({
            theme: "bootstrap",
            placeholder: '@lang("Select an option")',
            minimumInputLength: 0,
            allowClear: true,
            ajax: {
                url: '{{route("backend.categoriesproducts.index_list")}}',
                dataType: 'json',
                data: function(params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    });
</script>

<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserImageBrowseUrl: '/file-manager/ckeditor',
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });

    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/aqualife_admin/public/file-manager/fm-button', 'fm', 'width=800,height=600');
        });
    });

    // set file link
    function fmSetLink($url) {
		var urlimage = $url.split("://");
		var seturl = urlimage[0];
		var nextsplit = urlimage[1].split("/");
		var newurl = urlimage[0] + '://' + nextsplit[0] + '/' + nextsplit[1] + '/public/' + nextsplit[2] + '/' + nextsplit[3] + '/' + nextsplit[4];
        document.getElementById('featured_image').value = newurl;
    }
</script>
@endpush
