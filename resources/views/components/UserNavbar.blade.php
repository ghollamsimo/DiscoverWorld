<nav class="flex m-2 p-4 justify-between" >
    <div class="font-bold">
        <a href="/" >
            <img src="/images/logo.png" width="100px">
        </a>
    </div>

    <div>
        <ul class="flex gap-5 font-bold font-mono">



            @auth


                    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm rounded-full md:me-0  " type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-10 h-10 rounded-full" src="/images/userprofile.jpg" alt="user photo">
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow font-normal	 w-44 ">

                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                            <li>
                                <a href="/" class="block px-4 py-2 hover:bg-gray-100 text-black cursor-pointer	">Home</a>
                            </li>
                            <li>
                                <a data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block px-4 py-2 hover:bg-gray-100 text-black cursor-pointer	">Add Recits</a>
                            </li>

                        </ul>
                        <div class="py-2">
                            <a href="{{ route('logout') }}">
                                <button
                                    class='px-4 py-2 text-sm rounded-full font-bold text-black transition-all ease-in-out duration-300 hover:bg-transparent hover:text-red'>Log-out</button>
                            </a>
                        </div>
                    </div>

            @else
                <li class=" ">
                    <a href="{{route('login')}}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
