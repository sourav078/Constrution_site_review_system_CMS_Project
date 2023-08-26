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
                <li class="breadcrumb-item active" aria-current="page">Edit Surveyer</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Surveyer Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('surveyer.update', $surveyer->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Full Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$surveyer->name}}" id="name" name="name" placeholder="Surveyer Name" type="text"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email Address</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" value="{{$surveyer->email}}" name="email" placeholder=" Surveyer Email" type="email"/>
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
                                <input class="form-control" id="mobile" value="{{$surveyer->mobile}}" name="mobile" placeholder="Password" type="number"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" placeholder="Password" type="file"/>
                                <img src="{{asset($surveyer->image)}}" alt="" height="100" width="120"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Surveyer Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

