<?php
/**
 * --------------------------------------
 * Desc: 首页控制器
 * User: Jiafang.Wang
 * Date: 2018/10/30 10:34
 * File: IndexController.php
 * --------------------------------------
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
}