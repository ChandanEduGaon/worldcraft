@extends('master')
@section('hero')
    @include('components.hero', ['title' => 'Our Products', 'description' => 'Our Products']);
@endsection
@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Products</li>
                    </ol>
                    <h2>Products</h2>
                </div>

            </div>
        </section>
        <!-- End Contact Section -->
        <section class="features">
            <div class="container">
                @foreach ($home_data as $item)
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5">
                            <img src="{{ asset('public/assets/img/features-1.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-4">
                            <h3>{{isset($item->product_name) ? $item->product_name : '--'}}</h3>
                            <p class="fst-italic">
                                {{isset($item->product_description) ? $item->product_description : '--'}}
                            </p>
                            <button class="btn btn-warning">Preview</button>
                            <button class="btn btn-secondary">View More</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection
