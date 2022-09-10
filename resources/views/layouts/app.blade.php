<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Eindwerk Marianna" name="Description">
    <meta content="Ogani website" name="keywords">
    <meta content="width=device-width, initial-scale=1, user-scalable=0" name="viewport">
    <title> Vroman Construct</title>

    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" rel="stylesheet')}}">
    <link crossorigin="anonymous" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css')}}"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          referrerpolicy="no-referrer" rel="stylesheet"/>

    <link crossorigin="anonymous" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" rel="stylesheet">
    <link rel="stylesheet2" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

</head>

<body>
<header class="container-fluid">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img alt="log" class="d-inline-block align-text-top" src="images/logo.png" style="width: 125px"
                        >
                        <p class="m-0 ps-3 display-6 text-bold" id="vcons">Vroman Construct</p>
                    </a>
                    <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler ms-auto" data-bs-target="#navbarNav" data-bs-toggle="collapse"
                            type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex justify-content-end w-100 text-uppercase px-5 py-5">
                            <li class="nav-item me-3">
                                <a aria-current="page" class="nav-link active" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href={{route('overons')}}>Over Ons </a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="{{route('werkwijze')}}">Werkwijze</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="{{route('projecten')}}">Projecten</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</header>
<main>
  @yield('content')
</main>

<footer class="footer spad pt-5">
    <div class="container">

        <div class="row">

            <div class="col-lg-9 col-md-6 col-sm-6">
                <div class="footer-about">
                    <div class="footer-about-logo">
                        <img alt="log" class="d-inline-block align-text-top" src="images/logo.png" style="width: 125px">

                        <!--                        <a href="index.php"><img alt="logo" src="images/logo"></a>-->
                        <!--                        <br>-->
                        <!--                        <adress>Address: 60-49 Road 11378 New York</adress>-->
                        <!--                        <br>-->
                        <!--                        <tel>Phone: +65 11.188.888</tel>-->
                        <!--                        <p>Email: info@ogani.be</p>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  mx-auto ">
                <ul>
                    <li>Keihoek 21, 8710 Ooigem</li>
                    <li>0494/60 69 52</li>
                    <li>vromanconstruct@telenet.be</li>
                    <li>BTW: 0779.669.073</li>
                </ul>
            </div>

        </div>


    </div>
</footer>

<script crossorigin="anonymous"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('js/animation.js') }}"></script>
</body>
</html>
