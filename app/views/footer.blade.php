@section("footer")
    </div><!--/container-->     
    <!-- End Content Part -->
	@if (false)
    <!--=== Footer ===-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>About</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>    
                    <!-- End About -->

                    <!-- Monthly Newsletter -->
                    <div class="headline"><h2>Monthly Newsletter</h2></div> 
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form class="footer-subsribe">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">                            
                            <span class="input-group-btn">
                                <button class="btn-u" type="button">Subscribe</button>
                            </span>
                        </div>                  
                    </form>                         
                    <!-- End Monthly Newsletter -->
                </div><!--/col-md-4-->  
                
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Recent Blogs -->
                    <div class="posts">
                        <div class="headline"><h2>Recent Blog Entries</h2></div>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="{{ URL::to('assets/img/sliders/elastislide/6.jpg') }}" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                        <dt><a href="#"><img src="{{ URL::to('assets/img/sliders/elastislide/10.jpg') }}" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                        <dt><a href="#"><img src="{{ URL::to('assets/img/sliders/elastislide/11.jpg') }}" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                            </dd>
                        </dl>
                    </div>
                    <!-- End Recent Blogs -->                    
                </div><!--/col-md-4-->

                <div class="col-md-4">
                    <!-- Contact Us -->
                    <div class="headline"><h2>Contact Us</h2></div> 
                    <address class="md-margin-bottom-40">
                        110 Seletar Aerospace View, <br />
                        Singapore 797562 <br />
                        Phone: (+65) 6592 7279 <br />
                        Fax: (+65) 6659 0851<br />
                        Email: <a href="mailto:notification.webmaster.ahsa@airbus.com" class="">notification.webmaster.ahsa@airbus.com</a>
                    </address>
                    <!-- End Contact Us -->

                    <!-- Social Links -->
                    <div class="headline"><h2>Stay Connected</h2></div> 
                    <ul class="social-icons">
                        <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                        <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                        <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                        <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                        <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                    </ul>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->
            </div>
        </div> 
    </div><!--/footer-->
    <!--=== End Footer ===-->
	@endif
    
	<!--=== Copyright ===-->
	<br/><br/>
	<div class="copyright navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">                     
					<p>
						2014 &copy; ALL Rights Reserved. 
					</p>
				</div>
				<div class="col-md-6">  
					@if (date("s") >= 0 && date("s") <= 15)
						<img class="pull-right" id="logo-footer" src="{{ URL::to('assets/img/airbus_black_footer.png') }}" alt="Logo">
					@elseif (date("s") >= 16 && date("s") <= 30)
						<img class="pull-right" id="logo-footer" src="{{ URL::to('assets/img/airbus_blue_footer.png') }}" alt="Logo">
					@elseif (date("s") >= 31 && date("s") <= 45)
						<img class="pull-right" id="logo-footer" src="{{ URL::to('assets/img/airbus_silver_footer.png') }}" alt="Logo">
					@elseif (date("s") >= 46 && date("s") <= 60)
						<img class="pull-right" id="logo-footer" src="{{ URL::to('assets/img/airbus_blue3d_footer.png') }}" alt="Logo">
					@endif
				</div>
			</div>
		</div> 
	</div><!--/copyright--> 
	<!--=== End Copyright ===-->
    
@show
