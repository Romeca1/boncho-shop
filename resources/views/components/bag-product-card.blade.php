@props(['product'])
<li>
    <a href="javascript:void(0)" class="remove" title="Remove this item"><i
            class="lni lni-close"></i></a>
    <div class="cart-img-head">
        <a class="cart-img" href="product-details.html"><img
                src="{{asset('assets/images/products/' . $product->images[0]->url)}}" alt="#"></a>
    </div>

    <div class="content">
        <h4><a href="product-details.html">
                {{$product->title}}</a></h4>
        <p class="quantity">1x - <span class="amount">{{$product->price}}</span></p>
    </div>
</li>