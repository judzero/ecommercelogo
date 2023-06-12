@extends('layouts.admin')
@section('title', 'Products')
@section('content')
    <h1 class="page-title">Products</h1>
    <div class="container">
        <div class="mb-3 mt-4">
            <a href="{{route('adminpanel.products.create')}}" class="btn btn-primary">+ &nbsp; Create Product</a>
        </div>
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Products</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Colors</th>
                                    <th>Image</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            @foreach ($product->colors as $color)
                                            <span class="badge" style="background: {$color->code}}">{{$color->name}}</span>
                                            @endforeach

                                        </td>
                                        <td>
                                            <img src="{{asset('storage/' . $product->image)}}" style="height: 95px;">
                                        </td>
                                        <td>{{\Carbon\Carbon::parse($product->created_at)->format('d/m/Y')}}</td>
                                        <td>
                                           <form action="{{route('adminpanel.category.destroy', $product->id)}}" method="post">
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">DELETE</button>

                                           </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection