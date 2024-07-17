@extends('crud.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2 h3 text-light">{{ __('Edit Processor') }}</div>
                    <div class="p-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-seccondary text-light"><a href="{{ route('crud.index') }}" class="text-light text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item active text-light" aria-current="page">Update</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('crud.update',$crud_edit->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ __('Processor Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $crud_edit->name }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_city" class="form-label">{{ __('Image') }}</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_regnumber" class="form-label">{{ __('Manufacturer') }}</label>
                            <input type="text" class="form-control @error('manufacturer') is-invalid @enderror"
                                name="manufacturer" value="{{ $crud_edit->manufacturer }}">
                            @error('manufacturer')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_nic" class="form-label">{{ __('Clock Speed') }}</label>
                            <input type="text" class="form-control @error('clock_speed') is-invalid @enderror"
                                name="clock_speed" value="{{  $crud_edit->clocl_speed }}">
                            @error('clock_speed')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_email" class="form-label">{{ __('Number of Core') }}</label>
                            <input type="text" class="form-control @error('cores') is-invalid @enderror" name="cores" value="{{  $crud_edit->cores }}">
                            @error('cores')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_phone" class="form-label">{{ __('Threads') }}</label>
                            <input type="text" class="form-control @error('threads') is-invalid @enderror"
                                name="threads" value="{{  $crud_edit->threads }}">
                            @error('threads')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_city" class="form-label">{{ __('Architecture') }}</label>
                            <input type="text" class="form-control @error('architecture') is-invalid @enderror"
                                name="architecture" value="{{  $crud_edit->architecture }}">
                            @error('architecture')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_city" class="form-label">{{ __('Release Date') }}</label>
                            <input type="date" class="form-control @error('release_date') is-invalid @enderror"
                                name="release_date" value="{{  $crud_edit->release_date }}">
                            @error('release_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_city" class="form-label">{{ __('Thermal Design Power') }}</label>
                            <input type="text" class="form-control @error('tdp') is-invalid @enderror " name="tdp" value="{{  $crud_edit->tdp }}">
                            @error('tdp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="student_city" class="form-label">{{ __('Price') }}</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{  $crud_edit->price }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info text-light my-3 w-25">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
