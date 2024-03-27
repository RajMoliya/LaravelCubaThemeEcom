<div class="page-wrapper compact-wrapper" id="pageWrapper" style="margin: 20px">
    <div class="page-body checkout">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h3>Checkout
                            <span class="float-end" style="font-size:60%">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i data-feather="home"
                                                style="padding-bottom: 3px"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Checkout</li>
                                </ol>
                            </span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5>Billing Details
                        <span class="float-end"><a class="btn btn-secondary cart-btn-transform"
                                href="{{ url('/cart') }}">Back</a></span>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-sm-12">
                            <form>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Full Name</label>
                                        <input type="text" wire:model.defer="fullname" class="form-control"
                                            placeholder="Enter Full Name" />
                                        @error('fullname')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Phone Number</label>
                                        <input type="text" wire:model.defer="phone" class="form-control"
                                            placeholder="Enter Phone Number" />
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Email Address</label>
                                        <input type="email" wire:model.defer="email" class="form-control"
                                            placeholder="Enter Email Address" />
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Pin-code (Zip-code)</label>
                                        <input type="text" wire:model.defer="pincode" class="form-control"
                                            placeholder="Enter Pin-code" />
                                        @error('pincode')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Full Address</label>
                                        <textarea wire:model.defer="address" class="form-control" rows="2"></textarea>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-sm-12">
                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div class="checkbox-title">
                                            <h4>Product </h4><span>Total</span>
                                        </div>
                                    </div>
                                    <ul class="qty">
                                        @foreach ($carts as $item)
                                            <li>{{ $item->product->name }} * {{ $item->quantity }}
                                                <span>&#8377;{{ $item->quantity * $item->product->selling_price }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">&#8377;{{ $totalProductAmount }}</span>
                                        </li>
                                        <li class="shipping-class">Shipping
                                            <div class="shopping-checkout-option" style="display: flex;width:250px">
                                                <label for="rad-ani" style="padding-right: 40px">
                                                    <input class="radio_animated" id="rad-ani" type="radio"
                                                        name="options" checked="">Option 1
                                                </label>
                                                <label for="rad-ani1">
                                                    <input class="radio_animated" id="rad-ani1" type="radio"
                                                        name="options">Option 1
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="sub-total total">
                                        <li>Total <span class="count">&#8377;{{ $totalProductAmount }}</span></li>
                                    </ul>
                                    <div class="animate-chk">
                                        <div class="row">
                                            <div class="col">
                                                <label class="d-block" for="edo-ani">
                                                    <input wire:model.live="selectedMode" value="Online Payments"
                                                        class="radio_animated" id="edo-ani" type="radio"
                                                        name="rdo-ani" data-original-title="" title="">Online
                                                    Payments
                                                </label>
                                                <label class="d-block" for="edo-ani1">
                                                    <input wire:model.live="selectedMode" value="Cash On Delivery"
                                                        class="radio_animated" id="edo-ani1" type="radio"
                                                        name="rdo-ani" data-original-title="" title="">Cash On
                                                    Delivery
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-place">
                                        <a class="btn btn-primary" wire:click ="codOrder('{{ $selectedMode }}')"
                                            id="place-order-btn">Place Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</div>
