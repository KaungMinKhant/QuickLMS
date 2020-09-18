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

    .courses {
        background: #BFFD7C;
    }

</style>

<!--

-->

<div class="row">
    <!-- Home Background -->


    <!-- End of Home Background -->

    <div class="courses">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">Peer-Learning Section</h2>
                    <hr>
                </div>
            </div>
            <div class="row fluid card-deck">
                <div class="column card-deck">
                    @foreach($assignments as $assignment)

                    <!-- Course -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card_design card" style="padding: 10px;margin:-10px; margin-top:20px; border:0;min-height: 500px;">
                            <img class="card-img-top" src="{{ asset('uploads/' . $assignment->assignment_image) }}" alt="Card image cap" width="300">
                            <div class="card-header" style="background: #A1E756 ;">
                                <h5 class="card-title"><a style="color:white;">{{ $assignment->title }}</a> </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <div class="course_info">
                                        <ul>
                                            <li>Created by {{$assignment->student_name}}</li>
                                        </ul>
                                    </div>
                                    <div class="course_text">
                                        <p>{{$assignment->course_name}}</p>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>



</div>

@endsection
