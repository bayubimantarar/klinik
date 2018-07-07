<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-archive fa-fw"></i> Pendaftaran<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('pendaftaran.create') }}"><i class="fa fa-plus"></i> Daftar pasien baru</a>
                    </li>
                    <li>
                        <a href="{{ route('pendaftaran.index') }}"><i class="fa fa-file-o"></i> Data Pendaftaran</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Pasien<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('pasien.create') }}"><i class="fa fa-plus"></i> Tambah Data Pasien</a>
                    </li>
                    <li>
                        <a href="{{ route('pasien.index') }}"><i class="fa fa-file-o"></i> Data Pasien</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
