<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item ">
            <a class="nav-link collapsed" href="{{ route('Dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Asset Lending</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href="forms-editors.html">
                        <i class="bi bi-circle"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href="forms-validation.html">
                        <i class="bi bi-circle"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item ">
            <a class="nav-link collapsed" href="{{ route('asset.index') }}">
                <i class="bi bi-hdd-rack"></i>
                <span>Assets</span>
            </a>
        </li><!-- End Assets Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('karyawan.index') }}">
                <i class="bi bi-people"></i>
                <span>Employee</span>
            </a>
        </li><!-- End Employee Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('departemen.index') }}">
                <i class="bi bi-building"></i>
                <span>Departemen</span>
            </a>
        </li><!-- End Departemen Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('type.index') }}">
                <i class="bi bi-gear-fill"></i>
                <span>Type Asset</span>
            </a>
        </li><!-- End Departemen Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('pinjam.index')}}">
                <i class="bi bi-basket"></i>
                <span>Asset Lending</span>
            </a>
        </li><!-- End Departemen Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
