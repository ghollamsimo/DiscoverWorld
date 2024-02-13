@extends('layouts.masterU')
@section('title')
    profile
@endsection
@section('main')
    <div class=" max-w-screen-xl mx-auto p-4 service-section ">
        <div class="flex justify-between">
            <h1 class="text-4xl text-center mt-6 font-bold font-serif">Our Recits</h1>



            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto  overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 max-w-md w-full max-h-full">
                    <div class="relative bg-white rounded-lg shadow ">
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 font-serif">
                            <h3 class="text-lg font-semibold  text-gray-900">
                                Create Recits
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                                data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <form method="POST" action=" {{ route('profile') }} " class="p-4 md:p-5"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Titre</label>
                                    <input type="text" name="title" id="continent"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="" placeholder="title">
                                </div>
                                <div class="col-span-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Destination</label>
                                    <input type="text" name="destination" id="continent"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                        placeholder="Exemple : Afrique" required="">
                                </div>
                                <div class="col-span-2">

                                    <label class="block mb-2 text-sm font-medium text-gray-900 "  for="file_input">Upload file</label>
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " name="images[]" multiple required id="file_input" type="file">

                                </div>

                                <div class="col-span-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                                    <textarea id="description" name="description" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                        placeholder="Description"></textarea>
                                </div>

                                <div class="col-span-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Conseils</label>
                                    <textarea name="conseils" id="Conseils" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                        placeholder="Conseils"></textarea>
                                </div>
                            </div>
                            <button type="submit"
                                class="inline-flex rounded-2 items-center text-black  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto h-fit">
            @foreach ($aventures as $aventure)
                <div class="bg-white cursor-pointer rounded h-fit overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative top-0 hover:-top-2 transition-all duration-300">
                    @foreach ($aventure->images as $image)
                        <img class="w-full h-60 object-cover " src="{{ URL('/storage/images/' . $image->image) }}" alt="" />
                    @break
                @endforeach
                <div class="p-6">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $aventure->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 truncate">{{ $aventure->description }}</p>

                </div>
            </div>
        @endforeach
    </div>


</div>
@endsection
