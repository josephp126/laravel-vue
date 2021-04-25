<!-- NAV ================================================== -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <div class="container">
        <a class="navbar-brand logo-nav" href="/">
            <img src="/images/Pottorff-Logo-Black.png" alt="logo">
        </a>
        <ul id="nav" class="nav navbar-nav float-right">
            <li class="active nav-item"><a href="/" class="nav-link">HOME</a></li>
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    PRODUCTS
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="/">test 1</a>
                    </li>
                    <li class="dropdown-item"><a href="/">test 1</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="/" class="nav-link">QUICK REFERENCE</a></li>
            <li class="nav-item"><a href="/" class="nav-link">SELECTION TOOLS</a></li>
            <li class="nav-item"><a href="/" class="nav-link">RESOURCES</a></li>
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    ABOUT
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="{{route('company.index')}}">Company</a></li>
                    <li class="dropdown-item"><a href="{{route('repfinder.index')}}">Repfinder</a></li>
                    <li class="dropdown-item"><a href="{{route('about.index')}}">History</a></li>
                    <li class="dropdown-item"><a href="{{route('news.index')}}">News</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="/" class="nav-link">REP LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
<!-- /nav end--->
