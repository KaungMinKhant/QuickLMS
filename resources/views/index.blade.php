@extends('layouts.home')

@section('main')

<style>
.course_color{
    background: #3d866b;
}
body{
    background: #3d866b;
}

.row{
    
}
</style>

@if (!is_null($purchased_courses))
<h3>My courses</h3>
<div class="row">

    @foreach($purchased_courses as $course)
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
                <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                </h4>
                <p>{{ $course->description }}</p>
            </div>
            <div class="ratings">
                <p>Progress: {{ Auth::user()->lessons()->where('course_id', $course->id)->count() }}
                    of {{ $course->lessons->count() }} lessons</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<hr />

@endif


<div class="row">
    <!-- Home Background -->
    <div class="home">
        <div class="home_background" style="background-image: url(/images/index_background.jpg);"></div>
        <div class="home_content">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="home_title">Welcome back</h1>
                        <div class="home_button trans_200"><a href="#">get started</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Home Background -->

    <div class="courses">
        <div class="courses_background"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">Courses</h2>
                </div>
            </div>
            <div class="row courses_row">
                @foreach($courses as $course)
                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{ asset('uploads/' . $course->course_image) }}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a></div>
                            {{-- <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Teacher name</a></li>
                                    <li><a href="#">Chinese</a></li>
                                </ul>
                            </div> --}}
                            <div class="course_text">
                                <p>{{ $course->description }}</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_mark course_free trans_200 course_color"><a href="{{ route('courses.show', [$course->slug]) }}">Join</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



</div>

@endsection
