
@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Survey Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Survey</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Survey</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Survey Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('survey.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                                                    <div class="row mb-4">
                                                        <label for="name" class="col-md-3 form-label">Clients Name</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="category_id" required>
                                                                <option value="" disabled selected> -- Select Client -- </option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->id}}"> {{$category->name}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label for="name" class="col-md-3 form-label">Surveyor Name</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="surveyer_id" required>
                                                                <option value="" disabled selected> -- Select Surveyor -- </option>
                                                                @foreach($surveyers as $surveyer)
                                                                    <option value="{{$surveyer->id}}"> {{$surveyer->name}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                <label for="name" class="col-md-3 form-label">Select Survey Type</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="survey_type_id" required>
                                        <option value="" disabled selected> -- Select Survey Type -- </option>
                                        @foreach($surveyTypes as $surveyType)
                                            <option value="{{$surveyType->id}}"> {{$surveyType->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                                                    <div class="row mb-4">
                                                    <label for="name" class="col-md-3 form-label">Select Task</label>
                                                    <div class="col-md-9">
                                                            <option value="" disabled selected> -- Select Tasks -- </option>
                                                            @foreach ($modules as $module)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="modules[]" value="{{ $module->id }}">
                                                                    <label class="form-check-label">{{ $module->name }}</label>
                                                                </div>
                                                            @endforeach

                                                    </div>
                                                </div>

                        <button class="btn btn-primary" type="submit">Create New Survey</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

