
@extends('backend.layouts.app_backend')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Danh mục</h2>
        <a href="{{ route('get_admin.category.create') }}" class="btn btn-primary" style="color: white;">Thêm mới</a>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Avatar</th>
                        <th>Tên danh mục</th>
                        {{-- <th>Slug</th> --}}
                        <th>Mô tả</th>
                        {{-- <th>Ngày tạo</th> --}}
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category ?? [] as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                <img src="{{ pare_url_file($item->avatar) }}"
                                    style="width: 60px; height: 60px; border-radius: 10px" alt="Avatar">
                            </td>
                            <td>{{ $item->name }}</td>
                            {{-- <td>{{ $item->slug }}</td> --}}
                            <td>{{ $item->description }}</td>
                            {{-- <td>{{ $item->created_at->format('Y-m-d') }}</td> --}}
                            {{-- <td>
                                <a href="{{ route('get_admin.category.update', $item->id) }}" class="btn btn-info"
                                    style="padding: 5px">Edit</a>
                                <a href="#">|</a>
                                <a href="{{ route('get_admin.category.delete', $item->id) }}" class="btn btn-danger"
                                    style="padding: 5px" id="delete_alert">Delete</a>
                            </td> --}}
                            <td>
                                <div class="product-more position-relative">
                                    <span class="justify-content-start">
                                        <i class="fa-regular fa-pen-to-square fa-xl icon"></i>
                                    </span>
                                    <div class="product-more-option">
                                        <ul class="mb-0" style="list-style: none;padding-left: 0px;">
                                            <li>
                                                <a href="{{ route('get_admin.category.update', $item->id) }}" class="d-flex align-items-center p-2 text-decoration-none">
                                                    <p><i class="fa-solid fa-pen"></i> - Cập nhật</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('get_admin.category.delete', $item->id) }}" class="d-flex align-items-center p-2 text-decoration-none" id="delete_alert">
                                                    <p><i class="fa-regular fa-trash-can"></i> - Xóa</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $category->links() }}
@stop
