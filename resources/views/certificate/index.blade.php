@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
<h3 class="page-title">@lang('global.courses.title')</h3>
@can('course_create')
<p>
    <a href="{{ route('certificate.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

</p>
@endcan

<p>
    <ul class="list-inline">
        <li><a href="{{ route('certificate.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
        <li><a href="{{ route('certificate.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
    </ul>
</p>


<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_list')
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped {{ count($certificates) > 0 ? 'datatable' : '' }} @can('course_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
            <thead>
                <tr>



                    <th>Student Name</th>
                    <th>Course Name</th>
                    <th>Certificate Photo</th>

                </tr>
            </thead>

            <tbody>
                @if (count($certificates) > 0)
                @foreach ($certificates as $certificate)
                <tr data-entry-id="{{ $certificate->id }}">
                    

                    
                    <td>{{ $certificate->student_name }}</td>
                    <td>{{ $certificate->course_name }}</td>
                    
                    <td>@if($certificate->certificate_photo)<a href="{{ asset('uploads/' . $certificate->certificate_photo) }}" target="_blank"><img src="{{ asset('uploads/thumb/' . $certificate->certificate_photo) }}" /></a>@endif</td>
                    
                    @if( request('show_deleted') == 1 )
                    <td>
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'POST',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['certificate.store', $certificate->id])) !!}
                        {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                        {!! Form::close() !!}
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['certificate.destroy', $certificate->id])) !!}
                        {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                    @else
                    <td>
                        
                        
                       
                        @can('course_edit')
                        <a href="{{ route('certificate.edit',[$certificate->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                        @endcan
                        @can('course_delete')
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['certificate.destroy', $certificate->id])) !!}
                        {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                    @endif
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
