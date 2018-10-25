  <aside class="main-sidebar">

    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/img/liam-gallagher-profile.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>



      <ul class="sidebar-menu">

        <li class="active"><a href="/"><i class="fa fa-home fa-fw"></i> <span>Home</span></a></li>
        <li><a href="{{ url('employee-management') }}"><i class="fa fa-book fa-fw"></i> <span>List Pegawai</span></a></li>
        <li><a href="{{ url('system-management/report') }}"><i class="fa fa-file-excel-o fa-fw"></i> <span>Laporan Rekruitmen</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-sort-alpha-asc fa-fw"></i> <span>HR Rekruitmen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/department') }}">Departemen</a></li>
            <li><a href="{{ url('system-management/division') }}">Divisi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-flag fa-fw"></i> <span>Kewarganegaraan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/country') }}">Negara</a></li>
            <li><a href="{{ url('system-management/state') }}">Provinsi</a></li>
            <li><a href="{{ url('system-management/city') }}">Kota</a></li>
          </ul>
        </li>
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user fa-fw"></i> <span>List User</span></a></li>
      </ul>

    </section>

  </aside>
