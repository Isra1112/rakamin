<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorearticleRequest;
use App\Http\Requests\UpdatearticleRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $article = Article::with('category', 'user')->paginate($perPage = 2);
            // $article = Article::with('category','user');
            return response()->json([
                "success" => true,
                "message" => "Category List",
                "data" => $article
            ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorearticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                // 'id'=>'required|unique:categories|max:255',
                'title' => 'required|max:255'
            ]);

            $user = User::find($request->user_id);
            $category = Category::find($request->category_id);


            if (is_null($user))
                return response()->json([
                    "success" => false,
                    "message" => "Category Failed Create. User/Category Not Found",
                    "data" => null
                ]);

            $article = new Article([
                'title' => $request->title,
                'image' => $request->image,
                'content' => $request->content
            ]);
            $article->category()->associate($category);
            $article->user()->associate($user);
            $article->save();
            return response()->json([
                "success" => true,
                "message" => "Category created successfully.",
                "data" => $article
            ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            
            $article = Article::find($id);
            if (is_null($article))
                return response()->json([
                    "success" => false,
                    "message" => "Article Get Failed, Category Not Found",
                    "data" => null
                ]);
            // $article = Article::with('category','user');
            return response()->json([
                "success" => true,
                "message" => "Category List",
                "data" => $article
            ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearticleRequest  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
            $article = Article::find($request->id);
            if (is_null($article))
                return response()->json([
                    "success" => false,
                    "message" => "Category Failed Update, Category Not Found",
                    "data" => null
                ]);
            $article->title = $request->title;
            $article->save();

            return response()->json([
                "success" => true,
                "message" => "Category updated successfully.",
                "data" => $article
            ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $article = Article::destroy($id);

            if($article == false)
                return response()->json([
                    "success" => false,
                    "message" => "Article Failed Delete. Not Found Article",
                    "data" => null
                ]);

            return response()->json([
                "success" => true,
                "message" => "Article Deleted successfully.",
                "data" => $article
            ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
