@props(["product"])
<div class="product">

    <img src="{{$product->images[0]->url}}">

    <div class="product-info">

        <h3 class="product-name">{{$product->title}}</h3>

        <h4 class="product-price">₹ 1,000</h4>

        
        <p class="product-quantity">Qnt: <input value="1" name="">

        <p class="product-remove">

            <i class="fa fa-trash" aria-hidden="true"></i>

            <span class="remove">Remove</span>

        </p>

    </div>

</div>