@extends('layouts.app')
@section('content')

    <!--    HERO IMG-->
    <section class="hero">
        <div class="hero-inner">
            <h1 class="pb-2 hero-title"> Contact</h1>
        </div>
    </section>
    <!-- HERO IMG END   -->
    <section class="contact spad pt-5">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 text-center ">
                    <div class="contact__widget">
                        <i class="fa-solid fa-phone"></i>
                        <h4>Phone</h4>
                        <a href="tel:+32 484 54 88 05">+32 494 60 69 52</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>Address</h4>
                        <p>Keihoek 21, 8710 Ooigem</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa-regular fa-envelope"></i>
                        <h4>Email</h4>
                        <a href="mailto:hello@oganiwebshop.be">vromanconstruct@telenet.be</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="map-responsive">
                <iframe allowfullscreen="1"
                        aria-hidden="false" height="500"
                        src="https://maps.google.com/maps?q=Keihoek%2021,%208710%20Ooigem&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        style="border:0;" tabindex="0"></iframe>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-title pt-3 pb-3">
                        <h2 class="text-center my-5">Neem contact op met ons</h2>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-6 pe-4">
                            <div class="mb-3">
                                <input class="form-control" id="email1" name="name" placeholder="Vul uw naam in" type="text">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <input class="form-control" id="email2" name="email" placeholder="E-mail"
                                       type="email">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="mb-3 pb-3 pt-3">
                        <textarea class="form-control" id="messageingave" name="message" placeholder="Uw boodschap"
                                  rows="3"></textarea>
                </div>
            </div>

            <div class="text-center py-5">
                <button class="btn3" type="submit">Verzend</button>
            </div>
        </div>
    </section>
</main>


<script crossorigin="anonymous"
<script crossorigin="anonymous"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
