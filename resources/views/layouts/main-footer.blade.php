<!-- BEGIN FOOTER ================================================== -->
<section>
    <div class="footer">
        <div class="container animated fadeInUpNow notransition">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="footerbrand">
                        <img style="height: 30px;" src="{{url('/images/Pottorff Logo White.png')}}" alt="POTTORFF" />
                    </h1>
                    <p class="mt-2 mb-2">The Preferred Solution for Life Safety and Air Control Products</p>
                    <p class="mt-4 mb-2">Air Control Damper</p>
                    <p class="mt-2 mb-2">Ceiling Radiation Dampers</p>
                    <p class="mt-2 mb-2">UL Rated Fire/Smoke Dampers</p>
                    <p class="mt-2 mb-2">Louvers and Penthouses</p>
                </div>
                <div class="col-md-3 text-white">
                    <p class="mt-2 mb-2">About</p>
                    <p class="mt-2 mb-2"><a href="#">Quick Reference</a></p>
                    <p class="mt-2 mb-2"><a href="#">Louver Selection Tool</a></p>
                    <p class="mt-2 mb-2"><a href="#">Products</a></p>
                    <p class="mt-2 mb-2"><a href="#">Training</a></p>
                    <p class="mt-2 mb-2"><a href="{{route('repfinder.index')}}">Repfinder</a></p>
                </div>
                <div class="col-md-3" id="footer-find-us" data-label="find us">
                    <h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
                    <div class="footermap">
                        <div><strong>Address: </strong> {{config('app.contact.address')}}</div>
                        <div><strong>Phone: </strong> + 1 {{config('app.contact.phone')}}</div>
                        <div><strong>Fax: </strong> + 1 {{config('app.contact.fax')}}</div>
                        <div><strong>Email: </strong> <a
                                href="mailto:{{config('app.contact.email')}}?subject=Hello from the website. I have a question.">{{config('app.contact.email')}}</a>
                        </div>
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
                <div class="col-md-4" style="max-height: 50px">
                    <p class="pull-left">
                        &copy; Copyright {{date('Y')}} {{config('app.name')}}
                    </p>
                </div>
                <div class="col-md-8" style="max-height: 50px">
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
