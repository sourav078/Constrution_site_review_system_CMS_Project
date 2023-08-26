details.blade---->running

@extends('admin.master')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Surveyor</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Survey</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
            </ol>
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Survey Details</h3>
                </div>
                <div class="container-fluid mt-2">
                    <div class="row">
                        <div class="col-md-3">
                            <h1>Survey Details</h1>
                            <h3>Survey ID: {{ $survey->id }}</h3>
                            <h3>Client's Name: {{ $survey->category->name }}</h3>
                            <h3>Survey Type: {{ $survey->surveyType->name }}</h3>
                        </div>
                        <div class="col-md-1"></div> <!-- Empty column for spacing -->
                        <div class="col-md-3">
                            <h3>Upload Client File</h3>
                            <form action="{{ route('surveyer.upload_client_file', ['id' => $survey->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                <input type="hidden" name="category_id" value="{{ $survey->category->id }}">
                                <div class="form-group">
                                    <label for="file">File (PDF, DOC, DOCX):</label>
                                    <input type="file" name="file" accept=".pdf,.doc,.docx" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <div class="col-md-1"></div> <!-- Empty column for spacing -->
                        <div class="col-md-3">
                            <h3>Submit Client Amount</h3>
                            <form action="{{ route('surveyer.submit_amount', ['id' => $survey->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                <input type="hidden" name="category_id" value="{{ $survey->category->id }}">
                                <div class="form-group">
                                    <label for="client_amount">Amount:</label>
                                    <input type="number" name="client_amount" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-6">
                            <h1>{{ $survey->surveyType->name }} - Details</h1>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Module Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $modules = json_decode($survey->modules);
                                @endphp
                                @foreach($modules as $moduleId)
                                    @php
                                        $module = \App\Models\Module::find($moduleId);
                                    @endphp
                                    <tr>
                                        <td>{{ $module->name }}</td>
                                        <td>
                                            <form action="#" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Complete the task</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-secondary">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
