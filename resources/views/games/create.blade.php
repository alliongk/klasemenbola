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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Tambah Pertandingan') }}</h1>
                    <a href="{{ route('games.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Kembali') }}</a>
                </div>
            </div>


            <div class="card-body" id="slot">
               
                <form action="{{ route('games.store') }}" method="POST">
                    @csrf    
                                  
                    <div class="form-group">
                        <label for="team">{{ __('Klub 1') }}</label>
                        <select name="team1_id" id="team" class="form-control" required>
                            @foreach($teams as $id => $team)
                                <option value="{{ $id }}" {{ (in_array($id, old('team', [])) || isset($game) && $game->team1->id == $id) ? 'selected' : '' }}>{{ $team }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="team">{{ __('Klub 2') }}</label>
                        <select name="team2_id" id="team" class="form-control" required>
                            @foreach($teams as $id => $team)
                                <option value="{{ $id }}" {{ (in_array($id, old('team', [])) || isset($game) && $game->team2->id == $id) ? 'selected' : '' }}>{{ $team }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="result1">{{ __('Skor 1') }}</label>
                        <input type="number" class="form-control" id="result1" name="result1" value="{{ old('result1') }}" />
                    </div>
                    <div class="form-group">
                        <label for="result2">{{ __('Skor 2') }}</label>
                        <input type="number" class="form-control" id="result2" name="result2" value="{{ old('result2') }}" />
                    </div>
                   
                    <div class="form-group">
                        <button type="#" class="btn btn-info addslot">Add</button>

                    </div>

                   

                    <button type="submit" class="btn btn-primary btn-block">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>


    <!-- Content Row -->

</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


{{-- <script>
    $(document).ready(function(){
        $(".addslot").click(function(e){
            e.preventDefault();
            $("#slot").prepend(` <div class="append_item">
                    <div class="form-group">
                        <label for="team">{{ __('Klub 1') }}</label>
                        <select name="team1_id[0]" id="team" class="form-control" required>
                            @foreach($teams as $id => $team)
                                <option value="{{ $id }}" {{ (in_array($id, old('team', [])) || isset($game) && $game->team1->id == $id) ? 'selected' : '' }}>{{ $team }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="team">{{ __('Klub 2') }}</label>
                        <select name="team2_id[0]" id="team" class="form-control" required>
                            @foreach($teams as $id => $team)
                                <option value="{{ $id }}" {{ (in_array($id, old('team', [])) || isset($game) && $game->team2->id == $id) ? 'selected' : '' }}>{{ $team }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="result1">{{ __('Skor 1') }}</label>
                        <input type="number" class="form-control" id="result1" name="result1[0]" value="{{ old('result1') }}" />
                    </div>
                    <div class="form-group">
                        <label for="result2">{{ __('Skor 2') }}</label>
                        <input type="number" class="form-control" id="result2" name="result2[0]" value="{{ old('result2') }}" />
                    </div>
                    </div>`);
        });
    });
    
</script> --}}


