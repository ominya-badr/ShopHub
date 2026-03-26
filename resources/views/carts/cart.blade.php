@extends('layouts.layout')
@section('title', 'Cart')
<!-- Cart Form -->
@section('content')
    <form action="{{ route('order.post') }}" method="POST">
        @csrf
        <div id="cart-products">
            @include('carts.cartProducts')
        </div>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="{{ route('home') }}" class="btn btn-outline-dark px-4">
                ← Continue Shopping
            </a>

            <button class="btn btn-success px-5 fw-bold">
                Proceed to Checkout →
            </button>
        </div>
    </form>
@endsection

<!-- JQery Logic To Handle Cart Actions -->

@section('scripts')
    <!-- Handle Quantity -->
    <script type="text/javascript">
        $("body").on("change", ".quantity", function(e) {
            var elem = $(this);
            $.ajax({
                url: "{{ route('cart.update') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    type: 'update',
                    product_id: elem.parents("tr").attr("data-id"),
                    quantity: elem.val()
                },
                success: function(response) {
                    $("#cart-products").html(response.success)
                    console.log(response)
                }
            });
        });

        // Handle Delete
        $("body").on("click", ".remove-from-cart", function(e) {
            var elem = $(this);
            $.ajax({
                url: "{{ route('cart.update') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    type: 'delete',
                    product_id: elem.parents("tr").attr("data-id")
                },
                success: function(response) {
                    $("#cart-products").html(response.success)
                    console.log(response)
                }
            });
        });
    </script>
@endsection
