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

                    <div>
                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="date">Tanggal Pinjam:</label>
                                <input class="form-control custom-form-date" id="rent_date" type="date" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="date">Jam Pinjam:</label>
                                <input class="form-control custom-form-date" id="rent_hour" type="time" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="date">Tanggal Kembali:</label>
                                <input class="form-control custom-form-date" id="return_date" type="date" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="date">Jam Kembali:</label>
                                <input class="form-control custom-form-date" id="return_hour" type="time" >

                            </div>
                        </div>
                    </div>

                    {{--<div class="form-group col-sm-12 custom-form-divider"></div>--}}

                    <div id="available_inventory">
                        <div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('customer_assets/img/inventory/Proyektor.png') }}" alt="...">
                                    <div class="caption custom-center-inventory-title">
                                        <h3>Proyektor</h3>

                                        <div class="custom-right-text-align">
                                            <select class="custom-inventory-quantity">
                                                <option value = "0">0</option>
                                                <option value = "1">1</option>
                                                <option value = "2">2</option>
                                                <option value = "3">3</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('customer_assets/img/inventory/Proyektor.png') }}" alt="...">
                                    <div class="caption custom-center-inventory-title">
                                        <h3>Proyektor</h3>

                                        <div class="custom-right-text-align">
                                            <select class="custom-inventory-quantity">
                                                <option value = "0">0</option>
                                                <option value = "1">1</option>
                                                <option value = "2">2</option>
                                                <option value = "3">3</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('customer_assets/img/inventory/Proyektor.png') }}" alt="...">
                                    <div class="caption custom-center-inventory-title">
                                        <h3>Proyektor</h3>

                                        <div class="custom-right-text-align">
                                            <select class="custom-inventory-quantity">
                                                <option value = "0">0</option>
                                                <option value = "1">1</option>
                                                <option value = "2">2</option>
                                                <option value = "3">3</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('customer_assets/img/inventory/Proyektor.png') }}" alt="...">
                                    <div class="caption custom-center-inventory-title">
                                        <h3>Proyektor</h3>

                                        <div class="custom-right-text-align">
                                            <select class="custom-inventory-quantity">
                                                <option value = "0">0</option>
                                                <option value = "1">1</option>
                                                <option value = "2">2</option>
                                                <option value = "3">3</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('customer_assets/img/inventory/Proyektor.png') }}" alt="...">
                                    <div class="caption custom-center-inventory-title">
                                        <h3>Proyektor</h3>

                                        <div class="custom-right-text-align">
                                            <select class="custom-inventory-quantity">
                                                <option value = "0">0</option>
                                                <option value = "1">1</option>
                                                <option value = "2">2</option>
                                                <option value = "3">3</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('customer_assets/img/inventory/Proyektor.png') }}" alt="...">
                                    <div class="caption custom-center-inventory-title">
                                        <h3>Proyektor</h3>

                                        <div class="custom-right-text-align">
                                            <select class="custom-inventory-quantity">
                                                <option value = "0">0</option>
                                                <option value = "1">1</option>
                                                <option value = "2">2</option>
                                                <option value = "3">3</option>
                                            </select>
                                        </div>

                                    </div>
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
                    </div>

                </form>

            </div>
        </div>
        <!-- End Service -->

        <!--========== END PAGE LAYOUT ==========-->



        @include('customer.include.footer.base_footer')

        <script src="{{ asset('customer_assets/vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>

@include('customer.include.footer.closing_tag')