<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="active">
                    <a href=""><i data-feather="home"></i> <span>Beranda</span></a>
                </li>
                <li class="submenu">
                    <a><i data-feather="hard-drive"></i> <span>Metode Tertutup</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('bagidua') }}">Metode Bagi Dua</a></li>
                        <li><a href="{{ route('regulafalsi') }}">Metode Regula Falsi</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a><i data-feather="hard-drive"></i> <span>Metode Terbuka</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('titiktetap') }}">Metode Titik Tetap</a></li>
                        <li><a href="{{ route('newtonraphson') }}">Metode Newton Raphson</a></li>
                        <li><a href="{{ route('secant') }}">Metode Secant</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
