@extends('todoes');

@section('content')
    <div class="container w-25 border p-4 my-4">
        <div class="row mx-auto">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf

                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('name')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                <div class="mb-3">
                    <label for="name" class="form-label">Titulo de la Categoría</label>
                    <input type="text" name="name" class="form-control" placeholder="Ingresa categoría">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color Categoría</label>
                    <input type="color" name="color" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Crear Categoría</button>
            </form>
            <div>
                @foreach ($categories as $category)
                    <div class="row py-1">
                        <div class="col-md-9 d-flex align-items-center">
                            <a href="{{ route('categories.show', ['category' => $category->id]) }}">
                                <span class="color-container" style="background-color: {{ $category->color }}"></span>
                                {{ $category->name }}
                            </a>
                        </div>

                        <div class="col-md-3 d-flex justify-content-end">
                            <div class="col-md-3 d-flex justify-content-end">
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal{{ $category->id }}">Eliminar</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
