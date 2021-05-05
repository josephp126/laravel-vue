@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row">

            <div class="col">
                <div class="d-flex flex-column">
                    <!-- Home Page Left Column -->
                    <div class="d-flex m-3">
                        <img style="height: 100px;" src="images/contact_image.jpg" title="Contact Us" alt="Contact Us"
                             class="img-responsive">
                        <div class="ml-3">
                            <h5>Contact Pottorff</h5>
                            <div>
                                <address>
                                    <div>5101 Blue Mound Road</div>
                                    <div>Fort Worth, Texas 76106</div>
                                    <div>Phone: 817-509-2300</div>
                                    <div>Fax: 817-831-3110</div>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex m-3">
                        <img style="height: 100px;" src="images/rep-contact-image2.jpg" class="img-responsive"
                             title="Email Us" alt="Email Us">
                        <div class="ml-3">
                            <h5>Email Us</h5>
                            <div>
                                <address>
                                    <a href="mailto:info@pottorff.com">info@pottorff.com</a>
                                </address>
                                <div>
                                    Or use the quick message form below in the footer.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- / Home Page Left Column -->

            <!-- Home Page Right Column -->
            <div class="col">
                <h3>Maps and Driving Directions</h3>
                <!--This c550000it MUST stay intact for use-->
                <iframe class="embedly-embed"
                        src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.google.com%2Fmaps%2Fembed%2Fv1%2Fplace%3Fkey%3DAIzaSyBctFF2JCjitURssT91Am-_ZWMzRaYBm4Q%26q%3D5101%2BBlue%2BMound%2BRd%2C%2BFort%2BWorth%2C%2BTX%2B76106&amp;wmode=transparent&amp;url=https%3A%2F%2Fwww.google.com%2Fmaps%2Fplace%2F5101%2BBlue%2BMound%2BRd%2C%2BFort%2BWorth%2C%2BTX%2B76106%3Fdg%3Ddbrw%26newdg%3D1&amp;key=c279bf201ad211e1a5be4040d3dc5c07&amp;type=text%2Fhtml&amp;schema=google"
                        scrolling="no" allowfullscreen="" frameborder="0" width="580" height="435"></iframe>

                <p><a href="http://maps.google.com/maps?q=5101%20Blue%20Mound%20Road%20Fort%20Worth,%20Texas%2076106"
                      target="_blank">Detailed Map and Driving Directions</a></p>
            </div>
            <!-- / Home Page Right Column -->


            <div class="brclear"></div><!-- Clear Floats -->
        </div>
    </div>
@endsection
