<?php
/**
 * --------------------------------------
 * Desc: 文章控制器
 * User: Jiafang.Wang
 * Date: 2018/10/30 10:15
 * File: ArticleController.php
 * --------------------------------------
 */

namespace App\Http\Controllers\Admin;


use Mockery\Exception;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * @desc 文章列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.wang
     * @since 2018/10/30 10:27
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.article.index', compact('articles'));
    }

    /**
     * @desc 创建文章
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.wang
     * @since 2018/10/30 13:31
     */
    public function create()
    {
        $categories = Category::where('status', 1)->orderBy('lft', 'asc')->get();
        return view('admin.article.create', compact('categories'));
    }

    public function update()
    {

    }

    /**
     * @desc 保存文章
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Jiafang.wang
     * @since 2018/10/30 13:36
     */
    public function store(Request $request)
    {
        try {
            $inputs = $request->all();
            $rules = [
                'title' => 'required|max:255',
                'category_id' => 'required',
                'content' => 'required',
            ];
            $messages = [
                'title.required' => '请输入标题',
                'category_id.required' => '请选择分类',
                'title.max' => '最长255个字符',
                'content.required' => '请输入内容',
            ];
            $validator = Validator::make($inputs, $rules, $messages);
            if ($validator->fails()) {
                throw new Exception($validator->errors()->first());
            }
            DB::beginTransaction();
            if (isset($inputs['goods_id'])) {
                $article = Article::find($inputs['article_id']);
                $article->title = $inputs['title'];
                $article->category_id = $inputs['category_id'];
                $article->content = $inputs['content'];
                $article->save();
            } else {    //创建
                Article::create($inputs);
            }
            DB::commit();
            return redirect()->route('admin.article.index');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }

}