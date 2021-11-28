<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="fade-down" data-aos-easing="ease-in-out">
    <div class="item-cat-page item-hvr">
        <div class="img-sp pos-re" style="background-repeat: no-repeat; background-size: cover; background-image: url({{ asset($obj->image) }})">
            <a class="imgcatpro" href="{{ route('detailP', ['slug' => $obj->slug]) }}">
                <h2 class="name-item-cat-page">{{ $obj->title }}</h2>
                <a href="{{ route('detailP', ['slug' => $obj->slug]) }}" class="mask-cat">
                    <div class="inner-mask-cat">
                        <div class="inner-mask-cat1">
                            <strong>{{ $obj->title }}</strong>
                            <div class="p-description">
                                {{ $obj->description }}
                            </div>
                        </div>
                    </div>
                </a>
        </div>
    </div>
</div>
