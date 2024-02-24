<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="col-lg-4 col-md-6">
            <div class="heading_container">
                <h2>
                    Contact Us
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="form_container">
                    <form id="contactUSForm">
                        {{ csrf_field() }}
                        <div>
                            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" />
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div>
                            <input type="text" name="phone" placeholder="Phone Number"
                                value="{{ old('phone') }}" />
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div>
                            <input name="message" class="message-box" placeholder="Message"
                                value="{{ old('message') }}" />
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="btn_box">
                            <button type="submit">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 px-0">
                <div class="map_container">
                    <div class="map">
                        <div><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.68854480784!2d54.89714584367461!3d25.07627893298102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1698162477452!5m2!1sen!2s"
                                width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
