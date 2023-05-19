<div class="row mb-3">
    <div class="col-12 col-sm-8">
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
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'point1';
            $title = 'Product 1';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image';
                    $title  = 'Image Product';
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'point2';
            $title = 'Product 2';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image2';
                    $title  = 'Image Product';
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'point3';
            $title = 'Product 3';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image3';
                    $title  = 'Image Product';
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'point4';
            $title = 'Product 4';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image4';
                    $title  = 'Image Product';
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'point5';
            $title = 'Product 5';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image5';
                    $title  = 'Image Product';
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'point6';
            $title = 'Product 6';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <div class="col-8">
                <div class="form-group">
                    <?php
                    $field_name = 'image6';
                    $title  = 'Image Product';
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
                    $field_name = 'imagebg';
                    $title  = 'Background Image';
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

@push ('after-scripts')
<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    CKEDITOR.replace('description', {
        filebrowserImageBrowseUrl: '',
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });
</script>
@endpush

