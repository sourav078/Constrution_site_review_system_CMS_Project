
@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Survey Manage Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Survey</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Survey</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Survey</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p class="text-muted text-center text-success">{{session('message')}}</p>
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0 text-center">SL NO</th>
                                <th class="wd-15p border-bottom-0 text-center">Assigned To</th>
                                <th class="wd-15p border-bottom-0 text-center">Task</th>
                                <th class="wd-20p border-bottom-0 text-center">Project Type</th>
                                <th class="wd-20p border-bottom-0 text-center">Project Name</th>
                                <th class="wd-25p border-bottom-0 text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($surveys as $survey)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="text-center">{{$survey->surveyer->name}}</td>
                                    <td class="text-center">
                                        <ul>
                                            @foreach(json_decode($survey->modules) as $moduleId)
                                                @php
                                                    $module = \App\Models\Module::find($moduleId);
                                                @endphp
                                                @if($module)
                                                    <li>{{ $module->name }}</li>
                                                @else
                                                    <li>Unknown Module</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="text-center">{{ $survey->surveyType->name }}</td>
                                    <td class="text-center">{{ $survey->category->name }}</td>
                                    <td class="text-center">
                                        <a href="{{route('survey.edit', $survey->id)}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{route('survey.destroy', $survey->id)}}" onclick="return confirm('Are you sure to delete this survey?')" method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-sm btn-danger my-1">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
