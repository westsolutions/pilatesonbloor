<?php partial('head') ?>

<body >

	<header class="wrapper-header">
		<div class="container">
			<nav class="navbar navbar-expand-lg d-flex justify-content-between">
				<a class="navbar-brand" href="/"><img src="<?= asset('images/logo.svg') ?>" alt=""></a>
				<i class="fas fa-bars js--toggle-menu"></i>
			    <ul class="navbar-nav">
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
			        <button class="btn btn-sm btn-outline-primary" type="button">Register</button>
			    </ul>
			</nav>
		</div>
	</header> 
	

	
	<section class="wrapper-hero text-right ">
		<div class="container">
			<div class="bg-hero"  style="background-image:url(<?= asset('images/pilates.png') ?>)"></div>
			<h2>Bridging <strong><em>fitness conditioning</em></strong>,</br><strong><em>functional movement</em></strong> and <strong><em>rehabilitation</br></em></strong>with professional <strong><em>client centered care</em></strong></h2>
			<button class="btn btn-lg btn-outline-primary" type="button">Register today</button>
		</div>
	</section>

	
	<section class="wrapper-what-is">
		<div class="container text-center">
			<h3 id="what-is-pilates">What is pilates?</h3>
			<p><strong><em>Pilates</em></strong> is an intelligent, full body exercise and conditioning system based on modern methodology moving forward the original foundation of the rehabilitative Pilates method. <strong><em>Mindful movements</em></strong> linked with <strong><em>breath</em></strong> that develops deep core strength, flexibility, endurance and movement coordination. The classic Pilates method is <strong><em>low-impact</em></strong>, <strong><em>diverse</em></strong>, <strong><em>stable</em></strong> and <strong><em>dynamic.</em></strong></p>
		</div>
	</section>

	
	<section class="wrapper-exercises text-center">
		<div class="container">
			<h4>Exercises are performed with an emphasis on these <strong><em>ABC</em></strong> precision techniques: </h4>
			<div class="row">
				<div class="col-4">
					<div class="wrapper-img">
						<img src="<?= asset('images/a.png') ?>" alt="">
						<p>Alignment &</br>Balanced Posture</p>
					</div>
				</div>
				<div class="col-4">
					<div class="wrapper-img">
						<img src="<?= asset('images/b.jpg') ?>" alt="">

						<p>Breath-Focused</p>
					</div>
				</div>
				<div class="col-4">
					<div class="wrapper-img">
						<img src="<?= asset('images/c.png') ?>" alt="">
						<p>Core strengthening &</br>Controlled flowing</br>movement</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>


	<section class="wrapper-our-team">
		<div class="container">		
			<div class="our-team-title text-center">
				<h3 id="our-team">our team</h3>
				<p>Our Pilates approach is <strong><em>safe</em></strong>, <strong><em>stable</em></strong> and <strong><em>functional</em></strong>, taught by experienced Instructor Trainers each with over <strong><em>2 decades</em></strong> of functional movement based practices.</p>
			</div>
			<div class="our-team-people">
				<div class="our-team-left d-flex">
					<div class="team-img">
						<img src="<?= asset('images/sarah-koekkoek.png') ?>" alt="">
					</div>
					<div class="container-text d-flex flex-column text-left justify-content-end">
						<h5>Sarah Koekkoek</h5>
						<p>Sarah Koekkoek is an independent dance artist, educator and choreographer. She was born in Burlington, Ontario and trained in the Professional Division at Canada’s Royal Winnipeg Ballet School. She has danced with The Washington Ballet, Canada’s Ballet Jorgen, Les Grands Ballets Canadiens, The Royal Winnipeg Ballet and The Chimera Project as well as participating in several dance residencies at The Banff Centre for the Arts. 
						Sarah has been practicing Pilates since 2007 and in 2012 became a Licensed Provider of the <strong>Fletchers Pilates</strong> Method. Sarah continues her Pilates and Movement education through courses and workshops and in January 2019 will begin a three part Movement for Trauma certification with Jane Clapp. </p>
					</div>
				</div>
				<div class="our-team-right d-flex">
					<div class="container-text d-flex flex-column text-right justify-content-center">
						<h5>Deanna Villa</h5>
						<p>Deanna has been practicing Pilates, Yoga, Thai Massage and meditation since 1998.  Her passion and expertise of movement, stillness, strengthening and lengthening have organically spawned, merged and blossomed beautifully by these movement healing modalities.</p>
						<p><strong>Pilates Mat Certified</strong> — Holistic Bodyworx Trained <strong>Reformer 1 & 2 and ISP</strong> — Injuries & Special Populations: STOTT PilatesTrained</p>
					</div>
					<div class="team-img">
						<img src="<?= asset('images/deanna-villa.png') ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="wrapper-blockquote">
		<div class="container">
			<blockquote class="text-center">
				<p>"I have always cherished my time on the mat. The Pilates reformer element has opened, enhanced and expanded the Pilates experience for me to new dimensions and depths, so much that we are honoured to be launching our boutique Pilates on Bloor studio, situated inside our Thai Massage Toronto studio, opening January 2, 2019, or earlier”</p>
				<footer>Deanna Villa</footer>
			</blockquote>
		</div>
	</section>
	
	
	<section class="wrapper-classes">
		<div class="container">
			<div class="container-classes-text text-center">
				<h3 id="classes">Classes</h3>
				<p>Our classes ensure that your <strong><em>performance goals</em></strong> are met in a <strong><em>peaceful</em></strong> and <strong><em>grounded</em></strong> environment. Stable, methodical and focused to dynamic and precise active flow.</p>
			</div>
			<div class="row">
				<div class="col-4 text-center">
					<div class="card">
						<img class="card-img-top" src="<?= asset('images/istockphoto-846236610-1024x1024.jpg') ?>" alt="Card image cap">
						<div class="card-body">
					    	<h5 class="card-title">Group</h5>
					    	<p class="card-text">Small classes for personal attention. Classes are built from core, foundation postures and exercise, then expands and layers for those intermediate dynamics which insures all fitness and health levels are met with profound results.</p>
					    	<a href="/" class="btn btn-md btn-primary">Register</a>
						</div>
					</div>
				</div>
				<div class="col-4 text-center">
					<div class="card"">
						<img class="card-img-top" src="<?= asset('images/istockphoto-492158680-1024x1024.jpg') ?>" alt="Card image cap">
						<div class="card-body">
					    	<h5 class="card-title">Privates</h5>
					    	<p class="card-text">One on one training on the reformer or mat.  
							Personal and focused specifically for you.</p>
					    	<a href="/" class="btn btn-md btn-primary">Register</a>
						</div>
					</div>
				</div>
				<div class="col-4 text-center">
					<div class="card"">
						<img class="card-img-top" src="<?= asset('images/istockphoto-495506158-1024x1024.jpg') ?>" alt="Card image cap">
						<div class="card-body">
					    	<h5 class="card-title">Semi-Privates</h5>
					    	<p class="card-text">Two per training on the reformer or mat.
							Bring a partner or friend and advance together.</p>
					    	<a href="/" class="btn btn-md btn-primary">Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="wrapper-prising">
		<div class="container">
			<table class="table table-sm">
				<thead>
			    	<tr>
			    		<th scope="col"></th>
			      		<th scope="col">Private</th>
			      		<th scope="col">Semi-private* (2 persons)</th>
			      		<th scope="col">group reformer</th>
			      		<th scope="col">group mat</th>
			    	</tr>
				</thead>
				<tbody>
				    <tr>
				    	<th scope="row" rowspan="3" bgcolor="#FBF0DB">Intro</th>
				    	<td>Intro Session $63</td>
				    	<td>Intro Session $40</td>
				    	<td>Intro Session $25</td>
				    	<td>Intro Session $18</td>
				    </tr>
				    <tr>
				    	<td>Intro 2 Sessions $108 ($54/ea.)</td>
				    	<td>Intro 3 Sessions $108 ($36/ea.)</td>
				    	<td>Intro 4 Sessions $108 ($27/ea.)</td>
				    	<td>Intro 6 Sessions $108 ($18/ea.)</td>
				    </tr>
				    <tr>
				    	<td>Intro 18 Sessions $108 ($18/ea.)</td>
				    	<td>Intro 30 Sessions $108 ($18/ea.)</td>
				    	<td>Intro 40 Sessions $108 ($18/ea.)</td>
				    	<td>Intro 60 Sessions $108 ($18/ea.)</td>
				    </tr>
				    <tr>
				    	<th scope="row" rowspan="4" bgcolor="#FBF0DB">Regular</th>
				    	<td>1 Session $90</td>
				    	<td>1 Session $50</td>
				    	<td>1 Session $35</td>
				    	<td>1 Session $23</td>
				    </tr>
				    <tr>
				    	<td>5 Sessions $425 ($85/ea.)</td>
				    	<td>5 Sessions $240 ($48/ea.)</td>
				    	<td>5 Sessions $165 ($33/ea.)</td>
				    	<td>5 Sessions $110 ($22/ea.)</td>
				    </tr>
				    <tr>
				    	<td>Intro 10 Sessions $800 ($80/ea.)</td>
				    	<td>10 Sessions $450 ($45/ea.)</td>
				    	<td>10 Sessions $300 ($30/ea.)</td>
				    	<td>10 Sessions $210 ($21/ea.)</td>
				    </tr>
				    <tr>
				    	<td>Intro 30 Sessions $2250 ($75/ea.)</td>
				    	<td>30 Sessions $1200 ($40/ea.)</td>
				    	<td>30 Sessions $810 ($27/ea.)</td>
				    	<td>30 Sessions $600 ($20/ea.)</td>
				    </tr>
				</tbody>
			</table>
			<p>* If only 1 person shows up for a booked semi-private, the private fee will apply.</p>
			<p>We require 24 hours’ notice for cancellations for all private, semi-private and group sessions, otherwise, regular charges will apply. To cancel log into your account and cancel the booking.</p>
			<p>We look forward to seeing you on the mat!</p>
			<button class="btn btn-xl btn-outline-primary" type="button">Register today</button>
		</div>
	</section>

	<section class="wrapper-form">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<h4 id="contact">Contact</h4>
					<ul>
						<li>664 Bloor St West , 2nd FL</br>Toronto ON</br>M6G 1L2</li>
						<li><strong><em>Located inside Thai Massage Toronto Studio</em></strong></li>
						<li>(416) 533 7419</li>
						<li>info@pilatesonbloor.com</li>
					</ul>
				</div>
				<div class="col-4">
					<h4>Questions?</h4>
					<p>Fill in and submit the form and we will get back to you as quickly as possible</p>
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
					        <textarea class="form-control"" rows="3"></textarea>
						</div>
					  <button type="submit" class="btn btn-lg btn-primary">Learn more</button>
					</form>
				</div>
				<div class="col-5">
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-9">
					<p>© 2018 Pilates on Bloor. All rights reserved</p>
				</div>
				<div class="col-3">
					<ul>
						<li>a</li>
						<li>aa</li>
						<li>aa</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
  <!--<?php partial('nav') ?>-->
  <script src="<?= asset('scripts/main.js') ?>"></script>
</body>
</html>
