<div class="page-body" style="margin: 3%">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div>
            <div class="row product-page-main p-0">
                <div class="col-xl-4 xl-cs-65 box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                <div class="item"><img src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/05.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/06.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/07.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/08.jpg" alt=""></div>
                            </div>
                            <div class="owl-carousel owl-theme" id="sync2">
                                <div class="item"><img src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/05.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/06.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/07.jpg" alt=""></div>
                                <div class="item"><img src="../assets/images/ecommerce/08.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 xl-100 box-col-6">
                    <div class="card">
                        <div class="card-body">
                            <p>{{ $product->description }}</p>
                            <hr>
                            <div>
                                <table class="product-page-width">
                                    <tbody>
                                        <tr>
                                            <td> <b>Brand &nbsp;&nbsp;&nbsp;:</b></td>
                                            <td>{{ $product->brand }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Availability &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b>
                                            </td>
                                            @if ($product->quantity > 0)
                                                <td class="txt-success">In Stock</td>
                                            @else
                                                <td class="txt-danger">OutOf stock</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td> <b>Seller &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                            <td>ABC</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Fabric &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                            <td>Cotton</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="m-t-15">
                                <button class="btn btn-primary m-r-10" type="button" title="">
                                    <i class="fa fa-shopping-basket me-1"></i>Add To Cart</button>
                                <a class="btn btn-secondary" href="#"> <i class="fa fa-heart me-1"></i>Add To
                                    WishList</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-cs-35 box-col-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- side-bar colleps block stat-->
                            <div class="filter-block">
                                <div class="product-page-details">
                                    <h3>{{ $product->name }}</h3>
                                </div>
                                <div class="product-price">&#x20B9;{{ $product->selling_price }}
                                    <del>&#x20B9;{{ $product->original_price }} </del>
                                </div>
                                <ul class="product-color">
                                    @if ($product->productColors->count() > 0)
                                        @if ($product->productColors)
                                            @foreach ($product->productColors as $colorItem)
                                                {{-- <input type="radio" name="colorSelection"
                                                value="{{ $colorItem->id }}">
                                            {{ $colorItem->color->name }} --}}
                                                <li class="colorSelectionLabel"
                                                    style="background-color : {{ $colorItem->color->code }}"
                                                    wire:click ="colorSelected({{ $colorItem->id }})">
                                                </li>
                                            @endforeach
                                        @endif
                                        <div style="margin-top: 3px">
                                            @if ($this->productColorSelectedQuantity == 'outOfStock')
                                                <label class="label-stock bg-danger"
                                                    style="font-size: 13px;
                                                padding: 4px 13px;
                                                border-radius: 5px;
                                                color: #fff;
                                                box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);">OutOf
                                                    Stock</label>
                                            @elseif ($this->productColorSelectedQuantity > 0)
                                                <label class="label-stock bg-success"
                                                    style="font-size: 13px;
                                                padding: 4px 13px;
                                                border-radius: 5px;
                                                color: #fff;
                                                box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);">In
                                                    Stock</label>
                                            @endif
                                        </div>
                                    @else
                                        @if ($product->quantity > 0)
                                            <label class="label-stock bg-success"
                                                style="font-size: 13px;
                                            padding: 4px 13px;
                                            border-radius: 5px;
                                            color: #fff;
                                            box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);">In
                                                Stock</label>
                                        @else
                                            <label class="label-stock bg-danger"
                                                style="font-size: 13px;
                                            padding: 4px 13px;
                                            border-radius: 5px;
                                            color: #fff;
                                            box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);">OutOf
                                                Stock</label>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="collection-filter-block">
                                <ul class="pro-services">
                                    <li>
                                        <div class="media"><i data-feather="truck"></i>
                                            <div class="media-body">
                                                <h5>Free Shipping </h5>
                                                <p>Free Shipping World Wide</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i data-feather="clock"></i>
                                            <div class="media-body">
                                                <h5>24 X 7 Service </h5>
                                                <p>Online Service For New Customer</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i data-feather="gift"></i>
                                            <div class="media-body">
                                                <h5>Festival Offer </h5>
                                                <p>New Online Special Festival</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i data-feather="credit-card"></i>
                                            <div class="media-body">
                                                <h5>Online Payment </h5>
                                                <p>Contrary To Popular Belief. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here-->
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row product-page-main">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home" role="tab" aria-controls="top-home"
                                aria-selected="false">Febric</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                href="#top-profile" role="tab" aria-controls="top-profile"
                                aria-selected="false">Video</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                href="#top-contact" role="tab" aria-controls="top-contact"
                                aria-selected="true">Details</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab"
                                href="#top-brand" role="tab" aria-controls="top-brand"
                                aria-selected="true">Brand</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum."
                            </p>
                            <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum."
                            </p>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel"
                            aria-labelledby="profile-top-tab">
                            <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not
                                only five centuries, but also the leap into electronic typesetting,
                                remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including
                                versions of Lorem Ipsum</p>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel"
                            aria-labelledby="contact-top-tab">
                            <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not
                                only five centuries, but also the leap into electronic typesetting,
                                remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including
                                versions of Lorem Ipsum</p>
                        </div>
                        <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                            <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not
                                only five centuries, but also the leap into electronic typesetting,
                                remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including
                                versions of Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<!-- footer start-->
