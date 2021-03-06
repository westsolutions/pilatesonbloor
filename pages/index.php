<?php partial('head') ?>

<body >
	<header class="wrapper-header">
		<div class="container">
			<nav class="navbar navbar-expand-lg d-flex justify-content-between">
				<a class="navbar-brand" href="/"><img src="<?= asset('images/logo.svg') ?>" alt="PILATES on BLOOR"></a>
				<i class="fa fa-bars js--toggle-menu" aria-hidden="true"></i>
			    <ul class="navbar-nav hidden-menu">
			    	<i class="fa fa-times js--toggle-close" aria-hidden="true"></i>
			    	<li class="nav-item">
			        	<a class="nav-link" href="#what-is-pilates">What is pilates?</a>
			    	</li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#our-team">Our team</a>
			        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#classes">Classes</a>
			        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#contact">Contact</a>				        
			        </li>
			        <a class="btn btn-sm btn-primary" href="/">Register</a>
			    </ul>
			</nav>
		</div>
	</header> 

	<section class="wrapper-hero text-right ">
		<div class="image-hero"><img src="<?= asset('images/image.svg') ?>" alt="Hero"></div>
		<div class="container">
			<div class="wrap-title-hero">
				<div class="bg-hero"><img src="<?= asset('images/pilates.png') ?>" alt="PILATES"></div>
			
				<h2>Bridging <strong><em>fitness conditioning</em></strong>,<br/><strong><em>functional movement</em></strong> and <strong><em>rehabilitation<br/></em></strong>with professional <strong><em>client centered care</em></strong></h2>
				<a class="btn btn-lg btn-outline-primary" href="/">Register today</a>
			</div>
		</div>
	</section>
	
	<section id="what-is-pilates" class="wrapper-what-is">
		<div class="container text-center">
			<h3>What is pilates?</h3>
			<p><strong><em>Pilates</em></strong> is an intelligent, full body exercise and conditioning system based on modern methodology moving forward the original foundation of the rehabilitative Pilates method. <strong><em>Mindful movements</em></strong> linked with <strong><em>breath</em></strong> that develops deep core strength, flexibility, endurance and movement coordination. The classic Pilates method is <strong><em>low-impact</em></strong>, <strong><em>diverse</em></strong>, <strong><em>stable</em></strong> and <strong><em>dynamic.</em></strong></p>
		</div>
	</section>
	
	<section class="wrapper-exercises text-center">
		<div class="image-exercises"><img src="<?= asset('images/image-exercises.svg') ?>" alt="PILATES"></div>
		<div class="container">
			<h4>Exercises are performed with an emphasis on these <strong><em>ABC</em></strong> precision techniques: </h4>
			<div class="row">
				<div class="col-12 col-md-4 ">
					<div class="wrapper-img">
						<img src="<?= asset('images/a.png') ?>" alt="Alignment & Balanced Posture">
						<p>Alignment &amp;<br/>Balanced Posture</p>
					</div>
				</div>
				<div class="col-12 col-md-4 ">
					<div class="wrapper-img">
						<img src="<?= asset('images/b.png') ?>" alt="Breath-Focused">
						<p>Breath-Focused</p>
					</div>
				</div>
				<div class="col-12 col-md-4 ">
					<div class="wrapper-img">
						<img src="<?= asset('images/c.png') ?>" alt="Core strengthening & Controlled flowing movement">
						<p>Core strengthening &amp;<br/>Controlled flowing<br/>movement</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<section class="wrapper-our-team" id="our-team">
		<div class="our-bg-white"></div>
		<div class="image-our-team"><!--<img src="<?= asset('images/image-our-team.svg') ?>" alt="PILATES">--></div>
		<div class="container">		
			<div class="our-team-title text-center">
				<h3>Our team</h3>
				<h4>Our Pilates approach is <strong><em>safe</em></strong>, <strong><em>stable</em></strong> and <strong><em>functional</em></strong>, taught by experienced Instructor Trainers each with over <strong><em>2 decades</em></strong> of functional movement based practices.</h4>
			</div>
			<div class="our-team-people">
				<div class="our-team-left d-flex">
					<div class="team-img d-flex">
						<img src="<?= asset('images/sarah-koekkoek.png') ?>" alt="Sarah Koekkoek">
					</div>
					<div class="container-text d-flex flex-column text-left ">
						<h6 >Sarah Koekkoek</h6>
						<p>Sarah Koekkoek is an independent dance artist, educator and choreographer. She was born in Burlington, Ontario and trained in the Professional Division at Canada’s Royal Winnipeg Ballet School. She has danced with The Washington Ballet, Canada’s Ballet Jorgen, Les Grands Ballets Canadiens, The Royal Winnipeg Ballet and The Chimera Project as well as participating in several dance residencies at The Banff Centre for the Arts.</p>
						<p>Sarah has been practicing Pilates since 2007 and in 2012 became a Licensed Provider of the <strong>Fletchers Pilates</strong> Method. Sarah continues her Pilates and Movement education through courses and workshops and in January 2019 will begin a three part Movement for Trauma certification with Jane Clapp. </p>
					</div>
				</div>
				<div class="our-team-right d-flex">
					<div class="container-text d-flex flex-column text-right justify-content-center ">
						<h6>Deanna Villa</h6>
						<p>Deanna has been practicing Pilates, Yoga, Thai Massage and meditation since 1998.  Her passion and expertise of movement, stillness, strengthening and lengthening have organically spawned, merged and blossomed beautifully by these movement healing modalities.</p>
						<p><strong>Pilates Mat Certified</strong> — Holistic Bodyworx Trained <strong>Reformer 1 &amp; 2 and ISP</strong> — Injuries &amp; Special Populations: STOTT PilatesTrained</p>
					</div>
					<div class="team-img">
						<img src="<?= asset('images/deanna-villa.png') ?>" alt="Deanna Villa">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="wrapper-blockquote">
		<div class="blockquote-bottom"><img src="<?= asset('images/blockquote-bottom.svg') ?>" alt="PILATES"></div>
		<div class="container">
			<blockquote class="text-center">
				<p>&quot;I have always cherished my time on the mat. The Pilates reformer element has opened, enhanced and expanded the Pilates experience for me to new dimensions and depths, so much that we are honoured to be launching our boutique Pilates on Bloor studio, situated inside our Thai Massage Toronto studio, opening January 2, 2019, or earlier&quot;</p>
				<footer><h6>Deanna Villa</h6></footer>
			</blockquote>
		</div>
	</section>
	
	<section class="wrapper-card" id="classes">
		<div class="container">
			<div class="classes-title text-center">
				<h3>Classes</h3>
				<p>Our classes ensure that your <strong><em>performance goals</em></strong> are met in a <strong><em>peaceful</em></strong> and <strong><em>grounded</em></strong> environment. Stable, methodical and focused to dynamic and precise active flow.</p>
			</div>
			<div class="row row-eq-height">
				<div class="col-12 col-md-4 text-center">
					<div class="card">
						<img class="card-img-top" src="<?= asset('images/istockphoto-846236610-1024x1024.jpg') ?>" alt="Card image cap">
						<div class="card-body d-flex  flex-column  align-items-center justify-content-between">
							<div class="wrap-title-card">
						    	<h6 class="card-title">Group</h6>
						    	<p class="card-text">Small classes for personal attention. Classes are built from core, foundation postures and exercise, then expands and layers for those intermediate dynamics which insures all fitness and health levels are met with profound results.</p>
					    	</div>
					    	<a href="/" class="btn btn-md btn-primary">Register</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 text-center">
					<div class="card"">
						<img class="card-img-top" src="<?= asset('images/istockphoto-492158680-1024x1024.jpg') ?>" alt="Card image cap">
						<div class="card-body d-flex  flex-column  align-items-center justify-content-between">
							<div class="wrap-title-card">
						    	<h6 class="card-title">Privates</h6>
						    	<p class="card-text">One on one training on the reformer or mat.  
								Personal and focused specifically for you.</p>
							</div>
						    	<a href="/" class="btn btn-md btn-primary">Register</a>

						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 text-center">
					<div class="card"">
						<img class="card-img-top" src="<?= asset('images/istockphoto-495506158-1024x1024.jpg') ?>" alt="Card image cap">
						<div class="card-body d-flex  flex-column  align-items-center justify-content-between">
							<div class="wrap-title-card">
						    	<h6 class="card-title">Semi-Privates</h6>
						    	<p class="card-text">Two per training on the reformer or mat.
								Bring a partner or friend and advance together.</p>
							</div>
					    	<a href="/" class="btn btn-md btn-primary">Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="wrapper-prising">
		<div class="pricing-top"><img src="<?= asset('images/pricing-top.svg') ?>" alt="PILATES"></div>
		<div class="container text-center">
			<h3>Pricing</h3>
			<div class="table-responsive">
				<table class="table">
					<thead>
				    	<tr>
				    		<th scope="col" class="bg-int"></th>
				      		<th scope="col" class="br-radius-l">Private</th>
				      		<th scope="col">Semi-private&ast;<br/>(2 persons)</th>
				      		<th scope="col">group<br/>reformer</th>
				      		<th scope="col" class="br-radius-r">group mat</th>
				    	</tr>
					</thead>
					<tbody>
					    <tr>
					    	<th scope="row" rowspan="3" bgcolor="#FBF0DB" class="intro" style="background-image:url(<?= asset('images/intro.svg') ?>)"></th>
					    	<td class="border-r"><strong><em>Intro Session</em></strong><br/>$63</td>
					    	<td class="border-r bg-white"><strong><em>Intro Session</em></strong><br/>$40</td>
					    	<td class="border-r"><strong><em>Intro Session</em></strong><br/>$25</td>
					    	<td class="border-r bg-white"><strong><em>Intro Session</em></strong><br/>$18</td>
					    </tr>
					    <tr>
					    	<td class="border-r"><strong><em>Intro 2 Sessions</em></strong><br/>$108 <span>($54/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>Intro 3 Sessions</em></strong><br/>$108 <span>($36/ea.)</span></td>
					    	<td class="border-r"><strong><em>Intro 4 Sessions</em></strong><br/>$108 <span>($27/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>Intro 6 Sessions</em></strong><br/>$108 <span>($18/ea.)</span></td>
					    </tr>
					    <tr class="border-bottom">
					    	<td class="border-r"><strong><em>Intro 18 Sessions</em></strong><br/>$108 <span>($18/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>Intro 30 Sessions</em></strong><br/>$108 <span>($18/ea.)</span></td>
					    	<td class="border-r"><strong><em>Intro 40 Sessions</em></strong><br/>$108 <span>($18/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>Intro 60 Sessions</em></strong><br/>$108 <span>($18/ea.)</span></td>
					    </tr>
					    <tr>
					    	<th scope="row" rowspan="4" bgcolor="#FBF0DB" class="regular" style="background-image:url(<?= asset('images/regular.svg') ?>)"></th>
					    	<td class="border-r"><strong><em>1 Session</em></strong><br/>$90</td>
					    	<td class="border-r bg-white"><strong><em>1 Session</em></strong><br/>$50</td>
					    	<td class="border-r"><strong><em>1 Session</em></strong><br/>$35</td>
					    	<td class="border-r bg-white"><strong><em>1 Session</em></strong><br/>$23</td>
					    </tr>
					    <tr>
					    	<td class="border-r"><strong><em>5 Sessions</em></strong><br/>$425 <span>($85/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>5 Sessions</em></strong><br/>$240 <span>($48/ea.)</span></td>
					    	<td class="border-r"><strong><em>5 Sessions</em></strong><br/>$165 <span>($33/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>5 Sessions</em></strong><br/>$110 <span>($22/ea.)</span></td>
					    </tr>
					    <tr>
					    	<td class="border-r"><strong><em>Intro 10 Sessions</em></strong><br/>$800 ($80/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>10 Sessions</em></strong><br/>$450 <span>($45/ea.)</span></td>
					    	<td class="border-r"><strong><em>10 Sessions</em></strong><br/>$300 <span>($30/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>10 Sessions</em></strong><br/>$210 <span>($21/ea.)</span></td>
					    </tr>
					    <tr class="border-bottom">
					    	<td class="border-r"><strong><em>Intro 30 Sessions</em></strong><br/>$2250 <span>($75/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>30 Sessions</em></strong><br/>$1200 <span>($40/ea.)</span></td>
					    	<td class="border-r"><strong><em>30 Sessions</em></strong><br/>$810 <span>($27/ea.)</span></td>
					    	<td class="border-r bg-white"><strong><em>30 Sessions</em></strong><br/>$600 <span>($20/ea.)</span></td>
					    </tr>
					</tbody>
				</table>
			</div>
			<p><strong><em>&ast; If only 1 person shows up for a booked semi-private, the private fee will apply.</em></strong></p>
			<p>We require 24 hours’ notice for cancellations for all private, semi-private and group sessions, otherwise, regular charges will apply.<br/><strong><em>To cancel</em></strong> log into your account and cancel the booking.</p>
			<h4>We look forward to seeing you on the mat!</h4>
			<a class="btn btn-lg btn-outline-primary" href="/">Register today</a>
		</div>
	</section>

	<section class="wrapper-form" id="contact">
		<div class="map-form"></div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5 col-xl-3">
					<div class="wrap-contact">
						<h6>Contact</h6>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i><p>664 Bloor St West , 2nd FL<br/>Toronto ON<br/>M6G 1L2</p></li>
							<li class="add-pad"><p><strong><em>Located inside Thai<br/>Massage Toronto Studio</em></strong></p></li>
							<li><a href = "tel: (416) 533 7419"><i class="fa fa-phone" aria-hidden="true"></i><p>(416) 533 7419</p></a></li>
							<li class="diffr-color"><a href = "mailto: info@pilatesonbloor.com"><i class="fa fa-envelope" aria-hidden="true"></i><p>info@pilatesonbloor.com</p></a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-7 col-xl-5">
					<h6>Questions?</h6>
					<p class="form-title">Fill in and submit the form and we will get back to you as quickly as possible</p>
					<form>
						<div class="form-row">
					    	<div class="form-group col-md-6">
					    		<input type="text" class="form-control" id="inlineFormInputName" placeholder="Name">
					    	</div>
					    	<div class="form-group col-md-6">
					    		<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
					    	</div>
						</div>
						<div class="form-group">
					        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
						</div>
					  <button type="submit" class="btn btn-md btn-primary">Learn more</button> 
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 order-2 order-lg-1">
					<span>&#169; 2018 Pilates on Bloor. All rights reserved</p></span>
				</div>
				<div class="col-12 col-lg-6 order-1 order-lg-2">
					<ul class="social-link">
						<li><a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
  <script src="<?= asset('scripts/main.js') ?>"></script>
</body>
</html>
