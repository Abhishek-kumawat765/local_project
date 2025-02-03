<!DOCTYPE html>

<html lang="en">
<?php
    $setting = DB::table('settings')->whereNull('deleted_at')->first();
    $slogan = explode('@', $setting->login_slogan);
?>

<head>
    <title>TimeAura Software | Login</title>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> <!--  Give security for form -->
    <meta name="description" content="
        The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
        Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
        Grab your copy now and get life-time updates for free.
    " />
    <meta name="keywords" content="
        metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
        Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
        free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
        bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
    " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?php echo e(env('IMAGE_SHOW_PATH') . $setting->mini_logo); ?>" />
    <link rel="icon" href="<?php echo e(env('IMAGE_SHOW_PATH') . 'default/mini_logo.png'); ?>" type="image/x-icon" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="<?php echo e(asset('public/assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />

    <script>
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
</head>

<body id="kt_body" class="app-blank">
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>

    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1" style="height:auto;">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/"
                            action="#">
                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">Sign In</h1>
                                <div class="text-gray-500 fw-semibold fs-6"><?php echo e($setting->name ?? ''); ?></div>
                            </div>

                            <div class="row g-3 mb-9">
                                <div class="col-md-6">
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="<?php echo e(env('IMAGE_SHOW_PATH') . 'assets/media/svg/brand-logos/google-icon.svg'); ?>"
                                            class="h-15px me-3" />
                                        Sign in with Google
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="<?php echo e(env('IMAGE_SHOW_PATH') . 'assets/media/svg/brand-logos/apple-black.svg'); ?>"
                                            class="theme-light-show h-15px me-3" />
                                        <img alt="Logo"
                                            src="<?php echo e(env('IMAGE_SHOW_PATH') . 'assets/media/svg/brand-logos/apple-black-dark.svg'); ?>"
                                            class="theme-dark-show h-15px me-3" />
                                        Sign in with Apple
                                    </a>
                                </div>
                            </div>

                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                            </div>

                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Email" name="email" id="email" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>

                            <div class="fv-row mb-3">
                                <input type="password" placeholder="Password" name="password" id="password"
                                    autocomplete="off" class="form-control bg-transparent" />
                            </div>

                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(<?php echo e(env('IMAGE_SHOW_PATH') . 'assets/media/misc/auth-screens.png'); ?>)">
                <div class="d-flex flex-column flex-center px-md-15 w-100">
                </div>
            </div>
        </div>
    </div>

    <script>
        var hostUrl = "../../../assets/index.html";        
    </script>

    <script src="<?php echo e(asset('public/assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/scripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom/authentication/sign-in/general.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\rusoft_web\resources\views/authentication/layouts/corporate/sign-in.blade.php ENDPATH**/ ?>