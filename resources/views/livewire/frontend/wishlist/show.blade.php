<div class="page-wrapper compact-wrapper" id="pageWrapper" style="margin: 20px">
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Wishlist
                                <span class="float-end" style="font-size:90%">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i
                                                    data-feather="home" style="padding-bottom: 3px"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">Wishlist</li>
                                    </ol>
                                </span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @forelse ($wishlist as $wishlistItem)
                                    @if ($wishlistItem->product)
                                        <div class="col-xl-3 col-md-6">
                                            <div class="prooduct-details-box">
                                                <div class="media"><img class="align-self-center img-fluid img-60"
                                                        src="{{ asset($wishlistItem->product->productImages[0]->image) }}"
                                                        alt="">
                                                    <div class="media-body ms-3">
                                                        <div class="product-name">
                                                            <h6><a
                                                                    href="{{ url('collections/' . $wishlistItem->product->category->slug . '/' . $wishlistItem->product->slug) }}">{{ $wishlistItem->product->name }}</a>
                                                            </h6>
                                                        </div>
                                                        <div class="rating"><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                        <div class="price d-flex">
                                                            <div class="text-muted me-2">Price</div>:
                                                            &#8377;{{ $wishlistItem->product->selling_price }}
                                                        </div>
                                                        <div class="avaiabilty">
                                                            @if ($wishlistItem->product->quantity > 0)
                                                                <div class="text-success">In stock</div>
                                                            @else
                                                                <div class="text-danger">OutOf stock</div>
                                                            @endif

                                                        </div><a class="btn btn-primary btn-xs" href="#">Move to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @empty
                                    <h4>No Products in Wishlist</h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
    </div>
</div>
