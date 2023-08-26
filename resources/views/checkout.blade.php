<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Method Integration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <h1 class="my-5">Laravel 10 how to integrate stripe payment gateway </h1>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Laravel 10 how to integrate stripe payment gateway
                    </div>
                    <div class="card-body">
                        <table id="cart" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th class="width:30%">Product</th>
                                    <th class="width:20%">Price</th>
                                    <th class="width:8%">Quantity</th>
                                    <th class="width:22%">Subtotal</th>
                                    <th class="width:20%">Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">Asus vivo book 17 laptop - Intel core 10th</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">$6</td>
                                    <td data-th="Quantity">
                                        <input type="number" value="1" class="form-control quantity cart_update"
                                            min="1">
                                    </td>
                                    <td data-th="Subtotal" class="text-center">$6</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-danger btn-sm cart-remove">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" style="text-align: right">
                                        <h3><strong>Total $6</strong></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align: right">
                                        <form action="/session" method="POST">
                                            <a href="{{ url('/') }}" class="btn btn-outline-info">Continue
                                                Shopping</a>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="total" value="6">
                                            <input type="hidden" name="productname"
                                                value="Asus vivo 17 laptop - Intel core 10th">
                                            <button class="btn btn-outline-success" type="submit"
                                                id="checkout-live-button">
                                                Checkout</button>
                                        </form>
                                    </td>
                                </tr>
                            </tfoot>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
