<?php
    /**
     * Main navbar template.
     * Contains translations, notifications and logo.
     */
?>

<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            TOTP Manager </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{ URL::asset('img/logo.png') }}" width="40px" height="45px"> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
                <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="d-inline-flex mr-0 mr-md-3">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                    </div>
                    <span class="profile-text font-weight-medium d-none d-md-block">English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>English
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-fr"></i>
                        </div>French
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-ae"></i>
                        </div>Arabic
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-ru"></i>
                        </div>Russian
                    </a>
                </div>
            </li>
        </ul>
        <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Search Here">
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    <a class="dropdown-item py-3">
                        <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                            <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                            <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                            <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
