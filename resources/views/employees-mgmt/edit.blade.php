@extends('employees-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Pegawai</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.update', ['id' => $employee->id]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                            <label for="nik" class="col-md-4 control-label">Nomor Induk Karyawan</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ old('nik') }}" required autofocus>

                                @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                            <label for="nama_lengkap" class="col-md-4 control-label">Nama Lengkap</label>

                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>

                                @if ($errors->has('nama_lengkap'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Alamat E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" placeholder="Laki - laki / Perempuan" required>

                                @if ($errors->has('jenis_kelamin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Warga Negara</label>
                            <div class="col-md-6">
                                <select class="form-control js-country" name="country_id">
                                    <option value="-1">Pilih Negara Lahir Anda</option>
                                    @foreach ($countries as $country)
                                        <option {{$employee->country_id == $country->id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Provinsi</label>
                            <div class="col-md-6">
                                <select class="form-control js-states" name="state_id">
                                    <option value="-1">Pilih Provinsi Anda</option>
                                    @foreach ($states as $state)
                                        <option {{$employee->state_id == $state->id ? 'selected' : ''}} value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kota</label>
                            <div class="col-md-6">
                                <select class="form-control js-cities" name="city_id">
                                    <option value="-1">Pilih Kota Lahir Anda</option>
                                    @foreach ($cities as $city)
                                        <option {{$employee->city_id == $city->id ? 'selected' : ''}} value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }}">
                            <label for="pendidikan" class="col-md-4 control-label">Pendidikan Terakhir</label>

                            <div class="col-md-6">
                                <input id="pendidikan" type="text" class="form-control" name="pendidikan" value="{{ old('pendidikan') }}" required>

                                @if ($errors->has('pendidikan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pendidikan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                            <label for="agama" class="col-md-4 control-label">Agama</label>

                            <div class="col-md-6">
                                <input id="agama" type="text" class="form-control" name="agama" value="{{ old('agama') }}" required>

                                @if ($errors->has('agama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status Keluarga</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}" required>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat_domisili') ? ' has-error' : '' }}">
                            <label for="alamat_domisili" class="col-md-4 control-label">Alamat Domisili</label>

                            <div class="col-md-6">
                                <input id="alamat_domisili" type="text" class="form-control" name="alamat_domisili" value="{{ old('alamat_domisili') }}" required>

                                @if ($errors->has('alamat_domisili'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat_domisili') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat_ktp') ? ' has-error' : '' }}">
                            <label for="alamat_ktp" class="col-md-4 control-label">Alamat KTP</label>

                            <div class="col-md-6">
                                <input id="alamat_ktp" type="text" class="form-control" name="alamat_ktp" value="{{ old('alamat_ktp') }}" required>

                                @if ($errors->has('alamat_ktp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat_ktp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nohp_pribadi') ? ' has-error' : '' }}">
                            <label for="nohp_pribadi" class="col-md-4 control-label">Nomor HP Pribadi</label>

                            <div class="col-md-6">
                                <input id="nohp_pribadi" type="text" class="form-control" name="nohp_pribadi" value="{{ old('nohp_pribadi') }}" required>

                                @if ($errors->has('nohp_pribadi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nohp_pribadi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nohp_keluarga') ? ' has-error' : '' }}">
                            <label for="nohp_keluarga" class="col-md-4 control-label">Nomor HP Keluarga</label>

                            <div class="col-md-6">
                                <input id="nohp_keluarga" type="text" class="form-control" name="nohp_keluarga" value="{{ old('nohp_keluarga') }}" required>

                                @if ($errors->has('nohp_keluarga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nohp_keluarga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_kk') ? ' has-error' : '' }}">
                            <label for="no_kk" class="col-md-4 control-label">Nomor KK</label>

                            <div class="col-md-6">
                                <input id="no_kk" type="text" class="form-control" name="no_kk" value="{{ old('no_kk') }}" required>

                                @if ($errors->has('no_kk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_kk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_ktp') ? ' has-error' : '' }}">
                            <label for="no_ktp" class="col-md-4 control-label">Nomor KTP</label>

                            <div class="col-md-6">
                                <input id="no_ktp" type="text" class="form-control" name="no_ktp" value="{{ old('no_ktp') }}" required>

                                @if ($errors->has('no_ktp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_ktp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Umur</label>

                            <div class="col-md-6">
                                <input id="umur" type="text" class="form-control" name="umur" value="{{ old('umur') }}" required>

                                @if ($errors->has('umur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('umur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('birthdate') }}" name="birthdate" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Tanggal Bergabung</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('date_hired') }}" name="date_hired" class="form-control pull-right" id="hiredDate" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('division_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Divisi</label>
                            <div class="col-md-6">
                                <select class="form-control" name="division_id">
                                    @foreach ($divisions as $division)
                                        <option {{$employee->division_id == $division->id ? 'selected' : ''}} value="{{$division->id}}">{{$division->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Foto Profil</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="picture" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
