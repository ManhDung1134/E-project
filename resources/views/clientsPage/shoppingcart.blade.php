@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/pageStyle/checkOut.css') }}">

@stop
@section('content')
    <div class="main">
        <div class="container">
            <div class="container__product">
                <div class="container__product-big">
                    <div class="container__product-categories">
                        @foreach ($this_customer as $item)
                            <div class="container__product-categories-product">{{ $item->Email }}</div>
                        @endforeach
                        <div class="container__product-categories-price">Price</div>
                        <div class="container__product-categories-quantity">Quantity</div>
                        <div class="container__product-categories-total">Total</div>
                        <div class="container__product-categories-button"></div>
                </div>
                <div class="container__product-list">
                    <div class="container__product-list-cart">
                        <div class="container__product-list-cart-image">
                            <div class="container__product-list-cart-image-img">
                                <img src="./image/div1-right.png" style="width: 89px; height: 110px;" alt="">
                            </div>
                            <div class="container__product-list-cart-image-info">
                                <div class="container__product-list-cart-info-name">Product Name</div>
                                <div class="container__product-list-cart-info-cate">Color</div>
                                <div class="container__product-list-cart-info-cate">Category</div>
                            </div>
                        </div>
                        <div class="container__product-list-cart-price">$1000</div>
                        <div class="container__product-list-cart-quantity">
                            <button>
                                <ion-icon class="icon" name="remove-outline"></ion-icon>
                            </button>
                            <div class="container__product-list-cart-quantity-numb">2</div>
                            <button>
                                <ion-icon class="icon" name="add-outline"></ion-icon>
                            </button>
                        </div>
                        <div class="container__product-list-cart-total">$2000</div>
                        <div class="container__product-list-cart-button">
                            <button>Remove</button>
                            <button>Replace</button>
                        </div>
                    </div>
                    <div class="container__product-list-cart">
                        <div class="container__product-list-cart-image">
                            <div class="container__product-list-cart-image-img">
                                <img src="./image/div1-right.png" style="width: 89px; height: 110px;" alt="">
                            </div>
                            <div class="container__product-list-cart-image-info">
                                <div class="container__product-list-cart-info-name">Product Name</div>
                                <div class="container__product-list-cart-info-cate">Color</div>
                                <div class="container__product-list-cart-info-cate">Category</div>
                            </div>
                        </div>
                        <div class="container__product-list-cart-price">$1000</div>
                        <div class="container__product-list-cart-quantity">
                            <button>
                                <ion-icon class="icon" name="remove-outline"></ion-icon>
                            </button>
                            <div class="container__product-list-cart-quantity-numb">2</div>
                            <button>
                                <ion-icon class="icon" name="add-outline"></ion-icon>
                            </button>
                        </div>
                        <div class="container__product-list-cart-total">$2000</div>
                        <div class="container__product-list-cart-button">
                            <button>Remove</button>
                            <button>Replace</button>
                        </div>
                    </div>
                    <div class="container__product-list-cart">
                        <div class="container__product-list-cart-image">
                            <div class="container__product-list-cart-image-img">
                                <img src="./image/div1-right.png" style="width: 89px; height: 110px;" alt="">
                            </div>
                            <div class="container__product-list-cart-image-info">
                                <div class="container__product-list-cart-info-name">Product Name</div>
                                <div class="container__product-list-cart-info-cate">Color</div>
                                <div class="container__product-list-cart-info-cate">Category</div>
                            </div>
                        </div>
                        <div class="container__product-list-cart-price">$1000</div>
                        <div class="container__product-list-cart-quantity">
                            <button>
                                <ion-icon class="icon" name="remove-outline"></ion-icon>
                            </button>
                            <div class="container__product-list-cart-quantity-numb">2</div>
                            <button>
                                <ion-icon class="icon" name="add-outline"></ion-icon>
                            </button>
                        </div>
                        <div class="container__product-list-cart-total">$2000</div>
                        <div class="container__product-list-cart-button">
                            <button>Remove</button>
                            <button>Replace</button>
                        </div>
                    </div>
                    <div class="container__product-list-cart">
                        <div class="container__product-list-cart-image">
                            <div class="container__product-list-cart-image-img">
                                <img src="./image/div1-right.png" style="width: 89px; height: 110px;" alt="">
                            </div>
                            <div class="container__product-list-cart-image-info">
                                <div class="container__product-list-cart-info-name">Product Name</div>
                                <div class="container__product-list-cart-info-cate">Color</div>
                                <div class="container__product-list-cart-info-cate">Category</div>
                            </div>
                        </div>
                        <div class="container__product-list-cart-price">$1000</div>
                        <div class="container__product-list-cart-quantity">
                            <button>
                                <ion-icon class="icon" name="remove-outline"></ion-icon>
                            </button>
                            <div class="container__product-list-cart-quantity-numb">2</div>
                            <button>
                                <ion-icon class="icon" name="add-outline"></ion-icon>
                            </button>
                        </div>
                        <div class="container__product-list-cart-total">$2000</div>
                        <div class="container__product-list-cart-button">
                            <button>Remove</button>
                            <button>Replace</button>
                        </div>
                    </div>
                    <div class="container__product-list-cart">
                        <div class="container__product-list-cart-image">
                            <div class="container__product-list-cart-image-img">
                                <img src="./image/div1-right.png" style="width: 89px; height: 110px;" alt="">
                            </div>
                            <div class="container__product-list-cart-image-info">
                                <div class="container__product-list-cart-info-name">Product Name</div>
                                <div class="container__product-list-cart-info-cate">Color</div>
                                <div class="container__product-list-cart-info-cate">Category</div>
                            </div>
                        </div>
                        <div class="container__product-list-cart-price">$1000</div>
                        <div class="container__product-list-cart-quantity">
                            <button>
                                <ion-icon class="icon" name="remove-outline"></ion-icon>
                            </button>
                            <div class="container__product-list-cart-quantity-numb">2</div>
                            <button>
                                <ion-icon class="icon" name="add-outline"></ion-icon>
                            </button>
                        </div>
                        <div class="container__product-list-cart-total">$2000</div>
                        <div class="container__product-list-cart-button">
                            <button>Remove</button>
                            <button>Replace</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container__cartTotal">
            <div class="container__cartTotal-big">
                <div class="container__cartTotal-big2">
                    <div class="container__cartTotal-big2-tittle">Cart Totals</div>
                    <hr class="hr1">
                    <div class="container__cartTotal-big2-info">
                        <div class="container__cartTotal-big2-info-sub">
                            <div class="container__cartTotal-big2-info-sub-left">Subtotals</div>
                            <div class="container__cartTotal-big2-info-sub-right">$10000</div>
                        </div>
                        <div class="container__cartTotal-big2-info-ship">
                            <div class="container__cartTotal-big2-info-left">Shipping</div>
                            <div class="container__cartTotal-big2-info-right">$5</div>
                        </div>
                        <div class="container__cartTotal-big2-info-deli">
                            <input type="text" list="ship" placeholder="    Delivery Option" />
                            <datalist id="ship">
                                <option value="    Standard Delivery - $5">
                                <option value="    Fast Delivery - $8">
                                <option value="    Priority Delivery - $12">
                            </datalist>
                        </div>
                        <div class="container__cartTotal-big2-info-give">
                            <div class="container__cartTotal-big2-info-give-left">Give Code</div>
                            <div class="container__cartTotal-big2-info-give-right">Free Ship</div>
                        </div>
                        <div class="container__cartTotal-big2-info-code">
                            <input type="text" placeholder="    Enter Your Code">
                            <button>
                                <ion-icon alt="Enter Your Code" name="arrow-forward-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <hr class="hr1">
                    <div class="container__cartTotal-big2-totalPrice">
                        <div class="container__cartTotal-big2-totalPrice-left">Total Price</div>
                        <div class="container__cartTotal-big2-totalPrice-right">$10000</div>
                    </div>
                    <div class="container__cartTotal-big2-button">
                        <button>Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main__alsoLike">
        <p>You May Also Like</p>
        <div class="main__alsoLike-product">
            <div class="main__alsoLike-product-card">
                <div class="main__alsoLike-product-card-image">
                    <img src="./image/div1-right.png" style="width: 281px; height: 375px;" alt="">
                </div>
                <div class="main__alsoLike-product-card-info">
                    <div class="main__alsoLike-product-card-info-name">Product Name</div>
                    <div class="main__alsoLike-product-card-info-price">Price</div>
                </div>
            </div>
            <div class="main__alsoLike-product-card">
                <div class="main__alsoLike-product-card-image">
                    <img src="./image/div1-right.png" style="width: 281px; height: 375px;" alt="">
                </div>
                <div class="main__alsoLike-product-card-info">
                    <div class="main__alsoLike-product-card-info-name">Product Name</div>
                    <div class="main__alsoLike-product-card-info-price">Price</div>
                </div>
            </div>
            <div class="main__alsoLike-product-card">
                <div class="main__alsoLike-product-card-image">
                    <img src="./image/div1-right.png" style="width: 281px; height: 375px;" alt="">
                </div>
                <div class="main__alsoLike-product-card-info">
                    <div class="main__alsoLike-product-card-info-name">Product Name</div>
                    <div class="main__alsoLike-product-card-info-price">Price</div>
                </div>
            </div>
            <div class="main__alsoLike-product-card">
                <div class="main__alsoLike-product-card-image">
                    <img src="./image/div1-right.png" style="width: 281px; height: 375px;" alt="">
                </div>
                <div class="main__alsoLike-product-card-info">
                    <div class="main__alsoLike-product-card-info-name">Product Name</div>
                    <div class="main__alsoLike-product-card-info-price">Price</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="subscribeUs">
    <div class="subscribeUs__text">
        <div class="subscribeUs__text-firstText">Subscribe To Our Newsletter</div>
        <div class="subscribeUs__text-secondText">Keep your finger on the pulse of fashion with weekly round-ups
            of
            our
            latest arrivals, upcoming launches, special promotions and trend-focused editorials.
        </div>
        <input type="text" placeholder="Enter your email address"><button>SUBSCRIBE</button>
    </div>
</div>
@stop