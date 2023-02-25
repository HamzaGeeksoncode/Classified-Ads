@extends('panel.layouts.app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content">
    <div class="card-header border-0 pt-6">
        <!--begin::Card toolbar-->
        <div class="card-toolbar d-flex justify-content-between">
            <h1 class="anchor fw-bolder mb-5 px-4">Ads Posted</h1>
            <!--begin::Toolbar-->
            <div class="d-flex px-6" data-kt-user-table-toolbar="base">
                <!--begin::Add user-->
                <a href="{{ route('ad-post.create') }}" class="btn btn-primary">
                    Ad Post
                </a>
                <!--end::Add user-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <div id="kt_content_container" class="container-xxl">
        <div class="panel panel-default">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
        </div>
        <table id="kt_datatable_example_5" class="table table-striped table-row-bordered bg-white gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>Sr No.</th>
                    @hasrole('admin')
                    <th>Users</th>
                    @endhasrole
                    <th>Title</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Model</th>
                    <th>City</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $key => $data)
                    <tr>
                        <td>{{ ++$key }}</td>
                        @hasrole('admin')
                        <td>{{ $data->user->name }}</td>
                        @endhasrole
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{ $data->category->name }}</td>
                        <td>{{ $data->model->name }}</td>
                        <td>{{ $data->city }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <i class="bi bi-pencil-square fs-2x text-success"></i>
                            <i class="bi bi-trash fs-2x px-4 text-danger"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script_page')
<script>
    $("#kt_datatable_example_5").DataTable({
 "language": {
  "lengthMenu": "Show _MENU_",
 },
 "dom":
  "<'row'" +
  "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
  "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
  ">" +

  "<'table-responsive'tr>" +

  "<'row'" +
  "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
  "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
  ">"
});
</script>
@endsection
