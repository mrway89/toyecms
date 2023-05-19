<div class="row mb-3">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'title1';
            $title = 'Content';
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'title2';
            $title = 'Content';
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'title3';
            $title = 'Content';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "";
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
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'title4';
            $title = 'Content';
            $field_lable = label_case($title);
            $field_placeholder = $field_lable;
            $required = "";
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
