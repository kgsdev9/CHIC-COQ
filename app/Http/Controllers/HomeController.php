<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }
  

    public function detail_articles($id) {
        $detail = Article::find($id);
        return view('usersview.detailblog', compact('detail'));
    }

    public function viewarticles() {
        $blog  = Article::paginate(12);
        return  view('usersview.blog', compact('blog'));
    }



}
