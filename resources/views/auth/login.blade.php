@extends('auth.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="../../demo6/dist/index.html" class="py-9 mb-5">
                            <img alt="Logo" src="{{ asset('panel/assets/media/logos/logo-2.svg') }}" class="h-60px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Metronic</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing Metronic
                            <br />with great build tools
                        </p>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url({{ asset('panel/assets/media/illustrations/sketchy-1/13.png') }}">
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        {{-- id="kt_sign_in_form" --}}
                        <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">New Here?
                                    <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a>
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" id="email" type="email"
                                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus />

                                @error('email')
                                    <!--begin::Alert-->
                                    <div
                                        class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mt-4 mb-10">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column">
                                            <h6 class="fw-bold text-danger" style="line-height: 40px;">
                                                {{ $message }}</h6>
                                            <!--begin::Title-->
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Close-->
                                        <button type="button"
                                            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                                            data-bs-dismiss="alert">
                                            <span class="svg-icon svg-icon-1 svg-icon-danger text-danger"> X </span>
                                        </button>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Alert-->
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    @if (Route::has('password.request'))
                                        <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password ?') }}
                                        </a>
                                    @endif
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" />

                                @error('password')
                                    <!--begin::Alert-->
                                    <div
                                        class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mt-4 mb-10">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <h5 class="fw-bold text-danger" style="line-height: 40px;">Error!
                                                {{ $message }}</h5>
                                            <!--begin::Title-->
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Close-->
                                        <button type="button"
                                            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                                            data-bs-dismiss="alert">
                                            <span class="svg-icon svg-icon-1 svg-icon-danger text-danger"> X </span>
                                        </button>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Alert-->
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                {{-- id="kt_sign_in_submit" --}}
                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                                <!--begin::Separator-->
                                <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                                <!--end::Separator-->
                                <!--begin::Google link-->
                                <a href="{{ route('redirect') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo"
                                        src="{{ asset('panel/assets/media/svg/brand-logos/google-icon.svg') }}"
                                        class="h-20px me-3" />Continue with Google</a>
                                <!--end::Google link-->
                                <!--begin::Google link-->
                                <a href="{{ route('redirect.facebook') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo"
                                        src="{{ asset('panel/assets/media/svg/brand-logos/facebook-4.svg') }}"
                                        class="h-20px me-3" />Continue with Facebook</a>
                                <!--end::Google link-->
                                <!--begin::Google link-->
                                {{-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                    <img alt="Logo"
                                        src="{{ asset('panel/assets/media/svg/brand-logos/apple-black.svg') }}"
                                        class="h-20px me-3" />Continue with Apple</a> --}}
                                <!--end::Google link-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
@endsection
