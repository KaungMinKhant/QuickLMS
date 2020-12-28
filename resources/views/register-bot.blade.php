@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['auth.register'], 'files' => true,]) !!}
                    {{ csrf_field() }}
                    <input type="hidden" name="redirect_url" value="{{ request('redirect_url', '/') }}">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$_GET['name']}}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{$_GET['email']}}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="father_name" class="col-md-4 control-label">Father Name</label>

                        <div class="col-md-6">
                            <input id="father-name" type="text" class="form-control" name="father_name" value="{{$_GET['father-name']}}"required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nrc_number" class="col-md-4 control-label">NRC Number</label>

                        <div class="col-md-6">
                            <input id="nrc-number" type="text" class="form-control" name="nrc_number" value="{{$_GET['nrc']}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth" class="col-md-4 control-label">Date of Birth</label>

                        <div class="col-md-6">
                            <input id="date-of-birth" type="date" class="form-control" name="date_of_birth" value="{{$_GET['dob']}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                        <div class="col-md-6">
                            <input id="phone-number" type="text" class="form-control" name="phone_number" value="{{$_GET['phone']}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-md-4 control-label">Address</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address" value="{{$_GET['address']}}" required>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="profile-pic" class="col-md-4 control-label">Profile Picture (အောင်လက်မှတ် ထုတ်ပေးမည်ဖြစ်သဖြင့် လိုင်စင်ပုံသာပေးပါရန်)</label>

                        <div class="col-md-6">
                            <input id="profile-pic" type="file" class="form-control" name="profile_pic">
                        </div>
                    </div>

                    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
