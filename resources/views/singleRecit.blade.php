@extends('layouts.master')

@section('title', 'Aventure')

@section('main')
    <div class=" h-full w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div class="py-8">
                    <h1 class="text-3xl font-bold mb-2 font-serif">{{ $recit->title }}
                    </h1>
                    <p class="text-gray-500 text-sm"><span class="font-bold text-blue-600 font-serif">Conseils : </span> {{ $recit->conseils }}</p>
                </div>

                @foreach ($recit->images as $image)
                    <img class="mb-4 w-" src="{{ asset('storage/images/' . $image->image) }}" alt="{{ $image->alt_text }}" >
                @endforeach

                <div class="prose prose-sm sm:prose lg:prose-lg mb-7 xl:prose-xl mx-auto">
                    <p>{{ $recit->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection






