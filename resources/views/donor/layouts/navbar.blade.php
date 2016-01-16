@extends('layouts.navbar')

@section('sidemenu')
<li class="sidebar-search">
	<div class="input-group custom-search-form">
		<input type="text" class="form-control" placeholder="Search...">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">
				<i class="fa fa-search"></i>
			</button>
		</span>
	</div>
	<!-- /input-group -->
</li>
<li>
	<a href="{{ route('Donor::dashboard') }}">
		<i class="fa fa-dashboard fa-fw"></i> Ballina
	</a>

	@if( Request::is('donor/dashboard') )
		<ul class="nav nav-second-level collapse in" aria-expanded="true">
			<li v-show="selected.length > 1">
				<a href="#"><i class="fa fa-file-pdf-o"></i> Shkarko PDF</a>
			</li>
	
			<li v-show="selected.length > 1">
				<a href="#"><i class="fa fa-file-text-o"></i> Shkaro Raportin Financiar</a>
			</li>
		</ul>
	@endif
</li>
<li>
	<a href="{{ route('Donor::orphans') }}">
		<i class="fa fa-users fa-fw"></i> Lista e jetimëve
	</a>

	@if( Request::is('donor/orphans') )
		<ul class="nav nav-second-level collapse in" aria-expanded="true">
			<li v-show="selected.length > 0">
				<a href="#"><i class="fa fa-file-pdf-o"></i> Shkarko PDF</a>
			</li>
	
			<li v-show="selected.length > 0">
				<a href="#"><i class="fa fa-file-text-o"></i> Shkaro Raportin Financiar</a>
			</li>
		</ul>
	@endif
</li>
<li>
	<a href="#">
		<i class="fa fa-envelope fa-fw"></i> Dërgo email
	</a>
</li>
<li>
	<a href="{{ route('Auth::logout') }}"><i class="fa fa-sign-out fa-fw"></i> Çkyçu</a>
</li>
@endsection