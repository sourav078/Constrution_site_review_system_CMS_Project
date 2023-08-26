@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Category</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Category Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('category.update', ['id' => $category->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Client Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" value="{{$category->name}}" name="name" placeholder="Clients Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="number" class="col-md-3 form-label">Client Mobile Number</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="number" placeholder="Client Number">{{$category->number}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mouza" class="col-md-3 form-label">Mouja</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="mouza" placeholder="Mouza">{{$category->mouza}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="amount" class="col-md-3 form-label">Charge Amount</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="amount" placeholder="Charge Amount">{{$category->amount}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="date" class="col-md-3 form-label">Date</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="date" placeholder="Charge Amount">{{$category->date}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" type="file">
                                <img src="{{asset($category->image)}}" alt="" height="100" width="100"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Category Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

