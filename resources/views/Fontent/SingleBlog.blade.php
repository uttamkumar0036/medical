@extends('Fontent.Master')
@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-5 text-lg">Blog Single</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<img src="images/blog/blog-1.jpg" alt="" class="img-fluid">

			<div class="blog-item-content mt-5">
				<div class="blog-item-meta mb-3">
					<span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Equipment</span>
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
				</div> 

				<h2 class="mb-4 text-md"><a href="blog-single.html">Healthy environment to care with modern equipment</a></h2>

				<p class="lead mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae iure officia nihil nemo, repudiandae itaque similique praesentium non aut nesciunt facere nulla, sequi sunt nam temporibus atque earum, ratione, labore.</p>

				<blockquote class="quote">
					A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.
				</blockquote>

				
				<p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p>

				<div class="mt-5 clearfix">
				    <ul class="float-left list-inline tag-option"> 
				    	<li class="list-inline-item"><a href="#">Advancher</a></li>
				    	<li class="list-inline-item"><a href="#">Landscape</a></li>
				    	<li class="list-inline-item"><a href="#">Travel</a></li>
				   	</ul>        

				    <ul class="float-right list-inline">
				        <li class="list-inline-item"> Share: </li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-facebook" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-twitter" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-pinterest" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-linkedin" aria-hidden="true"></i></a></li>
				    </ul>
			    </div>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="comment-area mt-4 mb-5">
			<h4 class="mb-4">2 Comments on Healthy environment... </h4>
			<ul class="comment-tree list-unstyled">
				<li class="mb-5">
					<div class="comment-area-box">
						<div class="comment-thumb float-left">
							<img alt="" src="images/blog/testimonial1.jpg" class="img-fluid">
						</div>

						<div class="comment-info">
							<h5 class="mb-1">John</h5>
							<span>United Kingdom</span>
							<span class="date-comm">| Posted April 7, 2019</span>
						</div>
						<div class="comment-meta mt-2">
							<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply</a>
						</div>

						<div class="comment-content mt-3">
							<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
						</div>
					</div>
				</li>

				<li>
					<div class="comment-area-box">
						<div class="comment-thumb float-left">
							<img alt="" src="images/blog/testimonial2.jpg" class="img-fluid">
						</div>

						<div class="comment-info">
							<h5 class="mb-1">Philip W</h5>
							<span>United Kingdom</span>
							<span class="date-comm">| Posted June 7, 2019</span>
						</div>

						<div class="comment-meta mt-2">
							<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply </a>
						</div>

						<div class="comment-content mt-3">
							<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>


	<div class="col-lg-12">
		<form class="comment-form my-5" id="comment-form">
			<h4 class="mb-4">Write a comment</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
					</div>
				</div>
			</div>


			<textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

			<input class="btn btn-main-2 btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
		</form>
	</div>
</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	<div class="sidebar-widget search  mb-3 ">
		<h5>Search Here</h5>
		<form action="#" class="search-form">
			<input type="text" class="form-control" placeholder="search">
			<i class="ti-search"></i>
		</form>
	</div>


	<div class="sidebar-widget latest-post mb-3">
		<h5>Popular Posts</h5>

        <div class="py-2">
        	<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
        </div>

        <div class="py-2">
       		<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
        </div>

        <div class="py-2">
        	<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
        </div>
	</div>

	<div class="sidebar-widget category mb-3">
		<h5 class="mb-4">Categories</h5>

		<ul class="list-unstyled">
		  <li class="align-items-center">
		    <a href="#">Medicine</a>
		    <span>(14)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Equipments</a>
		    <span>(2)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Heart</a>
		    <span>(10)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Free counselling</a>
		    <span>(5)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Lab test</a>
		    <span>(5)</span>
		  </li>
		</ul>
	</div>


	<div class="sidebar-widget tags mb-3">
		<h5 class="mb-4">Tags</h5>

		<a href="#">Doctors</a>
		<a href="#">agency</a>
		<a href="#">company</a>
		<a href="#">medicine</a>
		<a href="#">surgery</a>
		<a href="#">Marketing</a>
		<a href="#">Social Media</a>
		<a href="#">Branding</a>
		<a href="#">Laboratory</a>
	</div>


	<div class="sidebar-widget schedule-widget mb-3">
		<h5 class="mb-4">Time Schedule</h5>

		<ul class="list-unstyled">
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Monday - Friday</a>
		    <span>9:00 - 17:00</span>
		  </li>
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Saturday</a>
		    <span>9:00 - 16:00</span>
		  </li>
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Sunday</a>
		    <span>Closed</span>
		  </li>
		</ul>

		<div class="sidebar-contatct-info mt-4">
			<p class="mb-0">Need Urgent Help?</p>
			<h3>+23-4565-65768</h3>
		</div>
	</div>

</div>
            </div>   
        </div>
    </div>
</section>

@endsection