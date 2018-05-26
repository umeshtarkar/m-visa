@extends('layouts.master')

@section('middle-content')
<!-- breadcrumb -->

<section class="banner b1 inner-banner" id="home">
<!-- //header -->
		<div class="container">
			<h3 class="inner-title">Contact</h3>
		</div>
</section>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{url('/')}}">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact</li>
		</ol>
	</nav>
	<!-- //breadcrumb -->
	<!-- contact -->
	<section class="contact py-5">
		<div class="container py-xl-5 py-sm-3">
			<h5 class="main-w3l-title mb-sm-4 mb-3">Contact Us</h5>
			<div class="wthree_contact_left">
				<h3 class="subheading-wthree mb-md-4 mb-3">Send us an Email</h3>
				<form action="#" method="post">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Name" required="">
						</div>
						<div class="form-group col-md-6">
							<label>Phone</label>
							<input type="text" class="form-control" placeholder="phone" required="">
						</div>
						<div class="form-group col-md-6">
							<label for="exampleFormControlInput1">Email</label>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required="">
						</div>
						<div class="form-group col-md-6">
							<label>Subject</label>
							<input type="text" class="form-control" placeholder="Subject" required="">
						</div>
					</div>
					<div class="form-group">
						<label for="textarea">Message</label>
						<textarea id="textarea" placeholder="Message..." required=""></textarea>
					</div>
					<button type="submit" class="btn btn-primary py-sm-3 py-2 px-5">Submit</button>
				</form>
			</div>
		</div>
	</section>
	<div class="map-agileits">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.512905908186!2d44.50662171518936!3d40.17539757820561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1521098356599"></iframe>
	</div>
	<!-- //contact -->

@endsection