<?php

namespace App\Http\Controllers;

use App\Recipe;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecipeRequest;

class RecipeController extends Controller
{

    protected $imageBaseDir = 'recipe/images';

    public function __construct() 
    {
        $this->middleware('auth');

        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecipeRequest $request)
    {   
        // Move image to directory
        $file = $request->file('image');

        $request = $request->all();
        $request['user_id'] = \Auth::user()->id;

        // format image filename
        $filename = time() . '-' . $file->getClientOriginalName();

        // move image 
        $file->move($this->imageBaseDir, $filename);

        // Persist or save the recipe
        $recipe = Recipe::create($request);

        // add image url 
        $recipe->image = $this->imageBaseDir . '/' . time() . '-' . $file->getClientOriginalName();

        $recipe->save();

        // Redirect back to create page
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($course, $title)
    {
        $recipe = Recipe::where(compact('course', 'title'))->first();

        $ingredients = $this->formatIngredients($recipe->ingredients);
        $directions  = $this->formatDirections($recipe->directions);
        $icon        = $this->getCourseIcon($recipe->course);

        return view('recipes.show', compact('recipe', 'ingredients', 'directions', 'icon'));
    }

    protected function formatIngredients($ingredientsString)
    {
        return $ingredientsArray = explode(",", $ingredientsString);
    }

    protected function formatDirections($directionsString)
    {
        return $directionsArray = explode("\x0D", $directionsString);
    }

    protected function getCourseIcon($course) 
    {
        switch ($course) {

            case 'Beverage':
                return 'beverage-icon.png';
                break;
            case 'Appetizer':
                return 'appetizer-icon.png';
                break;
            case 'Bread':
                return 'bread-icon.png';
                break;
            case 'Breakfast / Brunch':
                return 'breakfast-icon.png';
                break;
            case 'Condiment':
                return 'condiment-icon.png';
                break;
            case 'Dessert':
                return 'dessert-icon.png';
                break;
            case 'Main Dish':
                return 'main-dish-icon.png';
                break;
            case 'Salad':
                return 'salad-icon.png';
                break;
            case 'Sandwich':
                return 'sandwich-icon.png';
                break;
            case 'Side Dish':
                return 'side-dish-icon.png';
                break;
            case 'Other':
                return 'other-icon.png';
                break;

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($course, $title)
    {
        $recipe = Recipe::where(compact('course', 'title'))->first();

        // dd($recipe);
        
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($course, $title, Request $request)
    {
        $recipe = Recipe::where(compact('course', 'title'))->first();

        dd($recipe);

        $recipe->update($request->all());

        // Redirect back to create page
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
