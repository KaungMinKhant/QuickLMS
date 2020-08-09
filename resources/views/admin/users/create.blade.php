@extends('layouts.app')

@section('content')
<h3 class="page-title">@lang('global.users.title')</h3>
{!! Form::open(['method' => 'POST', 'route' => ['admin.users.store'], 'files' => true,]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_create')
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('password', 'Password*', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('password'))
                <p class="help-block">
                    {{ $errors->first('password') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('role', 'Role*', ['class' => 'control-label']) !!}
                {!! Form::select('role[]', $roles, old('role'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('role'))
                <p class="help-block">
                    {{ $errors->first('role') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('Father Name', 'Father Name*', ['class' => 'control-label']) !!}
                {!! Form::text('father_name', old('father_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('NRC Number', 'NRC Number*', ['class' => 'control-label']) !!}
                {!! Form::text('nrc_number', old('nrc_number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('Date Of Birth', 'Date of Birth*', ['class' => 'control-label']) !!}
                {!! Form::text('date_of_birth', old('date_of_birth'), ['class' => 'form-control', 'placeholder' => '2000-1-3(year-month-date)', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('Phone Number', 'Phone Number*', ['class' => 'control-label']) !!}
                {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('Address', 'Address*', ['class' => 'control-label']) !!}
                {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('profile_pic', 'Profile Picture', ['class' => 'control-label']) !!}
                {!! Form::file('profile_pic', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                {!! Form::hidden('profile_pic_max_size', 8) !!}
                {!! Form::hidden('profile_pic_max_width', 4000) !!}
                {!! Form::hidden('profile_pic_max_height', 4000) !!}
                <p class="help-block"></p>
                @if($errors->has('profile_pic'))
                <p class="help-block">
                    {{ $errors->first('profile_pic') }}
                </p>
                @endif
            </div>
        </div>

    </div>
</div>

{!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<form action="{{ route('courses.payment') }}" method="POST">
    <input type="text" name="course_id" value="" />
    <input type="text" name="user_id" value="" />
    <div class="form-group">
        <button type="submit" class="btn btn-success">
            Verify
        </button>
    </div>
    {{ csrf_field() }}
</form>


@stop
