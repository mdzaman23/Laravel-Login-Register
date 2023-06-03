<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <style>            ul {

        height: 80px;
        width: 95%;
        background-color: rgb(237, 241, 239);
        }
        ul li{
            float: right;
            list-style: none;
            margin-right: 30px;
            margin-top: 20px;
            background-color: rgb(4, 251, 12);
            padding: 5px;
            border-radius: 20px;
        }
       img {height: 270px;
            width: 270px;
            margin-top:20px;
            border-radius: 20px;
        }
        /* img{ height: 100px;
            width: 270px;
            margin-top:20px;

        } */
        h1,p {
            text-align: center;
            text-decoration-color: #eb2929

        }

         </style>
</head>
<div>


<body>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

<div>
    <ul>
        <li><a href="https://blog.shikhun.net/">Dashboard</a></li>
        <li><a href="">Home</a></li>

        <li><a href="https://www.shikhun.net/courses/wordpress-support-happiness-enginner/lesson/%e0%a6%aa%e0%a6%bf%e0%a6%8f%e0%a6%87%e0%a6%9a%e0%a6%aa%e0%a6%bf-%e0%a6%ac%e0%a7%87%e0%a6%b8%e0%a6%bf%e0%a6%95-%e0%a6%a1%e0%a6%bf%e0%a6%ab%e0%a6%be%e0%a6%87%e0%a6%a8-%e0%a6%ab%e0%a6%be%e0%a6%82/">About Us</a></li>
        <li><a href="https://phpsandbox.io/">Contact Us</a></li>
        <li><a href="https://onlinephp.io/">Blogs</a></li>
        <li><a href="https://www.privacypolicygenerator.info/">Privacy Polecy</a></li>
        {{-- <img src="images/md2.jfif" alt=""> --}}
<img src="{{asset('logo/logo2.jpg') }}" alt="" width="20px" height="20px">

    </ul>
    <h1> my Love Bangladeash</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, rerum ipsa. Hic molestiae iste nemo neque quis amet praesentium, quasi sit laudantium dolore nihil eum numquam voluptate similique error veritatis.</p>
    <img src="images/md1.jpg" alt="">
    <img src="images/md2.jfif" alt="">
    <img src="images/md3.jpg" alt="">
    <img src="images/md4.jpg" alt="">


    <img src={{url("images/md1.jpg")}} alt="">

</div>

</body>
</html>
