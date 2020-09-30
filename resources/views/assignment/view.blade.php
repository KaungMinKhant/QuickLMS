@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
<h3 class="page-title">Assignments</h3>





<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_list')
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped {{ count($assignments) > 0 ? 'datatable' : '' }} @can('course_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
            <thead>
                <tr>
                    @can('course_delete')
                    @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                    @endcan


                    <th>@lang('Yitle')</th>
                    <th>@lang('Student Name')</th>
                    <th>@lang('Course Name')</th>
                    <th>@lang('Photo')</th>

                    @if( request('show_deleted') == 1 )
                    <th>&nbsp;</th>
                    @else
                    <th>&nbsp;</th>
                    @endif
                </tr>
            </thead>

            <tbody>
                @if (count($assignments) > 0)
                @foreach ($assignments as $assignment)
                <tr data-entry-id="{{ $assignment->id }}">
                    @can('course_delete')
                    @if ( request('show_deleted') != 1 )<td></td>@endif
                    @endcan

                    <td>{{ $assignment->student_name }}</td>
                    <td>{{ $assignment->student_name }}</td>
                    <td>{{ $assignment->course_name }}</td>

                    <td>@if($assignment->assignment_image)<a href="{{ asset('uploads/' . $assignment->assignment_photo) }}" target="_blank"><img src="{{ asset('uploads/' . $assignment->assignment_photo) }}" width="50px" /></a>@endif</td>

                   
                    
                        
                    

                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="12">@lang('global.app_no_entries_in_table')</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop

@section('javascript')
<script>


</script>
@endsection