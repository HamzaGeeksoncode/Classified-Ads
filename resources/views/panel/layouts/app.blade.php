<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>{{ env('APP_NAME') }}</title>
		<link rel="shortcut icon" href="{{ asset('panel/assets/media/logos/favicon.ico')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('panel/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('panel/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('panel/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo py-8" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="../../demo6/dist/index.html" class="d-flex align-items-center">
							<img alt="Logo" src="{{ asset('panel/assets/media/logos/logo-demo6.svg')}}" class="h-45px logo" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
                    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
                        <!--begin::Aside Menu-->
                        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                                <div class="menu-item py-2">
                                    <a class="menu-link @if(!empty($page_slug) && $page_slug  == 'dashboard') active @endif menu-center" href="{{ route('dashboard') }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon me-0">
                                            <i class="bi bi-house fs-2"></i>
                                        </span>
                                        <span class="menu-title">Home</span>
                                    </a>
                                </div>
                                @hasrole('writer')
                                    <div class="menu-item py-2">
                                        <a class="menu-link @if(!empty($page_slug) && $page_slug  == 'category') active @endif menu-center" href="{{ route('category') }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                            <span class="menu-icon me-0">
                                                <i class="bi bi-layout-text-sidebar-reverse fs-2"></i>
                                            </span>
                                            <span class="menu-title">Category</span>
                                        </a>
                                    </div>
                                    <div class="menu-item py-2">
                                        <a class="menu-link @if(!empty($page_slug) && $page_slug  == 'models') active @endif menu-center" href="{{ route('models') }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                            <span class="menu-icon me-0">
                                                <i class="bi bi-card-heading fs-2"></i>
                                            </span>
                                            <span class="menu-title">Model</span>
                                        </a>
                                    </div>
                                    <div class="menu-item py-2">
                                        <a class="menu-link @if(!empty($page_slug) && $page_slug  == 'users') active @endif menu-center" href="{{ route('users') }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                            <span class="menu-icon me-0">
                                                <i class="bi bi-people fs-2"></i>
                                            </span>
                                            <span class="menu-title">Users</span>
                                        </a>
                                    </div>
                                @endhasrole
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Aside Menu-->
                    </div>
					<!--end::Aside menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg')}}-->
									<span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../demo6/dist/index.html" class="d-lg-none">
									<img alt="Logo" src="{{ asset('panel/assets/media/logos/logo-demo6.svg')}}" class="h-30px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1">
								<!--begin::Topbar-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::Toolbar wrapper-->
									<div class="d-flex align-items-stretch flex-shrink-0">
										<!--begin::Activities-->
										<div class="d-flex align-items-center ms-1 ms-lg-3">
											<!--begin::Drawer toggle-->
											<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
												<i class="bi bi-bell fs-2"></i>
											</div>
											<!--end::Drawer toggle-->
										</div>
										<!--end::Activities-->
										<!--begin::User-->
										<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
											<!--begin::Menu wrapper-->
											<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<img src="{{ auth()->user()->avatar }}" alt="image" />
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content d-flex align-items-center px-3">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px me-5">
															<img alt="Logo" src="{{ auth()->user()->avatar }}" />
														</div>
														<!--end::Avatar-->
														<!--begin::Username-->
														<div class="d-flex flex-column">
															<div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}</div>
															<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
														</div>
														<!--end::Username-->
													</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="../../demo6/dist/account/overview.html" class="menu-link px-5">My Profile</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													{{-- <a href="../../demo6/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a> --}}
                                                    <form method="POST" action="{{ route('logout') }}" class="menu-link p-0">
                                                        @csrf
                                                        <button class="btn menu-link" type="submit" onclick="event.preventDefault(); this.closest('form').submit();">Sign Out</button>
                                                    </form>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::User -->
										<!--begin::Heaeder menu toggle-->
										<div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
											<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
												<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg')}}-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
														<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Heaeder menu toggle-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					@yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2021©</span>
								<a href="{{ route('home') }}" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg')}}-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile APp” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="{{ asset('panel/assets/media/avatars/150-11.jpg')}}" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="{{ asset('panel/assets/media/avatars/150-3.jpg')}}" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="{{ asset('panel/assets/media/avatars/150-11.jpg')}}" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="{{ asset('panel/assets/media/avatars/150-5.jpg')}}" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="black" />
												<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="{{ asset('panel/assets/media/avatars/150-2.jpg')}}" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="black" />
												<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="{{ asset('panel/assets/media/avatars/150-6.jpg')}}" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="{{ asset('panel/assets/media/svg/files/pdf.svg')}}" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-bold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="{{ asset('panel/assets/media/svg/files/doc.svg')}}" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-bold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="{{ asset('panel/assets/media/svg/files/css.svg')}}" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-bold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">Task
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="{{ asset('panel/assets/media/avatars/150-11.jpg')}}" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="{{ asset('panel/assets/media/avatars/150-3.jpg')}}" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">New case
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="{{ asset('panel/assets/media/avatars/150-14.jpg')}}" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg')}}-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="black" />
													<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-bold">
													<h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Metronic Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg')}}-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
												<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
												<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">New order
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="../../demo6/dist/pages/profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg')}}-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--end::Drawers-->
		<!--begin::Modals-->
		<!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create App</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg')}}-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Aside-->
							<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
								<!--begin::Nav-->
								<div class="stepper-nav ps-lg-10">
									<!--begin::Step 1-->
									<div class="stepper-item current" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Details</h3>
											<div class="stepper-desc">Name your App</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--begin::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Frameworks</h3>
											<div class="stepper-desc">Define your app framework</div>
										</div>
										<!--begin::Label-->
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Database</h3>
											<div class="stepper-desc">Select the app database type</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">4</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Billing</h3>
											<div class="stepper-desc">Provide payment details</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">5</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Completed</h3>
											<div class="stepper-desc">Review and Submit</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 5-->
								</div>
								<!--end::Nav-->
							</div>
							<!--begin::Aside-->
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
									<!--begin::Step 1-->
									<div class="current" data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">App Name</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-4">
													<span class="required">Category</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
												</label>
												<!--end::Label-->
												<!--begin:Options-->
												<div class="fv-row">
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg')}}-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="black" />
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg')}}-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																				<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																				<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																				<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg')}}-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="black" />
																			<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
												</div>
												<!--end:Options-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-4">
													<span class="required">Select Framework</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-html5 text-warning fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fab fa-react text-success fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-angular text-danger fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="fab fa-vuejs text-primary fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="required fs-5 fw-bold mb-2">Database Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-4">
													<span class="required">Select Database Engine</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fas fa-database text-success fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-google text-danger fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-amazon text-warning fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">Name On Card</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
												</label>
												<!--end::Label-->
												<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
													<!--end::Input-->
													<!--begin::Card logos-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-5">
														<img src="{{ asset('panel/assets/media/svg/card-logos/visa.svg')}}" alt="" class="h-25px" />
														<img src="{{ asset('panel/assets/media/svg/card-logos/mastercard.svg')}}" alt="" class="h-25px" />
														<img src="{{ asset('panel/assets/media/svg/card-logos/american-express.svg')}}" alt="" class="h-25px" />
													</div>
													<!--end::Card logos-->
												</div>
												<!--end::Input wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Col-->
												<div class="col-md-8 fv-row">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
													<!--end::Label-->
													<!--begin::Row-->
													<div class="row fv-row">
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
																<option></option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
																<option></option>
																<option value="2021">2021</option>
																<option value="2022">2022</option>
																<option value="2023">2023</option>
																<option value="2024">2024</option>
																<option value="2025">2025</option>
																<option value="2026">2026</option>
																<option value="2027">2027</option>
																<option value="2028">2028</option>
																<option value="2029">2029</option>
																<option value="2030">2030</option>
																<option value="2031">2031</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
														<span class="required">CVV</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
													</label>
													<!--end::Label-->
													<!--begin::Input wrapper-->
													<div class="position-relative">
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
														<!--end::Input-->
														<!--begin::CVV icon-->
														<div class="position-absolute translate-middle-y top-50 end-0 me-3">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg')}}-->
															<span class="svg-icon svg-icon-2hx">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M22 7H2V11H22V7Z" fill="black" />
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::CVV icon-->
													</div>
													<!--end::Input wrapper-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Save Card</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div data-kt-stepper-element="content">
										<div class="w-100 text-center">
											<!--begin::Heading-->
											<h1 class="fw-bolder text-dark mb-3">Release!</h1>
											<!--end::Heading-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.</div>
											<!--end::Description-->
											<!--begin::Illustration-->
											<div class="text-center px-4 py-15">
												<img src="{{ asset('panel/assets/media/illustrations/sketchy-1/9.png')}}" alt="" class="w-100 mh-300px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Step 5-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div class="me-2">
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg')}}-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->Back</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg')}}-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon--></span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg')}}-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		<!--begin::Modal - Select Location-->
		<div class="modal fade" id="kt_modal_select_location" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-1000px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Title-->
						<h2>Select Location</h2>
						<!--end::Title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg')}}-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body">
						<div id="kt_modal_select_location_map" class="w-100 rounded" style="height:450px"></div>
					</div>
					<!--end::Modal body-->
					<!--begin::Modal footer-->
					<div class="modal-footer d-flex justify-content-end">
						<a href="#" class="btn btn-active-light me-5" data-bs-dismiss="modal">Cancel</a>
						<button type="button" id="kt_modal_select_location_button" class="btn btn-primary" data-bs-dismiss="modal">Apply</button>
					</div>
					<!--end::Modal footer-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Select Location-->
		<!--end::Modals-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg')}}-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('panel/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{ asset('panel/assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('panel/assets/js/custom/widgets.js')}}"></script>
		<script src="{{ asset('panel/assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{ asset('panel/assets/js/custom/modals/create-app.js')}}"></script>
		<script src="{{ asset('panel/assets/js/custom/modals/upgrade-plan.js')}}"></script>
        <script src="{{ asset('panel/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        @yield('script_page')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
