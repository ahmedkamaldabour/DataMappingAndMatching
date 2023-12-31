<!DOCTYPE html>
<html lang="en">
@include('inc.head')
<body class="layout-boxed enable-secondaryNav">
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

@include('inc.navbar')
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('inc.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="middle-content container-xxl p-0">
            <div class="col-xl-12 layout-spacing mt-5">
                <!--  BEGIN FOOTER  -->
                @yield('content')
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                                                                                          href="https://designreset.com/cork-admin/">DesignReset</a>,
                            All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--  END FOOTER  -->
    </div>
    <!--  END CONTENT AREA  -->

</div>


@include('inc.scripts')

</body>
</html>
