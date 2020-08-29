@extends('layouts.app')

@section('content')
<h3 class="page-title">@lang('global.courses.title')</h3>
{!! Form::open(['method' => 'POST', 'route' => ['certificate.store'], 'files' => true,]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_create')
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('student_name', 'Student Name', ['class' => 'control-label']) !!}
                {!! Form::text('student_name', old('student_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('student_name'))
                <p class="help-block">
                    {{ $errors->first('student_name') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('course_name', 'Course Name', ['class' => 'control-label']) !!}
                {!! Form::text('course_name', old('course_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('course_name'))
                <p class="help-block">
                    {{ $errors->first('course_name') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('certificate_photo', 'Certificate Photo', ['class' => 'control-label']) !!}
                {!! Form::file('certificate_photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                {!! Form::hidden('certificate_photo_max_size', 8) !!}
                {!! Form::hidden('certificate_photo_max_width', 4000) !!}
                {!! Form::hidden('certificate_photo_max_height', 4000) !!}
                <p class="help-block"></p>
                @if($errors->has('certificate_photo'))
                <p class="help-block">
                    {{ $errors->first('certificate_photo') }}
                </p>
                @endif
            </div>
        </div>

    </div>
</div>

{!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@stop

@section('javascript')
@parent
<script>
    $('.date').datepicker({
        autoclose: true
        , dateFormat: "{{ config('app.date_format_js') }}"
    });

</script>

@stop
