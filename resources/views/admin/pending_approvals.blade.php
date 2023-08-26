@extends('admin.master')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">
                <h1>Pending Approvals</h1>
            </h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(1);">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pending Approvals</li>
            </ol>
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Survey Form</h3>
                </div>
    <h3>
    <p class="text-muted text-center text-success">{{session('message')}}</p>
    </h3>
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Survey ID</th>
                <th>Client Name</th>
                <th>Amount</th>
                <th>File</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pendingApprovals as $approval)
                <tr>
                    <td>{{ $approval->survey->id }}</td>
                    <td>{{ $approval->category->name }}</td>
                    <td>{{ $approval->amount }}</td>
                    <td>
                        @if ($approval->file_path)
                            <button onclick="viewFile('{{ asset('storage/' . $approval->file_path) }}')">View File</button>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('approve', $approval->id) }}" class="btn btn-success">Approve</a>
                        <a href="{{ route('reject', $approval->id) }}" class="btn btn-danger">Reject</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="fileModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <iframe id="fileIframe" src="" width="800" height="600"></iframe>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function viewFile(url) {
            document.getElementById('fileIframe').src = url;
            document.getElementById('fileModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('fileModal').style.display = 'none';
        }

        // Close the modal if user clicks outside of it
        window.onclick = function (event) {
            var modal = document.getElementById('fileModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>

    <!-- CSS -->
    <style>
        .modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }

        .modal-content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
        }

        .close {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 28px;
            color: #333;
            cursor: pointer;
        }
    </style>
            </div>
        </div>
    </div>
@endsection
