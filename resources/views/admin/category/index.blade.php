@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title"><h1>Clients</h1></h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(1);">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clients Information Form</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Clients</h3>
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
                    <form class="form-horizontal" action="{{route('category.new')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Reference Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="reference_name" name="reference_name" placeholder="Reference Name" type="string">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Order Received</label>
                            <div class="col-md-9">
                                <input class="form-control" type="date" id="y-m-d" name="date" placeholder="Order Receiving Date" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Client Name</label>
                            <div class="col-md-9">
                                                           <input class="form-control" id="name" name="name" placeholder="Client's Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                                                        <label for="image" class="col-md-3 form-label">Client's Photo</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="image" name="image" type="file">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label for="mobile" class="col-md-3 form-label">Mobile</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="number" name="number" placeholder="Client's Mobile No" type="number">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label for="mobile" class="col-md-3 form-label">Mouza No.</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="mouza" name="mouza" placeholder="Mouza No" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label for="amount" class="col-md-3 form-label">Charge Amount</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control" id="amount" name="amount" placeholder="Amount" type="number">
                                                        </div>
                                                    </div>

                        <button class="btn btn-primary" type="submit">Create New Client</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
