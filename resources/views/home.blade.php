@extends('layouts.main_layout')
@section('content')
@section('page_title', 'Página inicial')
<!-- ====================================== Preloader ===================================== -->
@include('layouts.wrapper')
<!-- ====================================== Preloader End ===================================== -->
<!-- ====================================== Background Animation ===================================== -->
<div id="particles-js"></div>
<!-- ====================================== Background Animation End ===================================== -->
<!-- ====================================== Cursor ===================================== -->
<div class="cursor"></div>
<!-- ====================================== Cursor End ===================================== -->
<!-- ====================================== Dark Light Mode ===================================== -->
@include('layouts.dark_toggle')
<!-- ====================================== Dark Light Mode End===================================== -->
@include('layouts.header')
<div class="all_page" id="page">
    @include('layouts.card_section')
    <!-- ======================================= Social Media Right Side  ================================== -->
    @include('layouts.social_media_main')
    <!-- ======================================= Social Media Right Side End ================================== -->
    <!-- ======================================= Portfolio PopUp Window  ================================== -->
    @include('layouts.overlay')
    <!-- ======================================= Portfolio PopUp Window End ================================== -->
    <!-- ======================================= Blog PopUp Window  ================================== -->
    @include('layouts.modal-wrapper')
</div>
<!-- ======================================= Portfolio gallery ================================== -->
@include('layouts.overlay_gallery')
@endsection
