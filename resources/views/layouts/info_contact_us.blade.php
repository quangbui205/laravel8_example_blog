@extends('layouts.header')
@section('info_contact_us')
    <!-- info section -->
    <section class="info_section layout_padding">
        <div class="footer_contact">
            <div class="heading_container">
                <h2>
                    Contact Us
                </h2>
            </div>
            <div class="box">
                <a href="" class="img-box">
                    <img src="{{ asset('themes/images/location.png') }}" alt="" class="img-1">
                    <img src="{{ asset('themes/images/location-o.png') }}" alt="" class="img-2">
                </a>
                <a href="" class="img-box">
                    <img src="{{ asset('themes/images/call.png') }}" alt="" class="img-1">
                    <img src="{{ asset('themes/images/call-o.png') }}" alt="" class="img-2">
                </a>
                <a href="" class="img-box">
                    <img src="{{ asset('themes/images/envelope.png') }}" alt="" class="img-1">
                    <img src="{{ asset('themes/images/envelope-o.png') }}" alt="" class="img-2">
                </a>
            </div>
        </div>
    </section>
    <!-- end info section -->
@endsection
