<!DOCTYPE html>
<html class='no-js' >
    
	<head>
        @include('layouts.meta')
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Symp - Responsive One Page VCard/Resume HTML Template</title>
		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		@include('layouts.css')
	</head>
	<body>
		<!--=============================================================================
			Preloader
		===============================================================================-->
		<div id='preloader' >
			<div class='loader' >
				<img src='/images/load.gif' alt='symp' >
			</div>
		</div>
		<!--=============================================================================
			Main Wrapper
		===============================================================================-->
		<div id='wrapper' >
			<!--=============================================================================
				Front Section
			===============================================================================-->
			<section class='front-section' >
				<div class='container' >
					<div class='transition-mask' ></div>
					<div class='front-person-img' >
						<!--person's image-->
						<img src='/images/man1.png' alt='Symp' >
					</div>
					<!--person's titles-->
					<div class='front-person-titles' >
						<!--title1-->
						<span class='t1' >
							Engineer
						</span>
						<!--title2-->
						<span class='t2' >
							Photographer
						</span>
						<!--title3-->
						<span class='t3' >
							Freelancer
						</span>		
					</div>
					<!--/person's titles-->
					<nav class='front-person-links' >
						<ul>
							<li>
								<a href='#' data-section='about' >About Me</a>
							</li>
							<li>
								<a href='#' data-section='resume' >Resume</a>
							</li>
							<li>
								<a href='#' data-section='portfolio' >Portfolio</a>
							</li>
							<li>
								<a href='#' data-section='blog' >My Blog</a>
							</li>
						</ul>
					</nav>
					<div class='front-heading text-center' >
						<h2>
							Gino King
						</h2>
					</div>
				</div>
			</section>
		
			<!--=============================================================================
				About Section
			===============================================================================-->
			<section id='about' class='about-section section' >
				<div class='basic-info section-block' >
					<div class='container' >
						<div class='section-header text-center' >
							<h2>Basic Info About Me</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
						</div>
						<div class='row' >
							<div class='col-md-4' >
								<div class='about-person-img' >
									<img src='/images/man2.png' alt='symp'>
								</div>
							</div>
							<div class='col-md-8 about-info' >
								<p>
									Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cum dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te cum tation munere noluisse. Enim torquatos ne pri, eum mollis salutandi corrumpit et, fugit apeirian duo ad. Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero cum. Solet honestatis et eum. Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cum dicta iriure at. Ubique maluisset vel te, his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te cum tation munere noluisse. Enim torquatos ne pri, eum mollis salutandi corrumpit et, fugit apeirian duo ad.
								</p>
								<div class='clearfix' ></div>
								<ul class='info-list' >
									<li>
										<div class='inner' >
											<h4>Name</h4>
											<p>金沅禹</p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4>Age</h4>
											<p>24 Years</p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4>Website</h4>
											<p>example.com</p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4>Hometown</h4>
											<p>桃園中壢</p>
										</div>
									</li>
								</ul>
								<a href='#' class='symp-btn link-btn' ><i class='ion-ios-download' ></i>Download Resume</a>
							</div>
						</div>
					</div>
				</div>
				<div class='about-icons section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-lightbulb' ></i>
									</div>
									<div class='content' >
										<h4>Creative</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-trophy' ></i>
									</div>
									<div class='content' >
										<h4>Winner</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-glasses' ></i>
									</div>
									<div class='content' >
										<h4>Smart</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-bolt' ></i>
									</div>
									<div class='content' >
										<h4>Powerful</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									
									<div class='icon' >
										<i class='ion-help-buoy' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Helper</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
									
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-happy' ></i>
									</div>
									<div class='content' >
										<h4>Intelligent</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-game-controller-b' ></i>
									</div>
									<div class='content' >
										<h4>Gamer</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-pulse-strong' ></i>
									</div>
									<div class='content' >
										<h4>Healthy</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='funfacts-block section-block' data-stellar-background-ratio='.2' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>243</h4>
									<p>Awards Won</p>
								</div>
							</div>
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>845</h4>
									<p>Happy Customers</p>
								</div>
							</div>
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>938</h4>
									<p>Projects Done</p>
								</div>
							</div>
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>342</h4>
									<p>Games Played</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='testimonials-block section-block' >
					<div class='container' >
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >Testimonials</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
						</div>
						<div class='row justify-content-center' >
							<div class='col-md-8 col-md-offset-2' >
								<div class='testimonials-slider' >
									<div class='testimonial' >
										<p>
											Ad optere volibus nec, sea ei civibus prasent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium queum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium his eu, cu congue consul cetero.
										</p>
										<div class='author' >
											<h4>Jack Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>
									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>
										<div class='author' >
											<h4>Jessica Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>
									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>
										<div class='author' >
											<h4>Jim Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='footer bg-lightgray section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-xs-6 text-left' >
								<h4>Johny Doe</h4>
							</div>
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='#' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-pinterest' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-dribbble' ></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!--=============================================================================
				Resume Section
			===============================================================================-->
			<section id='resume' class='resume-section section' >
				<div class='container' >
					<div class='row  justify-content-center' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header text-center' >
								<h2 class='animate text-over-block' >My Resume</h2>
								<!--divider-->
								<div class='divider-draft center' ></div>
							</div>
						</div>
					</div>
				</div>
				<div class='timeline-block section-block' >
					<div class='container' >
						<ul class='timeline' >
							<li class='timeline-header' >
								<h4>Experience</h4>
							</li>
							<li>
								<div class='timeline-desc' >
									<h4>2015-2019</h4>
								</div>
								<div class='timeline-content' >
									<h4>中原大學資訊管理系</h4>
									<span>@CYCU Department of Information Management</span>
									<p>
										Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo.
									</p>
								</div>
							</li>
							<li class='inverse' >
								<div class='timeline-desc' >
									<h4>2019-2020</h4>
								</div>
								<div class='timeline-content' >
									<h4>趣比比股份有限公司-實習生</h4>
									<span>@Tripbnb.com</span>
									<p>
										Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo.
									</p>
								</div>
							</li>
							<li>
								<div class='timeline-desc' >
									<h4>2020/06-2020/12</h4>
								</div>
								<div class='timeline-content' >
									<h4>趣比比股份有限公司-全端工程師</h4>
									<span>@Tripbnb.com</span>
									<p>
										Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo.
									</p>
								</div>
							</li>
							<li class='inverse' >
								<div class='timeline-desc' >
									<h4>2021/01-至今</h4>
								</div>
								<div class='timeline-content' >
									<h4>歐萊德國際股份有限公司-後端工程師</h4>
									<span>@Tripbnb.com</span>
									<p>
										Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				<div class='hobbies-block bg-lightgray section-block' >
					<div class='container' >
						
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >My Hobbies</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
						</div>
						<div class='row' >
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-game-controller-b' ></i>
									</div>
									<h4>Gaming</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-book' ></i>
									</div>
									<h4>Reading</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-chatboxes' ></i>
									</div>
									<h4>Chat</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-musical-notes' ></i>
									</div>
									<h4>Music</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-beer' ></i>
									</div>
									<h4>Drinking</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-football' ></i>
									</div>
									<h4>Football</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='skills-block section-block' >
					<div class='container' >
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >My Skills</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
						</div>
						<div class='row' >
							<div class='col-md-6' >
								<div class='skill' >
									<h4>HTML/CSS</h4>
									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>php</h4>
									<div class='skill-bar' data-percent='80' >
										<div class='bar' >
											<div class='percent' >80%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>Bootstrap</h4>
									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>Python</h4>
									<div class='skill-bar' data-percent='60' >
										<div class='bar' >
											<div class='percent' >60%</div>
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-6' >
								<div class='skill' >
									<h4>JavaScript</h4>
									<div class='skill-bar' data-percent='80' >
										<div class='bar' >
											<div class='percent' >80%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>CodeIgniter</h4>
									<div class='skill-bar' data-percent='75' >
										<div class='bar' >
											<div class='percent' >75%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>Laravel</h4>
									<div class='skill-bar' data-percent='40' >
										<div class='bar' >
											<div class='percent' >40%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='footer bg-lightgray section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-xs-6 text-left' >
								<h4>Johny Doe</h4>
							</div>
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='#' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-pinterest' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-dribbble' ></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=============================================================================
				Services Section
			===============================================================================-->
			<section id='services' class='services-section section' >
				
				<div class='container' >
					<div class='row' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header main-title text-center' >
								
								<h2 class='animate text-over-block' >My Services</h2>
								
								<!--divider-->
								<div class='divider-draft center' ></div>
								<!--/divider-->
								
								<p>
									I provide <b>high quality</b> services. My services that I provide are listed below. Hope you will like them. Lorem ipsum dolor.
								</p>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class='services-block section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-camera' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Photography</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-code' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Coding</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-lightbulb' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Creativity</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-monitor' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Web Design</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
						</div>
						
						<div class='row' >
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-camera' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Photography</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-code' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Coding</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-lightbulb' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Creativity</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-monitor' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Web Design</h4>
										
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
										
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class='pricing-block section-block' >
					<div class='container' >
						
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >Pricing</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
							<p>
								How much I charge
							</p>
						</div>
						
						<div class='row' >
							
							<div class='col-md-4 text-center' >
								
								<div class='pricing-table' >
									
									<div class='header' >
										
										<h4>Personal</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >29</span>
											<span class='period' >/mo</span>
										</div>
										
										
									</div>
									
									<ul class='table-items' >
										
										<li>
											Logo Design
										</li>
										<li>
											PSD to HTML
										</li>
										<li>
											Fixed to Responsive
										</li>
										<li>
											App Development
										</li>
										<li>
											Photography
										</li>
										
									</ul>
									
									<a href='#' class='table-btn' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							<div class='col-md-4 text-center' >
								
								<div class='pricing-table' >
									
									<div class='header' >
										
										<h4>Creative</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >39</span>
											<span class='period' >/mo</span>
										</div>
										
									</div>
									
									<ul class='table-items' >
										
										<li>
											Logo Design
										</li>
										<li>
											PSD to HTML
										</li>
										<li>
											Fixed to Responsive
										</li>
										<li>
											App Development
										</li>
										<li>
											Photography
										</li>
										
									</ul>
									
									<a href='#' class='table-btn' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							<div class='col-md-4 text-center' >
								
								<div class='pricing-table' >
									
									<div class='header' >
										
										<h4>Ultimate</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >42</span>
											<span class='period' >/mo</span>
										</div>
										
										
									</div>
									
									<ul class='table-items' >
										
										<li>
											Logo Design
										</li>
										<li>
											PSD to HTML
										</li>
										<li>
											Fixed to Responsive
										</li>
										<li>
											App Development
										</li>
										<li>
											Photography
										</li>
										
									</ul>
									
									<a href='#' class='table-btn' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
				</div>
				
				<div class='process-block bg-lightgray section-block' >
					<div class='container' >
						
						<div class='section-header text-center' >
							<h2>Work Process</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
						</div>
						
						<div class='row' >
							
							<div class='col-md-3' >
								
								<div class='process' >
									
									<div class='number' >
										<span>01</span>
									</div>
									
									<div class='content' >
										
										<h4>Design</h4>
										
										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>
										
									</div>
									
								</div>
								
							</div>
							
							<div class='col-md-3' >
								
								<div class='process' >
									
									<div class='number' >
										<span>02</span>
									</div>
									
									<div class='content' >
										
										<h4>Develop</h4>
										
										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>
										
									</div>
									
								</div>
								
							</div>
							
							<div class='col-md-3' >
								
								<div class='process' >
									
									<div class='number' >
										<span>03</span>
									</div>
									
									<div class='content' >
										
										<h4>Publish</h4>
										
										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>
										
									</div>
									
								</div>
								
							</div>
							
							<div class='col-md-3' >
								
								<div class='process last' >
									
									<div class='number' >
										<span>04</span>
									</div>
									
									<div class='content' >
										
										<h4>Enjoy</h4>
										
										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>
										
									</div>
									
								</div>
								
							</div>
							
							
							
						</div>
						
					</div>
				</div>
				
				<div class='testimonials-block section-block' >
					<div class='container' >
					
						<div class='section-header text-center' >
							
							<h2 class='animate text-over-block' >Testimonials</h2>
								
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
							
							
						</div>
						
						<div class='row justify-content-center' >
							
							<div class='col-md-8 col-md-offset-2' >
								
								<div class='testimonials-slider' >
									
									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>
										
										<div class='author' >
											<h4>Jack Smith123</h4>
											<p>CEO at Google?????</p>
										</div>
									</div>
									
									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>
										
										<div class='author' >
											<h4>Jessica Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>
									
									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>
										
										<div class='author' >
											<h4>Jim Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>
									
									
									
									
								</div>
								
							</div>
							
						</div>
					
					</div>
				</div>
				
				<div class='footer bg-lightgray section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-xs-6 text-left' >
								<h4>Johny Doe</h4>
							</div>
							
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='#' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-pinterest' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-dribbble' ></i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
					</div>
					
				</div>
				
				
			</section>
			
			<!--=============================================================================
				Portfolio Section
			===============================================================================-->
			<section id='portfolio' class='portfolio-section section' >
				
				<div class='portfolio-block section-block' >
					
					<div class='container' >
					
						<div class='row justify-content-center' >
							<div class='col-md-6 col-md-offset-3' >
								
								<div class='section-header text-center' >
								
									<h2 class='animate text-over-block' >Portfolio</h2>
									
									<!--divider-->
									<div class='divider-draft center' ></div>
									<!--/divider-->
									
									<p>
										Check out my works. Lorem ipsum dolor sit amet is simply a dummy text. Lorem ipsum dolor sit amet.
									</p>
								
								</div>
								
							</div>
						</div>
						
						<div id='portfolio-filters' >
							<ul>
								<li>
									<a href='#' data-group='all' class='active' >All</a>
								</li>
								<li>
									<a href='#' data-group='web' >Web</a>
								</li>
								<li>
									<a href='#' data-group='tech' >Tech</a>
								</li>
								<li>
									<a href='#' data-group='photography' >Photography</a>
								</li>
							</ul>
						</div>
						
						<div id='portfolio-grid' class='portfolio-items' >
							
							<div class='item' data-groups='["all","web","photography"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/1.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/1.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","photography","tech"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/2.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/2.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","web","tech"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/3.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/3.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","web"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/4.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/4.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","tech"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/5.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/5.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","photography"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/6.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/6.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","web"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/7.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/7.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","tech"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/8.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/8.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							<div class='item' data-groups='["all","photography"]' >
								<div class='inner' >
									
									<img alt='symp' src='/images/portfolio/9.jpg' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='/images/portfolio/9.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>
							
							
							
						</div>
						
					</div>
					
				</div>
				
				<div class='footer bg-lightgray section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-xs-6 text-left' >
								<h4>Johny Doe</h4>
							</div>
							
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='#' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-pinterest' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-dribbble' ></i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
					</div>
					
				</div>
				
			</section>
			<!--=============================================================================
				/Portfolio Section
			===============================================================================-->
			
			
			<!--=============================================================================
				Blog Section
			===============================================================================-->
			<section id='blog' class='blog-section section' >
				<div class='container' >
					<div class='row justify-content-center' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header text-center' >
								<h2>My Blog</h2>
								<!--divider-->
								<div class='divider-draft center' ></div>
								<p>
									This is my blog where my thoughts live. Check it out to know more about me. Lorem ipsum dolor sit amet.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class='posts-block section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-8' >
								<div class='post' >
									<div class='media' >
										<img alt='symp' src='/images/bg2.jpg' >
									</div>
									<div class='content' >
										<h4>
											<a href='post.html' >
												Simple Post With Image
											</a>
										</h4>
										<ul class='post-icons' >
											<li>
												<i class='ion-ios-person' ></i>
												<span>Johny Doe</span>
											</li>
											<li>
												<i class='ion-ios-clock' ></i>
												<span>14 June 2015</span>
											</li>
											<li>
												<i class='ion-ios-chatbubble' ></i>
												<span>5</span>
											</li>
										</ul>
										<p>
											Cu illud lorem putent vel. Eum in movet nostrum referrentur. His ne tantas tractatos. Sit eu saperet antiopam scripserit. Ei albucius consequuntur sea, no nominavi fabellas phaedrum his....
										</p>
										<a href='post.html' class='read-more' >
											Read More
											<i class='ion-ios-arrow-thin-right' ></i>
										</a>
									</div>
								</div>
								<div class='post' >
									<div class='media' >
										<img alt='symp' src='/images/bg2.jpg' >
									</div>
									<div class='content' >
										<h4>
											<a href='post.html' >
												Simple Post With Image
											</a>
										</h4>
										<ul class='post-icons' >
											<li>
												<i class='ion-ios-person' ></i>
												<span>Johny Doe</span>
											</li>
											<li>
												<i class='ion-ios-clock' ></i>
												<span>14 June 2015</span>
											</li>
											<li>
												<i class='ion-ios-chatbubble' ></i>
												<span>5</span>
											</li>
										</ul>
										<p>
											Cu illud lorem putent vel. Eum in movet nostrum referrentur. His ne tantas tractatos. Sit eu saperet antiopam scripserit. Ei albucius consequuntur sea, no nominavi fabellas phaedrum his....
										</p>
										<a href='post.html' class='read-more' >
											Read More
											<i class='ion-ios-arrow-thin-right' ></i>
										</a>
									</div>
								</div>
								<div class='post' >
									
									<div class='media' >
										<img alt='symp' src='/images/bg2.jpg' >
									</div>
									
									<div class='content' >
										
										<h4>
											<a href='post.html' >
												Simple Post With Image
											</a>
										</h4>
										
										<ul class='post-icons' >
											
											<li>
												<i class='ion-ios-person' ></i>
												<span>Johny Doe</span>
											</li>
											
											<li>
												<i class='ion-ios-clock' ></i>
												<span>14 June 2015</span>
											</li>
											
											<li>
												<i class='ion-ios-chatbubble' ></i>
												<span>5</span>
											</li>
											
											
											
										</ul>
										
										<p>
											Cu illud lorem putent vel. Eum in movet nostrum referrentur. His ne tantas tractatos. Sit eu saperet antiopam scripserit. Ei albucius consequuntur sea, no nominavi fabellas phaedrum his....
										</p>
										
										<a href='post.html' class='read-more' >
											Read More
											<i class='ion-ios-arrow-thin-right' ></i>
										</a>
										
									</div>
									
								</div>
								<div class='post-more' >
									<a href='#' class='more-link' >
										Load More
									</a>
								</div>
							</div>
							<div class='col-md-4' >
								<div class='sidebar' >
									<div class='sidebar-widget' >
										<div class='search-box' >
											<input type='text' placeholder='Search' class='search-input' >
											<a class='search-btn' href='#' >
												<i class='ion-ios-search' ></i>
											</a>
										</div>
									</div>
									<div class='sidebar-widget' >
										<div class='categories-widget' >
											<div class='widget-header' >
												<h4>
													<i class='ion-ios-folder' ></i> Categories
												</h4>
											</div>
											<ul class='sidebar-list' >
												<li>
													<a href='#' >Web Design</a>
												</li>
												<li>
													<a href='#' >Travel</a>
												</li>
												<li>
													<a href='#' >Life Style</a>
												</li>
												<li>
													<a href='#' >Photography</a>
												</li>
												<li>
													<a href='#' >Technology</a>
												</li>
											</ul>
										</div>
									</div>
									<div class='sidebar-widget' >
										<div class='widget-header' >
											<h4>
												<i class='ion-document' ></i>
												Recent Posts
											</h4>
										</div>
										<ul class='sidebar-list' >
											
											<li>
												<a href='#' >
													Your Recent Post's Title. Lorem ipsum dolor sit amet is simply a dummy text.
												</a>
											</li>
											
											<li>
												<a href='#' >
													Your Recent Post's Title. Lorem ipsum dolor sit amet is simply a dummy text.
												</a>
											</li>
											
											<li>
												<a href='#' >
													Your Recent Post's Title. Lorem ipsum dolor sit amet is simply a dummy text.
												</a>
											</li>
											
											<li>
												<a href='#' >
													Your Recent Post's Title. Lorem ipsum dolor sit amet is simply a dummy text.
												</a>
											</li>	
										</ul>
									</div>
									<div class='sidebar-widget' >
										<div class='widget-header' >
											<h4>
												<i class='ion-archive' ></i>
												Archives
											</h4>
											<ul class='sidebar-list' >
												
												<li>
													<a href='#' >
														June (14)
													</a>
												</li>
												<li>
													<a href='#' >
														July (10)
													</a>
												</li>
												<li>
													<a href='#' >
														August(6)
													</a>
												</li>
												<li>
													<a href='#' >
														September(7)
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class='sidebar-widget' >
										<div class='widget-header' >
											<h4>
												<i class='ion-ios-pricetag' ></i>
												Tags
											</h4>
										</div>
										<ul class='sidebar-list list-inline' >
											<li>
												<a href='#' >Design</a>
											</li>
											<li>
												<a href='#' >Tech</a>
											</li>
											<li>
												<a href='#' >Web</a>
											</li>
											<li>
												<a href='#' >Modern</a>
											</li>
											<li>
												<a href='#' >Photography</a>
											</li>
											<li>
												<a href='#' >Life</a>
											</li>
											<li>
												<a href='#' >App</a>
											</li>
											<li>
												<a href='#' >Template</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='footer bg-lightgray section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-xs-6 text-left' >
								<h4>Johny Doe</h4>
							</div>
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='#' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-pinterest' ></i>
										</a>
									</li>
									<li>
										<a href='#' >
											<i class='ion-social-dribbble' ></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--close button-->
			<div class='close-btn' >
				<span></span>
				<span></span>
			</div>
		</div>

		@include('layouts.js')
	</body>
</html>