@extends('crud.layouts.master')

@section('content')
    <div class="container-fliud mt-5 mx-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2 h3 text-light">{{ __('Processor List') }}</div>
                    <div class="p-2 ">
                        <!-- Developed by Mohamed Insath -->
                        <a href="{{ route('crud.create') }}" class="btn btn-sm btn-light d-flex align-items-center">
                            <i class='bx bx-plus bx-sm me-2'></i>
                            {{ __('Create New') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="p-2">
                            <tr>
                                <th>#</th>
                                <th>{{ __('Processor Name') }}</th>
                                <th>{{ __('Image') }}</th>
                                <th>{{ __('Manufacturer') }}</th>
                                <th>{{ __('Clock Speed') }}</th>
                                <th>{{ __('Number of Cores') }}</th>
                                <th>{{ __('Threads') }}</th>
                                <th>{{ __('Architecture') }}</th>
                                <th>{{ __('Release Date') }}</th>
                                <th>{{ __('Thermal Design Power') }}</th>
                                <th>{{ __('Price') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <!-- Developed by Mohamed Insath -->
                        <tbody>
                            @if (count($cruds) > 0)
                                @foreach ($cruds as $crud)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $crud->name }}</td>
                                        <td>
                                            <img src="{{ asset($crud->image) }}" style="width: 70px; height: 70px;">
                                        </td>
                                        <td>{{ $crud->manufacturer }}</td>
                                        <td>{{ $crud->clocl_speed }}</td>
                                        <td>{{ $crud->cores }}</td>
                                        <td>{{ $crud->threads }}</td>
                                        <td>{{ $crud->architecture }}</td>
                                        <td>{{ $crud->release_date }}</td>
                                        <td>{{ $crud->tdp }}</td>
                                        <td>{{ $crud->price }}</td>
                                        <td>
                                            <a href="{{ route('crud.edit', $crud->id) }}">
                                                <i class='bx bx-edit bx-sm text-success'></i>
                                            </a>
                                            <a href="{{ route('crud.destroy', $crud->id) }}" class="delete-item">
                                                <i class='bx bxs-trash bx-sm text-danger '></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="12" class="text-center text-muted"> No Data Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <!-- Developed by Mohamed Insath -->
                </div>
            </div>
        </div>
    </div>
@endsection
