<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inflexion Point</title>
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center text-primary py-5 display-4">List of Product</h1>

    {{-- products start --}}
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Product Name</th>
                                <th>Quentity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>1</td>
                                    <td>Apple</td>
                                    <td>2</td>
                                    <td>350.00</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="text-center lead">
                                <td colspan="5">No Result Found</td>
                            </tr>
                        </tbody>
                      </table>
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
