@extends('layouts.home')

@section('main')

<style>
    .course_color {
        background: #ffffff;
    }

    body {
        background: #247D49;
    }

    .row {
        margin: 0;
    }
    .Home {
        margin-top: 10px;
    }
    .courses{
        background: #ffffff;
    }
    .gap{
        width: 100%;
        height: 10px;
        background: #247D49;
        border-color: black;
    }

    

</style>

<!--
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
-->

<div class="row">
    <!-- Home Background-->
    <div class="Home">
		<div class="home_background_pc" >
            <img src="{{ URL::to('/') }}/images/index_background.jpg" class="img-fluid" alt="Responsive image">
        </div>
		<!-- <div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1 class="home_title">Welcome back</h1>
						<div class="home_button trans_200"><a href="#">get started</a></div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
    
    <!-- End of Home Background -->
    <div class = "gap">

    </div>
    

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
                        <img class="card-img-top" src="{{ asset('uploads/' . $course->course_image) }}" alt="Card image cap" width="300" height="202">
                        <div class="card-header"  style="background: white;">
                        <h5 class="card-title"><a style="color:#14502D;" href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a> </h5>
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
                @if($loop -> iteration == 3)
                @break
                @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>



</div>

@endsection
