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
                    <form class="form-horizontal" action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
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
                            <label for="name" class="col-md-3 form-label">Full Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" name="name" placeholder="Surveyer Name" type="text"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email Address</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" name="email" placeholder="Teacher Email" type="email"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="password" class="col-md-3 form-label">Password</label>
                            <div class="col-md-9">
                                <input class="form-control" id="password" name="password" placeholder="Password" type="password"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Mobile Number</label>
                            <div class="col-md-9">
                                <input class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" type="number"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" placeholder="Password" type="file"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Surveyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

