<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="{{ url('staradmin/images/faces/face18.jpg') }}" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">John Doe</p>
          <p class="designation">Administrator</p>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="pages" href="#">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo admin_url('page'); ?>">View All Pages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo admin_url('page/add'); ?>">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users" href="#">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Users</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="users">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo admin_url('user'); ?>">View All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo admin_url('user/add'); ?>">Add User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo admin_url('user/profile'); ?>">Your Profile</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php //echo admin_url('config'); ?>">
        <i class="menu-icon typcn typcn-user-outline"></i>
        <span class="menu-title">System Configuration</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php //echo admin_url('logout'); ?>">
        <i class="menu-icon typcn typcn-user-outline"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  </ul>
</nav>