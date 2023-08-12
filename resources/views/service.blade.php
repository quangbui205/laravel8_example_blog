@extends('layouts.footer')
@section('content')
    <!-- service section -->
    <section class="service_section ">
        <div class="container">
            <div class="heading_container">
                <h2>
                    At Your Service
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('themes/images/s-1.png') }}" alt="">
                        </div>
                        <h4>
                            Written with Love
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content t,
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box align-items-end align-items-md-start text-right text-md-left">
                        <div class="img-box">
                            <img src="{{ asset('themes/images/s-2.png') }}" alt="">
                        </div>
                        <h4>
                            Fast Turnaround
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content here', making it look like
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('themes/images/s-3.png') }}" alt="">
                        </div>
                        <h4>
                            Up to Date
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content here', making it look like now use Lorem Ipsum as
                            their default model text,
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box align-items-end align-items-md-start text-right text-md-left">
                        <div class="img-box">
                            <img src="{{ asset('themes/images/s-4.png') }}" alt="">
                        </div>
                        <h4>
                            Premium Content
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content here', making it look like
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service section -->
@endsection
