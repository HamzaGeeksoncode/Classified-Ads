@extends('home.layouts.app')
@section('content')
    <div class="bg-black" style="min-height: 100vh;">
        <div class="py-4 container n">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <h2 class="al-cars">Premium Adds</h2>
                </div>
                <!-- <div class="col-md-6 col-xs-6">
                    <a class="tn-atom" href="#">ALL CARS</a>
                </div> -->
            </div>
            <div class="row">



                @foreach ($users as $key => $d)
                    @if ($d->is_primium == 'yes')
                        <div class="g-4 col-lg-3 col-md-6 col-12">
                            <div class="border border-secondary h-100 rounded overflow-hidden">
                                <div class="position-relative">
                                    <img src="{{ asset('public/adpost/features/image/' . $d->feature_image) }}"
                                        class="w-100 border-bottom border-secondary"
                                        style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                                    <div class="car-time-and-price d-flex"></div>
                                </div>
                                <div class="p-3">
                                    <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                        <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                                    class="fa-solid fa-share-nodes"></i></button><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-regular fa-bookmark"></i></button></div>
                                        <div class="px-1 text-uppercase rounded" style="background: #dd5645;">
                                            <span>AED {{ $d->price }}</span>
                                        </div>
                                    </div>
                                    <a class="car-title-link" href="cars.html">
                                        <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">
                                            {{ $d->title }}</h5>
                                    </a>
                                    <p class="text-muted">{{ $d->description }}</p>

                                    <div class="d-flex align-items-center lo lof">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="{{ asset('public/company/logo/' . $d->company_logo) }}" alt=""
                                                class="me-1" style="width: 100px; height: 40px;"></div>
                                    </div>
                                    <div class="d-flex align-items-center lo">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="https://flagcdn.com/ae.svg" alt="" class="me-1"
                                                style="width: 20px; height: 15px;"><span class="text-capitalize">UAE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>


    <div class="bg-black" style="min-height: 100vh;">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <h2 class="al-cars">Cars</h2>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a class="tn-atom" href="/post/cars">ALL CARS</a>
                </div>
            </div>
            <div class="row">



                @foreach ($users as $key => $d)
                    @if ($d->status == 'active' && $d->type == 'cars')
                        <div class="g-4 col-lg-3 col-md-6 col-12">
                            <div class="border border-secondary h-100 rounded overflow-hidden">
                                <div class="position-relative">
                                    <img src="{{ asset('public/adpost/features/image/' . $d->feature_image) }}"
                                        class="w-100 border-bottom border-secondary"
                                        style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                                    <div class="car-time-and-price d-flex"></div>
                                </div>
                                <div class="p-3">
                                    <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                        <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                                    class="fa-solid fa-share-nodes"></i></button><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-regular fa-bookmark"></i></button></div>
                                        <div class="px-1 text-uppercase rounded" style="background: #dd5645;">
                                            <span>AED {{ $d->price }}</span>
                                        </div>
                                    </div>
                                    <a class="car-title-link" href="cars.html">
                                        <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">
                                            {{ $d->title }}</h5>
                                    </a>
                                    <p class="text-muted">{{ $d->description }}</p>

                                    <div class="d-flex align-items-center lo lof">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="{{ asset('public/company/logo/' . $d->company_logo) }}" alt=""
                                                class="me-1" style="width: 100px; height: 40px;"></div>
                                    </div>
                                    <div class="d-flex align-items-center lo">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="https://flagcdn.com/ae.svg" alt="" class="me-1"
                                                style="width: 20px; height: 15px;"><span class="text-capitalize">UAE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>


    <div class="bg-black" style="min-height: 100vh;">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <h2 class="al-cars">Bikes</h2>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a class="tn-atom" href="/post/bike">ALL BIKES</a>
                </div>
            </div>
            <div class="row">
                @foreach ($users as $key => $d)
                    @if ($d->status == 'active' && $d->type == 'bike')
                        <div class="g-4 col-lg-3 col-md-6 col-12">
                            <div class="border border-secondary h-100 rounded overflow-hidden">
                                <div class="position-relative">
                                    <img src="{{ asset('public/adpost/features/image/' . $d->feature_image) }}"
                                        class="w-100 border-bottom border-secondary"
                                        style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                                    <div class="car-time-and-price d-flex"></div>
                                </div>
                                <div class="p-3">
                                    <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                        <div class="car-shareMark"><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-solid fa-share-nodes"></i></button><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-regular fa-bookmark"></i></button></div>
                                        <div class="px-1 text-uppercase rounded" style="background: #dd5645;">
                                            <span>AED {{ $d->price }}</span>
                                        </div>
                                    </div>
                                    <a class="car-title-link" href="{{ route('home.showpage', ['id' => $d->id]) }}">
                                        <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">
                                            {{ $d->title }}</h5>
                                    </a>
                                    <p class="text-muted">{{ $d->description }}</p>

                                    <div class="d-flex align-items-center lo lof">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="{{ asset('public/company/logo/' . $d->company_logo) }}"
                                                alt="" class="me-1" style="width: 100px; height: 40px;"></div>
                                    </div>
                                    <div class="d-flex align-items-center lo">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="https://flagcdn.com/ae.svg" alt="" class="me-1"
                                                style="width: 20px; height: 15px;"><span
                                                class="text-capitalize">UAE</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
@endsection
