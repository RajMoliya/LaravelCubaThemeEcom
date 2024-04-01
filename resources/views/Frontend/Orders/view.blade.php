@extends('layouts.app')

@section('title', 'My Orders Details')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container" style="margin-top: 2%">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice">
                                <div>
                                    <div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="media">
                                                    <div class="media-left"><img class="media-object img-60"
                                                            src="{{ asset('uploads/logo/' . $appSetting->logo) }}"
                                                            alt=""></div>
                                                    <div class="media-body m-l-20 text-right">
                                                        <h4 class="media-heading">Meta</h4>
                                                        <p>{{ $appSetting->email1 }}<br><span>{{ $appSetting->phone1 }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- End Info-->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-md-end text-xs-center">
                                                    <h3>Invoice #<span class="counter">{{ $orders->id }}</span></h3>
                                                    <p>Issued: {{ $orders->created_at }}</span><br> Payment Mode:
                                                        {{ $orders->payment_mode }}
                                                    </p>
                                                </div>
                                                <!-- End Title-->
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- End InvoiceTop-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <div class="media-body m-l-20">
                                                    <h4 class="media-heading">{{ $orders->fullname }}</h4>
                                                    <p>{{ $orders->email }}<br><span>{{ $orders->phone }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-md-end" id="project">
                                                <h6>Order Detais</h6>
                                                <p>Tracking Id/No: {{ $orders->tracking_no }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Invoice Mid-->
                                    <div>
                                        <div class="table-responsive invoice-table" id="table">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #ecf3fa">
                                                        <th>Item Id</th>
                                                        <th>Image</th>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $totalPrice = 0;
                                                    @endphp
                                                    @foreach ($orders->orderItems as $orderItem)
                                                        <tr>
                                                            <td width='10%'>{{ $orderItem->id }}</td>
                                                            <td width='10%'>
                                                                @if ($orderItem->product->productImages)
                                                                    <img src="{{ asset($orderItem->product->productImages[0]->image) }}"
                                                                        style="width: 50px; height: 50px" alt="">
                                                                @else
                                                                    <img src="" style="width: 50px; height: 50px"
                                                                        alt="">
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $orderItem->product->name }}
                                                                @if ($orderItem->productColor)
                                                                    <span> - Color :
                                                                        {{ $orderItem->productColor->color->name }}
                                                                    </span>
                                                                @endif
                                                            </td>

                                                            <td width='10%'>{{ $orderItem->price }}</td>
                                                            <td width='10%'>{{ $orderItem->quantity }}</td>
                                                            <td width='10%' class="fw-bold">
                                                                &#8377;{{ $orderItem->quantity * $orderItem->price }}</td>
                                                            @php
                                                                $totalPrice += $orderItem->quantity * $orderItem->price;
                                                            @endphp
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="5" class="fw-bold">Total Amount : </td>
                                                        <td colspan="1" class="fw-bold">&#8377;{{ $totalPrice }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End Table-->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div>
                                                    <p class="legal"><strong>Thank you for your business!</strong>  Payment
                                                        is expected within 31 days; please process this invoice within that
                                                        time. There will be a 5% interest charge per month on late invoices.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <form class="text-end">
                                                    <input type="image" src="../assets/images/other-images/paypal.png"
                                                        name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End InvoiceBot-->
                                </div>
                                <div class="col-sm-12 text-center mt-3">
                                    <button class="btn btn btn-primary me-2" type="button"
                                        onclick="myFunction()">Print</button>
                                    <button class="btn btn-secondary" type="button">Cancel</button>
                                </div>
                                <!-- End Invoice-->
                                <!-- End Invoice Holder-->
                                <!-- Container-fluid Ends-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
