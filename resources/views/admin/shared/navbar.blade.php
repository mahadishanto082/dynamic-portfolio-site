

<style>
/* --- Sidebar Menu Cleanup --- */

/* Remove background from all states (normal, active, hover) */
.br-menu-link,
.br-menu-link.active,
.br-menu-link:hover {
    background-color: transparent !important;
    background-image: none !important;
    color: #fff !important;
    box-shadow: none !important;
}

/* Adjust spacing between menu items */
.br-menu-item {
    margin-bottom: 15px; /* increase/decrease vertical gap */
}

/* Padding and alignment for menu links */
.br-menu-link {
    padding: 12px 20px;
    display: flex;
    align-items: center;
    border-radius: 4px;
    transition: background-color 0.2s ease, color 0.2s ease;
}

/* Icon spacing */
.menu-item-icon {
    margin-right: 10px;
}

/* Collapsed sidebar: center icons */
.br-sideleft .br-menu-link {
    justify-content: center;
}

/* Expanded sidebar: align icons and text normally */
.br-sideleft.expanded .br-menu-link {
    justify-content: flex-start;
}

/* Optional: subtle hover effect */
.br-menu-link:hover {
    background-color: rgba(255, 255, 255, 0.1) !important;
}

/* Optional: subtle indicator for active link */
.br-menu-link.active {
    border-left: 3px solid #1cae9c;
    padding-left: 17px; /* compensate for border */
}

</style>

<div class="br-logo"><a href="{{ route('admin.dashboard') }}"><span>[</span>Admin <i>Panel</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar " >
    <label class="sidebar-label pd-x-10 mg-t-20 op-3" >Navigation</label>
    <ul class="br-sideleft-menu "   >
        <li class="br-menu-item " ">
            <a href="{{ route('admin.dashboard') }}"
               class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}"  style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label" >Dashboard</span>
            </a>
        </li>
        
        <li class="br-menu-item">
            <a href="#"
               class="br-menu-link {{ Request::routeIs('admin.dashboard*') ? 'active' : '' }}" style="font-size: 1.3rem; font-weight: 600; display: flex; align-items: center;">
               <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
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
