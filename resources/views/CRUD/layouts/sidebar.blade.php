



<style>
.menu-item a {
    text-decoration: none;
    color: inherit;
  }
  .menu-item.active > a {
    background-color: gray;
    color: white;
  }
  .menu-item:hover > a {
    background-color:gray;
    color: black;
  }
</style>


{{-- sidebar --}}
<span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
</a>

<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
  <i class="bx bx-chevron-left bx-sm align-middle"></i>
</a>
</div>

<div class="menu-inner-shadow  {{request()->routeIs('dashboard') ? 'active' :''}}">Bank</div>
<ul class="menu-inner py-1">
<!-- Dashboard -->
<li class="menu-item  ">
  <a href="{{url('/Dashboard/Admin')}}" class="menu-link">
    <i class="menu-icon  bx bx-home-circle"></i>
    <div data-i18n="Analytics">Dashboard</div>
  </a>
</li>

<!-- Layouts -->
<!-- Bank Section -->
<li class="menu-header small text-uppercase"><span class="menu-header-text">Bank</span></li>
  <ul>
  <!-- Branch Menu Item -->
  <li class="menu-item  {{ request()->routeIs('bank') || request()->routeIs('bank') ? 'active' : '' }}" id="bank">
    <a href="" class="menu-link menu-toggle">
      <i class="fas fa-university"></i> <!-- Icon for Bank -->
      <div data-i18n="Authentications">Bank</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a href="{{route('bank')}}" class="menu-link" target="_blank">
          <div data-i18n="Basic">Add Bank</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('allbank')}}" class="menu-link" target="_blank">
          <div data-i18n="Basic">View Bank</div>
        </a>
      </li>
    </ul>
  </li>
</ul>



  <li class="menu-header small text-uppercase"><span class="menu-header-text">Branches</span></li>
  <ul>
  <!-- Branch Menu Item -->
  <li class="menu-item  {{ request()->routeIs('addbranch') || request()->routeIs('viewData') ? 'active' : '' }}" id="branch">
    <a href="" class="menu-link menu-toggle">
      <i class="fas fa-building"></i> <!-- Icon for Branches -->
      <div data-i18n="Authentications">Branch</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a href="{{route('addbranch')}}" class="menu-link" target="_blank">
          <div data-i18n="Basic">Add Branch</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('viewData')}}" class="menu-link" target="_blank">
          <div data-i18n="Basic">View Branch</div>
        </a>
      </li>
    </ul>
  </li>
</ul>


<li class="menu-header small text-uppercase"><span class="menu-header-text">Users</span></li>
<ul>
<!-- Branch Menu Item -->
<li class="menu-item {{ request()->routeIs('adduser') || request()->routeIs('ShowUser') ? 'active' : '' }}" id="branch">
  <a href="" class="menu-link menu-toggle">
    <i class="fas fa-building"></i> <!-- Icon for Branches -->
    <div data-i18n="Authentications">User</div>
  </a>

  <ul class="menu-sub">
    <li class="menu-item ">
      <a href="{{route('adduser')}}" class="menu-link" target="_blank">
        <div data-i18n="Basic">Add User</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{route('ShowUser')}}" class="menu-link" target="_blank">
        <div data-i18n="Basic">View User</div>
      </a>
    </li>
  </ul>
</li>
</ul>

<br>
<br>
<!-- Misc -->
<li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
<li class="menu-item">
  <a
    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
    target="_blank"
    class="menu-link"
  >
    <i class="menu-icon tf-icons bx bx-support"></i>
    <div data-i18n="Support">Support</div>
  </a>
</li>
<li class="menu-item">
  <a
    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
    target="_blank"
    class="menu-link"
  >
    <i class="menu-icon tf-icons bx bx-file"></i>
    <div data-i18n="Documentation">Documentation</div>
  </a>
</li>
</ul>
</aside>

