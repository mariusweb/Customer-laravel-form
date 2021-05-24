@extends('index')

@section('table')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <th>Darbuotojas</th>
          <th>Sutarties Numeris</th>
          <th>Rekomendacija</th>
          <th>Greitis</th>
          <th>Aptarnavimas</th>
          <th>Pastabos</th>
          <th>Sutikimas</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($darbuotojai as $worker)
                <tr>
            <td>{{$worker['darbuotojas']}} {{$worker['pavarde']}}</td>
            <td>{{$worker['sutarties_nr']}}</td>
            <td>{{$worker['rekomendacija']}}</td>
            <td>{{$worker['greitis']}}</td>
            <td>{{$worker['aptarnavimas']}}</td>
            <td>{{$worker['pastabos']}}</td>
            <td>{{$worker['sutikimas']}}</td>
        </tr>
                @endforeach
    </tbody>
  </table>
  <a href="{{ url('/pardavimai') }}" class="text-sm text-gray-900 underline">Forma</a>
<div>
</div>
@endsection