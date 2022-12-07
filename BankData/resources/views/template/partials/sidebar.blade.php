<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Menu</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ Request::segment(1) == 'bank-data' ? 'active' : '' }}">
                    <a href="{{ route('BankData.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-archive"></i>
                        </span>
                        <span class="pcoded-mtext">Bank Data</span>
                    </a>
                </li>
                <li class="{{ Request::segment(1) == 'data-spatial' ? 'active' : '' }}">
                    <a href="{{ route('DataSpatial.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-globe"></i>
                        </span>
                        <span class="pcoded-mtext">Data Web Spasial</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
