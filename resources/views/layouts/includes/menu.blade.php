   <!-- Menu -->
   <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0">
       <div class="container-xxl d-flex h-100">


           <ul class="menu-inner">

               <li class="menu-item">
                   <a href="{{ route('home') }}" class="menu-link">
                       Dashboard
                   </a>
               </li>

               <li class="menu-item">
                   <a href="javascript:void(0)" class="menu-link menu-toggle">
                       Configuration
                   </a>
                   <ul class="menu-sub">
                       <li class="menu-item active">
                           <a href="{{ route('country.index') }}" class="menu-link">
                               Country
                           </a>
                       </li>
                       <li class="menu-item">
                           <a href="{{ route('overseas_agent.index') }}" class="menu-link">
                               Employer
                           </a>
                       </li>
                   </ul>
               </li>


               <li class="menu-item">
                   <a href="{{ route('home') }}" class="menu-link">
                       Demand
                   </a>
               </li>

               <li class="menu-item">
                   <a href="{{ route('home') }}" class="menu-link">
                       Interview
                   </a>
               </li>

               <li class="menu-item">
                   <a href="{{ route('home') }}" class="menu-link">
                       Government Process
                   </a>
               </li>

               <li class="menu-item">
                   <a href="{{ route('home') }}" class="menu-link">
                       Contract
                   </a>
               </li>

               <li class="menu-item">
                   <a href="{{ route('home') }}" class="menu-link">
                       Government Process
                   </a>
               </li>

               <li class="menu-item">
                   <a href="{{ route('users.index') }}" class="menu-link">
                       Users
                   </a>
               </li>

           </ul>
       </div>
   </aside>
   <!-- / Menu -->
