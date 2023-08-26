@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Surveyer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-md-12">
            <h1>My Dashboard....</h1>
            @foreach ($assignedSurveys as $survey)
                <div class="survey-card">
                    <h3>Survey ID: {{ $survey->id}}</h3>
                    <a href="{{ route('surveyer.survey.details', ['id' => $survey->id]) }}">View Details</a>

                    {{--                    <a href="{{ route('survey.show', $survey->id) }}">View Details</a>--}}
{{--                    <a href="{{ route('surveyer.details', ['id' => $survey->id]) }}">View Details</a>--}}

                </div>
            @endforeach
        </div>
    </div>
@endsection
