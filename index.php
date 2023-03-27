<?php
include('./include/header.php');
?>
<!-- Top navbar -->
<nav class="p-0 fixed-top text-white" id="top-nav">
    <div class="top-nav row mx-auto my-auto pt-3 pb-3 w-100 container-fluid text-white">
        <div class="toggle-btn col-auto text-white text-start p-0 d-md-none" style="cursor: pointer;" id="nav-toggler">
            <span class=" bi bi-list fs-2 text-start ms-0 me-auto"></span>
        </div>
        <a href="#" class="nav-logo col-sm col-8 mx-auto mx-sm-0 text-sm-start text-center my-auto">
            <div style="width: fit-content;" class="mx-auto mx-sm-0">
                <img class="nav-logo-white d-block" src="./assets/svg/logo_white.svg" alt="fiverr">
                <img class="nav-logo-black d-none" src="./assets/svg/logo.svg" alt="fiverr">
            </div>
        </a>
        <ul class="d-none d-md-flex text-white col-auto row fw-semibold my-auto">
            <li class="col-auto">Fiverr Business</li>
            <li class="col-auto">Explore</li>
            <li class="col-auto d-none d-lg-block">
                <svg width="18" height="18" fill="white" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1C4.58875 1 1 4.58875 1 9C1 13.4113 4.58875 17 9 17C13.4113 17 17 13.4113 17 9C17 4.58875 13.4113 1 9 1ZM8.53125 4.92676C7.81812 4.89612 7.11218 4.7959 6.43811 4.63293C6.54578 4.37781 6.6626 4.13281 6.78857 3.90063C7.30542 2.94824 7.93994 2.27991 8.53125 2.03784V4.92676ZM8.53125 5.86499V8.53125H5.60339C5.64465 7.4906 5.82202 6.45752 6.11536 5.51782C6.8927 5.71362 7.70874 5.83215 8.53125 5.86499ZM8.53125 9.46875V12.135C7.70874 12.1678 6.8927 12.2864 6.11536 12.4822C5.82202 11.5425 5.64465 10.5094 5.60339 9.46875H8.53125ZM8.53125 13.0732V15.9622C7.93994 15.7201 7.30542 15.0518 6.78857 14.0994C6.6626 13.8672 6.54578 13.6222 6.43811 13.3671C7.11218 13.2041 7.81799 13.1039 8.53125 13.0732ZM9.46875 13.0732C10.1819 13.1039 10.8878 13.2041 11.5619 13.3671C11.4542 13.6222 11.3374 13.8672 11.2114 14.0994C10.6946 15.0518 10.0601 15.7201 9.46875 15.9622V13.0732ZM9.46875 12.135V9.46875H12.3966C12.3553 10.5094 12.178 11.5425 11.8846 12.4822C11.1073 12.2864 10.2913 12.1678 9.46875 12.135ZM9.46875 8.53125V5.86499C10.2913 5.83215 11.1073 5.71362 11.8846 5.51782C12.178 6.45752 12.3553 7.4906 12.3966 8.53125H9.46875ZM9.46875 4.92676V2.03784C10.0601 2.27991 10.6946 2.94824 11.2114 3.90063C11.3374 4.13281 11.4542 4.37781 11.5619 4.63293C10.8878 4.7959 10.1819 4.89612 9.46875 4.92676ZM12.0354 3.45349C11.8007 3.02087 11.5457 2.63953 11.2769 2.31421C12.2141 2.63428 13.0631 3.14636 13.7771 3.8031C13.3699 4.02124 12.931 4.21069 12.4694 4.36902C12.3384 4.0509 12.1936 3.74487 12.0354 3.45349ZM5.9646 3.45349C5.8064 3.74487 5.66162 4.0509 5.53064 4.36902C5.06897 4.21069 4.63013 4.02112 4.2229 3.8031C4.93689 3.14636 5.78589 2.63428 6.72314 2.31421C6.45435 2.63953 6.19946 3.02075 5.9646 3.45349ZM5.2135 5.25012C4.89355 6.27368 4.70544 7.38953 4.66492 8.53125H1.95349C2.05383 7.00769 2.63892 5.61438 3.5564 4.50525C4.06555 4.79724 4.62317 5.047 5.2135 5.25012ZM4.66492 9.46875C4.70544 10.6106 4.89355 11.7263 5.2135 12.7499C4.62317 12.953 4.06555 13.2028 3.5564 13.4948C2.63892 12.3856 2.05383 10.9923 1.95349 9.46875H4.66492ZM5.53064 13.631C5.66162 13.9491 5.8064 14.2551 5.9646 14.5465C6.19946 14.9791 6.45435 15.3605 6.72314 15.6858C5.78589 15.3657 4.93689 14.8536 4.22302 14.1969C4.63 13.9789 5.06897 13.7893 5.53064 13.631ZM12.0354 14.5465C12.1936 14.2551 12.3384 13.9491 12.4694 13.631C12.931 13.7893 13.3699 13.9789 13.7771 14.1969C13.0631 14.8536 12.2141 15.3657 11.2769 15.6858C11.5457 15.3605 11.8005 14.9792 12.0354 14.5465ZM12.7865 12.7499C13.1064 11.7263 13.2946 10.6105 13.3351 9.46875H16.0465C15.9462 10.9923 15.3611 12.3856 14.4436 13.4948C13.9344 13.2028 13.3768 12.953 12.7865 12.7499ZM13.3351 8.53125C13.2946 7.3894 13.1064 6.27368 12.7865 5.25012C13.3768 5.047 13.9344 4.79724 14.4436 4.50525C15.3611 5.61438 15.9462 7.00769 16.0465 8.53125H13.3351Z" stroke-width="0.2"></path>
                </svg>
                English
            </li>
            <li class="col-auto">Become a Seller</li>
        </ul>
        <a href="#" class="d-none d-sm-block text-white col-auto my-auto text-end fs-6 fw-semibold">Sign In</a>
        <a href="#" class="join-btn col-auto my-auto text-white text-end fs-6 px-3 py-1 fw-semibold border border-1 border-white rounded-2">Join</a>
    </div>
