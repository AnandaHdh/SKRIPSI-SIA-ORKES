<style>
    .yes{
        background-image: linear-gradient(to left, #c36ac2 , #6aab06);
    }

</style>
<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar yes sidebar-left simplebar" data-simplebar>
            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account flex-shrink-0">
                <a href="#" class="flex d-flex align-items-center text-underline-0 text-body">
                    <span class="mr-3">

                    </span>
                    <span class="flex d-flex flex-column">
                        <strong style="font-size: 1.125rem;">E - PANEL</strong>
                    </span>
                </a>
                @if(auth()->guard('member')->check())
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">keyboard_arrow_down</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item-text dropdown-item-text--lh">
                            <div><strong>{{ auth()->guard('member')->user()->name }}</strong></div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
                    </div>
                </div>
                @else
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">keyboard_arrow_down</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item-text dropdown-item-text--lh">
                            <div><strong>{{ auth()->user()->name }}</strong></div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endif
            </div>

            @if(auth()->guard('member')->check())
            <ul class="nav nav-tabs sidebar-tabs flex-shrink-0" role="tablist">
                <li class="nav-item"><a class="nav-link active show" id="sm-menu-tab" href="#sm-menu" data-toggle="tab" role="tab" aria-controls="sm-menu" aria-selected="true">Menu</a></li>
            </ul>
            <div class="tab-content">
                <div id="sm-menu" class="tab-pane show active" role="tabpanel" aria-labelledby="sm-menu-tab">
                    <ul class="sidebar-menu flex">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('admin.dashboard')}}">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('member-sewa.index')}}">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">playlist_add</i>
                                <span class="sidebar-menu-text">Data Pesananku</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            @else
            <ul class="nav nav-tabs sidebar-tabs flex-shrink-0" role="tablist">
                <li class="nav-item"><a class="nav-link active show" id="sm-menu-tab" href="#sm-menu" data-toggle="tab" role="tab" aria-controls="sm-menu" aria-selected="true">Menu</a></li>
            </ul>
            <div class="tab-content">
                <div id="sm-menu" class="tab-pane show active" role="tabpanel" aria-labelledby="sm-menu-tab">
                    <ul class="sidebar-menu flex">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('home')}}">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                 <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">playlist_add</i>
                                <span class="sidebar-menu-text">Data Master</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="pages_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('member.index') }}">
                                        <span class="sidebar-menu-text">Data Member</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('harga.index') }}">
                                        <span class="sidebar-menu-text">Data Harga</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('alamat.index') }}">
                                        <span class="sidebar-menu-text">Data Alamat</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_order">
                                 <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">reorder</i>
                                <span class="sidebar-menu-text">Data Pesanan</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="pages_order">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('book-new.index') }}">
                                        <span class="sidebar-menu-text">Data Pesanan Baru</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('book-new.invoice') }}">
                                        <span class="sidebar-menu-text">Data Belum Terbayar</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('book-new.pay') }}">
                                        <span class="sidebar-menu-text">Data Struk</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('book-ending.index') }}">
                                        <span class="sidebar-menu-text">Data Pesanan Selesai</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('laporan.index')}}">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i>
                                <span class="sidebar-menu-text">Laporan</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
