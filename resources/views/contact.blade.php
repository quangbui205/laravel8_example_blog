@extends('layouts.footer')
@section('content')
    <!-- contact section -->
    <section class="contact_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Let's Get In Touch!
                </h2>
            </div>
        </div>
        <div class="container contact_bg layout_padding2-top">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form ">
                        <form action="">
                            <input type="text" placeholder="Name ">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Message" class="message_input">
                            <button>
                                Send
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('themes/images/contact-img.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
@endsection
