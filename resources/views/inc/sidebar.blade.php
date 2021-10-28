 <div id="sidebar">
     <!-- Wrapper for scrolling functionality -->
     <div id="sidebar-scroll">
         <!-- Sidebar Content -->
         <div class="sidebar-content">

             <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide" style="margin-bottom: 25px;">

             </ul>

             <ul class="sidebar-nav mt-5">
                 <li>
                     <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                         <i class="gi gi-stopwatch sidebar-nav-icon"></i>
                         <span class="sidebar-nav-mini-hide">Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="{{ route('center.index') }}" class="{{ request()->is('center') ? 'active' : '' }}">
                         <i class="gi gi-stopwatch sidebar-nav-icon"></i>
                         <span class="sidebar-nav-mini-hide">Centers</span>
                     </a>
                 </li>

                 {{-- <li>
                     <a href="#" class="sidebar-nav-menu"><i
                             class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                             class="gi gi-shopping_cart sidebar-nav-icon"></i><span
                             class="sidebar-nav-mini-hide">eCommerce</span></a>
                     <ul>
                         <li>
                             <a href="page_ecom_dashboard.html">Dashboard</a>
                         </li>
                     </ul>
                 </li> --}}

             </ul>
         </div>
     </div>
 </div>
