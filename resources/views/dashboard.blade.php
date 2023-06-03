<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}

<style>            ul {
    height: 80px;
    width: 100%px;
    background-color: rgb(237, 241, 239);
    }
    ul li{
        float: left;
        list-style: none;
        margin-right: 30px;
        margin-top: 20px;
        background-color: rgb(0, 255, 123);
        padding: 5px;
        border-radius: 20px;
    }
    img{
        height: 1000px;
        width: 100%;

    }

    h1,p{
        text-align: center;
        text-decoration-color: #068c81

    }
    </style>
                    {{-- <img src="{{asset ('logo/logo22.png') }}" alt="" width="100px" height="100px"> --}}

            <div>

                <ul>

                    <li><a href="https://www.shikhun.net/courses/">Home</a></li>
                    <li><a href="https://www.shikhun.net/courses/wordpress-support-happiness-enginner/lesson/%e0%a6%aa%e0%a6%bf%e0%a6%8f%e0%a6%87%e0%a6%9a%e0%a6%aa%e0%a6%bf-%e0%a6%ac%e0%a7%87%e0%a6%b8%e0%a6%bf%e0%a6%95-%e0%a6%a1%e0%a6%bf%e0%a6%ab%e0%a6%be%e0%a6%87%e0%a6%a8-%e0%a6%ab%e0%a6%be%e0%a6%82/">About Us</a></li>
                    <li><a href="https://phpsandbox.io/">Contact Us</a></li>
                    <li><a href="https://onlinephp.io/">Blogs</a></li>
                    <li><a href="https://www.privacypolicygenerator.info/">Privacy Polecy</a></li>
                </ul>
            </div>
<div>
    <h1>আমার সোনার বাংলা আমি তোমায় ভালবাসি</h1> <br> <br>
    <p>বিসমিল্লাহির রহমা-নির রহি-ম। <br>
        আলহামদু লিল্লাহি রব্বিল আ -লামি-ন। <br>
        আররহমা-নির রাহি-ম। <br>
        মা-লিকি ইয়াওমিদ্দি-ন। <br>
        ইয়্যা-কা না’বুদু ওয়া ইয়্যা-কা নাসতাই’-ন <br>
        ইহদিনাস সিরাতা’ল মুসতাকি’-ম <br>
        সিরাতা’ল্লা যি-না আনআ’মতা আ’লাইহিম গা’ইরিল মাগ’দু’বি আ’লাইহিম ওয়ালা দ্দ-ল্লি-ন।</p> <br>
    <img src="images/md4.jpg" alt="">
</div>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
