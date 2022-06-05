<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatecategoryRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\Console\Input\Input;

use function PHPUnit\Framework\isFalse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        try{
            
            $category = Category::with('user:id,name')->paginate($perPage = 2);
            return response()->json([
                "success" => true,
                "message" => "Category List",
                "data" => $category
            ]);
        }catch (\Exception $e) {
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
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try{
            $request->validate([
                // 'id'=>'required|unique:categories|max:255',
                'name' => 'required|max:255'
            ]);
    
            $user = User::find($request->user_id);
            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($user);
    
            if(is_null($user))
                return response()->json([
                    "success" => false,
                    "message" => "Category Failed Create. User Not Found",
                    "data" => null
                ]);
    
            $category = new Category(['name' => $request->name]);
            $category->user()->associate($user);
            $category->save();
            return response()->json([
                "success" => true,
                "message" => "Category created successfully.",
                "data" => $category
            ]);
        }
        catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            
            $category = Category::find($id);
            if (is_null($category))
                return response()->json([
                    "success" => false,
                    "message" => "category Get Failed, Category Not Found",
                    "data" => null
                ]);
            // $article = Article::with('category','user');
            return response()->json([
                "success" => true,
                "message" => "Category List",
                "data" => $category
            ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        // $out->writeln($request->name);

        

        try {
            $category = Category::find($request->id);
        if(is_null($category))
            return response()->json([
                "success" => false,
                "message" => "Category Failed Update, Category Not Found",
                "data" => null
            ]);
        $category->name = $request->name;
        $category->save();

        return response()->json([
            "success" => true,
            "message" => "Category updated successfully.",
            "data" => $category
        ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        try {
            $category = Category::destroy($id);

            if($category == false)
                return response()->json([
                    "success" => false,
                    "message" => "Category Failed Delete. Not Found Category",
                    "data" => null
                ]);

            return response()->json([
                "success" => true,
                "message" => "Category Deleted successfully.",
                "data" => $category
            ]);
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
