@props(["product"])
<div class="col-lg-3 col-md-6 col-12">
    <div class="single-product">
        <div class="product-image">
            <img src="{{asset('assets/images/products/' . $product->images[0]->url)}}" alt="#">
            <div class="button">
                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
            </div>
        </div>
        <div class="product-info">
            <span class="category">{{$product->category->name}}</span>
            <h4 class="title">
                <a href="product-grids.html">{{$product->title}}</a>
            </h4>
            <div class="price">
                <span>${{$product->price}}</span>
            </div>
        </div>
    </div>
</div>