@extends('admin.master')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Clients List</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clients list</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Clients Information</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Client Information</th>
                                <th class="wd-15p border-bottom-0">Order Information</th>
                                <th class="wd-20p border-bottom-0">Mouza</th>
                                <th class="wd-15p border-bottom-0">Charge</th>
                                <th class="wd-15p border-bottom-0">Files</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="d-flex flex-column ">
                                        <img src="{{ asset($category->image) }}" alt="Client Image" width="100"> <!-- Increase the width value -->
                                        <div class="mt-2">
                                            <h6 class="mb-1">Name</h6>
                                            <p class="text-muted">{{ $category->name }}</p>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Mobile</h6>
                                            <p class="text-muted">{{ $category->number }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><strong>Reference Name:</strong> {{ $category->reference_name }}</li>
                                        <li><strong>Order Time:</strong> {{ $category->date }}</li>
                                    </ul>
                                </td>
                                <td>{{$category->mouza}}</td>
                                <td>{{$category->amount}}</td>
                                <td>
                                    <a href="{{ route('category.files', ['id' => $category->id]) }}" class="btn btn-success btn-sm" target="_blank">
                                        <i>View Files</i>
                                    </a>
                                </td>

                                <td>{{ $category->status == 0 ? 'Complete' : 'Incomplete' }}</td>
                                <td>
                                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
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
@endsection
