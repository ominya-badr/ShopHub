<!-- Display Basic Cart Info -->
@if (session('cart'))
    <div class="table-responsive pt-5 mx-auto" style="width: 80%">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th style="width: 100px">Quantity</th>
                    <th>Sub Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach (session('cart') as $key => $details)
                    @php $total = $total + ($details['price'] * $details['quantity']); @endphp
                    <tr data-id="{{ $key }}">
                        <td>
                            <div class="row p-1">
                                <div class="col-md-2">
                                    <img src="{{ asset('storage/' . $details['image']) }}" class="img-responsive"
                                        width="100px" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h4>{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td>${{ $details['price'] }}</td>
                        <td>
                            <input type="number" name="quantity" class="form-control quantity"
                                value="{{ $details['quantity'] }}" min="1">
                        </td>
                        <td>${{ $details['price'] * $details['quantity'] }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-danger remove-from-cart"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="5" class="text-end">
                        <h3>Total: ${{ $total }}</h3>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endif
