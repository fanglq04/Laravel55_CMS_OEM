@extends('admin::layouts.index')
@section('content')
    <section class="content-header">
        <h1>
            文章管理
            <small>Description...</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered" style="font-size: 12px">
                            <tr>
                                <th>ID</th>
                                <th>标题</th>
                                <th>所属分类</th>
                                <th>封面</th>
                                <th>来源</th>
                                <th>状态</th>
                                <th>是否置顶</th>
                                <th>排序</th>
                                <th width="20%">#</th>
                            </tr>
                            @foreach($articles as $article)
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->categoryInfo->name}}</td>
                                <td><img src="{{public_path()}}{{$article->thumb}}" width="70px" height="70px"></td>
                                <td>{{$article->source}}</td>
                                <td>
                                    @if($article->status == 1)
                                        <span class="btn btn-success btn-xs">显示</span>
                                    @else
                                        <span class="btn btn-warning btn-xs">禁用</span>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="sort" value="{{$article->sort}}">
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="#">详情</a>
                                    <a class="btn btn-primary btn-xs" href="#">禁用</a>
                                    <a class="btn btn-primary btn-xs" href="#">显示</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            {{$articles->links()}}
        </div>
</section>
@endsection
@push('js')
    <script>
    </script>
@endpush