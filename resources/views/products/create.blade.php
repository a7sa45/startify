@extends('layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card my-5 card-body cardbody-color p-lg-5">
                    <div class="text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/5001/5001087.png" class="img-fluid profile-image-pic  my-3"
                        width="200px" alt="create">
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="/dashboard/products" enctype="multipart/form-data">
                            @csrf
    
                            <div class="mb-3">
                                <input id="name" placeholder="اسم المنتج" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="price" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0" placeholder="السعر" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" class="form-control  rounded-end-0 @error('price') is-invalid @enderror" name="price" value="" required autocomplete="price" autofocus>
                                <span class="input-group-text rounded-start rounded-start-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3">SR</span>
                                </div>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--<div class="mb-3">
                                <div class="input-group" style="text-align: left">
                                <input id="image" style="text-align: left; border-top-left-radius:0; border-bottom-left-radius:0" placeholder="image" type="file" class="form-control rounded-end-0 @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                                <span class="input-group-text rounded-start rounded-start-0" style="text-align: left; border-top-right-radius:0; border-bottom-right-radius:0" id="basic-addon3">صورة المنتج</span>
                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>-->
                            <div class="mb-3">
                                <textarea id="description"
                                
                                    placeholder="وصف الخدمه"
                                
                                type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
    
    
                            <div class="mb-0">
                                <button type="submit" style="background-color: #0e1c36; color: #fff; hover{color: #0e1c36;}" class="btn btn-color px-5 mb-5 w-100">
                                    <i class="fa-solid fa-circle-plus"></i> إضـــافة 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection