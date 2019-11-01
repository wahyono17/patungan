@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h3>Add New Post</h3>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption"
                           type="text"
                           class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('caption') }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>
            <div class="row">
            <span style="display: flex;justify-content: space-between">
                <div class="form-group row col-md-6">
                    <label for="qty" class="col-md-4 col-form-label">Qty</label>

                    <input id="qty"
                           type="text"
                           class="form-control{{ $errors->has('qty') ? ' is-invalid' : '' }}"
                           name="qty"
                           value="{{ old('qty') }}"
                           autocomplete="qty" autofocus>

                    @if ($errors->has('qty'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('qty') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row col-md-6">
                    <label for="unit" class="col-md-4 col-form-label">Unit</label>

                    <input id="unit"
                           type="text"
                           class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}"
                           name="unit"
                           value="{{ old('unit') }}"
                           autocomplete="unit" autofocus>

                    @if ($errors->has('unit'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('unit') }}</strong>
                        </span>
                    @endif
                </div>   
            </span>
            </div>
                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label">Angka</label>

                    <input id="price"
                           type="text"
                           class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                           name="price"
                           value="{{ old('price') }}"
                           autocomplete="price" autofocus
                           >

                    @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>
    </form>
</div>

@endsection
