@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $service->name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $service->description }}</p>
            <p class="card-text"><strong>Highlight:</strong> {{ $service->highlight }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $service->status }}</p>
            @if ($service->image)
        
              <img src="{{ asset('assets/images/service_image/' . $service->service_image) }}" alt="{{ $service->name }}" class="img-thumbnail" width="200">
            
                
            @endif
        </div>
    </div>
</div>
@endsection
