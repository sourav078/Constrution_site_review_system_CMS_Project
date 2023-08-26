@extends('admin.master')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Surveyer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Surveyer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Surveyer</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Surveyer Information</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p class="text-muted text-center text-success">{{session('message')}}</p>
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Department</th>
                                <th class="wd-15p border-bottom-0">name</th>
                                <th class="wd-20p border-bottom-0">Email</th>
                                <th class="wd-10p border-bottom-0">Mobile</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$teacher->category->name}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td>S{{$teacher->email}}</td>
                                    <td>S{{$teacher->mobile}}</td>
                                    <td><img src="{{asset($teacher->image)}}" alt="" height="50" width="70"/></td>
                                    <td>
                                        <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="{{route('teacher.destroy', $teacher->id)}}" class="btn btn-danger btn-sm">
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
