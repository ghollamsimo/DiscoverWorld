@extends('layouts.master')
@section('title')
    Accueil
@endsection
@section('main')
    <section class=" relative py-12 overflow-hidden  sm:pb-16 lg:pb-20 xl:pb-24">
        <div class=" px-4 mx-auto relativea sm:px-6 lg:px-8 max-w-7xl">
            <div class=" grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 gap-x-16">
                <div class="">
                    <h1 class="text-4xl font-bold font-serif sm:text-5xl lg:text-6xl xl:text-7xl">Discover World,Make New Freinds</h1>
                    <p class="mt-4 text-lg font-normal text-gray-400 sm:mt-8">DiscoverWorld est une plateforme vise à réunir une communauté passionnée par la découverte du monde à travers des récits de voyage, offrant un espace où les aventures peuvent être partagées et célébrées..</p>

                    <div class="relative mt-8 rounded-full sm:mt-12">
                    </div>

                    <div class="mt-8 sm:mt-12">
                        <div class="flex items-center mt-3">
                            <div class="flex">

                            </div>

                        </div>
                    </div>
                </div>

                <div class="relative">

                    <img src="/images/airport.jpg" class="rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 sm:py-16 lg:py-24">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold font-serif leading-tight text-black sm:text-4xl lg:text-5xl">Numbers tell our story</h2>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-10 text-center lg:mt-24 sm:gap-x-8 md:grid-cols-3 font-serif" >
                <div class="">
                    <h3 class="font-bold text-7xl">
                        <span class=" text-blue-600"> {{ $userCount }} </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Users</p>
                </div>

                <div>
                    <h3 class="font-bold text-7xl">
                        <span class="text-blue-600"> {{ $recitCount }} </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Recits</p>
                </div>

                <div>
                    <h3 class="font-bold text-7xl">
                        <span class="text-blue-600">{{ $destinationCount }} </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Distination</p>
                </div>
            </div>
        </div>
    </section>



    <div class="max-w-screen-xl mx-auto p-4 service-section">
        <div class="max-w-md mx-auto text-center">
            <h1 class="text-2xl font-bold font-serif text-black sm:text-5xl">Our Recits</h1>
            <p class="mt-4 text-base font-normal leading-7 text-gray-600">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Purus faucibus massa dignissim tempus.</p>
        </div>

        <div class="flex flex-wrap justify-between mt-8">

            <div class="flex flex-wrap gap-6">
                <form action="{{ route('filter.asc') }}" method="GET">
                    <button type="submit"
                        class="py-2 px-4 mb-2 text-sm font-medium text-white bg-blue-500 rounded border border-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Oldest First
                    </button>
                </form>

                <form action="{{ route('filter.desc') }}" method="GET">
                    <button type="submit"
                        class="py-2 px-4 mb-2 text-sm font-medium text-white bg-blue-500 rounded border border-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Newest First
                    </button>
                </form>
            </div>

            <div class="flex items-center space-x-4 mt-4">
                <form action="{{ route('filter.destination') }}" method="GET" class="flex gap-2">
                    <select id="countries" name="destination"
                        class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Select a continent</option>
                        <option value="All">All</option>
                        <option value="Afrique">Africa</option>
                        <option value="Europe">Europe</option>
                        <option value="Asia">Asia</option>
                        <option value="North">North America</option>
                        <option value="South">South America</option>
                    </select>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Filter
                    </button>
                </form>
            </div>
        </div>
    </div>




    <section class="py-12 bg-white sm:py-16 lg:py-20">

        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">

            <div class="grid grid-cols-2 gap-6 mt-10 lg:mt-16 lg:gap-4 lg:grid-cols-4">
                @foreach ($aventures as $recit)

                <div class="relative group">
                    <div class="overflow-hidden aspect-w-1 aspect-h-1">
                        @foreach ($recit->images as $image)
                            <img src="{{ URL('/storage/images/' . $image->image) }}" alt="Blog Post 1"
                                 class="w-full h-60 object-cover" />
                            @break
                        @endforeach
                    </div>
                    <div class="flex items-start justify-between mt-4 space-x-4">
                        <div>
                            <h3 class="text-xs font-extrabold font-serif text-gray-900 sm:text-sm md:text-base">
                                <a href="/recit/{{ $recit->id }}" title="">
                                    {{ $recit->title }}                                </a>
                            </h3>
                            <div class="flex items-center mt-2.5 space-x-px">
                                <span class="text-blue-800 text-sm w-full font-serif font-extrabold">{{ $recit->created_at }}</span>
                            </div>
                        </div>

                        <div class="text-right">
                            <p class="text-xs font-medium font-serif border-b border-gray-400 text-gray-900 sm:text-sm md:text-base">{{ $recit->user->name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </section>




@endsection

