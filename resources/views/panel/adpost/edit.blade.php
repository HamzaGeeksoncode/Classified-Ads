@extends('panel.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content">
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar d-flex justify-content-between">
                <h1 class="anchor fw-bolder mb-5 px-4">Ads Posted</h1>
            </div>
            <!--end::Card toolbar-->
            <hr>
        </div>
        <div id="kt_content_container" class="container-xxl">
            <div class="modal-body py-10 px-lg-17">
                <form action="{{ route('ad-post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px"
                        style="">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Title..."
                                name="title" value="" required>
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Type</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="type" aria-label="Select a Type" data-control="select2"
                                data-placeholder="Select a Type..."
                                class="form-select form-select-solid fw-bolder select2-hidden-accessible" tabindex="-1"
                                aria-hidden="true" id="getTypeid">
                                <option value="">Select a Type...</option>
                                @foreach ($type as $data)
                                    <option value="{{ $data->id }}" data-id="{{ $data->id }}">
                                        {{ ucwords($data->name) }}</option>
                                @endforeach
                            </select>


                            <!--end::Input-->
                        </div>

                        <!--end::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Category</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="category" aria-label="Select a Category" data-control="select2"
                                data-placeholder="Select a Category..."
                                class="form-select form-select-solid fw-bolder select2-hidden-accessible" tabindex="-1"
                                aria-hidden="true" id="categorybyType">
                                <option value="">Select a Category...</option>
                                {{-- @foreach ($category as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach --}}
                            </select>

                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Model</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Model..."
                                name="model" value="" required>
                            <!--end::Input-->
                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">City</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="City" aria-label="Select a City" data-control="select2"
                                data-placeholder="Select a City..."
                                class="form-select form-select-solid fw-bolder select2-hidden-accessible" tabindex="-1"
                                aria-hidden="true">
                                <option value="">Select a City...</option>
                                @foreach ($city as $citydata)
                                    <option value="{{ $citydata->id }}">{{ $citydata->name }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">Area Name
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="area_name" value=""
                                required>
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">Price Per Day
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" class="form-control form-control-solid" placeholder="" name="price_per_day"
                                value="" required>
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">Price Per Week
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" class="form-control form-control-solid" placeholder="" name="price_per_week"
                                value="">
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class=" fs-6 fw-bold mb-2">Price Per Month
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" class="form-control form-control-solid" placeholder="" name="price_per_month"
                                value="">
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->


                        <!--begin::Input group-->
                        <div class="fv-row mb-15">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Description</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea type="text" class="form-control form-control-solid" placeholder="" name="description"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-15">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Feature Image</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" placeholder=""
                                name="feature_image" multiple required>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-15">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Relative Images</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" placeholder="" name="images[]"
                                multiple>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Billing toggle-->
                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                            href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false"
                            aria-controls="kt_customer_view_details">Company Information
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Billing toggle-->
                        <!--begin::Billing form-->
                        <div id="kt_modal_add_customer_billing_info" class="collapse show">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="company_name" value="">
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Logo</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" class="form-control form-control-solid" placeholder=""
                                    name="company_logo" value="">
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Billing form-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-5">
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script_page')
    <script>
        $('#getTypeid').on('change', function() {
            var selectedOption = $(this).find(':selected');
            var dataAttrValue = selectedOption.data('id');
            console.log('Data attribute value:', dataAttrValue);
            $.ajax({
                url: '/category-type/' + dataAttrValue,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var options = '';
                    $.each(response, function(key, value) {
                        options += '<option value="' + value.id + '">' + value.name +
                            '</option>';
                    });
                    $('#categorybyType').html(options);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });

        });
    </script>
@endsection
