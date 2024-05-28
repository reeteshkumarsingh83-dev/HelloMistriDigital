 <div class="app-menu navbar-menu">
   <!-- LOGO -->
   <div class="navbar-brand-box">
     <!-- Dark Logo-->
     <a href="" class="logo logo-dark">
       <span class="logo-sm">
         <img src="{{ admin_assets('images/logo-sm.png') }}" alt="" height="22">
       </span>
       <span class="logo-lg">
         <img src="{{ admin_assets('images/logo-dark.png') }}" alt="" height="17">
       </span>
     </a>
     <!-- Light Logo-->
     <a href="{{ route('home') }}" class="logo logo-light">
       <span class="logo-sm">
         <img src="{{ admin_assets('images/logo-sm.png') }}" alt="" height="22">
       </span>
       <span class="logo-lg">
         <!-- <img src="{{ admin_assets('images/logo-dark.png') }}" alt="" height="17"> -->
         <h3 class="pt-3" style="color:#fff">Hello Mistri Digital</h3>
       </span>
     </a>
     <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
       <i class="ri-record-circle-line"></i>
     </button>
   </div>
   <div class="dropdown sidebar-user m-1 rounded">
     <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <span class="d-flex align-items-center gap-2">
         <img class="rounded header-profile-user" src="{{ admin_assets('images/users/avatar-1.jpg') }}" alt="Header Avatar">
         <span class="text-start">
           <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
           <span class="d-block fs-14 sidebar-user-name-sub-text">
             <i class="ri ri-circle-fill fs-10 text-success align-baseline"></i>
             <span class="align-middle">Online</span>
           </span>
         </span>
       </span>
     </button>
     <div class="dropdown-menu dropdown-menu-end">
       <!-- item-->
       <h6 class="dropdown-header">Welcome Anna!</h6>
       <a class="dropdown-item" href="pages-profile.html">
         <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle">Profile</span>
       </a>
       <a class="dropdown-item" href="apps-chat.html">
         <i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle">Messages</span>
       </a>
       <a class="dropdown-item" href="apps-tasks-kanban.html">
         <i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle">Taskboard</span>
       </a>
       <a class="dropdown-item" href="pages-faqs.html">
         <i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle">Help</span>
       </a>
       <div class="dropdown-divider"></div>
       <a class="dropdown-item" href="pages-profile.html">
         <i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle">Balance : <b>$5971.67</b>
         </span>
       </a>
       <a class="dropdown-item" href="pages-profile-settings.html">
         <span class="badge bg-success-subtle text-success mt-1 float-end">New</span>
         <i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle">Settings</span>
       </a>
       <a class="dropdown-item" href="auth-lockscreen-basic.html">
         <i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle">Lock screen</span>
       </a>
       <a class="dropdown-item" href="auth-logout-basic.html">
         <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
         <span class="align-middle" data-key="t-logout">Logout</span>
       </a>
     </div>
   </div>
   <div id="scrollbar">
     <div class="container-fluid">
       <div id="two-column-menu"></div>
       <ul class="navbar-nav" id="navbar-nav">
         <li class="menu-title">
           <span data-key="t-menu">Menu</span>
         </li>
         <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
             <i class="ri-dashboard-2-line"></i>
             <span data-key="t-dashboards">Dashboards</span>
           </a>
         </li>
         <!-- end Dashboard Menu --> @if(module_permission_check('order_management') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
             <i class="ri-apps-2-line"></i>
             <span data-key="t-apps">Orders</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarApps">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="#sidebarCalendar" class="nav-link" role="button" aria-expanded="false" aria-controls="sidebarCalendar"> All </a>
               </li>
               <li class="nav-item">
                 <a href="" class="nav-link"> Pending </a>
               </li>
               <li class="nav-item">
                 <a href="" class="nav-link">
                   <span>Confirmed</span>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="" class="nav-link">
                   <span>Processingo</span>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="" class="nav-link">
                   <span>Delivered</span>
                 </a>
               </li>
             </ul>
           </div>
         </li> @endif @if(module_permission_check('category_section') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
             <i class="ri-layout-3-line"></i>
             <span data-key="t-layouts">Categories</span>
             <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarLayouts">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="{{ route('admin.category') }}" class="nav-link" data-key="t-horizontal">Category</a>
               </li>
               <li class="nav-item">
                 <a href="{{ route('admin.sub-category') }}" class="nav-link" data-key="t-detached">Sub Category</a>
               </li>
             </ul>
           </div>
         </li> @endif @if(module_permission_check('service_section') ?? '') <li class="menu-title">
           <i class="ri-more-fill"></i>
           <span data-key="t-pages">Service Management</span>
         </li>
         <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarservice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarservice">
             <i class="ri-layout-3-line"></i>
             <span data-key="t-layouts">Services</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarservice">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="{{ route('admin.service-list') }}" class="nav-link" data-key="t-horizontal">List</a>
               </li>
               <li class="nav-item">
                 <a href="{{ route('admin.add-new-service') }}" class="nav-link" data-key="t-horizontal">Add New</a>
               </li>
             </ul>
           </div>
         </li> @endif @if(module_permission_check('plan_section') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarPlan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPlan">
             <i class="ri-layout-3-line"></i>
             <span data-key="t-layouts">Plans</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarPlan">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="{{ route('admin.plans') }}" class="nav-link" data-key="t-horizontal">List</a>
               </li>
               <li class="nav-item">
                 <a href="{{ route('admin.plan-create') }}" class="nav-link" data-key="t-horizontal">Add New</a>
               </li>
             </ul>
           </div>
         </li> @endif @if(module_permission_check('brand_section') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarbrands" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarbrands">
             <i class="ri-layout-3-line"></i>
             <span data-key="t-layouts">Brands</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarbrands">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="{{ route('admin.add-new-brand') }}" class="nav-link" data-key="t-horizontal">Add New</a>
               </li>
               <li class="nav-item">
                 <a href="{{ route('admin.brand-list') }}" class="nav-link" data-key="t-horizontal">List</a>
               </li>
             </ul>
           </div>
         </li> @endif @if(module_permission_check('customer_section') ?? '') <li class="menu-title">
           <i class="ri-more-fill"></i>
           <span data-key="t-pages">User Section</span>
         </li> @endif @if(module_permission_check('vendor_section') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
             <i class="ri-dashboard-2-line"></i>
             <span data-key="t-dashboards">Vendor</span>
           </a>
         </li> @endif @if(module_permission_check('store_management') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
             <i class="ri-dashboard-2-line"></i>
             <span data-key="t-dashboards">Store</span>
           </a>
         </li> @endif @if(module_permission_check('customer_section') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
             <i class="ri-dashboard-2-line"></i>
             <span data-key="t-dashboards">Customer</span>
           </a>
         </li> @endif
         <!-- end Dashboard Menu --> @if(module_permission_check('page_management') ?? '') <li class="menu-title">
           <i class="ri-more-fill"></i>
           <span data-key="t-pages">Pages</span>
         </li>
         <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
             <i class="ri-pages-line"></i>
             <span data-key="t-pages">Pages</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarPages">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="{{ route('admin.pages') }}" class="nav-link" data-key="t-starter"> Pages</a>
               </li>
               <li class="nav-item">
                 <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> FAQs </a>
               </li>
             </ul>
           </div>
         </li> @endif @if(module_permission_check('banner_management') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
             <i class="ri-rocket-line"></i>
             <span data-key="t-landing">Banner</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarLanding">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="{{ route('admin.banner') }}" class="nav-link" data-key="t-one-page"> Banner List</a>
               </li>
               <li class="nav-item">
                 <a href="{{ route('admin.banner-create') }}" class="nav-link" data-key="t-nft-landing"> Create Banner </a>
               </li>
             </ul>
           </div>
         </li> @endif @if(module_permission_check('social_media') ?? '') <li class="menu-title">
           <i class="ri-more-fill"></i>
           <span data-key="t-components">Components</span>
         </li>
         <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.social-media') }}" role="button" aria-expanded="false" aria-controls="sidebarUI">
             <i class="ri-pencil-ruler-2-line"></i>
             <span data-key="t-base-ui">Social Media</span>
           </a>
         </li> @endif @if(module_permission_check('payment_method') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.payment') }}" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
             <i class="ri-stack-line"></i>
             <span data-key="t-advance-ui">Payment method</span>
           </a>
         </li> @endif @if(module_permission_check('sms_module') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.sms') }}">
             <i class="ri-honour-line"></i>
             <span data-key="t-widgets">Sms Module</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.mail-config') }}" role="button" aria-controls="sidebarMaps">
             <i class="ri-map-pin-line"></i>
             <span data-key="t-maps">Mail Config</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.configration') }}" aria-expanded="false" aria-controls="sidebarForms">
             <i class="ri-file-list-3-line"></i>
             <span data-key="t-forms">Web Config</span>
           </a>
         </li> @endif @if(module_permission_check('role_and_permission') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="{{ route('admin.role-and-permission') }}" role="button" aria-expanded="false">
             <i class="ri-layout-grid-line"></i>
             <span data-key="t-tables">Role and Permission</span>
           </a>
         </li> @endif @if(module_permission_check('employee_section') ?? '') <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarEmp" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmp">
             <i class="ri-rocket-line"></i>
             <span data-key="t-landing">Employee</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarEmp">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="{{ route('admin.employee-form') }}" class="nav-link" data-key="t-one-page"> Add Employee</a>
               </li>
               <li class="nav-item">
                 <a href="{{ route('admin.employee') }}" class="nav-link" data-key="t-nft-landing">List </a>
               </li>
             </ul>
           </div>
         </li> @endif <li class="nav-item">
           <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
             <i class="ri-share-line"></i>
             <span data-key="t-multi-level">Multi Level</span>
           </a>
           <div class="collapse menu-dropdown" id="sidebarMultilevel">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
               </li>
               <li class="nav-item">
                 <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2 </a>
                 <div class="collapse menu-dropdown" id="sidebarAccount">
                   <ul class="nav nav-sm flex-column">
                     <li class="nav-item">
                       <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                     </li>
                     <li class="nav-item">
                       <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2 </a>
                       <div class="collapse menu-dropdown" id="sidebarCrm">
                         <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                             <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                           </li>
                           <li class="nav-item">
                             <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                           </li>
                         </ul>
                       </div>
                     </li>
                   </ul>
                 </div>
               </li>
             </ul>
           </div>
         </li>
       </ul>
     </div>
     <!-- Sidebar -->
   </div>
   <div class="sidebar-background"></div>
 </div>