<div class="sidebar-widget recommended-properties">
    <div class="sidebar-title"><h3>Recomended For You</h3></div>

    @foreach($properties as $property)
        @if($imageArray = explode(",", $property->images))
            <div class="post">
                <figure class="post-thumb"><a href="{{$property->path()}}"><img
                                style="display: block; max-width: 80px; min-width: 80px; max-height: 80px; min-height: 80px;"
                                title="{{$property->title}}"
                                src="{{Storage::url($imageArray[0] )}}" alt=""></a>
                </figure>
                <h4><a href="#">{{$property->address}}</a></h4>
                <ul class="specs clearfix">
                    <li>{{$property->bedroom}} Beds</li>
                    <li>{{$property->bathroom}} Baths</li>
                    <li>{{$property->area}} sq ft.</li>
                </ul>
                <div class="price">${{$property->price}}</div>
            </div>
        @endif
    @endforeach


</div>