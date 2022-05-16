<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request() -> is('kaprodi/kurikulum') ? 'active' : '' }}">
        <a href="/kaprodi/kurikulum">
            <i class="fa fa-list-ul"></i> <span>Kurikulum</span>
        </a>
    </li>
    <li class="{{ request() -> is('kaprodi/profil-lulusan') ? 'active' : '' }}">
        <a href="/kaprodi/profil-lulusan">
            <i class="fa fa-graduation-cap"></i> <span>Profil Lulusan</span>
        </a>
    </li>
    <li class="{{ request() -> is('kaprodi/cpl') ? 'active' : '' }}">
        <a href="/kaprodi/cpl">
            <i class="fa fa-file-text"></i> <span>CPL</span>
        </a>
    </li>
    <li class="{{ request() -> is('pemetaanprofil') ? 'active' : '' }}">
        <a href="/pemetaanprofil">
            <i class="fa fa-th"></i> <span>Pemetaan Profil Lulusan</span>
        </a>
    </li>
    <li class="{{ request() -> is('pemetaancpl') ? 'active' : '' }}">
        <a href="/pemetaancpl">
            <i class="fa fa-th"></i> <span>Pemetaan CPL</span>
        </a>
    </li>
    <li class="{{ request() -> is('matakuliah') ? 'active' : '' }}">
        <a href="/matakuliah">
            <i class="fa fa-book"></i> <span>Mata Kuliah</span>
        </a>
    </li>
    <li class="{{ request() -> is('dosen') ? 'active' : '' }}">
        <a href="/dosen">
            <i class="fa fa-users"></i> <span>Dosen</span>
        </a>
    </li>
    <li class="{{ request() -> is('kaprodi') ? 'active' : '' }}">
        <a href="/kaprodi">
            <i class="fa fa-user"></i> <span>Kaprodi</span>
        </a>
    </li>
    <li class="{{ request()->is('semestergasal', 'semestergenap') ? 'active treeview' : 'treeview' }} " style="height: auto;">
        <a href="#">
            <i class="px-nav-icon fa fa-random"></i> <span>Plotting Dosen</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="">
            <li class="{{ request() -> is('semestergasal') ? 'active' : '' }}"><a href="/semestergasal"><i class="fa fa-circle-o"></i>Semester Gasal</a></li>
            <li class="{{ request() -> is('semestergenap') ? 'active' : '' }}"><a href="/semestergenap"><i class="fa fa-circle-o"></i>Semester Genap</a></li>
        </ul>
    </li>
    <li class="{{ request() -> is('semester') ? 'active' : '' }}">
        <a href="/semester">
            <i class="fa fa-list-ul"></i> <span>Semester</span>
        </a>
    </li>
    <li class="{{ request() -> is('pelaksanaanPerkuliahan') ? 'active' : '' }}">
        <a href="/pelaksanaanPerkuliahan">
            <i class="px-nav-icon fa fa-calendar"></i> <span>Perkuliahan (mhs)</span>
        </a>
    </li>
    <li class="{{ request() -> is('rpkps') ? 'active' : '' }}">
        <a href="/rpkps">
            <i class="fa fa-list-ul"></i> <span>RPKPS</span>
        </a>
    </li>
    <li class="{{ request() -> is('rpkpm') ? 'active' : '' }}">
        <a href="/rpkpm">
            <i class="fa fa-list-ul"></i> <span>RPKPM</span>
        </a>
    </li>
    <li class="{{ request()->is('pelaksanaankuliah', 'laporan') ? 'active treeview' : 'treeview' }} " style="height: auto;">
        <a href="#">
            <i class="px-nav-icon fa fa-calendar"></i> <span>Perkuliahan (dosen)</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="">
            <li class="{{ request() -> is('pelaksanaankuliah') ? 'active' : '' }}"><a href="/pelaksanaankuliah"><i class="fa fa-circle-o"></i>Pelaksanaan</a></li>
            <li class="{{ request() -> is('laporan') ? 'active' : '' }}"><a href="/laporan"><i class="fa fa-circle-o"></i>Laporan</a></li>
        </ul>
    </li>
    <li>
        <a href="/matakuliah">
            <i class="fa fa-gear"></i> <span>Keluar</span>
        </a>
    </li>
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
</ul>
