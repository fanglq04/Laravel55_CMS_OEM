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


use App\Http\Controllers\Controller;
use App\Models\Article;

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
}