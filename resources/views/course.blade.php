@extends('layouts.home')

@section('main')

{{-- <h2>{{ $course->title }}</h2> --}}


{{-- <p>{{ $course->description }}</p> --}}

<!-- Home -->
<div class="home" style="height:50px;">
    <nav aria-label="breadcrumb">
        <ol class="BLlist breadcrumbs_list breadcrumb" style="background: #247D49;">
            <li><a href="/">home</a></li>
            <li><a href="courses.html">courses</a></li>
            <li><a href="#">{{ $course->title }}</a></li>
        </ol>
    </nav>
</div>
<!-- End of Home -->

<!-- Introduction -->
<div class="intro">
    <div class="intro_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('uploads/' . $course->course_image) }}" data-speed="0.8"></div>
    {{-- <img src="/images/course_1.jpg" alt="" width="100%"> --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="intro_container d-flex flex-column align-items-start justify-content-end">
                    <div class="intro_content" style="width:100%;">
                        @if ($purchased_course)
                        <div class="intro_title">{{ $course->title }}
                            <span class="badge badge-secondary"> Rating: {{ $course->rating }} / 5</span>
                        </div>
                        <p>Price: {{ $course -> price }} Kyats</p>
                        <hr>


                        <!-- <div class="container">
                            <div class="row">
                            <div class="d-flex flex-column align-items-start justify-content-Center">
                            <b>Rate the course:</b>
                            <form action="{{ route('courses.rating', [$course->id]) }}" method="post">
                            {{ csrf_field() }}
                            <select name="rating">
                            <option value="1">1 - Awful</option>
                            <option value="2">2 - Not too good</option>
                            <option value="3">3 - Average</option>
                            <option value="4" selected>4 - Quite good</option>
                            <option value="5">5 - Awesome!</option>
                            </select>
                            <input type="submit" value="Rate" />
                            </form>
                            </div>
                            </div>
                            </div> -->

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Introduction -->

<!-- Course -->
<div class="course">
    <div class="container" style="width:83%;">

        <div class="row row-lg-eq-height" >

            <!-- Panels -->
            <div class="col-lg-7">
                <div class="tab_panels">

                    <!-- Tabs -->
                    <div class="course_tabs_container">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                        <div class="tab active">description</div>
                                        <div class="tab">curriculum</div>
                                        <!-- <div class="tab">reviews</div>
											<div class="tab">members</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="tab_panel description active">
                        <div class="panel_title">About this course</div>
                        <div class="panel_text">
                            <p>{{$course -> description }}</p>
                        </div>


                        <!-- FAQs -->
                        {{-- <div class="faqs">
                            <div class="panel_title">FAQs</div>
                            <div class="accordions">

                                <div class="elements_accordions">

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center active">
                                            <div>Can I just enroll in a single course? I'm not interested in the entire Specializat</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>What is the refund policy?</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>What background knowledge is necessary</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>Do i need to take the courses in a specific ord</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div> --}}
                    </div>

                    <!-- Curriculum -->
                    <div class="tab_panel curriculum">
                        <div class="curriculum_items">
                            <div class="cur_item">
                                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="cur_title">Courses</div>
                                </div>
                                <div class="cur_item_content">

                                    <div class="cur_contents">
                                        @foreach ($course->publishedLessons as $lesson)
                                        <ul>

                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-video-camera" aria-hidden="true"></i>

                                                @if ($lesson->free_lesson)(FREE!) @endif<a href="{{ route('lessons.show', [$lesson->course_id, $lesson->slug]) }}">{{ $lesson->title }}</a>


                                                <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                                            </li>
                                        </ul>
                                        @endforeach
                                        {{-- <li class="d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Graded: Cumulative Language Quiz</span>
                                            <div class="cur_time ml-auto"><span>3 Questions</span></div>
                                        </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-5">
                <div class="sidebar">
                    <div class="sidebar_background"></div>
                    @if (\Auth::check())
                    @if($purchased_course)
                    <div class="sidebar_top" style="background: #247D49 ;"><a href="{{ route('assignment.create', [$course->id]) }}">Submit Assignment</a></div>
                    @endif
                    @if ($course->students()->where('user_id', \Auth::id())->count() == 0)
                    {{-- <form action="{{ route('courses.payment') }}" method="POST">
                    <input type="hidden" name="course_id" value="{{ $course->id }}" />
                    <input type="hidden" name="amount" value="{{ $course->price * 100 }}" />
                    <div class="form-group" style="background: #247D49 ;">
                        <button type="submit" class="btn btn-success" style="background: #247D49 ;">
                            Buy Course
                        </button>
                    </div>
                    {{ csrf_field() }}
                    </form> --}}
                    <div class="sidebar_top" style="background: #247D49 ;"><a href="{{ $course->register_link }}?redirect_url={{ route('courses.show', [$course->slug]) }}">Buy course <br>{{ $course->price }} Kyats</a></div>

                    @endif

                    @else
                    <div class="sidebar_top" style="background: #247D49 ;"><a href="{{ route('auth.register') }}?redirect_url={{ route('courses.show', [$course->slug]) }}">Buy course <br>{{ $course->price }} Kyats</a></div>
                    @endif

                    <div class="sidebar_content">
                        @if(Auth::check())


                        @endif
                        @if($purchased_course)
                        <div class="sidebar_section features">
                            <div class="sidebar_title">သင်တန်းတက်နေပါတယ်.</div>

                        </div>
                        @elseif(Auth::check())
                        <!-- Features -->
                        <div class="sidebar_section features">
                            <div class="sidebar_title">သင်တန်းအပ်နည်း</div>
                            <div class="features_content">
                                <ul class="features_list">

                                    <!-- Feature -->

                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>သင်တန်းကြေးမှာ {{$course->price}} ကျပ်ဖြစ်ပါသည်။ သင်တန်းအပ်ရန်အတွက် အောက်က Account တစ်ခုခုကို ပိုက်ဆံလွှဲပါ။ ထို့နောက် ငွေလွှဲထားသော ပြေစာကိုဓာတ်ပုံရိုက်ယူထားပါ။</span></div>

                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>KBZ Bank</span></div>
                                        <div class="feature_text ml-auto">something</div>
                                    </li>



                                    <!-- Feature -->
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="feature_title"><i class="fa fa-bell" aria-hidden="true"></i><span>CB Bank</span></div>
                                        <div class="feature_text ml-auto">something</div>
                                    </li>

                                    <!-- Feature -->
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="feature_title"><i class="fa fa-id-badge" aria-hidden="true"></i><span>KBZ Pay </span></div>
                                        <div class="feature_text ml-auto">something</div>
                                    </li>

                                    <!-- Feature -->
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="feature_title"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Wave Money</span></div>
                                        <div class="feature_text ml-auto">something</div>
                                    </li>

                                    <!-- Feature -->
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="feature_title"><i class="fa fa-thumbs-down" aria-hidden="true"></i><span>သင့်ရဲ့ ကျောင်းသားအမှတ်က {{ Auth::user()->id }} ဖြစ်ပါတယ်။ အခု သင်တန်းအမှတ်က {{$course->id}} ဖြစ်ပါတယ်။ အပေါ်မှာရှိတဲ့ Buy Course ကို နှိပ်ပြီး ကျောင်းသားအမှတ်၊ သင်တန်းအမှတ်၊ ငွေရှင်းပြေစာတို့ကို ဖြည့်သွင်းပါ။</span></div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        @else
                        <div class="sidebar_section features">
                            <div class="sidebar_title">Buy Course ကို နှိပ်ပြီး register အရင်လုပ်ပါ</div>

                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End of Course -->





@endsection
