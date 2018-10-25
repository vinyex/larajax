@extends('employees-mgmt.base')
@section('action-content')
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">Daftar Pegawai</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('employee-management.create') }}">Tambah Pegawai Baru</a>
        </div>
    </div>
  </div>

  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('employee-management.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['Nama', 'Divisi'],
          'oldVals' => [isset($searchingVals) ? $searchingVals['nama_lengkap'] : '', isset($searchingVals) ? $searchingVals['division_name'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="5%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Foto: activate to sort column descending" aria-sort="ascending">Foto Profil</th>
                <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nik: activate to sort column ascending">NIK</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama: activate to sort column descending" aria-sort="ascending">Nama Lengkap</th>
                <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="JenisKelamin: activate to sort column ascending">Jenis Kelamin</th>
                <th width="10%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="AlamatKTP: activate to sort column ascending">Alamat KTP</th>
                <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="NoHp: activate to sort column ascending">No Hp</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="TanggalBergabung: activate to sort column ascending">Tanggal Bergabung</th>
                <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Division: activate to sort column ascending">Divisi</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr role="row" class="odd">
                  <td><img src="../{{$employee->picture }}" width="50px" height="50px"/></td>
                  <td class="hidden-xs">{{ $employee->nik }}</td>
                  <td class="sorting_1">{{ $employee->nama_lengkap }}</td>
                  <td class="hidden-xs">{{ $employee->jenis_kelamin }}</td>
                  <td class="hidden-xs">{{ $employee->alamat_ktp }}</td>
                  <td class="hidden-xs">{{ $employee->nohp_pribadi }}</td>
                  <td class="hidden-xs">{{ $employee->date_hired }}</td>
                  <td class="hidden-xs">{{ $employee->division_name }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('employee-management.destroy', ['id' => $employee->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('employee-management.edit', ['id' => $employee->id]) }}" class="btn btn-warning col-sm-5 col-xs-5 btn-margin">
                        Update
                        </a>
                         <button type="submit" class="btn btn-danger col-sm-5 col-xs-5 btn-margin">
                          Delete
                        </button>
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <tr role="row">
                  <th width="5%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Foto: activate to sort column descending" aria-sort="ascending">Foto Profil</th>
                  <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nik: activate to sort column ascending">NIK</th>
                  <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama: activate to sort column descending" aria-sort="ascending">Nama Lengkap</th>
                  <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="JenisKelamin: activate to sort column ascending">Jenis Kelamin</th>
                  <th width="10%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="AlamatKTP: activate to sort column ascending">Alamat KTP</th>
                  <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="NoHp: activate to sort column ascending">No Hp</th>
                  <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="TanggalBergabung: activate to sort column ascending">Tanggal Bergabung</th>
                  <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Division: activate to sort column ascending">Divisi</th>
                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                </tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($employees)}} of {{count($employees)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $employees->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
    </section>
    
  </div>
@endsection
