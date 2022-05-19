<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    body{
        font-family:Inter;
    }
</style>

<div class=" bg-white min-h-screen flex justify-center items-center  gap-20">
    <div class=" bg-white/90 w-[26em] p-4 flex flex-col justify-center rounded text-center border-2 border-black">
        <div class="text-xl my-3">Sign into your account</div>
            <form class="w-full" action="" method="get">
                <label for="email"></label>
                <input class="mb-5 px-5 rounded-md text-xl border-2 border-sky-200 ring-blue-300 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-pink-500 invalid:text-pink-600
      focus:invalid:border-pink-500 focus:invalid:ring-pink-500" type="email" name="email" id="email" placeholder ="Email Address"><br>
                <label for="password"></label>
                <input class="px-5 rounded-md text-xl border-2 border-sky-200 ring-blue-300 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-pink-500 invalid:text-pink-600
      focus:invalid:border-pink-500 focus:invalid:ring-pink-500" type="password" name="password" id="password" placeholder ="Password"><br>
                <div class="flex justify-around my-3 mx-5">
                <div>
                    <input type="checkbox" name="remember" id="rememeber">
                    <label for="remember">Remember Me</label>
                </div>
                <div class ="text-gray-700 cursor-pointer ">
                    Forgot Password?           
                </div>
                </div>
                <div class="w-2/3 mx-auto px-5 py-2 rounded-lg text-white bg-blue-500/90 cursor-pointer my-5">Login</div>
                <div class="flex justify-center items-center">
                    <hr class=" w-1/3 border border-gray-500 rounded-full">
                    <span class="text-sm whitespace-nowrap mx-2">Or Login With</span>
                    <hr class=" w-1/3 border border-gray-500 rounded-full">
                </div>
                <div class="my-5 flex justify-center">
                    <div class="h-10 w-10 justify-center flex items-center shadow-md bg-white p-2 mx-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px"><path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"/><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"/></svg>
                    </div>
                    <div class="h-10 w-10 justify-center flex items-center shadow-md bg-white p-2 mx-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px"><path fill="#03A9F4" d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"/></svg>
                    </div>
                    <div class="h-10 w-10 justify-center flex items-center shadow-md bg-white p-2 mx-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px"><path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12 s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20 s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039 l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36 c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571 c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                    </div>
                    <div class="h-10 w-10 justify-center flex items-center shadow-md bg-white p-2 mx-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px"><path fill="#0288d1" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"/><path fill="#fff" d="M14 19H18V34H14zM15.988 17h-.022C14.772 17 14 16.11 14 14.999 14 13.864 14.796 13 16.011 13c1.217 0 1.966.864 1.989 1.999C18 16.11 17.228 17 15.988 17zM35 24.5c0-3.038-2.462-5.5-5.5-5.5-1.862 0-3.505.928-4.5 2.344V19h-4v15h4v-8c0-1.657 1.343-3 3-3s3 1.343 3 3v8h4C35 34 35 24.921 35 24.5z"/></svg>
                    </div>

                </div>
                <p class="mt-5">Don't have account? <a href="{{url('register')}}">Register Here</a> </p>
            </form>
        </div>
    <div class="w-[30em]">
            <img class="" src="https://www.go.ooo/img/bg-img/Login.jpg" alt="">
    </div>
</div>