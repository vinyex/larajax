@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-building-o fa-fw"></i>Manajemen Kota
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kewarganegaraan</a></li>
        <li class="active">Kota</li>
      </ol>
    </section>
    @yield('action-content')
    
  </div>
@endsection
