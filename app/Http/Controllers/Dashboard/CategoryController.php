<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\Dashboard\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryservice;

    public function __construct(categoryService $categoryservice)
    {
        $this->categoryservice = $categoryservice;

    }

    public function index()
    {
        return view('dashboard.categories.index');
    }

    public function getAllCategories()
    {
        return $this->categoryservice->getAllCategories();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories = $this->categoryservice->getCategoriesExceptParent();
        return view('dashboard.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.   
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->only('name', 'slug', 'status', 'parent');
        if($this->categoryservice->createCategory($data)){
            return redirect()->route('dashboard.categories.index')->with('success', __('dashboard.category_created'));
        }
        return redirect()->route('dashboard.categories.index')->with('error', __('dashboard.something_went_wrong'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $categories = $this->categoryservice->getCategoriesExceptChildren($id);
        $category = $this->categoryservice->getCategoryById($id);
        return view('dashboard.categories.edit', compact('category', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request)
    {
       
        $request->validated();
        $data = $request->only('id','name', 'slug', 'status', 'parent');
        if($this->categoryservice->updateCategory($data)){
            return redirect()->route('dashboard.categories.index')->with('success', __('dashboard.category_updated'));
        }
        return redirect()->route('dashboard.categories.index')->with('error', __('dashboard.something_went_wrong'));


    }
    public function changeStatus(Request $request, $id)
    {
        $category = $this->categoryservice->changeStatus($id);
        if($category){
            return redirect()->route('dashboard.categories.index')->with('success', __('dashboard.category_status_changed'));
        }
        return redirect()->route('dashboard.categories.index')->with('error', __('dashboard.something_went_wrong'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($this->categoryservice->deleteCategory($id)) {
            return redirect()->route('dashboard.categories.index')->with('success', __('dashboard.category_deleted'));
        }

        return redirect()->route('dashboard.categories.index')->with('error', __('dashboard.something_went_wrong'));
    }


}
