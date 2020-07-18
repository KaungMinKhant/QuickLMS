@extends('layouts.home')





@section('main')
<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.html">home</a></li>
                        <li><a href="courses.html">course</a></li>
                        <li><a href="{{ route('lessons.show', [$lesson->course_id, $lesson->slug]) }}">{{$lesson->title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container coursepage_container">
    <div class="row coursepage_row">
        <div>
            <!-- Lesson Navigation -->
            <ul class="nav nav-tabs" role="tablist">
                @foreach ($lesson->course->publishedLessons as $list_lesson)
                <li role="presentation"><a href="{{ route('lessons.show', [$list_lesson->course_id, $list_lesson->slug]) }}">{{ $list_lesson->title }}</a></li>
                @endforeach
            </ul>
            <!-- End of Lesson Navigation -->
            @if ($purchased_course || $lesson->free_lesson == 1)
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="l1">
                    <div class="container lessoncontent">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{$lesson->title}}</div>
                            <div class="panel-body coursepanel">
                                {!! $lesson->full_text !!}
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Downloadable Files</h3>
                        </div>
                        <div class="panel-body">
                            @foreach($lesson->getMedia('downloadable_files') as $media)
                            <p class="form-group">
                                <p>{{ $media->name }} ({{ $media->size }} KB)</p>
                                <a href="{{ $media->getUrl() }}" target="_blank" class="btn btn-xs btn-success">Download</a>
                                <input type="hidden" name="downloadable_files_id[]" value="{{ $media->id }}">
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="l1">
            <div class="container lessoncontent">
                <div class="panel panel-default">
                    <div class="panel-heading">Please <a href="{{ route('courses.show', [$lesson->course->slug]) }}">go back</a> and buy the course.</div>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
</div>
</div>
</div>
</div>
</div>




@endsection
