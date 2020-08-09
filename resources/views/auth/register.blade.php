@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="redirect_url" value="{{ request('redirect_url', '/') }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="father-name" type="text" class="form-control" name="father_name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nrc_number" class="col-md-4 control-label">NRC Number</label>

                            <div class="col-md-6">
                                <input id="nrc-number" type="text" class="form-control" name="nrc_number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date_of_birth" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="date-of-birth" type="date" class="form-control" name="date_of_birth" placeholder="2000-1-3(year-month-date)" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone-number" type="text" class="form-control" name="phone_number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="{{ route('auth.login') }}">Existing user? Log in here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
