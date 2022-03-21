@extends('master')

@section('title')
    Manage Products
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <div class="card bg-secondary">
                    <div class="card-header bg-success">
                        <h2 class="text-dark text-center">Manage Products</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Product Category</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_category" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Product Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="product_name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="product_image" class="form-control-file"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Product Description</label>
                                <div class="col-md-8">
                                    <textarea name="product_description" rows="2"  class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 ml-auto py-3">
                                    <input type="submit" class="btn btn-success form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
