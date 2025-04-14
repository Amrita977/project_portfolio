<!-- resources/views/components/partials/header.blade.php -->
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
  
      <!-- Logo -->
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <h1 class="sitename">Amrita Portfolio</h1>
      </a>
  
      <!-- Navigation Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  
    </div>
  </header>
  