@extends('layouts.main')
@section('page-title', 'Danh sách danh mục')
    
@section('content')
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>
            <a href="">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach($cates as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                {{$item->name}}
            </td>
            <td>{{$item->detail}}</td>
            <td>
                <a href="{{route('cate.remove', ['id' => $item->id])}}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    <div class="col-xs-4 offset-xs-8 pull-right">
        {{$cates->links()}}
    </div>

@endsection