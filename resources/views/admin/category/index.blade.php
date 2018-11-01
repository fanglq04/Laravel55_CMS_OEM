@extends('admin::layouts.index')
@section('content')
    <section class="content-header">
        <h1>
            栏目分类
            <small>Description...</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.category.create')}}" class="btn btn-danger">添加分类</a>
            </div>
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered" style="font-size: 12px">
                            <tr>
                                <th>ID</th>
                                <th>分类名称</th>
                                <th>状态</th>
                                <th width="20%">#</th>
                            </tr>
                            @foreach($categories as $category)
                                @if($category->parent_id)
                                    <tr class="treegrid-{{$category->id}} treegrid-parent-{{$category->parent_id}}">
                                @else
                                    <tr class="treegrid-{{$category->id}}">
                                @endif
                                <td>{{$category->id}}</td>
                                <td>
                                    @for($i=0;$i<$category->depth;$i++)
                                        &nbsp;&nbsp;&nbsp;|-
                                    @endfor
                                    {{$category->name}}
                                </td>
                                <td>
                                    @if($category->status == 1)
                                        <span class="btn btn-success btn-xs">显示</span>
                                    @else
                                        <span class="btn btn-warning btn-xs">禁用</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{route('admin.category.update', array('id' => $category->id))}}">编辑</a>
                                    <a class="btn btn-primary btn-xs" href="#" target="_blank">查看</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
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
