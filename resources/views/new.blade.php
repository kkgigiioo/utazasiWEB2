@extends('layouts/app', ['siteTitle' => 'New travel'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        {{ __('Create new travel') }}
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
                                <div class="col-md-6">
                                    <input type="text" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{ old('country') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                <div class="col-md-6">
                                    <input type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ old('city') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>
                                <div class="col-md-6">
                                    <input type="text" name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" value="{{ old('content') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <textarea name="description" style="resize:none;" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Travel start date</label>
                                <div class="col-md-6">
                                    <input type="date" name="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="endDate" class="col-md-4 col-form-label text-md-right">Travel end date</label>
                                <div class="col-md-6">
                                    <input type="date" name="endDate" class="form-control{{ $errors->has('endDate') ? ' is-invalid' : '' }}" value="{{ old('endDate') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                                <div class="col-md-6">
                                    <input type="text" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ old('price') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="maxNumber" class="col-md-4 col-form-label text-md-right">Maximum number of people</label>
                                <div class="col-md-6">
                                    <input type="text" name="maxNumber" class="form-control{{ $errors->has('maxNumber') ? ' is-invalid' : '' }}" value="{{ old('maxNumber') }}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection