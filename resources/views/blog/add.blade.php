@extends('layout.master')
@section('content')
    <div class="container">
        <form action="{{ route('blogs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @error('name')
                <div class="text text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" value="{{ old('description') }}" class="form-control" name="description" id="exampleInputPassword1">
                @error('description')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-lg-12">
                <label class="control-label" for="flatpickr01">Danh mục<abbr
                        name="Trường bắt buộc">*</abbr></label>
                <select name="category_id" id="" class="form-control">
                    <option value="">--Vui lòng chọn--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @if ('category_id')
                <p style="color:red">{{ $errors->first('category_id') }}</p>
                @endif
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
