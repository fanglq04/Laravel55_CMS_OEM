<?php
/**
 * ----------------------------------------------
 * Desc: 控制器
 * User: Jiafang.Wang（270494194@qq.com）
 * Date: 2018\11\1 0001 11:34
 * File: IndexController.php
 * 专注于企业网站开发、内部系统，小程序、微信公众号，
 * 为小微企业提供一站式技术服务，建立信任基础上长期合作。
 * ----------------------------------------------
 */

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{

    public function __construct()
    {
        $name = Route::currentRouteName();
        view()->share("route_name", $name);
    }

    /**
     * @desc 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.Wang（270491194@qq.com）
     * @since 2018\11\1 0001 11:34
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @desc 关于我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.Wang（270491194@qq.com）
     * @since 2018\11\1 0001 11:51
     */
    public function about()
    {
        return view('about');
    }

    /**
     * @desc 服务
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.Wang（270491194@qq.com）
     * @since 2018\11\1 0001 11:52
     */
    public function services()
    {
        return view('services');
    }

    /**
     * @desc 相册、图片展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.Wang（270491194@qq.com）
     * @since 2018\11\1 0001 11:53
     */
    public function portfolio()
    {
        return view('portfolio');
    }

    /**
     * @desc
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.Wang（270491194@qq.com）
     * @since 2018\11\1 0001 14:42
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * @desc 新闻资讯
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Jiafang.Wang（270491194@qq.com）
     * @since 2018\11\1 0001 14:42
     */
    public function news()
    {
        $articles = Article::where('status', 1)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->paginate(8);
        return view('news', compact('articles'));
    }
}