@extends('layouts/master')
@section('content')


          

    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Contact Us</h1></div>
      		</div>
		</div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <!--End Page Title-->
        <div class="map-section map">
        	<iframe src="https://www.google.com/maps/d/embed?mid=1L8Eji0rXgIZSLsKkFameA5WjN5M&hl=en&ehbc=2E312F" height="350" allowfullscreen></iframe>
            <div class="container">
            	<div class="row">
                	<div class="map-section__overlay-wrapper">
                        <div class="map-section__overlay">
                            <h3 class="h4">Our store</h3>
                            <div class="rte-setting">
                                <p>123 Prince Hamza Bin Al Hussein St.<br>AsSalt, Jordan</p>
                                <p>Sun - Thr, 10am - 9pm<br>Friday, 11am - 9pm<br>Saturday, 11am - 5pm</p>
                            </div>
                            <p><a href="https://maps.google.com/?mid=1L8Eji0rXgIZSLsKkFameA5WjN5M&hl=en&ehbc=2E312F" class="btn btn--secondary btn--small" target="_blank">Get directions</a></p>
                        </div>
                   	</div>
                </div>
            </div>
        </div>
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Contact Us</span>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                	<h2>Share your opinion with us</h2>
                    <p>Please complete the form below to provide us with your comments, ideas and suggestions. Fields with an asterisk are required feedback. We use this information only to serve you, our customers. We do not distribute personal information to any other company.
                    </p>
                	<div class="formFeilds contact-form form-vertical">
                      <form action="{{route('contact.store') }}" method="post"  id="contact_form" class="contact-form" enctype="multipart/form-data">	
                        @csrf
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
                                @if (Auth::check())

                          	<input type="text" id="ContactFormName" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required="">
                            @else
                            <input type="text" id="ContactFormName" name="name" placeholder="Name" value="" required="">
                              @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
                                @if (Auth::check())
							<input type="email" id="ContactFormEmail" name="email" placeholder="Email" value="{{ Auth::user()->email }}" required="">   
                            @else
                            <input type="email" id="ContactFormEmail" name="email" placeholder="Email" value="" required="">   
                            @endif


                            </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="text" id="ContactSubject" name="subject" placeholder="Subject" value="">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                            <textarea required="" rows="10" id="ContactFormMessage" name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn" value="Send Message">
                        </div>
                     </div>
                     </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                	<div class="open-hours">
                    	<strong>Opening Hours</strong><br>
						Sun - Thr : 9am - 11pm<br>
						Friday: 11am - 5pm
                    </div>
                	<hr />
                    <ul class="addressFooter">
                        <li><i class="icon anm anm-map-marker-al"></i><p>Prince Hamza Street, Salt,Jordan</p></li>
                        <li class="phone"><i class="icon anm anm-phone-s"></i><p>(962) 235 9691</p></li>
                        <li class="email"><i class="icon anm anm-envelope-l"></i><p>amani.i.hiary@gmail.com</p></li>
                    </ul>
                    <hr />
                    <ul class="list--inline site-footer__social-icons social-icons">
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
@endsection