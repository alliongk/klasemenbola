@extends('layouts.client')

@section('content')
<div class="row mt-5 justify-content-center">
  <div class="col-8 mb-4">
    <div class="mb-2">          
      <a href="{{route('games.index')}}" class="btn btn-primary" role="button">Input Data</a>
    </div>
      <div class="card">        
          <h3 class="card-header">Klasemen Bola</h3>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-borderless">
              <thead class="table-success">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Klub</th>
                  <th scope="col">Ma</th>
                  <th scope="col">Me</th>
                  <th scope="col">S</th>
                  <th scope="col">K</th>
                  <th scope="col">GM</th>
                  <th scope="col">GK</th>
                  <th scope="col">Point</th>
                </tr>
              </thead>
              <tbody>
                @foreach($teams as $team)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->games }}</td>
                    <td>{{ $team->won }}</td>
                    <td>{{ $team->tied }}</td>
                    <td>{{ $team->lost }}</td>
                    <td>{{ $team->wongol }}</td>
                    <td>{{ $team->lostgol }}</td>
                    <td>{{ $team->points }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
      </div>
  </div>

  <div class="col-8 mb-4">
    <div class="card">
        <h5 class="card-header">Keterangan</h5>
        <div class="card-body">
        <p>
          Ma = Main <br>
          Me = Menang <br>
          S  = Seri <br>
          K  = Kalah <br>
          GM = Goal Menang (total Gol yg dicetak tim tersebut) <br>
          GK = Goal Kalah (total yg dicetak tim lawan terhadap team tersebut) <br>
        </p>
        </div>
    </div>
</div>

</div>

<div class="row mt-5">
<h3>Hasil Skor</h3>
  @foreach($results as $result)
  <div class="col-lg-6 mb-5">
      <div class="card">
    
          <ul class="list-group list-group-flush">
              <li class="list-group-item">{{ $result->team1->name }} <span class="float-end badge bg-success">{{ $result->result1 }}</span></li>
              <li class="list-group-item">{{ $result->team2->name }} <span class="float-end badge bg-danger">{{ $result->result2 }}</span></li>
          </ul>
      </div>
  </div>
  @endforeach
</div>

@endsection