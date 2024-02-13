<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


<nav class="flex m-2 p-4 justify-between" >
    <div class="font-bold">
        <a href="/" >
            <img src="/images/logo.png" width="100px">
        </a>
    </div>

    <div>
        <ul class="flex gap-5 font-bold font-mono">
            <li>
                <a href="/" class="block px-4 py-2  text-black cursor-pointer	">Home</a>
            </li>
            @if(!Auth::check())
            <li class=" ">
                <a href="/login" class="block px-4 py-2  text-black cursor-pointer	">Login</a>
            </li>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">

                        <li>
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100 text-black cursor-pointer">Profile</a>
                        </li>

                    </ul>
            @endif

        </ul>

    </div>
</nav>
