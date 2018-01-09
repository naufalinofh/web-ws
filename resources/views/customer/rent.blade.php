@include('customer.include.header.base_header')

        @include('customer.include.header.navbar',
                 ['home_is_active'      => '',
                  'portfolio_is_active' => '',
                  'catalog_is_active'   => '',
                  'rent_is_active'      => 'active',
                  'about_is_active'     => ''])

        @include('customer.include.header.parallax')

        <!--========== PAGE LAYOUT ==========-->

        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <h3>{{ $title }}</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <h3>Responsive Design</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <h3>Feature Reach</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <h3>Useful Documentation</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <h3>Fast Delivery</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <h3>Free Plugins</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!--========== END PAGE LAYOUT ==========-->

        @include('customer.include.footer.base_footer')

        <script src="{{ asset('customer_assets/vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>

@include('customer.include.footer.closing_tag')