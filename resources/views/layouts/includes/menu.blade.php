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

                       <li class="menu-item">
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
                   <a href="{{ route('demand.index') }}" class="menu-link">
                       Demand
                   </a>
               </li>

               <li class="menu-item">
                   <a href="javascript:void(0)" class="menu-link menu-toggle">
                       Interview
                   </a>
                   <ul class="menu-sub">

                       <li class="menu-item">
                           <a href="{{ route('pre_intervies.index') }}" class="menu-link">
                               Pre Interview
                           </a>
                       </li>

                       <li class="menu-item">
                           <a href="{{ route('employer_interview.index') }}" class="menu-link">
                               Thai/Employer Interview
                           </a>
                       </li>
                   </ul>
               </li>


               <li class="menu-item">
                   <a href="javascript:void(0)" class="menu-link menu-toggle">
                       Failed
                   </a>
                   <ul class="menu-sub">

                       <li class="menu-item">
                           <a href="#" class="menu-link">
                               Pre
                           </a>
                       </li>

                       <li class="menu-item">
                           <a href="#" class="menu-link">
                               Thai
                           </a>
                       </li>

                       <li class="menu-item" hidden>
                           <a href="#" class="menu-link">
                               Passport
                           </a>
                       </li>
                   </ul>
               </li>

               <li class="menu-item">
                   <a href="{{ route('reject.index') }}" class="menu-link">
                       Reject/Blacklist
                   </a>
               </li>


               <li class="menu-item">
                   <a href="#" class="menu-link">
                       Government Process
                   </a>
               </li>

               <li class="menu-item">
                   <a href="#" class="menu-link">
                       Contract
                   </a>
               </li>

               <li class="menu-item">
                   <a href="#" class="menu-link">
                       Government Process
                   </a>
               </li>


               <li class="menu-item">
                   <a href="#" class="menu-link">
                       Sending
                   </a>
               </li>

               <li class="menu-item">
                   <a href="{{ route('file_manager.index') }}" class="menu-link">
                       File Manager
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
