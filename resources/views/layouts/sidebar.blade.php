<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar container-fluid">
        <ul id="sidebarnav">
          <!-- ============================= -->
          <!-- Home -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <!-- =================== -->
          <!-- Dashboard -->
          <!-- =================== -->
         
          <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="index-2.html" aria-expanded="false">
              <span class="rounded-3">
                <i class="ti ti-home-2"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <!-- ============================= -->
          <!-- Apps -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Apps</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span>
                <i class="ti ti-archive"></i>
              </span>
              <span class="hide-menu">Apps</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{route('admin.calendar.index')}}" class="sidebar-link">
                  <i class="ti ti-calendar"></i>
                  <span class="hide-menu">Calendar</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.events.index')}}" class="sidebar-link">
                  <i class="ti ti-calendar"></i>
                  <span class="hide-menu">Event</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.notes.index')}}" class="sidebar-link">
                  <i class="ti ti-calendar"></i>
                  <span class="hide-menu">Note</span>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- ============================= -->
          <!-- PAGES -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">PAGES</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span>
                <i class="ti ti-notebook"></i>
              </span>
              <span class="hide-menu">Pages</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{route('admin.faqs.index')}}" class="sidebar-link">
                  <i class="ti ti-help"></i>
                  <span class="hide-menu">FAQ</span>
                </a>
              
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.account-setting.index')}}" class="sidebar-link">
                  <i class="ti ti-user-circle"></i>
                  <span class="hide-menu">Account Setting</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.about-us.index')}}" class="sidebar-link">
                  <i class="ti ti-user"></i>
                  <span class="hide-menu">About Us</span>
                </a>
              </li>
             
              <li class="sidebar-item">
                <a href="{{route('admin.banner.index')}}" class="sidebar-link">
                  <i class="ti ti-ad"></i>
                  <span class="hide-menu">Banner</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.advantage.index')}}" class="sidebar-link">
                  <i class="ti ti-ad"></i>
                  <span class="hide-menu">Advantages</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.challenge.index')}}" class="sidebar-link">
                  <i class="ti ti-ad"></i>
                  <span class="hide-menu">Challenges</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.site-setting')}}" class="sidebar-link">
                  <i class="ti ti-settings"></i>
                  <span class="hide-menu">Site Setting</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.services.index')}}" class="sidebar-link">
                  <i class="ti ti-home"></i>
                  <span class="hide-menu">Services</span>
                </a>
              </li>
             
              <li class="sidebar-item">
                <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/landingpage/index.html" class="sidebar-link">
                  <i class="ti ti-app-window"></i>
                  <span class="hide-menu">Landing Page</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('admin.contact-us.index')}}" class="sidebar-link">
                  <i class="ti ti-user"></i>
                  <span class="hide-menu">Contact Us</span>
                </a>
              </li>
            </ul>
          </li>
         
          
       
        </ul>
        <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded d-block d-lg-none">
          <div class="d-flex">
            <div class="unlimited-access-title">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Unlimited Access</h6>
              <button class="btn btn-primary fs-2 fw-semibold lh-sm">Signup</button>
            </div>
            <div class="unlimited-access-img">
              <img src="../../dist/images/backgrounds/rocket.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3 mx-9 d-block d-lg-none">
        <div class="hstack gap-3 justify-content-between">
          <div class="john-img">
            <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="42" height="42" alt="">
          </div>
          <div class="john-title">
            <h6 class="mb-0 fs-4">John Doe</h6>
            <span class="fs-2">Designer</span>
          </div>
          <button class="border-0 bg-transparent text-primary ms-2" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
            <i class="ti ti-power fs-6"></i>
          </button>
        </div>
      </div> 
  </aside>