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
    <li class="{{ request() -> is('kaprodi/cpl-profil-lulusan') ? 'active' : '' }}">
        <a href="/kaprodi/cpl-profil-lulusan">
            <i class="fa fa-th"></i> <span>Pemetaan Profil Lulusan</span>
        </a>
    </li>
    <li class="{{ request() -> is('kaprodi/mata-kuliah') ? 'active' : '' }}">
        <a href="/kaprodi/mata-kuliah">
            <i class="fa fa-book"></i> <span>Mata Kuliah</span>
        </a>
    </li>
    <li class="{{ request() -> is('kaprodi/cpl-mata-kuliah') ? 'active' : '' }}">
        <a href="/kaprodi/cpl-mata-kuliah">
            <i class="fa fa-th"></i> <span>Pemetaan CPL</span>
        </a>
    </li>
    <li class="{{ request() -> is('akademik/dosen') ? 'active' : '' }}">
        <a href="/akademik/dosen">
            <i class="fa fa-users"></i> <span>Dosen</span>
        </a>
    </li>
    <li class="{{ request() -> is('akademik/kaprodi') ? 'active' : '' }}">
        <a href="/akademik/kaprodi">
            <i class="fa fa-user"></i> <span>Kaprodi</span>
        </a>
    </li>
    <li class="{{ request() -> is('akademik/semester') ? 'active' : '' }}">
        <a href="/akademik/semester">
            <i class="fa fa-list-ul"></i> <span>Semester</span>
        </a>
    </li>
    <li class="{{ request()->is('akademik/plotting-dosen/*', 'semestergenap') ? 'active treeview' : 'treeview' }} " style="height: auto;">
        <a href="#">
            <i class="px-nav-icon fa fa-random"></i> <span>Plotting Dosen</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="">
            @foreach (menuPlottingDosen() as $item)
                <li class="{{ request() -> is('akademik/plotting-dosen/' . $item->id) ? 'active' : '' }} "><a href="/akademik/plotting-dosen/{{ $item->id }}"><i class="fa fa-circle-o"></i>{{ $item->name }}</a></li>
            @endforeach
        </ul>
    </li>
    <li class="{{ request() -> is('mahasiswa/perkuliahan') ? 'active' : '' }}">
        <a href="/mahasiswa/perkuliahan">
            <i class="px-nav-icon fa fa-calendar"></i> <span>Perkuliahan (mhs)</span>
        </a>
    </li>
    <li class="{{ request() -> is('dosen/rpkps') ? 'active' : '' }}">
        <a href="/dosen/rpkps">
            <i class="fa fa-list-ul"></i> <span>RPKPS</span>
        </a>
    </li>
    <li class="{{ request() -> is('dosen/rpkpm') ? 'active' : '' }}">
        <a href="/dosen/rpkpm">
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
