@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        <i class="fa fa-external-link-square fa-fw"></i>Manajemen Departemen
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-university"></i> HR Rekruitmen</a></li>
        <li class="active">Departemen</li>
      </ol>
    </section>
    @yield('action-content')
    
  </div>
@endsection
