<nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
        {{ Auth::user()->name }}
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_about') }}" class="nav-link">
            <i class="link-icon" data-feather="user"></i>
            <span class="link-title">About</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_category') }}" class="nav-link">
            <i class="link-icon" data-feather="server"></i>
            <span class="link-title">Course Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_course') }}" class="nav-link">
            <i class="link-icon" data-feather="server"></i>
            <span class="link-title">Course</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_service') }}" class="nav-link">
            <i class="link-icon" data-feather="tag"></i>
            <span class="link-title">Service</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_member') }}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Managment</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_event') }}" class="nav-link">
            <i class="link-icon" data-feather="file-text"></i>
            <span class="link-title">Event</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.notice') }}" class="nav-link">
            <i class="link-icon" data-feather="file-plus"></i>
            <span class="link-title">Notice</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.job_category') }}" class="nav-link">
            <i class="link-icon" data-feather="link-2"></i>
            <span class="link-title">Job Circular Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.job_circular') }}" class="nav-link">
            <i class="link-icon" data-feather="link"></i>
            <span class="link-title">Job Circular</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.interview') }}" class="nav-link">
            <i class="link-icon" data-feather="file"></i>
            <span class="link-title">Interview</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.testimonials') }}" class="nav-link">
            <i class="link-icon" data-feather="user"></i>
            <span class="link-title">Testimonial</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.overseas_gallery') }}" class="nav-link">
            <i class="link-icon" data-feather="hard-drive"></i>
            <span class="link-title">Overseas Partner</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.placement_gallery') }}" class="nav-link">
            <i class="link-icon" data-feather="hard-drive"></i>
            <span class="link-title">Placement Gallery</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.gallery') }}" class="nav-link">
            <i class="link-icon" data-feather="hard-drive"></i>
            <span class="link-title">Gallary</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.setting') }}" class="nav-link">
            <i class="link-icon" data-feather="settings"></i>
            <span class="link-title">Setting</span>
          </a>
        </li>
      </ul>
    </div>
   </nav>