@include('header')
<title>Testimonials | MIJ Tech Services</title>
@include('slider')

<style>
    @media (min-width: 1200px) {
        .client_section {
            margin: 60px 50px 80px 50px !important;
        }
    }
</style>
<section class="client_section layout_padding shadow-lg border m-3">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Testimonial
            </h2>
        </div>
        <div id="customCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $i=0; ?>
            @foreach($testimonials as $testimonial)
            <div class="carousel-item {{$i==0?'active':''}}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{$testimonial->getFirstMediaUrl('images', 'thumb')}}" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                            {{$testimonial->title}}
                                            </h5>
                                            <h6>
                                                Customer
                                            </h6>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                    {{$testimonial->description}}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            @endforeach
            
        </div>
        <ol class="carousel-indicators">
            <?php $ii=0; ?>
            @foreach($testimonials as $testimonial)
            <li data-target="#customCarousel2" data-slide-to="{{$ii}}" class="{{$ii==0?'active':''}}"></li>
            <?php $ii++; ?>
            @endforeach
        </ol>
        </div>
    </div>

</section>
@include('footer')
