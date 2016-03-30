<?php
namespace Fhferreira\Tags\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Fhferreira\Tags\Models\Tag;

class TagsController extends Controller
{
    public function index()
    {
    	$tags = Tag::all();
        return view('tags::index', compact('tags'));
    }
}