@extends('layouts.admin')

@section('content')
<div class="container-fluid">
        <div class="card">
        <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                {{ __('Skor Pertandingan') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.games.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('Tambah Pertandingan') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-game" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Klub 1</th>
                                <th>Klub 2</th>                               
                                <th>Skor 1</th>
                                <th>Skor 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($games as $game)
                            <tr data-entry-id="{{ $game->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $game->team1->name }}</td>
                                <td>{{ $game->team2->name }}</td>
                                <td>{{ $game->result1 }}</td>
                                <td>{{ $game->result2 }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">{{ __('Data Kosong') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection