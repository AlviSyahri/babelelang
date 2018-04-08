 @extends('layout.main')
@section('content')

  
        
           <!-- Contact Us Page Area Start Here -->
        <div class="contact-us-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="contact-us-left">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="google-map-area">
                                        <div id="googleMap" style="width:100%; height:395px;"></div>
                                    </div>
                                </div>
                            </div>
                            <h2>Send Us Message</h2>
                            <div class="row">
                                <div class="contact-form">
                                    <form >
                                        <fieldset>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name*" class="form-control" id="form-name" data-error="Name field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email*" class="form-control" id="form-email" data-error="Email field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn-send-message">Send Message</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class='form-response'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="contact-us-right">
                            <h2 class="title-sidebar">Contact Info</h2>
                            <ul>
                                <li class="con-address"></li>
                                <li class="con-envelope">info@metro.com</li>
                                <li class="con-phone">+ 123 45678910
                                    <br> + 123 45678910</li>
                                <li class="con-fax">+ 123 45678910</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Page Area End Here -->


        @stop