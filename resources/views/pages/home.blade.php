@extends('layout')

@section('content')
<div id="wrapper">
	
	@include('header')

	<section id="recipe-container">

		<div id="searchdiv">
			<h4 id="welcome-message">Welcome, {{ $user->name }}</h4>

			<div id="searchbox">

				<button class="r-float">SEARCH</button>
				<input type="text" name="search" placeholder="Lasagna, Peach Cobller, Fettuccine" class="r-float" />
				<label for="search" class="r-float">Search for recipe:</label>

			</div>
		</div>

		<div id="recipe-cardlist"> <!-- Start recipe list -->
			
			@if (count($recipes) === 0)
				<p>There are currently no existing recipes. Please create a recipe.</p>
			@endif

			@foreach ($recipes as $index => $recipe)
			<div class="recipe-card">
				<div class="image">
					<a href="/recipes/{{ $recipe->course }}/{{ $recipe->title }}">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div> 
						<img src="{{ $recipe->image }}" alt="{{ $recipe->title }} image" class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">{{ $recipe->title }}</span>

				<p class="summary">{{ $recipe->summary }}</p>

				<div class="{{ ($index % 2 != 0 ) ? 'peach-banner' : 'yellow-banner' }}">
					<a href="#"> 
						<div class="main-dish-icon"></div>
					</a>
					<p class="category-title">{{ $recipe->course }}</p>
				</div>

				<p class="author">{{ $recipe->author }}</p>
			</div>
			@endforeach

			<!-- <div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div> 
						<img src="img/lasagna.jpg" alt="Lasagna" class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Lasagna</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="yellow-banner">
					<a href="#"> 
						<div class="main-dish-icon"></div>
					</a>
					<p class="category-title">Main dish</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div>

			<div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div>
						<img src="img/cobbler.jpg" alt="Peach Cobbler" class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Peach Crumble Slab Pie</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="peach-banner">
					<a href="#"> 
						<div class="dessert-icon"></div>
					</a>
					<p class="category-title">Dessert</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div>

			<div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div>
						<img src="img/alfredo.jpg" alt="Fettuccine Alfredo" class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Fettuccine Alfredo</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="yellow-banner">
					<a href="#"> 
						<div class="main-dish-icon"></div>
					</a>
					<p class="category-title">Main dish</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div>

			<div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div>
						<img src="img/ravioli.jpg" alt="Spinach & Portabella Ravioli"  class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Spinach & Portabella Ravioli</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="peach-banner">
					<a href="#"> 
						<div class="main-dish-icon"></div>
					</a>
					<p class="category-title">Main dish</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div>

			<div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div>
						<img src="img/lasagna.jpg" alt="Lasagna" class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Lasagna</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="yellow-banner">
					<a href="#"> 
						<div class="main-dish-icon"></div>
					</a>
					<p class="category-title">Main dish</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div>
			<div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div>
						<img src="img/cobbler.jpg" alt="Peach Cobbler" class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Peach Crumble Slab Pie</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="peach-banner">
					<a href="#"> 
						<div class="dessert-icon"></div>
					</a>
					<p class="category-title">Dessert</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div>
			<div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div>
						<img src="img/alfredo.jpg" alt="Fettuccine Alfredo" class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Fettuccine Alfredo</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="yellow-banner">
					<a href="#"> 
						<div class="main-dish-icon"></div>
					</a>
					<p class="category-title">Main dish</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div>
			<div class="recipe-card">
				<div class="image">
					<a href="#">
						<span class="view-more">View More</span>
						<div class="recipe-img-overlay"></div>
						<img src="img/ravioli.jpg" alt="Spinach & Portabella Ravioli"  class="recipe-img">
					</a>
				</div>

				<span class="recipe-title">Spinach & Portabella Ravioli</span>

				<p class="summary">This is the cheesiest most amazing tasting dish in all of Western America.</p>

				<div class="peach-banner">
					<a href="#"> 
						<div class="main-dish-icon"></div>
					</a>
					<p class="category-title">Main dish</p>
				</div>

				<p class="author">Posted by Admin</p>
			</div> -->

		</div> <!-- End recipe list -->

	</section>

	<div id="add-recipe-button">
		<span><a href="/recipes/create">+</a></span>
	</div>

	@include('footer')

</div>
@stop