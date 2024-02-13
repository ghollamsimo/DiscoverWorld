<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- @vite(["resources/css/style.css"]) --}}
</head>

<body>
    <section>

        <div class="bg-gray-50 font-[sans-serif] text-[#333]">
            <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4">
                <div class="max-w-md w-full border py-8 px-6 rounded border-gray-300 bg-white">
                    <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                            class='w-40 mb-10' />
                    </a>
                    <h2 class="text-center text-3xl my-4 font-extrabold">
                        Log in to your account
                    </h2>
                    <form method="post" action="/login" id="loginForm">
                        @csrf
                        <div>
                            <label for="">Email</label>
                            <input type="email" name="email" id="loginEmail" required
                                class="w-full text-sm px-4 py-3 my-2 rounded outline-none border-2 focus:border-blue-500"
                                placeholder="Email address" />
                        </div>
                        <div>
                            <label for="">Password  </label>
                            <input type="password" name="password" id="loginPassword" required
                                class="w-full text-sm px-4 py-3 my-2 rounded outline-none border-2 focus:border-blue-500"
                                placeholder="Password" />
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center">
                                <label for="remember-me" class="ml-3 block text-sm">
                                    Vous n'avez pas de compte ?
                                </label>
                            </div>
                            <div>
                                <a href="/register" class="text-sm text-blue-600 hover:text-blue-500">
                                    Inscrivez vous
                                </a>
                            </div>
                        </div>
                        <div class="!mt-10">
                            <button type="submit" name="user-login" id="loginSubmit"
                                class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                                Log in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
</body>

</html>
