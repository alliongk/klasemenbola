@extends('layouts.app_backend')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->  

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Tambah Klub') }}</h1>
                    <a href="{{ route('teams.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('teams.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Nama Klub') }}</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="city">{{ __('Kota Klub') }}</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>
</div>
@endsection