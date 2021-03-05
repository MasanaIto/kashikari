<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index')->with(['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    /**
     * @param ArticleRequest $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function store(ArticleRequest $request, Article $article): RedirectResponse
    {
        // lent or borrowed
        $transaction = $request->transaction;

        if ($transaction === "lent") {
            // 自分が貸したモノだった場合
            $article->lender_id = $request->user()->id;
            $article->borrower_id = $request->partner;
        } else {
            // 相手から借りたモノだった場合
            $article->lender_id = $request->partner;
            $article->borrower_id = $request->user()->id;
        }

        $article->article_name = $request->article_name;
        $article->deadline = $request->deadline;
        $article->description = $request->description;

        $article->save();
        return redirect()->route('articles.index');
    }
}
