@include('header')
<title>Our Services | MIJ Tech Services</title>
@include('slider')
<section class="service_section layout_padding overflow-hidden">
    <div class="container">
        <div class="service_container m-0">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Services
                    </h2>

                </div>
                <div class="row">
                <?php $i=0; ?>
                    @foreach($services as $service)
                        @if($i < 3)
                            <div class="col-md-6 col-lg-4">
                                <div class="box ">
                                    <div class="img-box" style="width: 100%; height: 250px">
                                        <img src="{{ $service->getFirstMediaUrl('images', 'thumb') }}" alt="" class="d-block w-100 h-100">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            {{$service->title}}
                                        </h5>
                                        <p class="mb-4" style="min-height: 200px;">
                                            {{$service->long_description}}
                                        </p>
                                        <a href="">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-6 col-lg-4">
                                <div class="box ">
                                    <div class="img-box" style="width: 100%; height: 250px">
                                        <img src="{{$service->getFirstMediaUrl('images', 'thumb')}}" alt="" class="d-block w-100 h-100">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            {{$service->title}}
                                        </h5>
                                        <p>
                                            {{$service->long_description}}
                                        </p>
                                        <a href="">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <?php $i++; ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')
