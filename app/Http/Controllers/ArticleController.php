<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view("backend.pages.articles.index",[
            "articles"=> Article::orderBy("created_at","desc")->paginate(10),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = new Article();
        return view("backend.pages.articles.form",[
            "article"=> $article
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();
        $photo = $data["photo"];

        /** @var UploadedFile|null $photo */
        if ($photo !== null && !$photo->getError()) { 
           $data["photo"] = $photo->store('articles', 'public');
        }

        $data['user_id'] = Auth::user()->id;
        Article::create($data);
        return redirect()->route('admin.article.index')->with('success','Article added successful !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('backend.pages.articles.show',[
            'article'=> $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('backend.pages.articles.form',[
            'article'=> $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');

            if($article->photo){
                Storage::disk('public')->delete($article->photo);
            }
            $data['photo'] = $photo->store('articles', 'public');
        }
        $article->update($data);
        return redirect()->route('admin.article.index')->with('success','Article changed successful !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if($article->photo){
            Storage::disk('public')->delete($article->photo);
        }
        $article->delete();
        return redirect()->route('admin.article.index')->with('success','Article deleted successful !!!');
    }
}

