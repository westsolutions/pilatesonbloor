<?php partial('head') ?>

<body >
	<div class="container">
		<header class="wrapper-header">
			<nav class="navbar navbar-expand-lg d-flex justify-content-between">
				<a class="navbar-brand" href="#">PILATES on BLOOR</a>
			    <ul class="navbar-nav">
			    	<li class="nav-item">
			        	<a class="nav-link" href="#">What is pilates?</a>
			    	</li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#">Our team</a>
			        </li>
			        <li class="nav-item">
			        	<a class="nav-link" href="#">Classes</a>
			        </li>
			        <li class="nav-item dropdown">
			        	<a class="nav-link" href="#">Contact</a>				        
			        </li>
			        <li class="nav-item dropdown">
			        	<form class="form-inline">
						    <button class="btn btn-sm btn-outline-success" type="button">Register</button>
					  	</form>				        
			        </li>
			    </ul>
			</nav>
		</header>
	</div>

	<div class="container">
		<div class="wrapper-hero text-right ">
			<div class="bg-hero"  style="background-image:url(<?= asset('images/A.png') ?>)"></div>
			<p>Bridging <em>fitness conditioning</em>,  <em>functional movement</em> and <em>rehabilitation</em>  with professional <em>client centered care</em></p>
			<form>
				<button class="btn btn-lg btn-outline-success" type="button">Register today</button>
			</form>	
		</div>
	</div>

	<div class="container">
		<div class="wrapper-what-is text-center ">
			<h3>What is pilates?</h3>
			<p class="border"><em>Pilates</em> is an intelligent, full body exercise and conditioning system based on modern methodology moving forward the original foundation of the rehabilitative Pilates method. <em>Mindful movements<em>  linked with <em>breath</em> that develops deep core strength, flexibility, endurance and movement coordination. The classic Pilates method is <em>low-impact</em>, <em>diverse</em>, <em>stable<em> and <em>dynamic.</em></p>
		</div>
	</div>

	<div class="container">
		<div class="wrapper-exercises text-center ">
			<h3>Exercises are performed with an emphasis on these <em>ABC</em> precision techniques: </h3>
			<div class="wrapper-img d-flex flex-row justify-content-between">
				<figure>
					<img src="/src/images/A.png" alt="Макака на дереве">
					<figcaption>Alignment &  Balanced Posture</figcaption>
				</figure>
				<figure>
					<img src="/src/images/B.jpg" alt="Макака на дереве">
					<figcaption>Breath-Focused</figcaption>
				</figure>
				<figure>
					<img src="/src/images/C.png" alt="Макака на дереве">
					<figcaption>Core strengthening & Controlled flowing movement</figcaption>
				</figure>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="wrapper-our-team">
			<div class="container-our-team-title">
				<h3>our team</h3>
				<p>Our Pilates approach is <em>safe</em>, <em>stable<em> and <em>functional</em>, taught  by experienced Instructor Trainers each with over <em>2 decades</em>  of functional movement based practices.</p>
			</div>
			<div class="container-our-team-people">
				<div class="container-our-team-left d-flex">
					<div class="container-img">
						<img src="/src/images/A.png" alt="">
					</div>
					<div class="container-text d-flex flex-column text-right justify-content-end">
						<h4>Sarah Koekkoek</h4>
						<p class="">Sarah Koekkoek is an independent dance artist, educator and choreographer. She was born in Burlington, Ontario and trained in the Professional Division at Canada’s Royal Winnipeg Ballet School. She has danced with The Washington Ballet, Canada’s Ballet Jorgen, Les Grands Ballets Canadiens, The Royal Winnipeg Ballet and The Chimera Project as well as participating in several dance residencies at The Banff Centre for the Arts. 
						Sarah has been practicing Pilates since 2007 and in 2012 became a Licensed Provider of the <bold>Fletchers Pilates</bold> Method. Sarah continues her Pilates and Movement education through courses and workshops and in January 2019 will begin a three part Movement for Trauma certification with Jane Clapp. </p>
					</div>
				</div>
				<div class="container-our-team-right d-flex">
					<div class="container-text d-flex flex-column text-left justify-content-center">
						<h4>Deanna Villa</h4>
						<p>Deanna has been practicing Pilates, Yoga, Thai Massage and meditation since 1998.  Her passion and expertise of movement, stillness, strengthening and lengthening have organically spawned, merged and blossomed beautifully by these movement healing modalities. 
						Pilates Mat Certified — Holistic Bodyworx Trained Reformer 1 & 2 and ISP — Injuries & Special Populations: STOTT PilatesTrained</p>
					</div>
					<div class="container-img">
						<img src="/src/images/A.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<blockquote class="text-center">
			<p>"I have always cherished my time on the mat. The Pilates reformer element has opened, enhanced and expanded the Pilates experience for me to new dimensions and depths, so much that we are honoured to be launching our boutique Pilates on Bloor studio, situated inside our Thai Massage Toronto studio, opening January 2, 2019, or earlier”</p>
			<footer>Deanna Villa</footer>
		</blockquote>
	</div>
	
	<div class="container">
		<div class="wrapper-classes">
			<div class="container-classes-text">
				<h3>Classes</h3>
				<p>Our classes ensure that your <em><bold>performance goals</bold></em> are met in a <em><bold>peaceful</bold></em> and <em><bold>grounded</bold></em> environment. Stable, methodical and focused to dynamic and precise active flow.</p>
			</div>

			<div class="container-classes-items d-flex flex-row justify-content-between text-center">
				<div class="container-classes-items">
					<img src="/src/images/A.png" alt="">	
					<div class="classes-item"><h4>Group</h4>
						<p>Small classes for personal attention. Classes are built from core, foundation postures and exercise, then expands and layers for those intermediate dynamics which insures all fitness and health levels are met with profound results.</p>
						<button class="btn btn-lg btn-outline-success" type="button">Register</button>
					</div>
				</div>
				<div class="container-classes-items">
					<img src="/src/images/A.png" alt="">	
					<div class="classes-item"><h4>Group</h4>
						<p>Small classes for personal attention. Classes are built from core, foundation postures and exercise, then expands and layers for those intermediate dynamics which insures all fitness and health levels are met with profound results.</p>
						<button class="btn btn-lg btn-outline-success" type="button">Register</button>
					</div>
				</div>
				<div class="container-classes-items">
					<img src="/src/images/A.png" alt="">	
					<div class="classes-item"><h4>Group</h4>
						<p>Small classes for personal attention. Classes are built from core, foundation postures and exercise, then expands and layers for those intermediate dynamics which insures all fitness and health levels are met with profound results.</p>
						<button class="btn btn-lg btn-outline-success" type="button">Register</button>
					</div>
				</div>
			</div>

		</div>
	</div>
  <!--<?php partial('nav') ?>-->
  <script src="<?= asset('scripts/main.js') ?>"></script>
</body>
</html>
