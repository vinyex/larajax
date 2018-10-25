@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        <i class="fa fa-folder-o fa-fw"></i>Laporan
      </h1>
      <ol class="breadcrumb">
        <li class="active">Laporan</li>
      </ol>
    </section>
    @yield('action-content')

  </div>
@endsection
