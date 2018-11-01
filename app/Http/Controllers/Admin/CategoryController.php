<?php
/**
 * --------------------------------------
 * Desc: 商品分类控制器
 * User: Jiafang.Wang（270494194@qq.com）
 * Date: 2018\9\28 0028 15:06
 * File: CategoryController.php
 * --------------------------------------
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @desc 分类列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.wang
     * @since 2018\9\28 0028 15:08
     */
    public function index()
    {
        $categories = Category::orderBy('lft')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * @desc 添加分类
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.wang
     * @since 2018\9\28 0028 17:50
     */
    public function create()
    {
        $categories = Category::where('status', 1)->orderBy('lft')->get();
        return view('admin.category.create', compact('categories'));
    }

    /**
     * @desc 更新分类
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.wang
     * @since 2018\9\28 0028 17:55
     */
    public function update($id)
    {
        $category = Category::find($id);
        $categories = Category::where('status', 1)->orderBy('lft')->get();
        return view('admin.category.update', compact('category', 'categories'));
    }

    /**
     * @desc 保存
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Jiafang.wang
     * @since 2018\9\28 0028 18:00
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        $parent_id = $request->input('parent_id');
        $name = $request->input('name');
        $status = $request->input('status');

        if ($request->has('id')) {
            $category = Category::find($id);
            $category->name = $name;
            $category->parent_id = $parent_id;
            $category->status = $status;
            $category->save();
        } else {
            if($parent_id > 0) {
                $root = Category::find($parent_id);
                $root->children()->create(['name' => $name]);
            } else {
                Category::create([
                    'name' => $name
                ]);
            }
        }
        return redirect()->route('admin.category.index');
    }

    /**
     * @desc 状态操作
     * @param Request $request
     * @return array
     * @author Jiafang.wang
     * @since 2018\9\28 0028 18:00
     */
    public function operateStatusAjax(Request $request)
    {
        try {
            $category_id = $request->input('category_id');
            $to_status = $request->input('to_status');
            $category = Category::find($category_id);
            if(!$category) {
                throw new \Exception("没有这个分类");
            }
            $sub_category_count = Category::where('parent_id', $category_id)->count();
            if($sub_category_count > 0) {
                throw new \Exception("存在子分类，不可禁止");
            }
            $category->status = $to_status;
            $category->save();
            return [
                'status' => 1,
                'message' => '操作成功'
            ];
        } catch (\Exception $e) {
            return [
                'status' => $e->getCode(),
                'message' => $e->getMessage()
            ];
        }
    }

}
