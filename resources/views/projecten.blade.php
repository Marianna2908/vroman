@extends('layouts.app')

@section('content')
    <main>
        <!--    HERO IMG-->
        <section class="hero">
            <div class="hero-inner">
                <h1 class="pb-2 hero-title"> Projecten</h1>
            </div>
        </section>
        <!-- HERO IMG END   -->
        <section>
            <div class="row pt-5">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills mb-3 justify-content-center lg-3" id="pills" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-selected="true" class="nav-link active"
                                            data-bs-target="#webdesign"
                                            data-bs-toggle="pill" id="webdesign-tab" role="tab" type="button">Renovaties
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-selected="false" class="nav-link"
                                            data-bs-target="#ui-design"
                                            data-bs-toggle="pill" id="ui-design-tab" role="tab" type="button">Daken
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-selected="false" class="nav-link"
                                            data-bs-target="#prototype"
                                            data-bs-toggle="pill" id="prototype-tab" role="tab" type="button">Zwembaden & Vijvers
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-selected="false" class="nav-link"
                                            data-bs-target="#photography"
                                            data-bs-toggle="pill" id="pills-contact-tab" role="tab" type="button">Trappen & Tafels
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-selected="false" class="nav-link"
                                            data-bs-target="#photography"
                                            data-bs-toggle="pill" id="pills-afsluitingen-tab" role="tab" type="button">Afsluitingen
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-selected="false" class="nav-link"
                                            data-bs-target="#photography"
                                            data-bs-toggle="pill" id="pills-poolhouses-tab" role="tab" type="button">Poolhouses & Buitenkamers
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content text-center" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="webdesign" role="tabpanel">
                                <div>
                                    <div class="row row-cols-lg-4 row-cols-sm-2 g-0">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                        <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ui-design" role="tabpanel">
                                <div class="row row-cols-lg-4 row-cols-sm-2 g-0">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prototype" role="tabpanel">
                                <div class="row row-cols-lg-4 row-cols-sm-2 g-0">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="photography" role="tabpanel">
                                <div class="row row-cols-lg-4 row-cols-sm-2 g-0">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                    <img alt="" class="img-fluid p-2" src="https://via.placeholder.com/300">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
