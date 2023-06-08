<aside class="side-nav">
    <div class="logo">
        <img src="{{asset('img/tg.svg')}}" alt="">
        ADMIN PANEL
    </div>
    <ul>
        <li>
            <a href="{{route('adminpanel')}}">DASHBOARD</a>
        </li>
        <li>
            <a href="{{route('adminpanel.products')}}">PRODUCTS</a>
        </li>
        <li>
            <a href="{{route('adminpanel.categories')}}">CATEGORIES</a>
        </li>
        <li>
            <a href="{{route('adminpanel.colors')}}">COLORS</a>
        </li>
        <li>
            <a href="">ORDERS</a>
        </li>
    </ul>
    <div class="logout">
        <form action="{{route('logout')}}" method="post">
            <button type="submit">
                <svg width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(180 12 12)"><path fill="none" stroke="currentColor" stroke-width="2" d="M13 9V2H1v20h12v-7m9-3H5m12-5l5 5l-5 5"/></g></svg>
                &nbsp; LOGOUT
            </button>

        </form>
    </div>
</aside>