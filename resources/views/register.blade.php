<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <script src="https://cdn.tailwindcss.com"></script>

     <link rel="stylesheet" href="css/app.css">
    {{-- @vite(["resources/css/style.css"]) --}}
</head>

<body>
    <section>
        <div class="flex flex-col justify-center font-[sans-serif] text-[#333] sm:h-screen p-4">
            <div class="styled flex "  ></div>

            <div class="max-w-md w-full mx-auto border border-gray-300 rounded-md p-6">
                <div class="text-center mb-12">
                    <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                            class='w-40 inline-block' />
                    </a>
                </div>
                <form method="post" action="/register" id="inscriptionForm">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label class="text-sm mb-2 block">Nom Complet</label>
                            <input type="text" name="name" id="nom"
                                class="bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" />
                        </div>
                        <div>
                            <label class="text-sm mb-2 block">Email </label>
                            <input type="email" name="email"
                                class="bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                                required />
                        </div>

                        <div>
                            <label class="text-sm mb-2 block">Password</label>
                            <input type="password" name="password" id="passValidation"
                                class="bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                                required />
                        </div>
                    </div>
                    <div class="!mt-10">
                        <button type="submit" name="submit" id="valide"
                            class="w-full py-3 px-4 text-sm font-semibold rounded text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
                            Create an account
                        </button>
                    </div>
                    <p class="text-sm mt-6 text-center">Already have an account? <a href="/login"
                            class="text-blue-600 font-semibold hover:underline ml-1">Login here</a></p>
                </form>
            </div>
            <div class="styled"></div>

        </div>

    </section>
</body>

</html>
