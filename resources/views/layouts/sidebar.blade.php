<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
      <div class="logo-wrapper"><a href="{{ route('dashboard')}}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/rkive.png') }}" style="height:40px ; width:auto;" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/rkive.png') }}" style="height:40px ; width:auto;" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="{{ route('dashboard')}}"></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title active" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                            </svg><span>Employee Records</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('employee.index') }}">Employees</a></li>
                        </ul>
                    </li>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('payroll.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-others') }}"></use>
                            </svg><span>Payroll History</span>
                        </a>
                    </li>
                     <!--li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('emphistory.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span>Employment History</span>
                        </a>
                    </li-->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('employee.emphistories') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span>Employment History</span>
                        </a>
                    </li>               
                    <!--li class="sidebar-list">
                       <a class="sidebar-link sidebar-title" href="{{ route('schedule.index')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calendar') }}"></use>
                            </svg><span>Time and Scheduling Record</span></a></li-->
                    <!--li class="sidebar-list">
                      <a class="sidebar-link sidebar-title" href="{{ route('position.index')}}">
                            <svg class="stroke-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>Job Description and Position</span></a></li-->
            <!--li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('dashboard')}}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"></use>
                </svg><span>Data Auditing and Reporting</span></a></li-->
            <!--li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('dashboard')}}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"></use>
                </svg><span>Employee Engagement Survey and Notification</span></a></li-->
            <!--li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('dashboard')}}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-learning') }}"></use>
                </svg><span>Skills and Qualification</span></a></li-->                       
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>