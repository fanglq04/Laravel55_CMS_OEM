@extends('admin::layouts.index')
@section('content')
    <section class="content-header">
        <h1>
            创建栏目
            <small>Description...</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">添加分类</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.category.store') }}" onsubmit="return check_submit()">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="pid" class="col-md-3 control-label">所属分类</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="parent_id">
                                        <option value="0">顶级分类</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                @for($i=0;$i<$category->depth;$i++)
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                @endfor
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">分类名称</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" id="add_category_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-3 control-label">是否显示</label>
                                <div class="col-md-6">
                                    <input type="radio" name="status" value="1" checked>是
                                    <input type="radio" name="status" value="0">否
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
    <script>
        function check_submit() {
            if (!$('#add_category_name').val()) {
                layer.msg('分类不能为空');
                return false;
            }
        }
    </script>
@endsection
@push('js')
    <script>
    </script>
@endpush
