<div class="sidebar-widget recommended-properties">
    <div class="sidebar-title"><h3>Recomended For You</h3></div>

    @foreach($properties as $property)
    <div class="post">
        <figure class="post-thumb"><a href="#"><img src="{{ asset('images/resource/post-thumb-6.jpg')}}" alt=""></a></figure>
        <h4><a href="#">{{$property->address}}</a></h4>
        <ul class="specs clearfix">
            <li>{{$property->bedroom}} Beds</li>
            <li>{{$property->bathroom}} Baths</li>
            <li>{{$property->area}} sq ft.</li>
        </ul>
        <div class="price">${{$property->price}}</div>
    </div>
    @endforeach


</div>