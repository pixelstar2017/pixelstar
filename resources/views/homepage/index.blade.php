@extends('common.layout')


@section('header')
	@include('common.header')
@endsection

@section('content')
<div class="common-bg" id="about">
	<div class="container about-us">
		<div class="row">
			<div class="col">
				<center>
					<h3>ABOUT US</h3>
					<p>
						<b>Pixelstar Technology Institute</b>, is a premier institution established to offer the highest quality of computer education to the citizens of the Philippines alongside its noble goal of bringing computer education to those children living in the barrios or far flung areas using 
						<b>World Class State-of-the-art Technology via VSAT</b>.   PTI believes that computer education is not only available to those living in the cities and to those who can afford it, but also to less-fortunate students. Through PTI, we believe that learning has no border, no boundaries and no limit for potential students who want to pursue their dreams.
					</p>
					<p>
						Because of the lack of computers in the public elementary schools, we offer scholarship programs to bright and deserving but underprivileged elementary students. We aim to bring awareness to students in order for them to learn the new technologies available only in the cities.
					</p>
					<p>
						<b>In cooperation with the Technical Education and Skills Development Association (TESDA)</b>, PTI also offers different programs that cater to the different capacity and levels of their students.
					</p>
					<p>
						Our first and main branch is <b>located in Glan, Saranggani Province</b>, classified as one of the poorest provinces in the Philippines. We also plan to have more branches located at different provinces in the future.
					</p>
			  	</center>
			</div>
		</div>
	</div><!-- about us -->
</div>

<div class="mv-wrapper" id="mv">
	<div class="container text-center">
		<div class="row title">
			<div class="col"><h2>MISSION and VISION</h2></div>
		</div>
		<div class="row">
			<div class="col">
			  <div class="mission">
			  	<img src="{{URL::asset('img/mission.png')}}">
			  	<h2>MISSION</h2>
			  	<p>
			  		PTI shall endeavor to contribute significantly to the responsible computer education and the use of internet for human development and social transformation that gears towards intellectual activity and the upliftment of living conditions in the marginalized parts of the country.
			  		<br><br>
					Responsible computer education to all.
					<br><br>
					Nurturing minds with the latest advance technology.
			  	</p>
			  </div>
			</div>
			<div class="col">
			  <div class="vision">
			  	<img src="{{URL::asset('img/vision.png')}}">
			  	<h2>MISSION</h2>
			  	<p>
			  		PTI aims to be a premier bridging program committed to development and promotion of the computer education and use of internet to cater the educational needs of the less fortunate students in the barrios or far flung areas.
			  	</p>
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="col text-center ourmainobj">
			  	<h2>OUR MAIN OBJECTIVE</h2>
				<p>
					All of us have a crucial role in teaching our students in Principled Institutionalized IT Leadership to challenge ourselves and to look beyond the confines of our organizational objectives for the betterment of the people and students  alike and the communities we serve.

					To teach Basic and Advance IT Education and Vocational course both in the cities and rural areas.

					To reach out at minimal cost for the students, teachers in public school located in rural areas
				</p>
			</div>
		</div>
	</div>
</div>

<div class="common-bg programs" id="programs">
	<div class="container text-center">
		<div class="row title">
			<div class="col"><h2>PROGRAMS</h2></div>
		</div>
		<div class="row">
			<div class="col prog-1">
			  <img src="{{URL::asset('img/certificate.png')}}">
			  <h4>Tesda Accredited Program</h4>
			  <p>Computer Hardware Servicing NC II</p>
			</div>
			<div class="col prog-2">
			  <img src="{{URL::asset('img/computer.png')}}">
			  <h4>Computer Literacy Program</h4>
			</div>
			<div class="col prog-3">
			  <img src="{{URL::asset('img/partnership.png')}}">
			  <h4>Dep-Ed Partnership Program</h4>
			  <p>Microsoft Unlimited Potential Program</p>
			</div>
		</div>
		<div class="row">
			<div class="col prog-4">
				<img src="{{URL::asset('img/student.png')}}">
				<h4>Basic Program For Underpreviledged Students</h4>  
			</div>
		</div>
	</div>
</div>
<div id="gallery">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	  </ol>
	  <div class="carousel-inner" role="listbox">
	    <div class="carousel-item active">
	      <img class="d-block img-fluid" src="{{URL::asset('img/1.jpg')}}" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block img-fluid" src="{{URL::asset('img/2.jpg')}}" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block img-fluid" src="{{URL::asset('img/3.jpg')}}" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block img-fluid" src="{{URL::asset('img/4.jpg')}}" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block img-fluid" src="{{URL::asset('img/5.jpg')}}" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<div class="contact" id="contact">
	<div class="container">
		<div class="row">
		    <div class="col">
		      <div class="contact-info">
		      	Address: Datu Wata Bldg., E. Alegado St., Glan, Sarangani<br>
				Telephone Number: (083) 225 90 34<br>
				Email Address: pixelstar@gmail.com

		      </div>
		    </div>
		 </div>
	</div>
</div>
@endsection

@section('footer')
	@include('common.footer')
@endsection