@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        <i class="fa fa-flag fa-fw"></i>Manajemen Negara
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kewarganegaraan</a></li>
        <li class="active">Negara</li>
      </ol>
    </section>
    @yield('action-content')

  </div>
@endsection
