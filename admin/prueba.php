<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto R</title>
<?php
include "php/link.php";
?>   

</head>
<body>
<?php
include "componentes/topheader.php";
include "componentes/mobilemenu.php";
include "componentes/navbar.php"
?>
<!-- Insertat contenido -->
<div class="form-element-area">
        <div class="container">
            <div class="row">
<div class="form-element-list mg-t-30">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="nk-int-mk sl-dp-mn">
                    <h2>Basic Example</h2>
            </div>
            <div class="bootstrap-select fm-cmp-mg">
                <select class="selectpicker">
                    <option>OPCIONES</option>
                </select>
            </div>
        </div>  
    </div>
</div>

<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Chosen</h2>
                            <p>Make long, unwieldy select boxes more user friendly.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn">
                                    <h2>Basic Example</h2>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" data-placeholder="Choose a Country...">
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Disabled Items</h2>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" data-placeholder="Choose a Country...">
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option disabled value="Afghanistan">Afghanistan</option>
											<option disabled value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option disabled value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Multiple Example</h2>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" multiple data-placeholder="Choose a Country...">
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Option Group</h2>
                                </div>
                                <div class="chosen-select-act">
                                    <select class="chosen" data-placeholder="Your Favorite Football Team">
											<optgroup label="NFC EAST">
												<option>Dallas Cowboys</option>
												<option>New York Giants</option>
												<option>Philadelphia Eagles</option>
												<option>Washington Redskins</option>
											</optgroup>
											<optgroup label="NFC NORTH">
												<option>Chicago Bears</option>
												<option>Detroit Lions</option>
												<option>Green Bay Packers</option>
												<option>Minnesota Vikings</option>
											</optgroup>
										</select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Input Text</h2>
                            <p>Text Inputs with different sizes by height and column.</p>
                        </div>
                        <div class="cmp-tb-hd bcs-hd">
                            <h2>Basic Example</h2>
                            <p>Place one add-on or button on either side of an input. You may also place one on both sides of an input. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Location">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Postal Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Message">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Notification">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-travel"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Flight">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Dollar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-wifi"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Internet">
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-cloud"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Home Address">
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-success"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Layer">
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-chat"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Floating Labels</h2>
                            <p>Basic example for input groups with floating labels </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Full Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Email Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Contact Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-wifi"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Internet</label>
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-cloud"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Home Address</label>
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-success"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Layer</label>
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-chat"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Different Sizes</h2>
                            <p>You may use the extra sizing classes (<code>.input-sm, .input-lg </code>) to change size of the feilds.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-wifi"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" Placeholder="Internet">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-wifi"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" Placeholder="Internet">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int int-bg-it form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-wifi"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" Placeholder="Internet">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Input Mask</h2>
                            <p>An input mask helps the user with the input. This can be useful for dates, numerics, phone numbers etc...</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>ISBN 1</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>IPV4</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="IPV4">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Tax ID</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-tax"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="99-9999999" placeholder="Tax ID">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Phone</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Currency</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="$ 999,999,999.99" placeholder="Currency">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Date</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Postal Code</h2>
                                </div>
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="9999" placeholder="Postal Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>IP Address</h2>
                                </div>
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-ip-locator"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="IP">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Credit Card</h2>
                                </div>
                                <div class="form-group ic-cmp-int form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-credit-card"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" data-mask="999 999 999 9999" placeholder="Credit Card">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Bootstrap Seelct - Custom Select</h2>
                            <p>Bootstrap-select is a jQuery plugin that utilizes Bootstrap's dropdown.js to style and bring additional functionality to standard select elements.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn">
                                    <h2>Basic Example</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
											<option>Drama</option>
											<option>Cariska</option>
											<option>Cheriska</option>
											<option>Malias</option>
											<option>Kamines</option>
											<option>Austranas</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Serach Option</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true">
											<option>Drama</option>
											<option>Cariska</option>
											<option>Cheriska</option>
											<option>Malias</option>
											<option>Kamines</option>
											<option>Austranas</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Option Groups</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
											<optgroup label="Picnic">
												<option>Drama</option>
												<option>Cariska</option>
												<option>Cheriska</option>
											</optgroup>
											<optgroup label="Camping">
												<option>Malias</option>
												<option>Kamines</option>
												<option>Austranas</option>
											</optgroup>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Disabled Options</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
											<option disabled="disabled">Drama</option>
											<option>Cariska</option>
											<option>Kamines</option>
											<option disabled="disabled">Malias</option>
											<option>Cheriska</option>
										</select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                    <h2>Multi Select</h2>
                                </div>
                                <div class="bootstrap-select">
                                    <select class="selectpicker" multiple>
											<option>Drama</option>
											<option>Cariska</option>
											<option>Cheriska</option>
											<option>Malias</option>
											<option>Kamines</option>
											<option>Austranas</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                    <h2>Limit Selection - Set to 2</h2>
                                </div>
                                <div class="bootstrap-select">
                                    <select class="selectpicker" multiple data-max-options="2" title='Choose some of...'>
											<option>Drama</option>
											<option>Cariska</option>
											<option>Cheriska</option>
											<option>Malias</option>
											<option>Kamines</option>
											<option>Austranas</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                    <h2>Display Count</h2>
                                </div>
                                <div class="bootstrap-select">
                                    <select class="selectpicker" multiple data-selected-text-format="count">
											<option>Drama</option>
											<option>Cariska</option>
											<option>Cheriska</option>
											<option>Malias</option>
											<option>Kamines</option>
											<option>Austranas</option>
										</select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Chosen</h2>
                            <p>Make long, unwieldy select boxes more user friendly.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn">
                                    <h2>Basic Example</h2>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" data-placeholder="Choose a Country...">
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Disabled Items</h2>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" data-placeholder="Choose a Country...">
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option disabled value="Afghanistan">Afghanistan</option>
											<option disabled value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option disabled value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Multiple Example</h2>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" multiple data-placeholder="Choose a Country...">
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
										</select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Option Group</h2>
                                </div>
                                <div class="chosen-select-act">
                                    <select class="chosen" data-placeholder="Your Favorite Football Team">
											<optgroup label="NFC EAST">
												<option>Dallas Cowboys</option>
												<option>New York Giants</option>
												<option>Philadelphia Eagles</option>
												<option>Washington Redskins</option>
											</optgroup>
											<optgroup label="NFC NORTH">
												<option>Chicago Bears</option>
												<option>Detroit Lions</option>
												<option>Green Bay Packers</option>
												<option>Minnesota Vikings</option>
											</optgroup>
										</select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Toggle Switch</h2>
                            <p>Material Design look alike Toggle Switches based on Radio Box.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn tg-dp-mn">
                                    <h2>Option Group</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act fm-cmp-mg">
                                            <div class="nk-toggle-switch">
                                                <label for="ts1" class="ts-label">Toggle Swith Default</label>
                                                <input id="ts1" type="checkbox" hidden="hidden">
                                                <label for="ts1" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act sm-res-mg-t-10">
                                            <div class="nk-toggle-switch disabled">
                                                <label for="tsd" class="ts-label">Toggle Swith Disable</label>
                                                <input id="tsd" type="checkbox" hidden="hidden" checked="checked" disabled="disabled">
                                                <label for="tsd" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn tg-dp-mn mg-t-30">
                                    <h2>Optional Color schemes</h2>
                                    <p>Use the given data attribute to change the color scheme of the Toggle Switch</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act fm-cmp-mg">
                                            <div class="nk-toggle-switch" data-ts-color="red">
                                                <label for="ts2" class="ts-label">Toggle Swith Red</label>
                                                <input id="ts2" type="checkbox" hidden="hidden">
                                                <label for="ts2" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act sm-res-mg-t-10">
                                            <div class="nk-toggle-switch" data-ts-color="blue">
                                                <label for="ts3" class="ts-label">Toggle Swith Blue</label>
                                                <input id="ts3" type="checkbox" hidden="hidden">
                                                <label for="ts3" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act mg-t-30">
                                            <div class="nk-toggle-switch" data-ts-color="green">
                                                <label for="ts4" class="ts-label">Toggle Swith Green</label>
                                                <input id="ts4" type="checkbox" hidden="hidden">
                                                <label for="ts4" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act mg-t-30">
                                            <div class="nk-toggle-switch" data-ts-color="cyan">
                                                <label for="ts5" class="ts-label">Toggle Swith Cyan</label>
                                                <input id="ts5" type="checkbox" hidden="hidden">
                                                <label for="ts5" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act mg-t-30">
                                            <div class="nk-toggle-switch" data-ts-color="lime">
                                                <label for="ts6" class="ts-label">Toggle Swith Lime</label>
                                                <input id="ts6" type="checkbox" hidden="hidden">
                                                <label for="ts6" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act mg-t-30">
                                            <div class="nk-toggle-switch" data-ts-color="amber">
                                                <label for="ts7" class="ts-label">Toggle Swith Amber</label>
                                                <input id="ts7" type="checkbox" hidden="hidden">
                                                <label for="ts7" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act mg-t-30">
                                            <div class="nk-toggle-switch" data-ts-color="purple">
                                                <label for="ts8" class="ts-label">Toggle Swith Purple</label>
                                                <input id="ts8" type="checkbox" hidden="hidden">
                                                <label for="ts8" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="toggle-select-act mg-t-30">
                                            <div class="nk-toggle-switch" data-ts-color="pink">
                                                <label for="ts9" class="ts-label">Toggle Swith Pink</label>
                                                <input id="ts9" type="checkbox" hidden="hidden">
                                                <label for="ts9" class="ts-helper"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="range-slider-wrap mg-t-30">
						<div class="cmp-tb-hd">
							<h2>Input Slider</h2>
							<p>Range slider offers a ton off features, and it is as small, lightweight and minimal as possible, which is great for mobile use on the many supported devices.</p>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms fm-cmp-mg">
									<div class="slider-wrapper purple-slider">
										<div id="slider"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms sm-res-mg-t-10">
									<div class="slider-wrapper purple-slider">
										<div id="slider1"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms mg-t-30">
									<div class="spacer-b16a">
										<label for="amountp">Maximum price:</label>
										<input type="text" id="amountp" class="slider-input">
									</div>
									<div class="slider-wrapper yellow-slider">
										<div id="slider2"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms mg-t-30">
									<div class="spacer-b16a">
										<label for="bedrooms">Number of bedrooms:</label>
										<input type="text" id="bedrooms" class="slider-input">
									</div>
									<div class="slider-wrapper blue-slider">
										<div id="slider3"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms mg-t-30">
									<div class="spacer-b16a">
										<label for="budget">Project Budget:</label>
										<input type="text" id="budget" class="slider-input">
									</div>
									<div class="slider-wrapper purple-slider">
										<div id="slider8"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms mg-t-30">
									<div class="spacer-b16a">
										<label for="amounts">Price range:</label>
										<input type="text" id="amounts" class="slider-input">
									</div>
									<div class="slider-wrapper">
										<div id="slider10"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cmp-tb-hd mg-t-20 bcs-hd">
									<h2>Vertical Range Slider</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms">
									<div id="eq" class="slider-group blue-slider">
										<div class="sliderv-wrapper"><span>77</span>
										</div>
										<div class="sliderv-wrapper"><span>55</span>
										</div>
										<div class="sliderv-wrapper"><span>40</span>
										</div>
										<div class="sliderv-wrapper"><span>55</span>
										</div>
										<div class="sliderv-wrapper"><span>77</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="themesaller-forms">
									<div id="eq2" class="slider-group purple-slider">
										<div class="sliderv-wrapper"><span>77</span>
										</div>
										<div class="sliderv-wrapper"><span>55</span>
										</div>
										<div class="sliderv-wrapper"><span>40</span>
										</div>
										<div class="sliderv-wrapper"><span>55</span>
										</div>
										<div class="sliderv-wrapper"><span>77</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
<!-- Fin Insertar contenido -->

<?php
include "php/script.php"
?>
</body>
</html>