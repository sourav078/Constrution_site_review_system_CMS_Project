
@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Surveyer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Surveyer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Surveyer</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Surveyer Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('surveyer.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Full Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" name="name" placeholder="Surveyor Name" type="text"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Mobile Number</label>
                            <div class="col-md-9">
                                <input class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" type="number"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email Address</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" name="email" placeholder=" Surveyor Email" autocomplete="off" type="string"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="password" class="col-md-3 form-label">Password</label>
                            <div class="col-md-9">
                                <input class="form-control" id="password" name="password" placeholder="Password" type="string"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" placeholder="Image" type="file"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Surveyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

