<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <div class="sidebar-toggle-close toggle-sidebar-btn">
         <i id="sidebar-toggle-icon" class="bi bi-arrow-left"></i>
      </div>
      <div class="text-center">
         <a href="index.html">
            <img src="{{ asset('images/logo.png') }}" class="img-fluid mb-5 mt-3 pb-4" width="180px" alt="logo" />
         </a>
      </div>
      <li class="nav-item">
         <a class="nav-link " href="index.html">
         <i class="bi bi-house-door-fill"></i>
         <span>Dashboard</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" href="users-profile.html">
         <i class="bi bi-person"></i>
         <span>Customers</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" href="users-profile.html">
         <i class="bi bi-people-fill"></i>
         <span>Agents</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" href="users-profile.html">
         <i class="bi bi-person"></i>
         <span>Requests</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" href="users-profile.html">
         <i class="bi bi-envelope-fill"></i>
         <span>Feedbacks</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" href="users-profile.html">
         <i class="bi bi-gear-fill"></i>
         <span>Account Settings</span>
         </a>
      </li>
   </ul>
   <div class="logout-nav-link">
      <a class="text-white text-decoration-none" href="#">
      <img src="{{ asset('images/logout.png') }}" class="img-fluid me-2" width="20px" alt="logo" />
      <span>Logout</span>
      </a>
   </div>
</aside>
