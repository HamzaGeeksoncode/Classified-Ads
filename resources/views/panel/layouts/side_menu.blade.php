@section('sidemenu')
<div class="aside-menu flex-column-fluid" id="kt_aside_menu">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item py-2">
                <a class="menu-link active menu-center" href="../../demo6/dist/index.html" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon me-0">
                        <i class="bi bi-house fs-2"></i>
                    </span>
                    <span class="menu-title">Home</span>
                </a>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
                <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon me-0">
                        <i class="bi bi-file-earmark-lock fs-2"></i>
                    </span>
                    <span class="menu-title">Auth</span>
                </span>
                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Authentication</span>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Basic</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/flows/basic/sign-in.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-in</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/flows/basic/sign-up.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-up</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/flows/basic/two-steps.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Two-steps</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/flows/basic/password-reset.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Password Reset</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/flows/basic/new-password.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">New Password</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Extended</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/extended/multi-steps-sign-up.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Multi-steps Sign-up</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/extended/free-trial-sign-up.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Free Trial Sign-up</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/extended/coming-soon.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Coming Soon</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/verify-email.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Verify Email</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/password-confirmation.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Password Confirmation</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-flip="false" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">General</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-sub-lg-dropdown w-lg-225px px-lg-1 py-lg-4">
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/welcome.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Welcome</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/verify-email.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Verify Email</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/password-confirmation.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Password Confirmation</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/close-account.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Close Account</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/error-404.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Error 404</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/general/error-500.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Error 500</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-flip="false" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Email</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-sub-lg-dropdown w-lg-225px px-lg-1 py-lg-4">
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/email/verify-email.html" target="blank">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Verify Email</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/email/password-reset.html" target="blank">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Password Reset</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo6/dist/authentication/email/password-change.html" target="blank">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Password Change</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
                <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon me-0">
                        <i class="bi bi-shield-check fs-2"></i>
                    </span>
                    <span class="menu-title">Account</span>
                </span>
                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Account</span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/account/overview.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Overview</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/account/settings.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Settings</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/account/security.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Security</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/account/billing.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Billing</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/account/statements.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Statements</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/account/referrals.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Referrals</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/account/api-keys.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">API Keys</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
                <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon me-0">
                        <i class="bi bi-chat-square-text fs-2"></i>
                    </span>
                    <span class="menu-title">Chat</span>
                </span>
                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Chat</span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/apps/chat/private.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Private Chat</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/apps/chat/group.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Group Chat</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/apps/chat/drawer.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Drawer Chat</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
                <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon me-0">
                        <i class="bi bi-people fs-2"></i>
                    </span>
                    <span class="menu-title">Users</span>
                </span>
                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Users</span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/apps/customers/getting-started.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Getting Started</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/apps/customers/list.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customer Listing</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/apps/customers/view.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customer Details</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
                <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon me-0">
                        <i class="bi bi-file-text fs-2"></i>
                    </span>
                    <span class="menu-title">General</span>
                </span>
                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">General</span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/pages/company/about.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">About Us</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/pages/company/pricing.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Pricing</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/pages/company/contact.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Contact Us</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/pages/company/team.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Our Team</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/pages/company/licenses.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Licenses</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/pages/company/sitemap.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sitemap</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
                <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon me-0">
                        <i class="bi bi-gear fs-2"></i>
                    </span>
                    <span class="menu-title">More</span>
                </span>
                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Resources</span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/documentation/base/utilities.html" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                            <span class="menu-icon">
                                <i class="bi bi-grid fs-3"></i>
                            </span>
                            <span class="menu-title">Components</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/documentation/getting-started.html" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                            <span class="menu-icon">
                                <i class="bi bi-box fs-3"></i>
                            </span>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo6/layout-builder.html" title="Build your layout, preview and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                            <span class="menu-icon">
                                <i class="bi bi-layers fs-3"></i>
                            </span>
                            <span class="menu-title">Layout Builder</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="../../demo6/dist/documentation/getting-started/changelog.html">
                            <span class="menu-icon">
                                <i class="bi bi-card-text fs-3"></i>
                            </span>
                            <span class="menu-title">Changelog v8.0.25</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>
@endsection
