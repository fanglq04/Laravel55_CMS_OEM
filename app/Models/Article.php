<?php
/**
 * --------------------------------------
 * Desc:
 * User: Jiafang.Wang
 * Date: 2018/10/30 10:16
 * File: Article.php
 * --------------------------------------
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
       'category_id', 'title', 'description', 'source', 'thumb', 'content', 'status', 'is_top', 'sort'
    ];

    /**
     * @desc 分类信息
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @author Jiafang.wang
     * @since 2018/10/30 11:04
     */
    public function categoryInfo()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}