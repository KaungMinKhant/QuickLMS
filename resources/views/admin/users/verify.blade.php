@extends('layouts.app')

@section('content')
<form action="{{ route('courses.payment') }}" method="POST">
    <p>Course Id</p>
    <input type="text" name="course_id" value="" />
    <p>User ID</p>
    <input type="text" name="user_id" value="" />
    <div class="form-group">
        <button type="submit" class="btn btn-success">
            Verify
        </button>
    </div>
    {{ csrf_field() }}
</form>
@endsection