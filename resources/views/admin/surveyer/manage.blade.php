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
                                <th class="wd-15p border-bottom-0">name</th>
                                <th class="wd-20p border-bottom-0">Email</th>
                                <th class="wd-10p border-bottom-0">Mobile</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($surveyers as $surveyer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$surveyer->name}}</td>
                                    <td>{{$surveyer->email}}</td>
                                    <td>{{$surveyer->mobile}}</td>
                                    <td><img src="{{asset($surveyer->image)}}" alt="" height="50" width="70"/></td>
                                    <td>
                                        <a href="{{route('surveyer.edit', $surveyer->id)}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{route('surveyer.destroy', $surveyer->id)}}" onclick="return confirm('Are you sure to delete this surveyer?')" method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-sm btn-danger my-1">Delete</button>
                                        </form>

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
