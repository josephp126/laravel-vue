<!-- BEGIN FOOTER ================================================== -->
<section>
    <div class="footer">
        <div class="container animated fadeInUpNow notransition">
            <div class="row">
                <div class="col-md-12"><h1 class="footerbrand">POTTORFF</h1></div>
                <div class="col-md-3">
                    <div>The Preferred Solution for Life Safety and Air Control Products</div>
                    <div class="mt-3">Air Control Damper</div>
                    <div>Ceiling Radiation Dampers</div>
                    <div>UL Rated Fire/Smoke Dampers</div>
                    <div>Louvers and Penthouses</div>
                </div>
                <div class="col-md-3 ">
                    <div><a href="{{route('about.index')}}">About</a></div>
                    <div><a href="{{route('about.index')}}">History</a></div>
                    <div class="mt-3"><a href="#">Quick Reference</a></div>
                    <div><a href="#">Cross Reference</a></div>
                    <div><a href="#">Louver Selection Tool</a></div>
                    <div><a href="{{route('repfinder.index')}}">Repfinder</a></div>
                </div>
                <div class="col-md-3" id="footer-find-us" data-label="find us">
                    <h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
                    <div class="footermap">
                        <div><strong>Address: </strong> {{config('app.contact.address')}}</div>
                        <div><strong>Phone: </strong> + 1 {{config('app.contact.phone')}}</div>
                        <div><strong>Fax: </strong> + 1 {{config('app.contact.fax')}}</div>
                        <div><strong>Email: </strong> {{config('app.contact.email')}}</div>
                        <ul class="social-icons list-soc">
                            <li><a target="_blank" rel="nofollow" href="{{config('app.contact.facebook')}}"><i
                                        class="icon-facebook"></i></a></li>
                            <li><a target="_blank" rel="nofollow" href="{{config('app.contact.twitter')}}"><i
                                        class="icon-twitter"></i></a></li>
                            <li><a target="_blank" rel="nofollow" href="{{config('app.contact.linkedin')}}"><i
                                        class="icon-linkedin"></i></a></li>
                            <li><a target="_blank" rel="nofollow" href="{{config('app.contact.youtube')}}"><i
                                        class="icon-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h1 class="title"><span class="colortext">Q</span>uick <span class="font100">Message</span>
                    </h1>
                    <div class="done">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Your message has been sent. Thank you!
                        </div>
                    </div>

                    {!! Form::open(['route' => 'contact.store']) !!}
                    <div class="form">
                        <div class="row">
                            <input required class="col-md-6" type="text" name="name" placeholder="Name">
                            <input required class="col-md-6" type="text" name="email" placeholder="E-mail">
                            <textarea required class="col-md-12" name="message" rows="4"
                                      placeholder="Message"></textarea>
                        </div>
                        <button type="submit" id="submit" class="btn">Send</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <p id="back-top">
        <a href="#top"><span></span></a>
    </p>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p class="pull-left">
                        &copy; Copyright {{date('Y')}} {{config('app.name')}}
                    </p>
                </div>
                <div class="col-md-8">
                    <ul class="footermenu pull-right">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="{{route('about.index')}}">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /footer section end-->
