@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">المنتجات</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">الخدمات</button>

            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="col-md-8">
                    @foreach ($products as $product)
                        <h3>{{ $product->name }}</h3>
                        <h3>{{ $product->user->name }}</h3>
                        <form action="/dashboard/orders" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <button type="submit">طلب الخدمه</button>
                        </form>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="col-md-8">
                    @foreach ($services as $service)
                        <h3>{{ $service->name }}</h3>
                        <h3>{{ $service->user->name }}</h3>
                        <form action="/dashboard/order_sers" method="post">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <button type="submit">طلب الخدمه</button>
                        </form>
                    @endforeach
                </div>
            </div>
          </div>
        
    </div>
</div>
@endsection