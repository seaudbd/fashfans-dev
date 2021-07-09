<div class="widget stick-widget">
    <h4 class="widget-title">Most Followed Shops</h4>
    <ul class="followers">
        @php
            $f_shops = \App\Shop::withCount('followers')
                                    ->orderBy('followers_count', 'desc')
                                    ->limit(10)->get();
        @endphp

        @foreach ($f_shops as $f_shop)
        <li>
            <figure><a href="{{ route('shop.visit', $f_shop->slug) }}">
                <img class="user_comment_image" src="{{asset($f_shop->logo?$f_shop->logo:'frontend/images/placeholder.jpg')}}">
            </a>
            </figure>
            <div class="friend-meta">
                <h4><a href="{{ route('shop.visit', $f_shop->slug) }}">{{$f_shop->name}}</a></h4>
            </div>
        </li>
        @endforeach
        
    </ul>
</div>