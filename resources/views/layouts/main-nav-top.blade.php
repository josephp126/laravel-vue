<!-- NAV ================================================== -->
<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand logo-nav" href="{{route('home')}}">
                <img src="{{url('images/Pottorff-Logo-Black.png')}}" alt="logo" style="max-height:100%;" />
            </a>
        </div>
        <ul id="nav" class="nav navbar-nav pull-right">
            <li class="{{request()->is('/')? 'active': ''}}"><a href="{{route('home')}}">Home</a></li>

            <li><a href="#TODO-FILL">PRODUCTS</a></li>
            <li><a href="#TODO-FILL">QUICK REFERENCE</a></li>
            <li><a href="#TODO-FILL">SELECTION TOOLS</a></li>
            <li><a href="#TODO-FILL">RESOURCES</a></li>
            <li><a href="#TODO-FILL">ABOUT</a></li>
            <li><a href="#TODO-FILL">REP LOGIN</a></li>

            {{--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="home2.html">Home Alt</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="landingpage.html">Landing Page</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="faq.html">F.A.Q.</a></li>
                    <li><a href="404.html">404 Not Found</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i
                        class="icon-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="portfolio3.html">Three Columns</a></li>
                    <li><a href="portfolio2.html">Two Columns</a></li>
                    <li><a href="portfolio4.html">Four Columns</a></li>
                    <li><a href="projectdetail.html">Single Project</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="icon-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="blogindex.html">Home Blog</a></li>
                    <li><a href="blogsinglepost.html">Single Post</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i
                        class="icon-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="elements.html">Elements</a></li>
                    <li><a href="columns.html">Columns</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="#">Masonry Grids +</a>
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="masonry2.html">Masonry Two</a></li>
                            <li><a href="masonry3.html">Masonry Three</a></li>
                            <li><a href="masonry4.html">Masonry Four</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>--}}
        </ul>
    </div>
</nav>
<!-- /nav end-->
