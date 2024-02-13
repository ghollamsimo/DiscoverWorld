@extends('layouts.master')

@section('title', 'Aventure')

@section('main')
    <div class="container h-full w-full my-24  md:px-6">
        <section class="mb-32">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-3xl mx-auto bg-white rounded-lg  p-8 font-[sans-serif]">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($recit->images as $image)
                        <img class="mb-4" src="{{ asset('storage/images/' . $image->image) }}" alt="{{ $image->alt_text }}">
                    @endforeach
                </div>
                <div>
                    <h2 class="text-2xl w-full font-mono font-bold text-gray-800 mb-4">
                        {{ $recit->title }}
                    </h2>
                    <p class="text-base font-bold font-serif text-gray-600 w-full">
                        {{ $recit->description }}
                    </p>

                    <h2 class="text-lg font-semibold text-gray-800 mt-4 mb-2">Conseils</h2>
                    <p class="text-base text-gray-600">
                        {{ $recit->conseils }}
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
