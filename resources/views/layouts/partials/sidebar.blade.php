<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    @include('layouts.partials.logo-header')
  </div>

  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item {{ request()->is('/') || request()->is('dashboard') ? 'active' : '' }}">
          <a href="{{ url('/') }}">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-section">
          <span class="sidebar-mini-icon"><i class="fa fa-ellipsis-h"></i></span>
          <h4 class="text-section">Master Data</h4>
        </li>
        <li class="nav-item {{ request()->is('ingredients*') ? 'active' : '' }}">
          <a href="{{ url('/ingredients') }}">
            <i class="fas fa-boxes"></i>
            <p>Bahan Baku</p>
          </a>
        </li>
        <li class="nav-item {{ request()->is('menus*') ? 'active' : '' }}">
          <a href="{{ url('/menus') }}">
            <i class="fas fa-utensils"></i>
            <p>Menu</p>
          </a>
        </li>

        <li class="nav-section">
          <span class="sidebar-mini-icon"><i class="fa fa-ellipsis-h"></i></span>
          <h4 class="text-section">Transaksi</h4>
        </li>
        <li class="nav-item {{ request()->is('transactions*') ? 'active' : '' }}">
          <a href="{{ url('/transactions') }}">
            <i class="fas fa-cash-register"></i>
            <p>Transaksi</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
