<div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall"
    data-retarget-mouse-scroll="false">
    <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-light bg-white  pr-0" id="navbar" data-primary>
            <div class="container-fluid p-0">

                <!-- Navbar toggler -->
                <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar" type="button"
                    data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button>

                <!-- Navbar Brand -->
                @if (isset($kembali))
                    <div class="tbl-cell tbl-cell-action-bordered" style="padding: 10px;">
                        <a class="action-btn" href="{{ $kembali }}">
                            <span class="material-icons">arrow_back</span>
                        </a>
                    </div>
                @endif
                <a href="#" class="navbar-brand flex ">
                    {!! $judul !!}
                </a>



                <!-- <form class="ml-auto search-form search-form--light d-none d-sm-flex flex" action="index.html">
<input type="text" class="form-control" placeholder="Search">
<button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
</form> -->
                <!-- @include('layouts.partials.notif') -->
                <!-- <div class="dropdown">
<a href="#" data-toggle="dropdown" data-caret="false" class="dropdown-toggle navbar-toggler navbar-toggler-company border-left d-flex align-items-center ml-navbar">
<span class="rounded-circle">
<span class="material-icons">business</span>
</span>
</a>
<div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
<div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

<span class="mr-3">
<img src="assets1/images/frontted-logo-blue.svg" width="43" height="43" alt="avatar">
</span>
<span class="flex d-flex flex-column">
<strong style="font-size: 1.125rem;">Frontted</strong>
<small class="text-muted text-uppercase">8 Users</small>
</span>

</div>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center py-2" href="#">
<span class="material-icons mr-2">settings</span> Settings
</a>
<a class="dropdown-item d-flex align-items-center py-2" href="#">
<span class="material-icons mr-2">exit_to_app</span> Switch Company
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center py-2" href="#">
<span class="material-icons mr-2">add</span> New Company
</a>
</div>
</div> -->

            </div>
        </div>

    </div>
</div>
