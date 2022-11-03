@extends('layout.master')
@section('title', 'Danh sách người dùng')
@section('content')
    <div class="container">
            <h1>Danh sách người dùng</h1>
            <div class="row">
                <div class="col-12">
                    @if (Session::has('success'))
                        <p class="text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            {{ Session::get('success') }}
                        </p>
                    @endif
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">id Người dùng</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tỉnh</th>
                            <th scope="col">tùy Chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($customers) == 0)
                            <tr>
                                <td colspan="12">Không có dữ liệu</td>
                            </tr>
                        @else
                            @foreach ($customers as $key => $customer)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <th scope="row">{{ $customer->id }}</th>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->city->name }}</td>
                                    <td>
                                        <a href="{{ route('customers.edit', $customer->id) }}">sửa</a>
                                        <a href="{{ route('customers.destroy', $customer->id) }}" class="text-danger"
                                            onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        <div><a class="btn btn-primary" href="{{ route('cities.create') }}">Thêm mới</a></div>
                </table>
            </tbody>
        </div>
    {{-- {{ $customers->onEachSide(5)->links() }} --}}
    {{ $customers->appends(request()->query()) }}
@endsection
