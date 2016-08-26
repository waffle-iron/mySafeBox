@extends('layouts.main')

<!-- Add a subtitle page -->
@section('title', 'Page Subtitle')

<!-- Nav color -->
@section('bodyClass', 'skin-red sidebar-mini')

<!-- Menu active for this page -->
@section('XXXXXX_menu', 'active')

@section('styles')
	@parent
	<!-- Add new styles here -->
@endsection

@section('content')
	<!-- Add the main page content here -->
@endsection

@section('scripts')
    @parent
    <!-- Add new scripts here -->
@endsection
