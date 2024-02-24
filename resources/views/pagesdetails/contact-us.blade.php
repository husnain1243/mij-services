@include('header')
<title>Contact Us | MIJ Tech Services </title>
@include('slider')

<section class="contact_section">
    <div class="container-fluid m-auto p-0">
        <div class="row border shadow m-2 m-md-5 p-4 py-5">
            <div class="col-12 col-lg-6">
                <div class="heading_container border rounded  shadow p-5 h-100 contact-card-a">
                    <h2 class="mb-4">Contact Us</h2>
                    <div>
                        <h4 class="p"> <b class="span">Tel: </b><a href="tel:+971528586913" class="a">+971528586913</a></h4>
                        <h4 class="p"> <b class="span">Mail: </b> <a href="mailto:mijtechinicialservices@gmail.com" class="a">mijtechinicialservices@gmail.com</a></h4>
                        <h4 class="p"> <b class="span">Add:</b> JLT cluster N, JCB tower Dubai</h4>
                    </div>
                    
                </div>
            </div>
            {{-- <div class="col-12 col-lg-6">
                <div class="form_container">
                    
                    <form action="">
                        <div>
                            <input type="text" placeholder="Your Name" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" />
                        </div>
                        <div class="btn_box">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>  --}}
            <div class="col-12 col-lg-6">
                <div class="map_container">
                    <div class="map">
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.68854480784!2d54.89714584367461!3d25.07627893298102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1698162477452!5m2!1sen!2s"
                                width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')
