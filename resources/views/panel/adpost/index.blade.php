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

    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_status" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_status_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Add Category</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-10 my-7">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('adpost.update') }}"
                        method="POST">
                        @csrf
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_modal_add_status_header"
                            data-kt-scroll-wrappers="#kt_modal_add_status_scroll" data-kt-scroll-offset="300px"
                            style="max-height: 28px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">Status</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="hidden" name="id" id="adpost_id">
                                <select name="status" id="adpost_status"
                                    class="form-control form-control-solid mb-3 mb-lg-0" required>
                                    <option value="">Please Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="approved">Approved</option>
                                    <option value="pending">Pending</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-5">
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->

    <div id="kt_content_container" class="container-xxl">
        <div class="panel panel-default">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <table id="kt_datatable_example_5"
            class="table table-striped table-row-bordered bg-white gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>Sr No.</th>
                    <th>Feature Image</th>
                    @hasrole('admin')
                    <th>Users</th>
                    @endhasrole
                    <th>Title</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Model</th>
                    <th>City</th>
                    <th>Price</th>
                    {{-- <th>Is Premium?</th> --}}
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $key => $data)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td><img src="{{ asset('public/adpost/features/image/' . $data->feature_image) }}" height="60"
                            width="60" /></td>
                    @hasrole('admin')
                    <td>{{ $data->user->name }}</td>
                    @endhasrole
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->type->name }}</td>
                    <td>{{ $data->category->name }}</td>
                    <td>{{ $data->model }}</td>
                    <td>{{ $data->city->name }}</td>
                    {{-- <td>{{ $data->is_primium }}</td> --}}
                    <td>{{ $data->price_per_day }}</td>
                    <td>
                        @if ($data->status == 'pending')
                        <span class="badge badge-light-warning">Pending</span>
                        @elseif($data->status == 'active')
                        <span class="badge badge-light-success">Active</span>
                        @else
                        <span class="badge badge-light-primary">Approved</span>
                        @endif
                    </td>
                    @hasrole('customer')
                    <td>
                        <i class="bi bi-pencil-square text-success" style="font-size:16px !important"></i>
                        <i class="bi bi-trash px-4 text-danger" style="font-size:16px !important"></i>
                    </td>
                    @endhasrole
                    @hasrole('admin')
                    <td>
                        <i class="bi bi-clipboard-plus p-6 text-success post_status" data-id="{{ $data->id }}"
                            style="font-size:16px !important"></i>
                    </td>
                    @endhasrole
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script_page')
<script>
$('.post_status').click(function() {

    var id = $(this).data('id');
    $.ajax({
        url: '/admin/edit-adpost/' + id,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#kt_modal_add_status').modal('show');
            $('#adpost_id').val(data.id);
            $("#adpost_status option").each(function() {
                if ($(this).val() == data.status) {
                    $(this).prop("selected", true);
                }
            });

        }
    });
});


$("#kt_datatable_example_5").DataTable({
    "language": {
        "lengthMenu": "Show _MENU_",
    },
    "dom": "<'row'" +
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
