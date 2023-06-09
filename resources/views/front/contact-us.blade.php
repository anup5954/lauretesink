@extends('layouts.front')
@section('front-title')
    Laurete Premium Kitchen Sink | Contact Us
@endsection
<style>
    .error {
        color: red;
    }
</style>

@section('front-content')
    <section class="content-page-section pt-5">
        <div class="container">
            <div class="contact-us-flex pb-5">
                <div class="contact-us-left-sec">
                    <h3 class="heading-2">Contact Us</h3>
                    {{ show_error_msg() }}
                    {{ show_success_msg() }}
                    <form name="contactForm" method="POST" action="{{ route('savecontact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="wdinput form-group">
                                    <input type="text" placeholder="Full Name" name="name" class="form-control">
                                </div>
                                @if ($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="col-12">
                                <div class="wdinput form-group">
                                    <input type="Email" placeholder="Email Id" name="email" class="form-control">
                                </div>
                                @if ($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="col-12">
                                <div class="wdinput form-group">
                                    <input type="number" placeholder="Phone Number" name="mobile" class="form-control">
                                </div>
                                @if ($errors->has('mobile'))
                                    <div class="error">{{ $errors->first('mobile') }}</div>
                                @endif
                            </div>

                            <div class="col-12">
                                <div class="wdinput form-group">
                                    <textarea class="form-control" name="detailsmessage" placeholder="Your Messages" rows="5"></textarea>
                                </div>
                                @if ($errors->has('detailsmessage'))
                                    <div class="error">{{ $errors->first('detailsmessage') }}</div>
                                @endif
                            </div>

                            <div class="col-12">
                                <div class="wdinput form-group">
                                    <button class="btn bg-color-dark-1">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact-us-right-sec">
                    <div class="heading-section ">
                        <h3 class="heading-1 ml-5">Live Support is available Mon-Fri 10am-6pm</h3>
                        <ul class="live-support-system text-center">
                            <li><a href="#"><img src="{{ asset('public/frontend/img/icon/phone-call.png') }}"> </a>
                            </li>
                            <li><a href="#"><img src="{{ asset('public/frontend/img/icon/whatsapp.png') }}"> </a></li>
                            <li><a href="#"><img src="{{ asset('public/frontend/img/icon/email.png') }}"> </a></li>
                        </ul>


                    </div>
                    <div class="corporate-office mt-5 ">
                        <h5 class="heading-1 ml-5">Corporate Office</h5>
                        <ul class="address-section">
                            <li> <i class="fa-light fa-location-dot"></i> Tilak Nagar 1st Block 1st Cross, New Delhi,
                                Delhi-110011</li>
                            <li> <i class="fa-light fa-phone"></i> +91 8178268020</li>
                            <li> <i class="fa-light fa-envelope"></i>aditya@gmail.com</li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56092.51515670713!2d77.27828452328733!3d28.516199960595262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce65f77cae949%3A0x7c768dbb3f78e57!2z4KSs4KSm4KSw4KSq4KWB4KSwLCDgpKjgpIgg4KSm4KS_4KSy4KWN4KSy4KWALCDgpKbgpL_gpLLgpY3gpLLgpYA!5e0!3m2!1shi!2sin!4v1671104799854!5m2!1shi!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
@section('front-script')
    <script src="{{ asset('public/frontend/js/jquery.validate.min.js') }}"></script>
    <script>
        $(function() {
            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
            });
            $.validator.addMethod("validemail", function(value, element) {
                return this.optional(element) ||
                    /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
            });
            $("form[name='contactForm']").validate({
                rules: {
                    name: {
                        required: true,
                        lettersonly: true,
                        maxlength: 15
                    },
                    email: {
                        required: true,
                        validemail: true,
                        maxlength: 40
                    },
                    mobile: {
                        required: true,
                        number: true,
                        maxlength: 15
                    },
                    detailsmessage: {
                        required: true
                    },

                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        lettersonly: "please enter alphabet only"
                    },
                    email: {
                        required: "Please enter your email",
                        validemail: "Please enter your valid email"
                    },
                    mobile: {
                        required: "Please enter your contact number",
                        number: "Please enter number only"
                    },

                    detailsmessage: {
                        required: "Please enter your message",
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
