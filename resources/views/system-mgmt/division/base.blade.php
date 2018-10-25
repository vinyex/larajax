@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        <i class="fa fa-laptop fa-fw"></i>Manajemen Divisi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-university"></i> HR Rekruitmen</a></li>
        <li class="active">Divisi</li>
      </ol>
    </section>
    @yield('action-content')

  </div>
@endsection