</nav>

<!-- Options nav -->
<nav class="nav-options border-top border-bottom border-1 p-0 fixed-top d-none" id="nav-options">
    <div class="nav-options-content bg-white row d-flex mx-auto align-items-center align-middle my-auto px-4 w-100 container-fluid">
        <ul class="d-flex justify-content-between align-items-center my-auto flex-nowrap">
            <li><a href="#">Graphics & Design</a></li>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">Writing & Translation</a></li>
            <li><a href="#">Video & Animation</a></li>
            <li><a href="#">Music & Audio</a></li>
            <li><a href="#">Programming & Tech</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Trending</a></li>
        </ul>
    </div>
</nav>
<!-- mobile sidebar -->
<nav class="mobile-nav text-nowrap" id="mobile-nav">
    <div class="fixed-top text-muted bg-white vh-100 px-3 pt-3" id="sidebar">
        <ul class="fw-normal d-flex flex-column mx-auto">
            <li class="join-btn col-auto mt-2 mb-3  fs-6 px-3 w-50 py-2 fw-semibold text-white border rounded-2" style="background-color: var(--primary--color-p);">
                Join Fiverr
            </li>
            <li class="col-auto my-2 fs-6">Sign in</li>
            <li class="col-auto my-2 fs-6">Browse Categories</li>
            <li class="col-auto my-2 fs-6">Explore</li>
            <li class="col-auto my-2 fs-6" style="color: var(--primary--color);">Fiverr Business</li>
        </ul>
        <p class="fw-semibold text-black mt-4">General</p>
        <hr>
        <ul class="fw-normal d-flex flex-column mx-auto">
            <li class="col-auto my-2 fs-6">Sign in</li>
            <li class="col-auto my-2 fs-6">
                <svg width="18" height="18" fill="grey" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1C4.58875 1 1 4.58875 1 9C1 13.4113 4.58875 17 9 17C13.4113 17 17 13.4113 17 9C17 4.58875 13.4113 1 9 1ZM8.53125 4.92676C7.81812 4.89612 7.11218 4.7959 6.43811 4.63293C6.54578 4.37781 6.6626 4.13281 6.78857 3.90063C7.30542 2.94824 7.93994 2.27991 8.53125 2.03784V4.92676ZM8.53125 5.86499V8.53125H5.60339C5.64465 7.4906 5.82202 6.45752 6.11536 5.51782C6.8927 5.71362 7.70874 5.83215 8.53125 5.86499ZM8.53125 9.46875V12.135C7.70874 12.1678 6.8927 12.2864 6.11536 12.4822C5.82202 11.5425 5.64465 10.5094 5.60339 9.46875H8.53125ZM8.53125 13.0732V15.9622C7.93994 15.7201 7.30542 15.0518 6.78857 14.0994C6.6626 13.8672 6.54578 13.6222 6.43811 13.3671C7.11218 13.2041 7.81799 13.1039 8.53125 13.0732ZM9.46875 13.0732C10.1819 13.1039 10.8878 13.2041 11.5619 13.3671C11.4542 13.6222 11.3374 13.8672 11.2114 14.0994C10.6946 15.0518 10.0601 15.7201 9.46875 15.9622V13.0732ZM9.46875 12.135V9.46875H12.3966C12.3553 10.5094 12.178 11.5425 11.8846 12.4822C11.1073 12.2864 10.2913 12.1678 9.46875 12.135ZM9.46875 8.53125V5.86499C10.2913 5.83215 11.1073 5.71362 11.8846 5.51782C12.178 6.45752 12.3553 7.4906 12.3966 8.53125H9.46875ZM9.46875 4.92676V2.03784C10.0601 2.27991 10.6946 2.94824 11.2114 3.90063C11.3374 4.13281 11.4542 4.37781 11.5619 4.63293C10.8878 4.7959 10.1819 4.89612 9.46875 4.92676ZM12.0354 3.45349C11.8007 3.02087 11.5457 2.63953 11.2769 2.31421C12.2141 2.63428 13.0631 3.14636 13.7771 3.8031C13.3699 4.02124 12.931 4.21069 12.4694 4.36902C12.3384 4.0509 12.1936 3.74487 12.0354 3.45349ZM5.9646 3.45349C5.8064 3.74487 5.66162 4.0509 5.53064 4.36902C5.06897 4.21069 4.63013 4.02112 4.2229 3.8031C4.93689 3.14636 5.78589 2.63428 6.72314 2.31421C6.45435 2.63953 6.19946 3.02075 5.9646 3.45349ZM5.2135 5.25012C4.89355 6.27368 4.70544 7.38953 4.66492 8.53125H1.95349C2.05383 7.00769 2.63892 5.61438 3.5564 4.50525C4.06555 4.79724 4.62317 5.047 5.2135 5.25012ZM4.66492 9.46875C4.70544 10.6106 4.89355 11.7263 5.2135 12.7499C4.62317 12.953 4.06555 13.2028 3.5564 13.4948C2.63892 12.3856 2.05383 10.9923 1.95349 9.46875H4.66492ZM5.53064 13.631C5.66162 13.9491 5.8064 14.2551 5.9646 14.5465C6.19946 14.9791 6.45435 15.3605 6.72314 15.6858C5.78589 15.3657 4.93689 14.8536 4.22302 14.1969C4.63 13.9789 5.06897 13.7893 5.53064 13.631ZM12.0354 14.5465C12.1936 14.2551 12.3384 13.9491 12.4694 13.631C12.931 13.7893 13.3699 13.9789 13.7771 14.1969C13.0631 14.8536 12.2141 15.3657 11.2769 15.6858C11.5457 15.3605 11.8005 14.9792 12.0354 14.5465ZM12.7865 12.7499C13.1064 11.7263 13.2946 10.6105 13.3351 9.46875H16.0465C15.9462 10.9923 15.3611 12.3856 14.4436 13.4948C13.9344 13.2028 13.3768 12.953 12.7865 12.7499ZM13.3351 8.53125C13.2946 7.3894 13.1064 6.27368 12.7865 5.25012C13.3768 5.047 13.9344 4.79724 14.4436 4.50525C15.3611 5.61438 15.9462 7.00769 16.0465 8.53125H13.3351Z" stroke-width="0.2"></path>
                </svg>
                English
            </li>
        </ul>
    </div>
    <div class="mobile-nav-overlay d-none"></div>
