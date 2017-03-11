<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="index,nofollow">
    <meta name="description" content="nBulletin is an application for information and resource sharing especially designed for academic institutes. " />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="keywords" content="academic, nbulletin, institution, education, news, notice, sharing, bulletin," />

    <link rel="icon" href="{{ URL('public/assets/web/favicon.ico') }}">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ URL('public/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL('public/assets/dist/css/AdminLTE.min.css') }}">
     <!-- Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL('public/assets/dist/css/skins/_all-skins.min.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ URL('public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('stylesheets')
  
</head>