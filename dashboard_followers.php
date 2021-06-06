<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icons.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header.php'; ?>
<main class="p-16px md:px-offset-md w-full">
    <div id="wrapper" class="grid grid-cols-1 md:gap-x-2% md:grid-cols-4 gap-y-6">
        <div class="bg-transparent grid place-items-center py-6 md:py-16 col-span-4 row-start-1 md:col-start-1">
            <h1 class="md:text-h1 text-h3 font-bold font-sans leading-h-c text-black-900">الحساب الخاص بك</h1>
        </div>

        <div class="md:col-start-1 md:py-0 md:row-span-2 row-start-2 md:col-start-1 mt-6">
            <div class="w-full grid grid-cols-2 bg-white shadow md:shadow-lg md:place-items-center h-408px md:h-537px pt-3">
                <div class="mr-4 md:mr-0 md:col-span-2 md:pt-10">
                    <img src="../svgs/profile-placement.svg" alt="Profile Placement"
                         class="w-40px md:w-80px md:rounded-full">
                </div>
                <div class="flex-row flex justify-end md:hidden">
                    <div class="ml-4">
                        <button class="bg-transparent text-black-800 rounded-full py-1 pl-5 pr-4 flex items-center justify-between focus:outline-none text-base">
                            <p class="text-15px leading-8">قائمة</p>
                            <i class="icon-arrow-dropdown mr-2"></i>
                        </button>
                    </div>
                </div>
                <div class="hidden md:col-span-2 md:block -mt-2">
                    <p class="text-xl font-normal text-black-900 font-libre leading-tight">John Doe</p>
                </div>
                <div class="relative w-full md:block col-span-2 row-span-4">
                    <div class="col-span-2 row-span-2 w-full row-start-3">
                        <a href="#"><p
                                    class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">
                                الملف الشخصي</p></a>
                        <a href="#"><p
                                    class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">
                                البريد الإلكتروني والأمان</p></a>
                        <a href="#"><p
                                    class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">
                                اتبع</p></a>
                        <a href="#"><p
                                    class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans xl:h-18 text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full w-full">
                                ما قرأته</p></a>
                    </div>
                    <div class="w-full border-b border-black-400 mt-4 col-span-2"></div>
                    <div class="col-span-2 w-full pr-2 mt-4">
                        <button class="bg-transparent flex flex-row items-center justify-end focus:outline-none focus text-s-1 font-sans py-5">
                            <i class="icon-log-out text-24px ml-3"></i>
                            <p class="leading-8">الخروج من الحساب</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-start-3 bg-white pb-8 md:col-span-3 md:col-start-2 p-4">
            <div class="xl:grid-cols-3 md:grid-cols-2 grid grid-cols-1 md:gap-x-16px md:gap-y-27px place-items-center gap-y-6">
                <div class="flex flex-row items-center flex-wrap md:flex-nowrap xl:col-span-3 md:col-span-2 w-full">
                    <h4 class="text-s-1 md:text-h4 font-bold font-sans leading-h4 text-black-900 w-full">مؤلفو الصفا
                        الذين أتابعهم</h4>
                    <div class="flex flex-row w-full justify-end my-4 md:my-0 w-1/2">
                        <button class="flex flex-row items-center py-2">
                            <p class="md:text-15px text-base font-sans font-normal text-black-800">تابع المزيد من
                                المؤلفين</p>
                            <i class="icon-arrow_left text-s-1 mr-2"></i>
                        </button>
                    </div>
                </div>

                <div>
                    <div class="w-full object-cover relative">
                        <img src="../images/1.png" alt="">
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast Big Image"
                             class="w-48px absolute bottom-3 right-3">
                    </div>
                    <div class="flex flex-row items-center mt-4">
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-2">صحافية لبنانية</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500">Lebanon | من لبنان</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-h4 font-bold font-sans leading-h4 text-black-900">باسكال صوما</h4>
                    </div>
                    <div class="mt-4">
                        <button class="border-black-200 px-6 py-1 border-2 rounded-full flex flex-row ">
                            <p class="text-15px font-sans font-normal text-black-800">الغاء المتابعة</p>
                        </button>
                    </div>
                </div>

                <div>
                    <div class="w-full object-cover relative">
                        <img src="../images/1.png" alt="">
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast Big Image"
                             class="w-48px absolute bottom-3 right-3">
                    </div>
                    <div class="flex flex-row items-center mt-4">
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-2">صحافية لبنانية</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500">Lebanon | من لبنان</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-h4 font-bold font-sans leading-h4 text-black-900">باسكال صوما</h4>
                    </div>
                    <div class="mt-4">
                        <button class="border-black-200 px-6 py-1 border-2 rounded-full flex flex-row ">
                            <p class="text-15px font-sans font-normal text-black-800">الغاء المتابعة</p>
                        </button>
                    </div>
                </div>

                <div>
                    <div class="w-full object-cover relative">
                        <img src="../images/1.png" alt="">
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast Big Image"
                             class="w-48px absolute bottom-3 right-3">
                    </div>
                    <div class="flex flex-row items-center mt-4">
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-2">صحافية لبنانية</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500">Lebanon | من لبنان</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-h4 font-bold font-sans leading-h4 text-black-900">باسكال صوما</h4>
                    </div>
                    <div class="mt-4">
                        <button class="border-black-200 px-6 py-1 border-2 rounded-full flex flex-row ">
                            <p class="text-15px font-sans font-normal text-black-800">الغاء المتابعة</p>
                        </button>
                    </div>
                </div>

                <div>
                    <div class="w-full object-cover relative">
                        <img src="../images/1.png" alt="">
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast Big Image"
                             class="w-48px absolute bottom-3 right-3">
                    </div>
                    <div class="flex flex-row items-center mt-4">
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-2">صحافية لبنانية</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500">Lebanon | من لبنان</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-h4 font-bold font-sans leading-h4 text-black-900">باسكال صوما</h4>
                    </div>
                    <div class="mt-4">
                        <button class="border-black-200 px-6 py-1 border-2 rounded-full flex flex-row ">
                            <p class="text-15px font-sans font-normal text-black-800">الغاء المتابعة</p>
                        </button>
                    </div>
                </div>

                <div>
                    <div class="w-full object-cover relative">
                        <img src="../images/1.png" alt="">
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast Big Image"
                             class="w-48px absolute bottom-3 right-3">
                    </div>
                    <div class="flex flex-row items-center mt-4">
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-2">صحافية لبنانية</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500">Lebanon | من لبنان</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-h4 font-bold font-sans leading-h4 text-black-900">باسكال صوما</h4>
                    </div>
                    <div class="mt-4">
                        <button class="border-black-200 px-6 py-1 border-2 rounded-full flex flex-row ">
                            <p class="text-15px font-sans font-normal text-black-800">الغاء المتابعة</p>
                        </button>
                    </div>
                </div>

                <div>
                    <div class="w-full object-cover relative">
                        <img src="../images/1.png" alt="">
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast Big Image"
                             class="w-48px absolute bottom-3 right-3">
                    </div>
                    <div class="flex flex-row items-center mt-4">
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-2">صحافية لبنانية</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500">Lebanon | من لبنان</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-h4 font-bold font-sans leading-h4 text-black-900">باسكال صوما</h4>
                    </div>
                    <div class="mt-4">
                        <button class="border-black-200 px-6 py-1 border-2 rounded-full flex flex-row ">
                            <p class="text-15px font-sans font-normal text-black-800">الغاء المتابعة</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php
include "footer.php";
include "footer_after.php";
?>

</body>
</html>
