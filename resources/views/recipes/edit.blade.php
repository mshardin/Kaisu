@extends('layout')

@section('content')

<div id="submit-recipe--header">
	<a href="{{ URL::route('home') }}"><img src="../../../../img/home-icon.png" alt="Home icon" id="home-button"></a>
</div>

<div id="submit-recipe--main">
	<h1>Submit a Recipe</h1>

		<!-- <form id="submit-recipe-form" name="submit-recipe-form" method="post" action="/recipes/{{ $recipe->course}}/{{ $recipe->title }}" enctype="multipart/form-data"> -->

		{!! Form::model($recipe, ['id' => 'submit-recipe-form', 'name' => 'submit-recipe-form', 'method' => 'PATCH', 'files' => true, 'action' => ['RecipeController@update', $recipe->course, $recipe->title]]) !!}

		<label for="title">
			Recipe Title:
		</label>
		<input type="text" name="title" placeholder="Apple pie" value="{{ $recipe->title }}">

		<div id="add-image">
			<label style="margin-bottom:30px;">Add Recipe Image</label>
			<input type="file" name="image" id="recipe-image" accept="image/*">
		</div>

		<label for="summary">
			Recipe Summary:
		</label>
		<textarea name="summary" placeholder="Granny's homemade southern style apple pie" maxlength="70">
			{{ $recipe->summary }}
		</textarea>

		<label for="quantity">
			Quantity:
		</label>
		<input type="number" name="quantity" placeholder="8" min="0" value="{{ $recipe->quantity }}">

		<label for="ingredients">
			Ingredients (Please comma seperate list of ingredients):
		</label>
		<textarea name="ingredients" placeholder="Add your ingredients...">
			{{ $recipe->ingredients }}
		</textarea>

		<label for="directions">
			Directions:
		</label>
		<textarea name="directions" placeholder="What are the steps to complete this recipe">
			{{ $recipe->directions }}
		</textarea>

		<br>

		<select name="course" id="course-select">
			<option>Select Course</option>
			<option value="Beverage">Beverage</option>
			<option value="Appertizer">Appetizer</option>
			<option value="Bread">Bread</option>
			<option value="Breakfast / Brunch">Breakfast / Brunch</option>
			<option value="Condiment">Condiment</option>
			<option value="Dessert">Dessert</option>
			<option value="Main Dish">Main Dish</option>
			<option value="Salad">Salad</option>
			<option value="Sandwich">Sandwich</option>
			<option value="Side Dish">Side Dish</option>
			<option value="Other">Other</option>
		</select> 

		<select name="type" id="type-select">
			<option>Select Type</option>
			<option value="Asian">Asian</option>
			<option value="Cajun / Creole">Cajun / Creole</option>
			<option value="Comfort Foods">Comfort Foods</option>
			<option value="German">German</option>
			<option value="Asian">Asian</option>
			<option value="Greek / Medittarean">Greek / Mediterranean</option>
			<option value="Italian">Italian</option>
			<option value="Jewish">Jewish</option>
			<option value="Mexican / Southwest">Mexican / Southwest</option>
			<option value="Other">Other</option>
		</select>

		<button id="submit-button">Update Recipe</button>

		{!! Form::close() !!}

	<!-- </form> -->

	@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

</div>

@stop