<div class="widget">
    <h4 class="widget-title">MENU</h4>
    <ul class="naves">
        <li>
            <i class="la la-dashboard"></i>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li>
            <i class="la la-user"></i>
            <a href="{{ route('shop.visit', Auth::user()->shop->slug) }}">Timeline</a>
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
            <i class="la la-diamond"></i>
            <a href="{{ route('seller.products') }}" title="">Products</a>
        </li>
        <li>
            <i class="la la-file-text"></i>
            <a href="{{ route('orders.index') }}" title="">Orders</a>
        </li>
        <li>
            <i class="la la-star-o"></i>
            <a href="{{ route('reviews.seller') }}" title="">Product Reviews</a>
        </li>
        <li>
            <i class="la la-comment"></i>
            <a href="{{ route('conversations.index') }}" title="">Conversations</a>
        </li>
        <li>
            <i class="la la-cog"></i>
            <a href="{{ route('shops.index') }}" title="">Shop Setting</a>
        </li>
        <li>
            <i class="la la-cc-mastercard"></i>
            <a href="{{ route('payments.index') }}" title="">Payment History</a>
        </li>
        <li>
            <i class="la la-user"></i>
            <a href="{{ route('profile') }}" title="">Manage Profile</a>
        </li>
        <li>
            <i class="la la-money"></i>
            <a href="{{ route('withdraw_requests.index') }}" title="">Money Withdraw</a>
        </li>
        <li>
           <i class="la la-dollar"></i>
            <a href="{{ route('wallet.index') }}" title="">My Wallet</a>
        </li>
        <li>
             <i class="la la-support"></i>
            <a href="{{ route('support_ticket.index') }}" title="">Support Ticket</a>
        </li>
    </ul>
</div>