</nav>
<!-- Hero section -->

<section class="hero d-flex justify-content-start ps-md-5 px-2">
    <div class="content text-white d-flex flex-column justify-content-center align-items-center align-items-md-start text-center text-md-start">
        <h1>Find the perfect <span class="fst-italic fw-normal">freelance</span> services for your business</h1>
        <div class="input-group fw-semibold w-100 mx-auto d-flex justify-content-center justify-content-md-start" style="position: relative; z-index: 1;">
            <input class="border-0 px-3 w-75" style="border-radius: 5px 0 0 5px;" placeholder='Try "building mobile app"' type="text" name="search" id="search">
            <input class="border-0 px-4 text-white" style="background-color: var(--primary--color-p); border-radius: 0 5px 5px 0;" type="button" value="Search">
        </div>
        <div class="tag-group d-flex mt-4 align-items-center justify-content-center ">
            <div class="fw-semibold align-middle">Popular: </div>
            <div class="d-flex flex-wrap text-center align-items-center fw-semibold">
                <span class="border border-1 rounded-5 px-2 py-1 mx-1 mt-1">Website Design</span>
                <span class="border border-1 rounded-5 px-2 py-1 mx-1 mt-1">Wordpress</span>
                <span class="border border-1 rounded-5 px-2 py-1 mx-1 mt-1">Logo Design</span>
                <span class="border border-1 rounded-5 px-2 py-1 mx-1 mt-1">Video Editing</span>
            </div>
        </div>
    </div>
