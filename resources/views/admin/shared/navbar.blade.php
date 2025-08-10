

<style>
    .br-menu-item {
  margin-bottom: 35px;
 /* increases vertical spacing between items */
}

.br-menu-link {
  padding: 15px 20px; /* adds more padding inside each menu link */
  /* existing styles you have here */
  
  text-decoration: none;
  display: flex;
  align-items: center;
  font-size: 1.3rem;
  font-weight: 200;
}


</style>

<div class="br-logo"><a href="{{ route('admin.dashboard') }}"><span>[</span>Admin <i>Panel</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar " >
    <label class="sidebar-label pd-x-10 mg-t-20 op-3" >Navigation</label>
    <ul class="br-sideleft-menu "   >
        <li class="br-menu-item " style="background-color:red;">
            <a href="{{ route('admin.dashboard') }}"
               class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}"  style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label" >Dashboard</span>
            </a>
        </li>
        
        <li class="br-menu-item">
            <a href="#"
               class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
               <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Header Content</span>

            </a>
        </li>
        <li class="br-menu-item">
            <a href="#"
               class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
               <i class="menu-item-icon icon ion-ios-cog-outline tx-24"></i>
            <span class="menu-item-label">Services</span>

            </a>
        </li>
        <li class="br-menu-item">
            <a href="#"
               class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
               <i class="menu-item-icon icon ion-ios-briefcase-outline tx-24"></i>
                <span class="menu-item-label">Portfolio</span>

            </a>
        </li>
        <li class="br-menu-item">
            <a href="#"
               class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Testimonials</span>
            </a>
        </li>
        
        <li class="br-menu-item">
            <a href="#" class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
                <i class="menu-item-icon icon ion-ios-information-outline tx-24"></i>
                 <span class="menu-item-label">About Us</span>
            </a>
        </li>
        <li class="br-menu-item">
            <a href="#" class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
                <i class="menu-item-icon icon ion-ios-folder-outline tx-24"></i>
                <span class="menu-item-label">Case Study</span>
            </a>
        </li>
        <li class="br-menu-item">
            <a href="#" class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
                 <i class="menu-item-icon icon ion-ios-information-outline tx-24"></i>
                <span class="menu-item-label">Info</span>
            </a>
        </li>
        <li class="br-menu-item">
            <a href="#" class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
                <i class="fas fa-user-plus tx-24"></i>
                <span class="menu-item-label">Join us</span>
            </a>
        </li>
        <li class="br-menu-item">
            <a href="#" class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Footer Content</span>
            </a>
        </li>

        
    </ul>
    <br>
</div>
