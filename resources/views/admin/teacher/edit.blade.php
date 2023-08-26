@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Teacher Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Teacher</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Teacher</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Teacher Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('teacher.update', $teacher->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Department Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" required>
                                    <option value="" disabled selected> -- Select Teacher Department -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$teacher->category_id == $category->id ? 'selected' : ''}}> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Full Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$teacher->name}}" id="name" name="name" placeholder="Teacher Name" type="text"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email Address</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" value="{{$teacher->email}}" name="email" placeholder="Teacher Email" type="email"/>
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
                                <input class="form-control" id="mobile" value="{{$teacher->mobile}}" name="mobile" placeholder="Password" type="number"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" placeholder="Password" type="file"/>
                                <img src="{{asset($teacher->image)}}" alt="" height="100" width="120"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Teacher Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

