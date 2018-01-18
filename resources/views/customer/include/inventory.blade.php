@if (count($inventories) > 0)
    @foreach($inventories as $inventory )
    @if($inventory->quantity_ready > 0)
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <?php $img_dir = (new \App\Http\Controllers\CatalogController)->unspace($inventory->name); ?>
                    <img class="img-responsive" style="height:200px; width:auto;" src="{{asset('customer_assets/img/inventory/'.$img_dir.'.png') }}" alt="Projector">
                </div>
            </div>
            <h3><a href="#">{{$inventory ->name}}</a> <span class="text-uppercase margin-l-20"></span></h3>
            <p> <?php echo $inventory->meta ?><br>
            
            </p>
            <p>Proyektor terbaik yang cocok untuk keperluan acaramu baik indoor maupun outdoor
                    <br><strong>Spesifikasi</strong>
                    <ul>
                    <li>Merk : Viewsonic, Sony</li>
                    <li>Intensitas : 2200, 4000 lumens</li>
                    <li></li>
                    </ul>
                </p>
            <a class="link" href="#"></a>
        </div>
    @endif
    @endforeach
@else
    <p> No Catalog Found</p>
@endif


