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
                                <input class="form-control custom-form-date" id="rent_date" name="rent_date" type="date" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="date">Jam Pinjam:</label>
                                <input class="form-control custom-form-date" id="rent_hour" name="rent_hour" type="time" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="date">Tanggal Kembali:</label>
                                <input class="form-control custom-form-date" id="return_date" name="return_date" type="date" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="date">Jam Kembali:</label>
                                <input class="form-control custom-form-date" id="return_hour" name="return_hour" type="time" >

                            </div>
                        </div>
                    </div>

                    {{--<div class="form-group col-sm-12 custom-form-divider"></div>--}}

                    <div id="form_master">
                        <div id="available_inventory">
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

                        <div id="customer_identity">
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
                                <button type="submit" class="btn btn-default">Pinjam</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- End Service -->

        <!--========== END PAGE LAYOUT ==========-->



        @include('customer.include.footer.base_footer')

        <script src="{{ asset('customer_assets/vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                var rent_date = $('#rent_date');
                var rent_hour = $('#rent_hour');
                var return_date = $('#return_date');
                var return_hour = $('#return_hour');
                var master_form = $('#form_master');
                var available_inventory = $('#available_inventory');

                rent_date.change(checkIfAllFilled);
                rent_hour.change(checkIfAllFilled);
                return_date.change(checkIfAllFilled);
                return_hour.change(checkIfAllFilled);

                master_form.css('opacity', '0');

                function checkIfAllFilled() {
                    if (rent_date.val() && rent_hour.val() && return_date.val() && return_hour.val())
                    {
                        // Get the available inventory

                        // Show the inventory
                        master_form.css('opacity', '0');

                        available_inventory.load("{{ asset('customer_assets/script/load_inventory.php') }}", function() {
                            alert("succes");
                        });

                        master_form.animate({opacity: 1});
                    }
                }



            });
        </script>

@include('customer.include.footer.closing_tag')