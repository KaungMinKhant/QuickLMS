@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('Certificate')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.lessons.fields.course')</th>
                            <td>{{ $certificate->student_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.lessons.fields.title')</th>
                            <td>{{ $certificate->course_name }}</td>
                        </tr>
                        
                        <tr>
                            <th>@lang('global.lessons.fields.lesson-image')</th>
                            <td>@if($certificate->certificate_photo)<a href="{{ asset('uploads/' . $certificate->certificate_photo) }}" target="_blank"><img src="{{ asset('uploads/thumb/' . $certificate->certificate_photo) }}"/></a>@endif</td>
                        </tr>
                        
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    


            <p>&nbsp;</p>

            <a href="{{ route('certificate.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop