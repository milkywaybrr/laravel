<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->where('role', '=', 'admin')
            ->orWhere('id', '=', 69)
            ->limit(10)
            ->orderByDesc('id')
            ->get();

        $articles = Article::query()->where('status', '=', 'published')->orderByDesc('created_at')->get();

        return view('index', [
            'articles' => $articles
        ]);
    }

    public function add()
    {
        $categories = Category::all();

        return view('add', [
            'categories' => $categories
        ]);
    }

    public function update(Article $article)
    {
        $categories = Category::all();

        return view('update', [
            'categories' => $categories,
            'article' => $article
        ]);
    }

    public function blocked()
    {
        return view('blocked');
    }

    public function single()
    {
        return view('single');
    }

    public function user(User $user)
    {
//        if($user === null) {
//            return redirect()->route('home');
//        }

        return view('user', compact('user'));
    }
}
