<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\User;

class PostController extends Controller
{

    public function index(Request $request) {
    	$categories = Category::withCount('posts')->get();
    	$posts = Post::orderBy('created_at', 'desc')->where('status', '=', 'PUBLISHED')->paginate(5);
    	$populars = Post::orderBy('created_at', 'desc')->where('featured', '=', '1')->limit(4)->get();

    	return view('posts.index')->withPosts($posts)->withCategories($categories)->withPopulars($populars);
    }

    public function searchPosts(Request $request) {

        $categories = Category::withCount('posts')->get();
        $populars = Post::orderBy('created_at', 'desc')->where('featured', '=', '1')->limit(4)->get();
        if(isset($request->keyword)) {
        	$posts = Post::orderBy('created_at', 'desc')
        				->where('status', '=', 'PUBLISHED')
        				->where('title', 'LIKE', "%$request->keyword%")
        				->paginate(5);
        } else {
        	$posts = Post::orderBy('created_at', 'desc')
        				->where('status', '=', 'PUBLISHED')
        				->paginate(5);
        }
        
        return view('posts.search')->withPosts($posts)->withCategories($categories)->withPopulars($populars);
    }

    public function showCategory(Request $request, $slug) {

        $categories = Category::withCount('posts')->get();
        $populars = Post::orderBy('created_at', 'desc')->where('featured', '=', '1')->limit(4)->get();

        $categoryEntity = Category::where('slug', '=', $slug)->first();
        $posts = $categoryEntity->posts()->orderBy('created_at', 'desc')->where('status', '=', 'PUBLISHED')->paginate(5);
 
        return view('posts.categories')->withPosts($posts)->withCategories($categories)->withPopulars($populars)->withCategory($categoryEntity);
    }

    public function getSingle($slug) {

        $categories = Category::withCount('posts')->get();
        $populars = Post::orderBy('created_at', 'desc')->where('featured', '=', '1')->limit(4)->get();

        $post = Post::where('slug', '=', $slug)->first();
        $user = User::where('id', '=', $post->author_id)->first();

        return view('posts.single')->withPost($post)->withCategories($categories)->withPopulars($populars)->withUser($user);

    }

}
