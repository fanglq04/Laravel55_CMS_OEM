@extends('admin::layouts.index')
@include('UEditor::head')
@section('content')
    <section class="content-header">
        <h1>
             创建文章
            <small>Description...</small>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('admin.article.store')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="tag" class="col-md-2 control-label">标题</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title" value="" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag" class="col-md-2 control-label">描述</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag" class="col-md-2 control-label">所属分类</label>
                            <div class="col-md-8">
                                <select id="category" class="form-control" name="category_id">
                                    <option value="0">--选择分类--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            @for($i=0;$i<$category->depth;$i++)
                                                &nbsp;&nbsp;&nbsp;&nbsp;|-
                                            @endfor
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag" class="col-md-2 control-label">来源</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="source" value="" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag" class="col-md-2 control-label">封面图片</label>
                            <div class="col-md-8">
                                <input type="file" name="thumb">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag" class="col-md-2 control-label">是否置顶</label>
                            <div class="col-md-8">
                               <label class="radio-inline">
                                  <input type="radio" name="is_top" id="inlineRadio1" value="1"> 是
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="is_top" id="inlineRadio2" value="0"> 否
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag" class="col-md-2 control-label">商品详情</label>
                            <div class="col-md-8">
                                <script id="container" name="content" type="text/plain"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary btn-md btn-block">
                                    <i class="fa fa-plus-circle"></i>
                                    添加
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
<script type="text/javascript">
        var ue = UE.getEditor('container', {
            initialFrameHeight : 650
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
            ue.execCommand('serverparam', 'target', "goods");   //自定义存储目录
        });
    </script>
@endpush
