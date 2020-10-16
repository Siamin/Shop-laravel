@extends ('shop.layouts.master')

@section('content')


<!-- Checkout area -->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <!-- Payment Method -->
                <div class="payment-method">
                    <!-- Panel Gropup -->
                    <div class="panel-group" id="accordion">
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" class="active" data-parent="#accordion" href="#checkut1">
                                        <span class="number">1</span>Checkout Method</a>
                                </h4>
                            </div>
                            <div id="checkut1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <form class="checkout-form product-form">
                                                <h2>Login</h2>
                                                <div class="submit-review">
                                                    <p class="title"><b>Already registered?</b></p>
                                                    <p>Please log in below</p>
                                                    <div class="account-form">
                                                        <div class="form-goroup">
                                                            <label>Email Address <sup>*</sup></label>
                                                            <input type="text" required="required" class="form-control">
                                                        </div>
                                                        <div class="form-goroup">
                                                            <label>Password <sup>*</sup></label>
                                                            <input type="password" required="required"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="user-bottom fix">
                                                    <a href="#">Forgot Your Password?</a>
                                                    <button class="btn custom-button" type="button">login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Panel Default -->
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut2">
                                        <span class="number">2</span>Billing Information</a>
                                </h4>
                            </div>
                            <div id="checkut2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form action="#">
                                            <div class="form">
                                                <div class="card-control">
                                                    <ul>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label" for="first">First Name
                                                                        <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="first">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="middle">Middle
                                                                        Name/Initial </label>
                                                                    <input type="text" class=" border-color"
                                                                        id="middle">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="last">Last
                                                                        Name<em>*</em></label>
                                                                    <input type="text" class=" border-color" id="last">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label" for="Company">Company
                                                                    </label>
                                                                    <input type="text" class=" border-color"
                                                                        id="Company">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="email">Email Address
                                                                        <em>*</em></label>
                                                                    <input type="email" class=" border-color"
                                                                        id="email" />
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box inhun">
                                                                    <label class="label" for="addr">Address
                                                                        <em>*</em></label>
                                                                    <input type="text" class=" border-color"
                                                                        id="addr" />
                                                                    <input type="text" class=" border-color" />
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label" for="City">City
                                                                        <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="City">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label"
                                                                        for="State">State/Province<em>*</em></label>
                                                                    <div class="i-box">
                                                                        <select id="State">
                                                                            <option value="" selected>Select
                                                                            </option>
                                                                            <option value="">Japan</option>
                                                                            <option value="">Germani</option>
                                                                            <option value="">India</option>
                                                                            <option value="">US</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label" for="Zip">Zip/Postal Code
                                                                        <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="Zip">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label"
                                                                        for="Country">Country<em>*</em></label>
                                                                    <div class="i-box">
                                                                        <select id="Country">
                                                                            <option value="" selected>Select
                                                                            </option>
                                                                            <option value="">Japan</option>
                                                                            <option value="">Germani</option>
                                                                            <option value="">India</option>
                                                                            <option value="">US</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label" for="Telephone">Telephone
                                                                        <em>*</em></label>
                                                                    <input type="text" class=" border-color"
                                                                        id="Telephone">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="Fax">Fax
                                                                        <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="Fax">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="chackoutl">
                                                                <div class="i-boxb topmargin">
                                                                    <input class="checkout-radio" type="radio"
                                                                        name="tag" id="guest" />
                                                                    <label class="cradio" for="guest">Checkout as
                                                                        Guest</label>
                                                                </div>
                                                                <div class="i_boxb">
                                                                    <input class="checkout-radio" type="radio"
                                                                        name="tag" id="regis" />
                                                                    <label class="cradio" for="regis">Register</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="button-check">
                                                    <div class="">
                                                        <span class="left-btn"><a href=""><i
                                                                    class="fa fa-long-arrow-up"></i>Back</a></span><button
                                                            type="submit"
                                                            class="btn right-btn custom-button">Continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Panel Default -->
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut4">
                                        <span class="number">3</span>Shipping Method</a>
                                </h4>
                            </div>
                            <div id="checkut4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="flatrate">
                                            <p>Flat Rate</p>
                                            <p>Fixed &dollar;150.00</p>
                                        </div>
                                        <div class="button-check">
                                            <div class="">
                                                <span class="left-btn"><a href=""><i
                                                            class="fa fa-long-arrow-up"></i>Back</a></span><button
                                                    type="submit" class="btn right-btn custom-button">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Panel Default -->
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut5">
                                        <span class="number">4</span>Payment Information</a>
                                </h4>
                            </div>
                            <div id="checkut5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="flatrate">
                                            <p><input type="radio" id="Money" /><label for="Money">Check / Money
                                                    order </label></p>
                                            <p><input type="radio" id="Credit" /><label for="Credit">Credit Card
                                                    (saved) </label></p>
                                        </div>
                                        <div class="button-check">
                                            <div class="">
                                                <span class="left-btn"><a href=""><i
                                                            class="fa fa-long-arrow-up"></i>Back</a></span><button
                                                    type="submit" class="btn right-btn custom-button">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Panel Default -->
                        <!-- Panel Default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#checkut6">
                                        <span class="number">5</span>Order Review</a>
                                </h4>
                            </div>
                            <div id="checkut6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="tablec">
                                                <tr>
                                                    <td>Product Name</td>
                                                    <td>Price</td>
                                                    <td>Qty</td>
                                                    <td>Subtotal</td>
                                                </tr>
                                                <tr>
                                                    <td>Cras neque metus</td>
                                                    <td>
                                                        <p class="tabletextp">&dollar;155</p>
                                                    </td>
                                                    <td>1</td>
                                                    <td>
                                                        <p class="tabletextp">&dollar;155.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <p class="tabletext">Subtotal</p>
                                                        <p class="tabletext">Shipping & Handling (Flat Rate - Fixed)
                                                        </p>
                                                        <p class="tabletext">Grand Total</p>
                                                    </td>
                                                    <td>
                                                        <p class="tabletextp">&dollar;155.00</p>
                                                        <p class="tabletextp">&dollar;5.00</p>
                                                        <p class="tabletextp">&dollar;160.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="button-check">
                                                            <div class="">
                                                                <span class="left-btn"><a href="">Forgot an Item?
                                                                        Edit Your Cart</a></span><button type="submit"
                                                                    class="btn right-btn custom-button">Continue</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel Default -->
                    </div>
                    <!-- End Panel Gropup -->
                </div>
                <!-- End Payment Method -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="checkout-sidebar">
                    <h4>Checkout Progress</h4>
                    <ul>
                        <li><a href="#">Billing Address</a></li>
                        <li><a href="#">Shipping Address</a></li>
                        <li><a href="#">Shipping Method</a></li>
                        <li><a href="#">Payment Method</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end discount area -->
<!-- Start service Area -->
<div class="service-area">

</div>
<!-- End service Area -->

@endsection