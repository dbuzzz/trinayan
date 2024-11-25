@extends('frontend.layout')
@section('extern-css')
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
 
@endsection
@section('content')
@php
if (isset($_GET['coupon'])) {
	$coupon = $_GET['coupon'];
}else{
	$coupon = '';
}
@endphp


	<!-- Start Breadcrumb Area -->
	{{-- <section class="breadcrumb-area pt-100 pb-100" style="background-image:url('{{@$genral_pages->banner}}');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcrumb-content">
						<h2>Checkout</h2>
						<ul>
							<li><a href="{{url('/')}}">Home</a></li>
							<li><i class="fas fa-angle-double-right"></i></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->

	<!-- Start Shop Page -->
	<section class="section-padding-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-30">
					<div class="checkout-form-main">
						<h2>Billing details</h2>
						<form method="post" action="{{url('/payment')}}">
							@csrf
							<input type="hidden" name="coupon" value="{{$coupon}}">
							<input type="hidden" name="tax" value="{{$tax}}">
							<input type="hidden" name="discount" value="{{$coupon_discount_amount}}">
							<input type="hidden" name="total" id="total_val" value="{{$total}}">
							<input type="hidden" name="shipping" id="ship_val" value="{{@$shipping}}">
							<div class="row">
								
								<div class="col-12">
									<div class="input-field">
										<label>Name *</label>
										<input type="text" name="name" id="name" >
									</div>
								</div>

								<div class="col-6">
									<div class="input-field">
										<label>E-mail *</label>
										<input type="email" name="email" id="email" >
									</div>
								</div>

								<div class="col-6">
									<div class="input-field">
										<label>Mobile *</label>
										<input type="text" name="mobile" id="mobile">
									</div>
								</div>

								<div class="col-12 pb-4">
										<label>Use Current Address</label>
										<input onclick="fill_address()" type="checkbox" value="1"  name="checkbox" id="checkbox">
								</div>

								<div class="col-6">
									<div class="input-field">
										<label>Country *</label>
										<input type="text" name="country" id="country" >
									</div>
								</div>

								<div class="col-6">
									<div class="input-field">
										<label>State *</label>
										<input type="text" name="state" id="state" >
									</div>
								</div>

								<div class="col-6">
									<div class="input-field">
										<label>City *</label>
										<input type="text" name="city" id="city" >
									</div>
								</div>
								
								<div class="col-6">
									<div class="input-field">
										<label>Pincode * </label>
										<input type="text" onkeyup="getship()" name="pincode" id="pincode" >
									</div>
								</div>

								<div class="col-12">
									<div class="input-field">
										<label>Address * </label>
										<textarea onkeyup="validatecheck()" name="address" id="address"></textarea>
									</div>
								</div>
								
							</div>
						
					</div>
				</div>
				<div class="col-lg-4 mb-30">
					<div class="checkout-summery mb-30">
						<h2>Checkout summary</h2>
						<ul>
							<li>Subtotal <span>&#8377; {{@$price}}</span></li>
							<li>Shipping <span >&#8377; <span id="ship_html">{{@$shipping}}</span></span></li>
							<li>Tax <span>&#8377; {{@$tax}}</span></li>
							<li>Discount <span>&#8377; {{@$coupon_discount_amount}}</span></li>
							<li><b>Payable Total</b><span><b>&#8377; <span id="p_total">{{@$total}}</span></b></span></li>
						</ul>
						<button type="submit" id="btn" disabled class="button-1 mt-10">Place Order</button>
					</div>
					
				</div>
				</form>
			</div>
		</div>
	</section> --}}

	<div class="mb-5 pb-xl-5"></div><div class="mb-5 pb-xl-5"></div>
	<main>
		<div class="mb-4 pb-4"></div>
		<section class="shop-checkout container">
		  <h2 class="page-title">Shipping and Checkout</h2>
		  <div class="checkout-steps">
			<a href="{{url('/cart-page')}}" class="checkout-steps__item active">
			  <span class="checkout-steps__item-number">01</span>
			  <span class="checkout-steps__item-title">
				<span>Shopping Bag</span>
				<em>Manage Your Items List</em>
			  </span>
			</a>
			<a href="{{url('/checkout-page')}}" class="checkout-steps__item active">
			  <span class="checkout-steps__item-number">02</span>
			  <span class="checkout-steps__item-title">
				<span>Shipping and Checkout</span>
				<em>Checkout Your Items List</em>
			  </span>
			</a>
			<a href="shop_order_complete.html" class="checkout-steps__item">
			  <span class="checkout-steps__item-number">03</span>
			  <span class="checkout-steps__item-title">
				<span>Confirmation</span>
				<em>Review And Submit Your Order</em>
			  </span>
			</a>
		  </div>
		  <form name="checkout-form">
			<div class="checkout-form">
			  <div class="billing-info__wrapper">
				<h4>BILLING DETAILS</h4>
				<div class="row">
				  <div class="col-md-6">
					<div class="form-floating my-3">
					  <input type="text" class="form-control" id="checkout_first_name" placeholder="First Name">
					  <label for="checkout_first_name">First Name</label>
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="form-floating my-3">
					  <input type="text" class="form-control" id="checkout_last_name" placeholder="Last Name">
					  <label for="checkout_last_name">Last Name</label>
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="form-floating my-3">
					  <input type="text" class="form-control" id="checkout_company_name" placeholder="Company Name (optional)">
					  <label for="checkout_company_name">Company Name (optional)</label>
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="search-field my-3">
					  <div class="form-label-fixed hover-container">
						<label for="search-dropdown" class="form-label">Country / Region*</label>
						<div class="js-hover__open">
						  <input type="text" class="form-control form-control-lg search-field__actor search-field__arrow-down" id="search-dropdown" name="search-keyword" readonly placeholder="Choose a location...">
						</div>
						<div class="filters-container js-hidden-content mt-2">
						  <div class="search-field__input-wrapper">
							<input type="text" class="search-field__input form-control form-control-sm bg-lighter border-lighter" placeholder="Search">
						  </div>
						  <ul class="search-suggestion list-unstyled">
							<li class="search-suggestion__item js-search-select">Australia</li>
							<li class="search-suggestion__item js-search-select">Canada</li>
							<li class="search-suggestion__item js-search-select">United Kingdom</li>
							<li class="search-suggestion__item js-search-select">United States</li>
							<li class="search-suggestion__item js-search-select">Turkey</li>
						  </ul>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="form-floating mt-3 mb-3">
					  <input type="text" class="form-control" id="checkout_street_address" placeholder="Street Address *">
					  <label for="checkout_company_name">Street Address *</label>
					</div>
					<div class="form-floating mt-3 mb-3">
					  <input type="text" class="form-control" id="checkout_street_address_2">
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="form-floating my-3">
					  <input type="text" class="form-control" id="checkout_city" placeholder="Town / City *">
					  <label for="checkout_city">Town / City *</label>
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="form-floating my-3">
					  <input type="text" class="form-control" id="checkout_zipcode" placeholder="Postcode / ZIP *">
					  <label for="checkout_zipcode">Postcode / ZIP *</label>
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="form-floating my-3">
					  <input type="text" class="form-control" id="checkout_province" placeholder="Province *">
					  <label for="checkout_province">Province *</label>
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="form-floating my-3">
					  <input type="text" class="form-control" id="checkout_phone" placeholder="Phone *">
					  <label for="checkout_phone">Phone *</label>
					</div>
				  </div>
				  <div class="col-md-12">
					<div class="form-floating my-3">
					  <input type="email" class="form-control" id="checkout_email" placeholder="Your Mail *">
					  <label for="checkout_email">Your Mail *</label>
					</div>
				  </div>
				  {{-- <div class="col-md-12">
					<div class="form-check mt-3">
					  <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="create_account">
					  <label class="form-check-label" for="create_account">CREATE AN ACCOUNT?</label>
					</div>
					<div class="form-check mb-3">
					  <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="ship_different_address">
					  <label class="form-check-label" for="ship_different_address">SHIP TO A DIFFERENT ADDRESS?</label>
					</div>
				  </div> --}}
				</div>
				<div class="col-md-12">
				  <div class="mt-3">
					<textarea class="form-control form-control_gray" placeholder="Order Notes (optional)" cols="30" rows="8"></textarea>
				  </div>
				</div>
			  </div>
			  <div class="checkout__totals-wrapper">
				<div class="sticky-content">
				  <div class="checkout__totals">
					<h3>Your Order</h3>
					<table class="checkout-cart-items">
					  <thead>
						<tr>
						  <th>PRODUCT</th>
						  <th>SUBTOTAL</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>
							Zessi Dresses x 2
						  </td>
						  <td>
							$32.50
						  </td>
						</tr>
						<tr>
						  <td>
							Kirby T-Shirt
						  </td>
						  <td>
							$29.90
						  </td>
						</tr>
					  </tbody>
					</table>
					<table class="checkout-totals">
					  <tbody>
						<tr>
						  <th>SUBTOTAL</th>
						  <td>$62.40</td>
						</tr>
						<tr>
						  <th>SHIPPING</th>
						  <td>Free shipping</td>
						</tr>
						<tr>
						  <th>VAT</th>
						  <td>$19</td>
						</tr>
						<tr>
						  <th>TOTAL</th>
						  <td>$81.40</td>
						</tr>
					  </tbody>
					</table>
				  </div>
				  <div class="checkout__payment-methods">
					<div class="form-check">
					  <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_1" checked>
					  <label class="form-check-label" for="checkout_payment_method_1">
						Direct bank transfer
						<span class="option-detail d-block">
						  Make your payment directly into our bank account. Please use your Order ID as the payment reference.Your order will not be shipped until the funds have cleared in our account.
						</span>
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_2">
					  <label class="form-check-label" for="checkout_payment_method_2">
						Check payments
						<span class="option-detail d-block">
						  Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
						</span>
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_3">
					  <label class="form-check-label" for="checkout_payment_method_3">
						Cash on delivery
						<span class="option-detail d-block">
						  Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
						</span>
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_4">
					  <label class="form-check-label" for="checkout_payment_method_4">
						Paypal
						<span class="option-detail d-block">
						  Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
						</span>
					  </label>
					</div>
					<div class="policy-text">
					  Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="terms.html" target="_blank">privacy policy</a>.
					</div>
				  </div>
				  <button class="btn btn-primary btn-checkout">PLACE ORDER</button>
				</div>
			  </div>
			</div>
		  </form>
		</section>
	  </main>


@endsection
@section('extern-js')

<script src="{{url('plugins\datatables\jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
<script type="text/javascript">
	address = '{{@$address->address}}';
	country = '{{@$address->country}}';
	city = '{{@$address->city}}';
	state = '{{@$address->state}}';
	pincode = '{{@$address->pincode}}';

	function discountAmount(){
		console.log($('#discountAmount').val());
		$('#discount').val($('#discountAmount').val());
		let newAmount = Number($('#nettotal').val())-Number($('#discountAmount').val());
		$('#p_total').html(newAmount);

	};
	function paymentChanged(){
		$('#city').val($('#chanedPayments').val());

	};
</script>
@endsection