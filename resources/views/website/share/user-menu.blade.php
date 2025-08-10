<div class="col-12 col-md-12 col-lg-4 col-xl-12 text-center miliods">
    <div class="d-block border rounded mfliud-bot">
        <div class="dashboard_author px-2 py-5">
            <div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
                <img src="{{ asset(auth('web')->user()->image ? 'storage/' . auth('web')->user()->image : 'assets/website/img/team-1.jpg') }}"
                     class="img-fluid circle"
                     width="100"
                     alt=""
                />
            </div>

            <div class="dash_caption">
                <h4 class="fs-md ft-medium mb-0 lh-1">{{ auth('web')->user()->name }}</h4>
                <span>Email: {{ auth('web')->user()->email }}</span><br>
                <span>Mobile: {{ auth('web')->user()->mobile }}</span>
                @if(auth('web')->user()->role == 'Agent')
                    <br>
                    <span>Reference Code: {{ auth('web')->user()->reference }}</span> <br>
                    <span>Point: {{ auth('web')->user()->point }}</span>
                @endif
            </div>
        </div>

        <div class="dashboard_author">
            <h4 class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">Dashboard
                Navigation</h4>
            <ul class="dahs_navbar">
                <li><a href="{{ route('web.user.orders') }}"><i class="lni lni-shopping-basket mr-2"></i>My Order</a></li>
                <li><a href="{{ route('web.user.wishlist') }}"><i class="lni lni-heart mr-2"></i>Wishlist</a></li>
                <li><a href="{{ route('web.user.profile') }}"><i class="lni lni-user mr-2"></i>Profile Info</a></li>
                <li><a href="{{ route('web.user.user_addresses.index') }}"><i class="lni lni-map-marker mr-2"></i>Addresses</a></li>
                @if(auth('web')->user()->role == 'Agent')
                    <li><a href="{{ route('web.user.pointHistory') }}"><i class="lni lni-pointer mr-2"></i>Point History</a></li>
                @endif
                <li>
                    <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();">
                        <i class="lni lni-power-switch mr-2"></i>Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<form method="post" action="{{ route('logout') }}" id="logout-form">
    @csrf
</form>
