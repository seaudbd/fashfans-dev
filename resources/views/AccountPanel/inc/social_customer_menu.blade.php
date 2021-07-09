<div class="widget">
    <h4 class="widget-title">MENU</h4>
    <ul class="naves">
        <li>
            <i class="la la-dashboard"></i>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li>
            <i class="la la-user"></i>
            <a href="{{ route('user_profile', Auth::user()->id) }}">Public Profile</a>
        </li>
        <li>
            <i class="la la-file-text"></i>
            <a href="{{ route('purchase_history.index') }}" title="">Purchase History</a>
        </li>
        <li>
            <i class="la la-heart-o"></i>
            <a href="{{ route('wishlists.index') }}" title="">Wishlist</a>
        </li>
        <li>
            <i class="la la-comment"></i>
            <a href="{{ route('conversations.index') }}" title="">Conversations</a>
        </li>
        <li>
            <i class="la la-user"></i>
            <a href="{{ route('profile') }}" title="">Manage Profile</a>
        </li>
        <li>
           <i class="la la-dollar"></i>
            <a href="{{ route('wallet.index') }}" title="">My Wallet</a>
        </li>
        <li>
             <i class="la la-support"></i>
            <a href="{{ route('support_ticket.index') }}" title="">Support Ticket</a>
        </li>
        <li>
             <div class="widget-seller-btn pt-4">
                <a href="{{ route('shops.create') }}" class="btn btn-anim-primary w-100">{{__('Be A Seller')}}</a>
            </div>
        </li>
    </ul>
</div>