<style type="text/css">
.posbutton {
    position: absolute;
    top: 0%;
    right: 200px;
    z-index: 111;
}
.btn-light1{
    background: #ebeef6;
    border-color: #d7dae3;
    color: #2109e6;
    border: solid 1px;
}
</style>

<!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="width: 170px; !important;left: 0; ">
            <a href="index.html" class="colorlink left-menu" 
            style="padding-top: 21px; padding-left: 10px;">
              COMPANY LOGO  
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
<div class="header" style="padding-left: 10rem !important;">
  <div class="header-content">
    <nav class="navbar navbar-expand">
      <div class="collapse navbar-collapse justify-content-between">
        <div class="header-left">
     <!--      <div class="search_bar dropdown">
            <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
              <i class="mdi mdi-magnify"></i>
            </span>
            <div class="dropdown-menu p-0 m-0">
              <form>
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
          </div> -->
        </div>

        <ul class="navbar-nav header-right">
        <!--   <li class="nav-item dropdown notification_dropdown">
            <a class="nav-link bell dz-fullscreen" href="#">
              <svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor"stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
              <svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path></svg>
            </a>
          </li> -->
  <!--         <li class="nav-item dropdown notification_dropdown">
            <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
              <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
              </svg>
              <div class="pulse-css"></div>
            </a>
          </li> -->
          <li class="nav-item dropdown header-profile">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
              <img src="{{config('app.baseURL')}}\assets\images\logo.jpg" width="20" alt="">
              <div class="header-info">
                <span><strong>{{ Auth::user()->name}}</strong></span>
                <b>{{$rolename}}</b>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{config('app.baseURL')}}/admin/user/all" class="dropdown-item ai-icon">
                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span class="ml-2">Profile </span>
              </a>
              <a href="#" class="dropdown-item ai-icon">
                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <span class="ml-2">Inbox </span>
              </a>
              <a href="{{ route('logout')}}"class="dropdown-item ai-icon">
                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                <span class="ml-2">Logout </span>
              </a>
            </div>

          </li>

          <li class="nav-item right-sidebar">
              <div class="posbutton">
                <a class="posclick" href="{{config('app.baseURL')}}/poshome">
                  <button type="button" class="btn btn-square btn-light1" 
                  style="border-block-color: black;">pos</button>
                </a>
              </div>
          </li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>
