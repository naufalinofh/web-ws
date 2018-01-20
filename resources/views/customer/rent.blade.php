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

                <form action="{{ url('') }}">

                    <div>
                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="rent_date">Tanggal Pinjam:</label>
                                <input class="form-control custom-form-date" id="rent_date" name="rent_date" type="date" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="rent_hour">Jam Pinjam:</label>
                                <input class="form-control custom-form-date" id="rent_hour" name="rent_hour" type="time" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="return_date">Tanggal Kembali:</label>
                                <input class="form-control custom-form-date" id="return_date" name="return_date" type="date" >

                            </div>
                        </div>

                        <div class="form form-group col col-sm-3">
                            <div class="form-group">
                                <label class="custom-form-text" for="return_hour">Jam Kembali:</label>
                                <input class="form-control custom-form-date" id="return_hour" name="return_hour" type="time" format="HH:mm">

                            </div>
                        </div>
                    </div>

                    {{--<div class="form-group col-sm-12 custom-form-divider"></div>--}}

                    <div id="form_master">
                        <div id="available_inventory">
                            @foreach($inventories as $inventory)
                                @if($qty_av[$inventory->id] > 0)
                                    <div class="col-sm-6 col-md-4">
                                        <div class="thumbnail">
                                            <?php $img_dir = (new \App\Http\Controllers\CharController)->unspace($inventory->name); ?>
                                            <img class="img-catalog" style="display:block; height:200px; width:auto; margin-left:auto; margin-right:auto;" 
                                            src="{{asset('customer_assets/img/inventory/'.$img_dir.'.png') }}" alt="">
                                            <div class="caption custom-center-inventory-title">
                                                <h3>{{$inventory->name}}</h3>

                                                <div class="custom-right-text-align">
                                                    <select class="custom-inventory-quantity">
                                                        @for ($i = 0; $i <= $qty_av[$inventory->id]; $i++)
                                                            <option value = {{'"'.$i.'"'}}>$i</option>
                                                        @endfor
                                                        <option value = "0">0</option>
                                                        <option value = "1">1</option>
                                                        <option value = "2">2</option>
                                                        <option value = "3">3</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

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
                                    <input name="customer_name" type="text" class="form-control custom-form-border" id="name" placeholder="ex: Nyoman Abiwinanda">
                                </div>
                                <div class="form-group">
                                    <label class="custom-form-text" for="nim">NIM:</label>
                                    <input name="customer_nim" type="number" class="form-control custom-form-border" id="nim" placeholder="ex: 13214096">
                                </div>
                                <div class="form-group">
                                    <label class="custom-form-text" for="institution">Institution:</label>
                                    <input name="customer_institution" type="text" class="form-control custom-form-border" id="institution" placeholder="ex: URO">
                                </div>
                                <button name="rent_btn" type="submit" class="btn btn-default">Pinjam</button>
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
                var form_master = $('#form_master');
                var available_inventory = $('#available_inventory');

                rent_date.change(checkIfAllFilled);
                rent_hour.change(checkIfAllFilled);
                return_date.change(checkIfAllFilled);
                return_hour.change(checkIfAllFilled);

                form_master.css('display', 'none');

                function checkIfAllFilled() {
                    if (rent_date.val() && rent_hour.val() && return_date.val() && return_hour.val())
                    {
                        // Show the inventory
                        form_master.css('display', 'block');
                        form_master.css('opacity', '0');

                        $.get('load_available_inventory', function(data) {

                            var available_inventory_html = data;

                            // Empty the html
                            available_inventory.empty();

                            // Fill the html
                            available_inventory.append(available_inventory_html);
                        });

                        form_master.animate({opacity: 1});
                    }
                }

            });
        </script>

@include('customer.include.footer.closing_tag')