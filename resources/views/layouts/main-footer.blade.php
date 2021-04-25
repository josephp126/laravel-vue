<!-- BEGIN FOOTER ================================================== -->
<section>
    <div class="footer">
        <div class="container animated fadeInUpNow notransition">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="footerbrand">POTTORFF</h1>
                    <p>The Preferred Solution for Life Safety and Air Control Products</p>
                    <p class="mt-3">Air Control Damper</p>
                    <p>Ceiling Radiation Dampers</p>
                    <p>UL Rated Fire/Smoke Dampers</p>
                    <p>Louvers and Penthouses</p>
                </div>
                <div class="col-md-3 text-white">
                    <p class="mt-40"><a href="#">About</a></p>
                    <p><a href="#">History</a></p>
                    <p class="mt-3"><a href="#">Quick Reference</a></p>
                    <p><a href="#">Cross Reference</a></p>
                    <p><a href="#">Louver Selection Tool</a></p>
                    <p><a href="#">Repfinder</a></p>
                </div>
                <div class="col-md-3" id="footer-find-us" data-label="find us">
                    <h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
                    <div class="footermap">
                        <p>
                            <strong>Address: </strong> {{config('app.contact.address')}}
                        </p>
                        <p>
                            <strong>Phone: </strong> + 1 {{config('app.contact.phone')}}
                        </p>
                        <p>
                            <strong>Fax: </strong> + 1 {{config('app.contact.fax')}}
                        </p>
                        <p>
                            <strong>Email: </strong> {{config('app.contact.email')}}
                        </p>
                        <ul class="social-icons list-soc">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                            <li><a href="#"><i class="icon-skype"></i></a></li>
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
                        &copy; Copyright {{date('Y')}} Pottorff
                    </p>
                </div>
                <div class="col-md-8">
                    <ul class="footermenu pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /footer section end-->
