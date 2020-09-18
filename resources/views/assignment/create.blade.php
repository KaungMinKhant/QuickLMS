@extends('layouts.home')

@section('main')

{!! Form::open(['method' => 'POST', 'route' => ['assignment.store'], 'files' => true,]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_create')
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
               
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                {{ \Auth::user()->name}}
                {{ $course->title}}
               
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::hidden('student_name', \Auth::user()->name) !!}
                <p class="help-block"></p>
               
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::hidden('course_name', $course->title) !!}
                <p class="help-block"></p>
               
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('assignment_image', 'Assignment Photo', ['class' => 'control-label']) !!}
                {!! Form::file('assignment_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                {!! Form::hidden('assignment_image_max_size', 8) !!}
                {!! Form::hidden('assignment_image_max_width', 4000) !!}
                {!! Form::hidden('assignment_image_max_height', 4000) !!}
                <p class="help-block"></p>
                @if($errors->has('assignment_image'))
                <p class="help-block">
                    {{ $errors->first('assignment_image') }}
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
