<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ArticlesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    if (request('tag')) {
      $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
    } else {
      $articles = Article::all();
    }
    return view('content.articles.index', ['articles' => $articles]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Factory|View
   */
  public function create()
  {
    return view('content.articles.create', [
      'tags' => Tag::all()
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return RedirectResponse|Redirector
   */
  public function store()
  {
    $this->validateArticle();
    $article = new Article(request(['title', 'excerpt', 'body']));
    $article->user_id = 5;
    $article->save();

    if (request('tags')) $article->tags()->attach(request('tags'));

    return redirect(route('article.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param Article $article
   * @return Factory|View
   */
  public function show(Article $article)
  {
    return view('content.articles.show', compact('article'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Article $article
   * @return Factory|View
   */
  public function edit(Article $article)
  {
    return view('content.articles.edit', [
      'article' => $article,
      'tags' => Tag::all(),
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Article $article
   * @return RedirectResponse|Redirector
   */
  public function update(Article $article)
  {
    $this->validateArticle();

    $article->update(request(['title', 'excerpt', 'body']));
    $article->user_id = 5;
    $article->save();

    if (request('tags')) $article->tags()->attach(request('tags'));

    return redirect($article->getPath());
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Article $article
   * @return RedirectResponse|Redirector
   * @throws Exception
   */
  public function destroy(Article $article)
  {
    $article->delete();

    return redirect(route('article.index'));
  }

  protected function validateArticle()
  {
    return request()->validate([
      'title' => 'required',
      'excerpt' => 'required',
      'body' => 'required',
      'tags' => 'exists:tags,id'
    ]);
  }
}
