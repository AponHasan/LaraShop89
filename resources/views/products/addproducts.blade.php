@extends('layouts.app')

@section('content')
    <h2>Add Products</h2>
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="productsName">Products name</label>
                <input type="text" class="form-control product_name" name="product_name" id="product_name"  placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="productCode">Products Code</label>
                <input type="text" class="form-control product_code" name="product_code" id="product_code"  placeholder="Enter product code">
            </div>
            <div class="form-group">
                <label for="productsPrice">Products Price</label>
                <input type="text" class="form-control product_price" name="product_price" id="product_price"  placeholder="Enter product price">
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="productImg">Product Image</label>
                    <input type="file" onchange="previewFile()" class="form-control-file product_img" name="product_img" id="product_img">
                </div>
                <div class="col-sm-4" >
                    <img src="" height="100" width="100" style="margin-top: 0px">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


    <script>
        function previewFile(){
            var preview = document.querySelector('img');
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();
            reader.onloadend = function () {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }

        previewFile();
    </script>
@endsection