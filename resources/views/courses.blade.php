@extends('layouts.home')

@section('main')

<style>

    .course_color {
        background: #ffffff;
    }

    body {
        background: #ffffff;
    }

    .row {
        margin: 0;
    }
    .home {
        margin: 0;
        height: 400px;
    }
    .courses{
        background: #BFFD7C ;
    }


</style>

@if (!is_null($purchased_courses))

<div class="courses">
    <div class="courses_background"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section_title text-center">My Courses</h2>
            </div>
        </div>
        <div class="row fluid card-deck">
            <div class="column card-deck">
            @foreach($purchased_courses as $course)
            <!-- Course -->
            <div class="col-sm-6 col-md-4">
                    <div class="card_design card" style="padding: 10px;margin:-10px; margin-top:20px; border:0;min-height: 500px;">
                    <img class="card-img-top" src="{{ asset('uploads/' . $course->course_image) }}" alt="Card image cap">
                    <div class="card-header" style="background: #A1E756 ;">
                        <h5 class="card-title"><a style="color:white;" href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a> </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        {{-- <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Teacher name</a></li>
                                <li><a href="#">Chinese</a></li>
                            </ul>
                    </div> --}}
                    <div class="course_text">
                        <p>Progress: {{ Auth::user()->lessons()->where('course_id', $course->id)->count() }}
                                of {{ $course->lessons->count() }} lessons</p>
                    </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-center">
                            <a class="join_button btn" href="{{ route('courses.show', [$course->slug]) }}">Attend</a>
                    </div>
                    </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>


@endif


<div class="courses">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">Courses</h2>
                    <hr>
                </div>
            </div>
            <div class="row fluid card-deck">
                <div class="column card-deck">
                @foreach($courses as $course)
                
                <!-- Course -->
                <div class="col-sm-6 col-md-4">
                    <div class="card_design card" style="padding: 10px;margin:-10px; margin-top:20px; border:0;min-height: 500px;">
                        <img class="card-img-top" src="{{ asset('uploads/' . $course->course_image) }}" alt="Card image cap">
                        <div class="card-header"  style="background: #A1E756 ;">
                        <h5 class="card-title"><a style="color:white;" href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a> </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            {{-- <div class="course_info">
                                <ul>
                                  <li><a href="instructors.html">Teacher name</a></li>
                                 <li><a href="#">Chinese</a></li>
                                </ul>
                            </div> --}}
                            <div class="course_text">
                                <p>{{ $course->description }}</p>
                            </div>
                            </p>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-center">
                            <a class="join_button btn" href="{{ route('courses.show', [$course->slug]) }}">Join</a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>

            <!-- Test -->
        
            <!-- Test -->
        </div>
    </div>


</div>

@endsection
