@extends('frontend.layouts.main')
@section('title', 'Contact-Us')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container">
                <div class="light-font">
                    <ol class="breadcrumb primary-color mb-0">
                        <li class="breadcrumb-item"><a class="white-text" href="http://localhost/amazing-shop/">Home</a></li>
                        <li class="breadcrumb-item">Contact Us</li>
                    </ol>
                </div>
            </div>
            <div class="rts-map-area chef rts-section-gap">
                <div class="container">
                    <div class="map-inner">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7478823.98179023!2d70.2369214306667!3d27.98972208557777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b62cd8405a6d%3A0x6cce79c0f78cbfb7!2sSahiwal%2C%20Sahiwal%20District%2C%20Punjab!5e0!3m2!1sen!2s!4v1718908525055!5m2!1sen!2s"
                            width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class=" section-10">
            <div class="container">
                <div class="section-title mt-5 ">
                    <h2>Love to Hear From You</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-3 pe-lg-5">
                        <p>We’re here to help you! Whether you have a question about our products, need assistance with your
                            order, or want to share your feedback, we’d love to hear from you.</p>
                        <address>
                            Farid Town Sahiwal<br>
                            Sahiwal,Pakistan <br>
                            Zoha Tazmen<br>
                            <a href="tel:+xxxxxxxx">(+92) 3077936306</a><br>
                            <a href="mailto:zohatazmen@gmail.com">zohatazmen@gmail.com</a>
                        </address>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                            <strong>
                                <h1 style="color:#ffffff">{{ $message }}</h1>
                            </strong>
                        </div>
                    @endif

                    <div class="col-md-6">
                        <form class="shake" role="form" method="post" id="contactForm" name="contact-form">
                            @csrf

                            <div class="mb-3">
                                <label class="mb-2" for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name" required
                                    data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="mb-2" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" required
                                    data-error="Please enter your Email">
                                <div class="help-block with-errors"></div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="mb-2">Subject</label>
                                <input class="form-control" id="msg_subject" type="text" name="subject" required
                                    data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                                @if ($errors->has('subject'))
                                    <span class="text-danger">
                                        {{ $errors->first('subject') }}
                                    </span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="message" class="mb-2">Message</label>
                                <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                                @if ($errors->has('message'))
                                    <span class="text-danger">
                                        {{ $errors->first('message') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-submit">
                                <button class="btn btn-dark" type="submit" id="form-submit"><i
                                        class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
