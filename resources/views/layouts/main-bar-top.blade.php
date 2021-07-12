<!-- TOP AREA ================================================== -->
<section class="toparea">
    <div class="container">
        <div class="row">
            <div class="col-md-6 top-text pull-left animated fadeInLeft">
{{--                <img src="{{url('images/icons/RepFinder_Login.png')}}" style="width: 30px" /> --}}
                <i class="icon-user"></i>
                <a href="https://www.pottorff.com/rep-connect">Rep Login</a> <span class="separator"></span>
                <i class="icon-phone"></i> {{config('app.contact.phone')}} <span class="separator"></span>
                <i class="icon-envelope"></i>
                <a href="mailto:{{config('app.contact.email')}}?subject=Hello from the website. I have a question.">{{config('app.contact.email')}}</a>
            </div>
            <div class="col-md-6 text-right animated fadeInRight">
                <div class="social-icons">
                    <a target="_blank" rel="nofollow" class="icon icon-facebook"
                       href="{{config('app.contact.facebook')}}"></a>
                    <a target="_blank" rel="nofollow" class="icon icon-twitter"
                       href="{{config('app.contact.twitter')}}"></a>
                    <a target="_blank" rel="nofollow" class="icon icon-linkedin"
                       href="{{config('app.contact.linkedin')}}"></a>
                    <a target="_blank" rel="nofollow" class="icon icon-youtube-play"
                       href="{{config('app.contact.youtube')}}"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.toparea end-->
