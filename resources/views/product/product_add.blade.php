<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Add</title>
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center text-primary py-5 display-4">Add Product</h1>

    {{-- products start --}}
    <div class="product_add">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6 offset-md-3">
                    <a href="{{ Route('product.all') }}" class="btn btn-success my-3">View Products</a>
                   <form action="{{ Route('product.add') }}" method="POST" class="shadow p-5">
                    @csrf
                        
                        <div class="form-group mb-3">
                            <label for="pname">Product Name</label>
                            <input type="text" placeholder="Product Name" class="form-control" id="pname" name="pname" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pname">Product Quentity</label>
                            <input type="number" placeholder="Quentity" class="form-control" id="qty" name="qty" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pname">Product Price</label>
                            <input type="number" placeholder="Price" class="form-control" id="price" name="price" required="">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" id="submit" name="submit">Add Product</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>

    {{-- js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
