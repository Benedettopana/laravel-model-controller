@extends('layout.main')

@section('content')

<div class="container-xl">
  <div class="row row-cols-3">
    @foreach ($movie as $item)
    <div class="col my-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $item->title}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Titolo Originale: {{ $item->original_title }}</h6>
          <p class="card-text">Nazionalità: {{ $item->nationality}}</p>
          <p class="card-text">Data di uscita: {{ $item->date }}</p>
          <p class="card-text">Voto: {{ $item->vote}}</p>

        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>


@endsection
