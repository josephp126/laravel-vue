<!-- NAV ================================================== -->
<nav class="navbar  navbar-fixed-top wowmenu navbar-expand-md" role="navigation">
    <div class="container">
        <a class="navbar-brand logo-nav" href="/">
            <img src="/images/Pottorff-Logo-Black.png" alt="logo">
        </a>
        <ul id="nav" class="nav navbar-nav float-right">
            <li class="{{request()->is('admin')? "active": ""}} nav-item"><a href="/admin" class="nav-link">HOME</a></li>
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    PRODUCTS
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a href="/">test 1</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/">test 1</a>
                    </li>
                </ul>
            </li>
            <li class="{{request()->is('news')? "active": ""}} nav-item"><a href="{{route('admin.news.index')}}" class="nav-link">News</a></li>
        </ul>
    </div>
</nav>
<!-- /nav end--->
