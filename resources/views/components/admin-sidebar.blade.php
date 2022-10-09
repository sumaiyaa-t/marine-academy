<!-- Nav Item - Dashboard -->

<li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

{{-- ----------------------------------------------------------------- Home Sidebar ----------------------------------------------------------------- --}}


<!-- Heading -->
<div class="sidebar-heading">
    Home
</div>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
       aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Slider</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('slider.create') }}">Create Sliders</a>
            <a class="collapse-item" href="{{ route('slider.index') }}">View All Sliders</a>
        </div>
    </div>
</li>

<!-- Divider -->
{{--<hr class="sidebar-divider d-none d-md-block">--}}

{{-- ----------------------------------------------------------------- Home Sidebar ----------------------------------------------------------------- --}}


{{-- ----------------------------------------------------------------- Mission and Vision ----------------------------------------------------------------- --}}


<!-- Heading -->
{{--<div class="sidebar-heading">--}}
{{--    Home--}}
{{--</div>--}}


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mission"
       aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Mission and Vision</span>
    </a>
    <div id="mission" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('mission.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('mission.index') }}">View All info</a>
        </div>
    </div>
</li>



{{-- ----------------------------------------------------------------- Mission and Vision ----------------------------------------------------------------- --}}


{{-- ----------------------------------------------------------------- Counter ----------------------------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#counter"
       aria-expanded="true" aria-controls="counter">
        <i class="fas fa-fw fa-cog"></i>
        <span>Counter</span>
    </a>
    <div id="counter" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('counter.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('counter.index') }}">View All info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------------------------------- Counter ----------------------------------------------------------------- --}}

{{-- ----------------------------------------------------------------- Platform ----------------------------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#platform"
       aria-expanded="true" aria-controls="counter">
        <i class="fas fa-fw fa-cog"></i>
        <span>Platform</span>
    </a>
    <div id="platform" class="collapse" aria-labelledby="headingTwo" data-parent="#platform">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('platform.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('platform.index') }}">View All info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------------------------------- Platform ----------------------------------------------------------------- --}}

{{-- ----------------------------------------------------------------- Objective ----------------------------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Objective"
       aria-expanded="true" aria-controls="counter">
        <i class="fas fa-fw fa-cog"></i>
        <span>Objective</span>
    </a>
    <div id="Objective" class="collapse" aria-labelledby="headingTwo" data-parent="#platform">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('objective.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('objective.index') }}">View All info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------------------------------- Objective ----------------------------------------------------------------- --}}

{{-- ----------------------------------------------------------------- Ecosystem ----------------------------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Ecosystem"
       aria-expanded="true" aria-controls="counter">
        <i class="fas fa-fw fa-cog"></i>
        <span>Ecosystem</span>
    </a>
    <div id="Ecosystem" class="collapse" aria-labelledby="headingTwo" data-parent="#platform">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('ecosystem.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('ecosystem.index') }}">View All info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------------------------------- Ecosystem ----------------------------------------------------------------- --}}

{{-- ----------------------------------------------------------------- Achievement ----------------------------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#achievement"
       aria-expanded="true" aria-controls="counter">
        <i class="fas fa-fw fa-cog"></i>
        <span>Achievement</span>
    </a>
    <div id="achievement" class="collapse" aria-labelledby="headingTwo" data-parent="#platform">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('achievement.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('achievement.index') }}">View All info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------------------------------- Achievement ----------------------------------------------------------------- --}}

{{-- ----------------------------------------------------------------- Team ----------------------------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Team"
       aria-expanded="true" aria-controls="counter">
        <i class="fas fa-fw fa-cog"></i>
        <span>Team</span>
    </a>
    <div id="Team" class="collapse" aria-labelledby="headingTwo" data-parent="#Team">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('team.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('team.index') }}">View All info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------------------------------- Team ----------------------------------------------------------------- --}}

{{-- ----------------------------------------------------------------- Contact ----------------------------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Contact"
       aria-expanded="true" aria-controls="counter">
        <i class="fas fa-fw fa-cog"></i>
        <span>Contact</span>
    </a>
    <div id="Contact" class="collapse" aria-labelledby="headingTwo" data-parent="#platform">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('contact.create') }}">Create info</a>
            <a class="collapse-item" href="{{ route('contact.index') }}">View All info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------------------------------- Contact ----------------------------------------------------------------- --}}



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
