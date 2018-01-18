@include('customer.include.header.base_header')

        @include('customer.include.header.navbar',
                 ['home_is_active'      => '',
                  'projects_is_active' => '',
                  'catalog_is_active'   => '',
                  'rent_is_active'      => 'active',
                  'about_is_active'     => ''])

        @include('customer.include.header.parallax')

        <!--========== PAGE LAYOUT ==========-->

        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">

                <h1 class="custom-form-title">Rental Form</h1>
                <h5 class="custom-form-title">Please fill in all fields to rent the items</h5>

                <br><br>
                <form>
                    <div class="form form-group col col-sm-12">
                        <div class="form-group">
                            <label class="custom-form-text" for="date">Date:</label>
                            <div class="input-append datepicker" data-date="12-04-2017" data-date-format="dd-mm-yyyy">
                                <input class="form-control custom-form-border" type="text" value="12-04-2017" />
                            </div>
                        </div>
                    </div>

                    {{--<div class="form-group col-sm-12 custom-form-divider"></div>--}}

                    <div class="form form-group col col-sm-12">
                        <div class="form-row">
                            <div class="form-group col col-sm-2">
                                <label class="custom-form-text" for="name">Items:</label><br>
                                <label class="custom-form-text" for="name">Alat 1</label><br>
                                <label class="custom-form-text" for="name">Alat 2</label><br>
                                <label class="custom-form-text" for="name">Alat 3</label><br>
                                <label class="custom-form-text" for="name">Alat 4</label><br>
                                <label class="custom-form-text" for="name">Alat 5</label><br>
                            </div>
                            <div class="form-group col col-sm-6">
                                <label class="custom-form-text" for="name">Available Quantity:</label>
                                <input type="text" class="form-control custom-form-border" id="name" placeholder="ex: Nyoman Abiwinanda">
                                <input type="text" class="form-control custom-form-border" id="name" placeholder="ex: Nyoman Abiwinanda">
                                <input type="text" class="form-control custom-form-border" id="name" placeholder="ex: Nyoman Abiwinanda">
                                <input type="text" class="form-control custom-form-border" id="name" placeholder="ex: Nyoman Abiwinanda">
                                <input type="text" class="form-control custom-form-border" id="name" placeholder="ex: Nyoman Abiwinanda">
                            </div>
                        </div>
                    </div>

                    {{--<div class="form-group col-sm-12 custom-form-divider"></div>--}}

                    <div class="form form-group col col-sm-12">
                        <div class="form-group">
                            <label class="custom-form-text" for="name">Name:</label>
                            <input type="text" class="form-control custom-form-border" id="name" placeholder="ex: Nyoman Abiwinanda">
                        </div>
                        <div class="form-group">
                            <label class="custom-form-text" for="nim">NIM:</label>
                            <input type="number" class="form-control custom-form-border" id="nim" placeholder="ex: 13214096">
                        </div>
                        <div class="form-group">
                            <label class="custom-form-text" for="institution">Institution:</label>
                            <input type="text" class="form-control custom-form-border" id="institution" placeholder="ex: URO">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>

                </form>

            </div>
        </div>
        <!-- End Service -->

        <!--========== END PAGE LAYOUT ==========-->



        @include('customer.include.footer.base_footer')

        <script src="{{ asset('customer_assets/vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>

        <script>
            $(function() {
                $('.datepicker').datepicker();
            });
        </script>

@include('customer.include.footer.closing_tag')