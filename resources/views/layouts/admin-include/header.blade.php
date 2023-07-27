<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Krishna Chikan">
    <meta name="keywords" content="Krishna Chikan">
    <meta name="author" content="Webmingo">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('admin-title')</title>
    <!--  <title>Krishna Chikan | @yield('title')</title> -->


    <!-- BEGIN VENDOR CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/bootstrap4-toggle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/bootstrap-select.css') }}">
    <link rel="stylesheet" type="text/css" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/style.css') }}">
</head>

<body>

    <div class="top-header-sec py-1 bg-light border-bottom mb-2">
        <div class="container-fluid">
            <div class="top-main-header d-flex align-items-center">
                <div class="admin-logo">
                    <img src="{{ asset('public/backend/img/logo.png') }}">
                </div>
                <div class="ml-auto">
                    <div class="btn-group">
                        <button class="btn  bg-transparent p-0 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa-light fa-circle-user"></i> Admin
                        </button>
                        <div class="dropdown-menu keep-open header-dropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa-light fa-power-off"></i>
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
