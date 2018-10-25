@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
          <i class="fa fa-users fa-fw"></i>Manajemen Pegawai
      </h1>
      <ol class="breadcrumb">
        <li class="active">Manajemen Pegawai</li>
      </ol>
    </section>
    @yield('action-content')
  </div>
@endsection
