<?php
/**
 * --------------------------------------
 * Desc:
 * User: Jiafang.Wang（270494194@qq.com）
 * Date: 2018\9\28 0028 15:01
 * File: Category.php
 * --------------------------------------
 */

namespace App\Models;


use Baum\Node;

class Category extends Node
{
    protected $table = 'category';
    protected $fillable = [
        'parent_id', 'name', 'lft', 'rgt', 'depth', 'list_template', 'detail_template', 'status',
    ];
}
