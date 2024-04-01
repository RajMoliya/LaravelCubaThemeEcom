@extends('layouts.app')

@section('title', 'My Orders')

@section('content')
    <div class="py-3 py-md-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h5>My Orders
                        <span class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i data-feather="home"
                                            style="padding-bottom: 3px"></i></a>
                                </li>
                            </ol>
                        </span>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($orders as $item)
                            <div class="col-xxl-4 col-md-6">
                                <div class="prooduct-details-box">
                                    <div class="media"><span style="margin:8% 3% ">
                                            <h6>Order
                                                Id
                                                <div style="text-align:center">{{ $item->id }}</div>
                                            </h6>
                                        </span>
                                        <div class="media-body ms-3" style="margin: 5%">
                                            <div class="product-name">
                                                <h6><a href="#">{{ $item->created_at->format('d-m-Y') }}</a></h6>
                                            </div>
                                            <div class="price d-flex">
                                                <div class="text-muted me-2">{{ $item->payment_mode }}</div>
                                            </div>
                                            <div class="avaiabilty">
                                                <div class="text-success">{{ $item->status_message }}</div>
                                            </div><a class="btn btn-primary btn-xs"
                                                href="{{ url('orders/' . $item->id) }}">View</a><i class="close"
                                                data-feather="x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-xxl-4 col-md-6">
                                No Orders Available
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
