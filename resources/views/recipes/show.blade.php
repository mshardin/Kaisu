@extends('layout')

<div id="recipe-page--top">
	<div id="recipe-page--navigation">
		<a href="{{ URL::route('home') }}"><img src="../../img/home-icon.png" alt="Home icon" id="home-button"></a>

		<ul id="recipe-page--social">
			<p>Share:</p>
			<li><a href="https://facebook.com" class="social-icon fb"></a></li>
			<li><a href="https://twitter.com" class="social-icon tw"></a></li>
			<li><a href="https://tumblr.com" class="social-icon tm"></a></li>
			<li><a href="https://plus.google.com" class="social-icon gp"></a></li>
			<li><a href="https://pinterest.com" class="social-icon pn"></a></li>
		</ul>

		<div id="recipe-page--makes">
			<p><b>Quantity:</b> {{ $recipe->quantity }} servings</p>
			<br>
			<br>
			<p><b>TOTAL TIME:</b> Prep: 30 min. plus simmering Bake: 70 min. + standing</p>
		</div>
	</div>

	<h1 id="recipe-page--recipe-name">{!! $recipe->title !!}</h1>
</div> <!-- End recipe-page--top -->

<div id="recipe-page--bottom">
	<div id="recipe-page--ingredient-container">
		<h2 id="recipe-page--ingredient-header">Ingredients</h2>

		<div id="recipe-page--ingredient">
			@foreach ($ingredients as $index => $ingredient)
				<p>{{ $ingredient }}</p>
			@endforeach
			<!-- <p>1 pound ground beef</p>

			<p>3/4 pound bulk JImmy Dean Premium Pork Sausage Roll</p>

			<p>3 cans (8 ounces each) tomato sauce</p>

			<p>2 cans (6 ounces each) tomato paste</p>

			<p>2 garlic cloves, minced</p>

			<p>2 teaspoons sugar</p>

			<p>1 teaspoon italian seasoning</p>

			<p>1 teaspoon salt</p>

			<p>1/2 teaspoon pepper</p>

			<p>3 eggs</p>

			<p>3 tablespoons minced fresh parsley</p>

			<p>3 cups (24 ounces) 4% smallcurd cottage cheese</p>

			<p>1 carton (8 ounces) ricotta cheese</p>

			<p>1/2 cup grated Parmesan cheese</p>

			<p>9 lasagna noodles, cooked and drained</p>

			<p>6 slices provolone cheese</p>

			<p>3 cups (12 ounces) shredded part-skim mozzarella cheese, divided</p> -->
		</div>
	</div>

	<div id="recipe-page--recipe-card-wrap"> 
	<div id="recipe-page--recipe-card">
		<img src="../../{{ $recipe->image }}" alt="Recipe image" width="100%">
		<div id="recipe-page--banner">
			<img src="../../img/{{ $icon }}" alt="Main dish icon">
			<p class="category-title">{{ $recipe->course }}</p>
		</div>
		
		<h2 id="recipe-page--directions-header">Directions</h2>

		<div id="recipe-page--directions">
			@foreach ($directions as $index => $direction)
				<p>{{ $index+1 }}. {{ $direction }}</p>
			@endforeach
			<!-- <p>1. In a large skillet, cook beef and sausage over medium heat until no longer pink; drain. Add the tomato sauce, tomato paste, garlic, sugar, seasoning, salt and pepper. Bring to a boil. Reduce heat; simmer, uncovered, for 1 hour, stirring occasionally.</p>

			<p>2. In a large bowl, combine eggs and parsley. Stir in the cottage cheese, ricotta and Parmesan cheese.</p>

			<p>3. Spread 1 cup of meat sauce in an ungreased 13-in. x 9-in. baking dish. Layer with three noodles, provolone cheese, 2 cups cottage cheese mixture, 1 cup mozzarella, three noodles, 2 cups meat sauce,remaining cottage cheese mixture and 1 cup mozzarella. Top with the remaining noodles, meat sauce and mozzarella (dish will be full).</p>

			<p>4. Cover and bake at 375° for 50 minutes. Uncover; bake 20 minutes longer or until heated through. Let stand for 15 minutes before cutting. Yield: 12 servings.</p> -->
		</div>
	</div> <!-- End recipe-page--recipe-card -->
	</div>

</div> <!-- End recipe-page--bottom -->

