@extends('admin::layouts.index')
@section('content')
    <section class="content-header">
        <h1>
            栏目列表
            <small>Description...</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">编辑分类</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.category.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">分类名称</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pid" class="col-md-3 control-label">所属分类</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="parent_id">
                                        <option value="0">顶级分类</option>
                                        @foreach($categories as $cate)
                                            <option value="{{$cate->id}}" @if($category->parent_id == $cate->id) selected @endif>
                                                @for($i=0;$i<$cate->depth;$i++)
                                                    |-
                                                @endfor
                                                {{$cate->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-3 control-label">是否显示</label>
                                <div class="col-md-6">
                                    <input type="radio"  name="status" value="1" @if($category->status == 1) checked @endif>是
                                    <input type="radio"  name="status" value="0" @if($category->status == 0) checked @endif>否
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="fa fa-plus-circle"></i>添加
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
    </script>
@endpush
