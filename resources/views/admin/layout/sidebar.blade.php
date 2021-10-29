<div class="left-sidenav">

    <ul class="metismenu left-sidenav-menu" id="side-nav">

        <li class="menu-title">Main</li>

        <li>
            <a href="{{url('/home')}}"><i class="mdi mdi-monitor"></i><span>Dashboard</span></a>
        </li>

        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-school"></i><span>Students</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{url('/admin/inqueries')}}">Inqueries</a></li>
                <li><a href="{{url('/admin/applications')}}">Applications</a></li>
                <li><a href="{{url('/admin/students')}}">Registrations</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-wallet"></i><span>Payments</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{url('/admin/payments')}}">Class Fees</a></li>
                <li><a href="{{url('/admin/activities_pay')}}">Activities Fee</a></li>
                <li><a href="{{url('/admin/events')}}">Events</a></li>
            </ul>
        </li>

        {{-- <li>
            <a href="{{url('/admin/students')}}"><i class="mdi mdi-account-card-details"></i><span>Students</span></a>
        </li> --}}

        <li>
            <a href="{{url('/admin/institutes')}}"><i class="mdi mdi-city"></i><span>Institutes</span></a>
        </li>

        <li>
            <a href="{{url('/admin/banks')}}"><i class="mdi mdi-bank"></i><span>Banks</span></a>
        </li>

        <li>
            <a href="{{url('/admin/activities/create')}}"><i class="mdi mdi-basketball"></i><span>Activities</span></a>
        </li>

        <li>
            <a href="{{url('/admin/awards/create')}}"><i class="mdi mdi-certificate"></i><span>Awards</span></a>
        </li>

        <li>
            <a href="{{url('/admin/complaints/create')}}"><i class="mdi mdi-account-alert"></i><span>Complaints</span></a>
        </li>

        <li>
            <a href="{{url('/admin/users')}}"><i class="mdi mdi-eye-circle"></i><span>Users</span></a>
        </li>

        <li>
            <a href="{{url('/admin/profile')}}"><i class="mdi mdi-shield-account"></i><span>Profile</span></a>
        </li>



    </ul>

</div>