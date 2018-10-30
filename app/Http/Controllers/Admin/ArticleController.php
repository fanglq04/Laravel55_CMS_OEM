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

    /**
     * @desc 文章更新
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.wang
     * @since 2018/10/30 14:23
     */
    public function update(Request $request)
    {
        $article_id = $request->input('article_id');
        $article = Article::find($article_id);
        $categories = Category::where('status', 1)->orderBy('lft', 'asc')->get();
        return view('admin.article.update', compact('article', 'categories'));
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

    /**
     * @desc 更新状态
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author Jiafang.wang
     * @since 2018/10/30 17:13
     */
    public function changeStatus(Request $request) {
        try {
            $article_id = $request->input('article_id');
            $to_status = $request->input('to_status');
            if (!$article_id || $to_status) {
                throw new Exception('缺少参数');
            }
            Article::where('id', $article_id)->update([
                'status' => $to_status,
            ]);
            return response()->json([
                'status' => 1,
                'message' => '操作成功'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 0,
                'message' => $e->getMessage()
            ]);
        }



    }
}