</section>
<!-- <section class="clients bg-secondary bg-opacity-10" id="clients-container">
    </section> -->
</header>
<div class="container">
    <div class="container-fluid" style="margin-top: 30px;
    margin-bottom: 40px;">
        <div class="d-flex justify-content-center align-items-center " style="column-gap: 34px;">
            <div> <span class="justify-content-center">Trusted by:</span> </div>
            <div><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/meta.12b5e5c.png" alt="" srcset=""></div>
            <div><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/google.61e78c8.png" alt="" srcset=""></div>
            <div><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/netflix.96c5e3f.png" alt="" srcset=""></div>
            <div><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/pandg.0f4cfc2.png" alt="" srcset=""></div>
        </div>
    </div>
</div>

<main>
    <!-- Popular Services -->
    <section class="popular-services py-5 px-5">
        <span class="slider-left-arrow" id="slider-left-arrow">&#8249;</span>
        <div class="my-5 row gx-4 " id="services-slider-wrapper" style="overflow-x: auto; scroll-behavior: smooth;">

        </div>
        <span class="slider-right-arrow" id="slider-right-arrow">&rsaquo;</span>
    </section>
    <!-- Our Qualities -->
    <section class="our-qlts py-5 px-3 px-sm-4 px-md-5" style="background-color: #f1fdf7;">
        <div class="my-5 row align-items-center">
            <div class="qlts-content col-md-5 col-12">
                <h1 style="font-size: 2.1rem;" class="mb-4">A whole world of freelance talent at your fingertips</h1>
                <ul class="d-flex flex-column">
                    <li>
                        <div>
                            <img src="./assets/svg/tick.svg" alt="success">
                            <span style="font-size: 1.2rem;" class="fw-semibold ms-1">The best for every budget</span>
                        </div>
                        <p class="text-muted" style="font-size: 1.2rem;">Find high-quality services at every price
                            point. No hourly
                            rates, just
                            project-based
                            pricing.</p>
                    </li>
                    <li>
                        <div>
                            <img src="./assets/svg/tick.svg" alt="success">
                            <span style="font-size: 1.2rem;" class="fw-semibold ms-1">Quality work done quickly</span>
                        </div>
                        <p class="text-muted" style="font-size: 1.2rem;">Find the right freelancer to begin working on
                            your project
                            within minutes.</p>
                    </li>
                    <li>
                        <div>
                            <img src="./assets/svg/tick.svg" alt="success">
                            <span style="font-size: 1.2rem;" class="fw-semibold ms-1">Protected payments, every
                                time</span>
                        </div>
                        <p class="text-muted" style="font-size: 1.2rem;">Always know what you'll pay upfront. Your
                            payment isn't
                            released until you approve
                            the
                            work.</p>
                    </li>
                    <li>
                        <div>
                            <img src="./assets/svg/tick.svg" alt="success">
                            <span style="font-size: 1.2rem;" class="fw-semibold ms-1">24/7 support</span>
                        </div>
                        <p class="text-muted" style="font-size: 1.2rem;">Questions? Our round-the-clock support team is
                            available to
                            help anytime, anywhere.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-1 col-12"></div>
            <div class="qlts-video-wrapper col-md-6 col-12">
                <picture class="w-100 qlts-video-thumb">
                    <img class="w-100" style="cursor: pointer;" src="./assets/img/qualities.png" alt="Qualities">
                </picture>
            </div>
        </div>
    </section>
    <!-- Explore -->
    <section class="explore py-5 px-3 px-sm-4 px-md-5" id="explore">
        <h1 class="mt-5" style="font-size: 2.1rem;">Explore the marketplace</h1>
    </section>
    <!-- Fiverr business -->
    <section class="fvr-busns py-5 px-3 px-sm-4 px-md-5 text-white" style="background-color: #0d084d;">
        <div class="my-5 row align-items-center">
            <div class="fvr-busns-content col-md-5 col-12">
                <small>
                    <i>
                        <img src="./assets/svg/fiverr-business.svg" alt="fiverr business">
                    </i>
                    <span class="bg-primary rounded-5 px-2 py-1" style="font-size: 10px;">NEW</span>
                </small>
                <h1 style="font-size: 2.1rem;" class="my-4">A business solution designed for <span class="fst-italic fw-normal">teams</span>
                </h1>
                <p class="fs-5 ">Upgrade to a curated experience packed with tools and benefits, dedicated to businesses
                </p>
                <ul class="d-flex flex-column">
                    <li class="d-flex my-1 align-items-start">
                        <img src="./assets/svg/tick.svg" alt="success">
                        <p style="font-size: 1.1rem;" class="ms-3">Connect to freelancers with proven business
                            experience</p>
                    </li>
                    <li class="d-flex my-1 align-items-start">
                        <img src="./assets/svg/tick.svg" alt="success">
                        <p style="font-size: 1.1rem;" class="ms-3">Get matched with the perfect talent by a customer
                            success
                            manager</p>
                    </li>
                    <li class="d-flex my-1 align-items-start">
                        <img src="./assets/svg/tick.svg" alt="success">
                        <p style="font-size: 1.1rem;" class="ms-3">Manage teamwork and boost productivity with one
                            powerful
                            workspace</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-1 col-12"></div>
            <div class="fvr-busns-img-wrapper col-md-6 col-12">
                <picture class="w-100 fvr-busns-img-thumb">
                    <img class="w-100" src="./assets/img/business.png" alt="Fiverr Business">
                </picture>
            </div>
        </div>
    </section>
    <!-- CTA logo maker -->
    <section class="cta-logo py-5 px-3 px-sm-4 px-md-5">
        <div class="cta-logo-bg row px-3 py-5 p-sm-5" style="background-color: #446ee7;">
            <div class="content text-white col-12 col-md-5">
                <small>
                    <img src="./assets/svg/logomaker.svg" style="height: 25px;" alt="fiverr logo maker">
                </small>
                <h1 style="font-size: 2.1rem;" class="my-2">Make an incredible logo <span class="fst-italic fw-normal">in
                        minutes</span>
                </h1>
                <p style="font-size: 1.1rem;">Pre-designed by top talent. Just add your touch.</p>
                <button class="btn bg-white text-primary fw-normal px-4">Try Fiverr Logo Maker</button>
            </div>
            <div class="cta-logo-img-wrapper col-12 col-md-7" style="height: 150px;">
            </div>
        </div>
    </section>
    <!-- Fiverr guides -->
    <section class="fvr-guides py-5 px-3 px-sm-4 px-md-5">
        <div class="guides-wrapper">
            <div class="guides-head-wrapper mt-2 mb-4 d-flex justify-content-between align-items-center w-100">
                <h1 style="font-size: 2.1rem;" class="my-2">Fiverr guides</h1>
                <a href="#">See More Guides</a>
            </div>
            <div class="guides-posts d-flex flex-wrap justify-content-xl-between" style="gap: 10px;">
                <div class="guide-post" style="width: 390px; max-width: 100%; cursor: pointer;">
                    <img src="./assets/img/guide-start-online-business.png" style="max-width: 100%;" alt="create a logo">
                    <h6 class="mt-3 mb-0 fw-semibold" style="font-size: 1.1rem;">Start an online business and work from
                        home</h6>
                    <p class="text-muted" style="font-size: 1.05rem;">A complete guide to starting a small business
                        online</p>
                </div>
                <div class="guide-post" style="width: 390px; max-width: 100%; cursor: pointer;">
                    <img src="./assets/img/guide-digital-marketing.png" style="max-width: 100%;" alt="create a logo">
                    <h6 class="mt-3 mb-0 fw-semibold" style="font-size: 1.1rem;">Digital marketing made easy</h6>
                    <p class="text-muted" style="font-size: 1.05rem;">A practical guide to understand what is digital
                        marketing</p>
                </div>
                <div class="guide-post" style="width: 390px; max-width: 100%; cursor: pointer;">
                    <img src="./assets/img/guide-create-a-logo.png" style="max-width: 100%;" alt="create a logo">
                    <h6 class="mt-3 mb-0 fw-semibold" style="font-size: 1.1rem;">Create a logo for your business</h6>
                    <p class="text-muted" style="font-size: 1.05rem;">A step-by-step guide to create a memorable
                        business logo</p>
                </div>
            </div>
        </div>
    </section>
</main>



<?php
include('./include/footer.php');
?>