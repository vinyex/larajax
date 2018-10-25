@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        <i class="fa fa-industry fa-fw"></i>Manajemen User
      </h1>
      <ol class="breadcrumb">
        <li class="active">Manajemen User</li>
      </ol>
    </section>
    @yield('action-content')

  </div>
@endsection
