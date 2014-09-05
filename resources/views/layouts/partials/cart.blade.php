<div id="mini-cart">
    <p><a href="{{ route('cart.index') }}" class="btn btn-default"><i class="fa fa-shopping-cart"></i> {{ Cart::count(false) }} Items | Total: ${{ Cart::total() }}</a></p>
</div>
