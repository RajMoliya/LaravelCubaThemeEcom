<div class="page-wrapper compact-wrapper" id="pageWrapper" style="margin: 20px">
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Cart <span class="float-end" style="font-size:90%">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i
                                                    data-feather="home" style="padding-bottom: 3px"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">Cart</li>
                                    </ol>
                                </span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="order-history table-responsive wishlist">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Prdouct</th>
                                                <th>Prdouct Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Action</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($cart as $cartItem)
                                                @if ($cartItem->product)
                                                    <div class="cart-item">
                                                        <tr>
                                                            <td>
                                                                <a
                                                                    href="{{ url('collections/' . $cartItem->product->category->slug . '/' . $cartItem->product->slug) }}">
                                                                    <label class="product-name">
                                                                        @if ($cartItem->product->productImages)
                                                                            <img src="{{ asset($cartItem->product->productImages[0]->image) }}"
                                                                                style="width: 50px; height: 50px"
                                                                                alt="">
                                                                        @else
                                                                            <img src=""
                                                                                style="width: 50px; height: 50px"
                                                                                alt="">
                                                                        @endif

                                                                    </label>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{ $cartItem->product->name }}
                                                                <br>
                                                                <span style="color: #000;">
                                                                    @if ($cartItem->productColor)
                                                                        Color :
                                                                        {{ $cartItem->productColor->color->name }}
                                                                    @endif
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <label
                                                                    class="price">&#8377;{{ $cartItem->product->selling_price }}

                                                                </label>
                                                            </td>
                                                            <td>
                                                                <fieldset class="qty-box">
                                                                    <div class="input-group bootstrap-touchspin">
                                                                        <button
                                                                            class="btn btn-primary btn-square bootstrap-touchspin-down"
                                                                            wire:loading.attr="disabled"
                                                                            wire:click = "decrementQuantity({{ $cartItem->id }})"
                                                                            type="button"><i
                                                                                class="fa fa-minus"></i></button><span
                                                                            class="input-group-text bootstrap-touchspin-prefix"
                                                                            style="display: none;"></span><input
                                                                            readonly
                                                                            class="touchspin text-center form-control"
                                                                            type="text"
                                                                            value="{{ $cartItem->quantity }}"
                                                                            style="display: block;"><span
                                                                            class="input-group-text bootstrap-touchspin-postfix"
                                                                            style="display: none;"></span><button
                                                                            class="btn btn-primary btn-square bootstrap-touchspin-up"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click = "incrementQuantity({{ $cartItem->id }})"><i
                                                                                class="fa fa-plus"></i></button>
                                                                        @php
                                                                            $totalPrice =
                                                                                $cartItem->product->selling_price *
                                                                                $cartItem->quantity;
                                                                        @endphp
                                                                    </div>
                                                                </fieldset>
                                                            </td>
                                                            <td>
                                                                <div class="remove">
                                                                    <a wire:loading.attr="disabled"
                                                                        wire:click = "removeCartItem({{ $cartItem->id }})">
                                                                        <span wire:loading.remove
                                                                            wire:target = "removeCartItem({{ $cartItem->id }})">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-x-circle">
                                                                                <circle cx="12" cy="12"
                                                                                    r="10">
                                                                                </circle>
                                                                                <line x1="15" y1="9"
                                                                                    x2="9" y2="15">
                                                                                </line>
                                                                                <line x1="9" y1="9"
                                                                                    x2="15" y2="15">
                                                                                </line>
                                                                            </svg>
                                                                        </span>
                                                                        <span wire:loading
                                                                            wire:target = "removeCartItem({{ $cartItem->id }})">
                                                                            <i class="fa fa-trash"></i> Removing...
                                                                        </span>
                                                                    </a>

                                                            </td>
                                                            <td>
                                                                <label class="price">&#8377;{{ $totalPrice }}
                                                                </label>
                                                                @php
                                                                    $finalTotalPrice += $totalPrice;
                                                                @endphp
                                                            </td>
                                                        </tr>
                                                    </div>
                                                @endif
                                            @empty
                                                <h5>No Products in Your Cart</h5>
                                            @endforelse
                                            <tr>
                                                <td colspan="4">
                                                    <div class="input-group">
                                                        <input class="form-control me-2" type="text"
                                                            placeholder="Enter coupan code"><a class="btn btn-primary"
                                                            href="#">Apply</a>
                                                    </div>
                                                </td>
                                                <td class="total-amount">
                                                    <h6 class="m-0 text-end"><span class="f-w-600">Total Price
                                                            :</span>
                                                    </h6>
                                                </td>
                                                <td><span>&#8377;{{ $finalTotalPrice }}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-end" colspan="5"><a
                                                        class="btn btn-secondary cart-btn-transform"
                                                        href="{{ url('/collections') }}">Continue
                                                        Shopping</a></td>
                                                <td><a class="btn btn-success cart-btn-transform"
                                                        href="{{ url('/checkout') }}">Check
                                                        Out</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Container-fluid Ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
