<?php $page='Become A Member Today'; include('./config/db.php');

if (!(isset($_SESSION['user_email']))) {
  header('location:../sign-in');
  
}


 ?>
<!doctype html>
<html lang="en">
<!-- Copied from https://dashkit.goodthemes.co/account-members.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css">
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
    
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- <script>tinymce.init({selector:'textarea'});</script> -->
    <style>
        body {
        display: none;
      }

    </style>
    <!-- Title -->
    <title>Dashkit</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="gtag/js.js?id=UA-156446909-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-1");</script>
</head>

<body>
    <!-- NAVIGATION
    ================================================== -->
    <?php include ('include/header.php'); ?>
    <nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="...">
            </a>
            <!-- User (xs) -->
            <div class="navbar-user d-md-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarSmallIcon">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarSmallCollapse">
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Divider -->
                <hr class="navbar-divider d-none d-md-block mt-0 mb-3">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle active" id="sidebarSmallDashboards" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Dashboards">
                            <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Dashboards</h6>
                            </li>
                            <li>
                                <a href="index.html" class="dropdown-item active">
                                    Default
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-project-management.html" class="dropdown-item ">
                                    Project Management
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-ecommerce.html" class="dropdown-item ">
                                    E-Commerce
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle " id="sidebarSmallPages" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Pages</h6>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallProfile">
                                    <a class="dropdown-item " href="profile-posts.html">
                                        Posts
                                    </a>
                                    <a class="dropdown-item " href="profile-groups.html">
                                        Groups
                                    </a>
                                    <a class="dropdown-item " href="profile-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="profile-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="profile-subscribers.html">
                                        Subscribers
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Project
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallProject">
                                    <a class="dropdown-item " href="project-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="project-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="project-reports.html">
                                        Reports
                                    </a>
                                    <a class="dropdown-item " href="project-new.html">
                                        New project
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Team
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallTeam">
                                    <a class="dropdown-item " href="team-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="team-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="team-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="team-new.html">
                                        New team
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Feed
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallFeed">
                                    <a class="dropdown-item " href="feed.html">
                                        Platform
                                    </a>
                                    <a class="dropdown-item " href="social-feed.html">
                                        Social
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallAccount">
                                    <a class="dropdown-item " href="account-general.html">
                                        General
                                    </a>
                                    <a class="dropdown-item " href="account-billing.html">
                                        Billing
                                    </a>
                                    <a class="dropdown-item " href="account-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="account-security.html">
                                        Security
                                    </a>
                                    <a class="dropdown-item " href="account-notifications.html">
                                        Notifications
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallCrm" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CRM
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallCrm">
                                    <a class="dropdown-item " href="crm-contacts.html">
                                        Contacts
                                    </a>
                                    <a class="dropdown-item " href="crm-companies.html">
                                        Companies
                                    </a>
                                    <a class="dropdown-item " href="crm-deals.html">
                                        Deals
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item " href="wizard.html">
                                    Wizard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="kanban.html">
                                    Kanban
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="orders.html">
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="invoice.html">
                                    Invoice
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="pricing.html">
                                    Pricing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Widgets">
                        <a class="nav-link " href="widgets.html">
                            <i class="fe fe-grid"></i> <span class="d-md-none">Widgets</span>
                        </a>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" id="sidebarSmallAuth" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-user"></i> <span class="d-md-none">Auth</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallAuth">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Authentication</h6>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign in
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallSignIn">
                                    <a class="dropdown-item" href="sign-in-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-in-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="./sign-in-basics.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign up
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallSignUp">
                                    <a class="dropdown-item" href="sign-up-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-up-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="sign-up.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Password reset
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallPassword">
                                    <a class="dropdown-item" href="password-reset-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="password-reset-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="password-reset.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Error
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallError">
                                    <a class="dropdown-item" href="error-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="error.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                            <span class="fe fe-bell"></span> Notifications
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-3">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle " id="sidebarSmallBasics" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Basics">
                            <i class="fe fe-clipboard"></i> <span class="d-md-none">Basics</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallBasics">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Basics</h6>
                            </li>
                            <li>
                                <a href="docs/getting-started.html" class="dropdown-item ">
                                    Getting Started
                                </a>
                            </li>
                            <li>
                                <a href="docs/design-file.html" class="dropdown-item ">
                                    Design File
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="docs/components.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                            <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="docs/changelog.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                            <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge badge-primary ml-auto d-md-none">v1.6.0</span>
                        </a>
                    </li>
                </ul>
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- Customize -->
                <div class="mb-4" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
                    <a href="#modalDemo" class="btn btn-block btn-primary" data-toggle="modal">
                        <i class="fe fe-sliders"></i> <span class="d-md-none ml-2">Customize</span>
                    </a>
                </div>
                <!-- User (md) -->
                <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">
                    <!-- Icon -->
                    <a href="#sidebarModalSearch" class="navbar-user-link mb-3" data-toggle="modal">
                        <span class="icon">
                            <i class="fe fe-search"></i>
                        </span>
                    </a>
                    <!-- Icon -->
                    <a href="#sidebarModalActivity" class="navbar-user-link mb-3" data-toggle="modal">
                        <span class="icon">
                            <i class="fe fe-bell"></i>
                        </span>
                    </a>
                    <!-- Dropup -->
                    <div class="dropright">
                        <!-- Toggle -->
                        <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-online">
                                <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                            </div>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                            <a href="profile-posts.html" class="dropdown-item">Profile</a>
                            <hr class="dropdown-divider">
                            <a href="sign-in.html" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div> <!-- / .navbar-collapse -->
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg " id="topnav">
        <div class="container">
            <!-- Toggler -->
            <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand mr-auto" href="index.html">
                <img src="assets/img/logo.svg" alt="..." class="navbar-brand-img">
            </a>
            <!-- Form -->
            <form class="form-inline mr-4 d-none d-lg-flex">
                <div class="input-group input-group-rounded input-group-merge" data-list='{"valueNames": ["name"]}'>
                    <!-- Input -->
                    <input type="search" class="form-control form-control-prepended  dropdown-toggle list-search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-search"></i>
                        </div>
                    </div>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-card">
                        <div class="card-body">
                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-focus list my-n3">
                                <a class="list-group-item" href="team-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Airbnb
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="team-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Medium Corporation
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Homepage Redesign
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Travels & Time
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Safari Exploration
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="profile-posts.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Dianna Smiley
                                            </h4>
                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-success">●</span> Online
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="profile-posts.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Ab Hadley
                                            </h4>
                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-danger">●</span> Offline
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                            </div>
                        </div>
                    </div> <!-- / .dropdown-menu -->
                </div>
            </form>
            <!-- User -->
            <div class="navbar-user">
                <!-- Dropdown -->
                <div class="dropdown mr-4 d-none d-lg-flex">
                    <!-- Toggle -->
                    <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon active">
                            <i class="fe fe-bell"></i>
                        </span>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                        <div class="card-header">
                            <!-- Title -->
                            <h5 class="card-header-title">
                                Notifications
                            </h5>
                            <!-- Link -->
                            <a href="#!" class="small">
                                View all
                            </a>
                        </div> <!-- / .card-header -->
                        <div class="card-body">
                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-activity my-n3">
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ab Hadley</strong> reacted to your post with a 😍
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Daniela Dewitt</strong> subscribed to you.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ryu Duke</strong> reacted to your post with a 😍
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Grace Gross</strong> subscribed to you.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                            </div>
                        </div>
                    </div> <!-- / .dropdown-menu -->
                </div>
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="account-general.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse mr-lg-auto order-lg-first" id="navbar">
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
                </form>
                <!-- Navigation -->
                <ul class="navbar-nav mr-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashboards
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                            <li>
                                <a class="dropdown-item active" href="index.html">
                                    Default
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="dashboard-project-management.html">
                                    Project Management
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="dashboard-ecommerce.html">
                                    E-Commerce
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavPages">
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavProfile">
                                    <a class="dropdown-item " href="profile-posts.html">
                                        Posts
                                    </a>
                                    <a class="dropdown-item " href="profile-groups.html">
                                        Groups
                                    </a>
                                    <a class="dropdown-item " href="profile-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="profile-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="profile-subscribers.html">
                                        Subscribers
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Project
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavProject">
                                    <a class="dropdown-item " href="project-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="project-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="project-reports.html">
                                        Reports
                                    </a>
                                    <a class="dropdown-item " href="project-new.html">
                                        New project
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Team
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavTeam">
                                    <a class="dropdown-item " href="team-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="team-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="team-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="team-new.html">
                                        New team
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Feed
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavFeed">
                                    <a class="dropdown-item " href="feed.html">
                                        Platform
                                    </a>
                                    <a class="dropdown-item " href="social-feed.html">
                                        Social
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavAccount">
                                    <a class="dropdown-item " href="account-general.html">
                                        General
                                    </a>
                                    <a class="dropdown-item " href="account-billing.html">
                                        Billing
                                    </a>
                                    <a class="dropdown-item " href="account-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="account-security.html">
                                        Security
                                    </a>
                                    <a class="dropdown-item " href="account-notifications.html">
                                        Notifications
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavCrm" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CRM
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavCrm">
                                    <a class="dropdown-item " href="crm-contacts.html">
                                        Contacts
                                    </a>
                                    <a class="dropdown-item " href="crm-companies.html">
                                        Companies
                                    </a>
                                    <a class="dropdown-item " href="crm-deals.html">
                                        Deals
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item " href="wizard.html">
                                    Wizard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="kanban.html">
                                    Kanban
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="orders.html">
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="invoice.html">
                                    Invoice
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="pricing.html">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="widgets.html">
                                    Widgets
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Auth
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign in
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                                    <a class="dropdown-item" href="sign-in-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-in-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="./sign-in-basics.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign up
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                                    <a class="dropdown-item" href="sign-up-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-up-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="sign-up.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Password reset
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavPassword">
                                    <a class="dropdown-item" href="password-reset-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="password-reset-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="password-reset.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Error
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavError">
                                    <a class="dropdown-item" href="error-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="error.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Docs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavBasics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Basics
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavBasics">
                                    <a class="dropdown-item " href="docs/getting-started.html">
                                        Getting Started
                                    </a>
                                    <a class="dropdown-item " href="docs/design-file.html">
                                        Design File
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item " href="docs/components.html">
                                    Components
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="docs/changelog.html">
                                    Changelog
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modalDemo" data-toggle="modal">
                            Customize
                        </a>
                    </li>
                </ul>
            </div>
        </div> <!-- / .container -->
    </nav>
    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
            <div class="container-fluid">
                <!-- Form -->
                <form class="form-inline mr-4 d-none d-md-flex">
                    <div class="input-group input-group-flush input-group-merge" data-list='{"valueNames": ["name"]}'>
                        <!-- Input -->
                        <input type="search" class="form-control form-control-prepended dropdown-toggle list-search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                        <!-- Prepend -->
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fe fe-search"></i>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-card">
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush list-group-focus list my-n3">
                                    <a class="list-group-item" href="team-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Airbnb
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 2hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="team-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Medium Corporation
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 2hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="project-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Homepage Redesign
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="project-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Travels & Time
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="project-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Safari Exploration
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="profile-posts.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Dianna Smiley
                                                </h4>
                                                <!-- Status -->
                                                <p class="text-body small mb-0"><span class="text-success">●</span> Online</p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="profile-posts.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Ab Hadley
                                                </h4>
                                                <!-- Status -->
                                                <p class="text-body small mb-0"><span class="text-danger">●</span> Offline</p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                </div>
                            </div>
                        </div> <!-- / .dropdown-menu -->
                    </div>
                </form>
                <!-- User -->
                <div class="navbar-user">
                    <!-- Dropdown -->
                    <div class="dropdown mr-4 d-none d-md-flex">
                        <!-- Toggle -->
                        <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon active">
                                <i class="fe fe-bell"></i>
                            </span>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                            <div class="card-header">
                                <!-- Title -->
                                <h5 class="card-header-title">
                                    Notifications
                                </h5>
                                <!-- Link -->
                                <a href="#!" class="small">
                                    View all
                                </a>
                            </div> <!-- / .card-header -->
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush list-group-activity my-n3">
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess,
                                                    and 3 others.
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Ab Hadley</strong> reacted to your post with a 😍
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Adolfo Hess</strong> commented
                                                    <blockquote class="mb-0">
                                                        “I don’t think this really makes sense to do without approval from Johnathan
                                                        since he’s the one...”
                                                    </blockquote>
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small"><strong>Daniela Dewitt</strong> subscribed to you.</div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Ryu Duke</strong> reacted to your post with a 😍
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Glen Rouse</strong> commented
                                                    <blockquote class="mb-0">
                                                        “I don’t think this really makes sense to do without approval from Johnathan
                                                        since he’s the one...”
                                                    </blockquote>
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small"><strong>Grace Gross</strong> subscribed to you.</div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                </div>
                            </div>
                        </div> <!-- / .dropdown-menu -->
                    </div>
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle -->
                        <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile-posts.html" class="dropdown-item">Profile</a>
                            <a href="account-general.html" class="dropdown-item">Settings</a>
                            <hr class="dropdown-divider">
                            <a href="sign-in.html" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle" style="color: #5B2C6F">
                                        Overview
                                    </h6>
                                    <!-- Title -->
                                    <h1 class="header-title" style="color: #5B2C6F">
                                        Open ticket
                                    </h1>
                                </div>
                            </div> <!-- / .row -->
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Nav -->
                                    <ul class="nav nav-tabs nav-overflow header-tabs">
                                        <li class="nav-item">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="row p-2">
                                                    <div class="col-lg-6 form-group">
                                                        <label>Name</label>
                                                        <input required type="text" class="form-control" name="fullname" disabled value="<?php if (isset($_SESSION['user_email'])) {
                                                          $user=$_SESSION['user_email'];

                                                        $sql = " SELECT * FROM customers where email='".$user."'";
                                                    $result = $con->query($sql);
                                                        while($row=$result->fetch_assoc()){
                                                        $fname = $row['fname'];
                                                        $lname = $row['lname'];
                                                      
                                                        echo " $fname"." " . " $lname"; } } ?>">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label>Email</label>
                                                              <input required type="email" class="form-control" name="email" disabled value="<?php if (isset($_SESSION['user_email'])) {
                                                          $user=$_SESSION['user_email'];

                                                        $sql = " SELECT * FROM customers where email='".$user."'";
                                                    $result = $con->query($sql);                
                                                    while($row=$result->fetch_assoc()){
                                                        $email = $row['email'];
                                                      
                                                        echo " $email"; } } ?>">
                                                    </div>
                                                    <div class="col-lg-12 form-group">
                                                        <label>Subject</label>
                                                        <input required type="text" class="form-control" name="subject" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <label for="exampleFormControlTextarea1">Message</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="col-lg-12 form-group">
                                                        <label for="exampleFormControlFile1">
                                                            Attachment
                                                        </label>
                                                        <input accept="image/*" type="file" name="myfile" class="form-control-file" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <hr>
                                            <div class="col-lg-12 form-group">
                                                <!-- <button class="btn btn-lg mb-3 text-white" type="submit" name="submit" style="background-color: #B7950B">
                                                    <span>Submit</span>
                                                </button> -->
                                                <button type="submit" class="btn text-white mb-2" name="submit" style="background-color: #B7950B">Submit</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->
                <br>
            </div>
        </div> <!-- / .row -->
    </div>
    </div> <!-- / .main-content -->
   
    <?php include('include/footer.php');



     if (isset($_POST['submit'])) {

          $subject=$_POST['subject'];
          $message=$_POST['message'];

          $unique_no="0123456789abcdefghijklmnopqrstuvwxyz";
          $unique_no=str_shuffle($unique_no);
          $unique_no=substr($unique_no, 0, 10);
      
          @$name = $_FILES['myfile'] ['name'];
          @$tmp_name = $_FILES['myfile'] ['tmp_name'];
          $extension = substr($name, strpos($name, '.') +1 );
          @$type = $_FILES['myfile'] ['type'];
          @$size = $_FILES['myfile'] ['size'];
          $max_size = 5000000;
      
        
        $location='img3/';    
        move_uploaded_file($tmp_name, $location.$name );

          $user=$_SESSION['user_email'];
          $get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");

          $row_user=mysqli_fetch_array($get_user); 
          $sql = mysqli_query($con, "INSERT INTO `support_ticket`(`id`, `user_id`, `subject`, `text`, `img`, `unique_id`, `date_created`, `status`, `is_active`) VALUES (NULL,'$row_user[id]','$subject','$message','$name','$unique_no','$date','0','0')");

          if($sql){
          echo "<script>Swal.fire({
                                type: 'success',
                                title: 'Ticket submitted',
                                text: 'You will get a respond shortly',
                                AllowEscapeKey: false,
                                AllowOutsideClick: false,
                                AllowConfirmButton: true
                            })</script>";
        }else{
          echo "<script>Swal.fire({
                                type: 'error',
                                title: 'Opps!',
                                text: 'There was error submitting ticket',
                                AllowEscapeKey: false,
                                AllowOutsideClick: false,
                                AllowConfirmButton: true
                            })</script>";
        }
          
    } 


     ?>
</body>
<!-- Copied from https://dashkit.goodthemes.co/account-members.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->

</html>