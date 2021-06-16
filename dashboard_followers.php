<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icons.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Dashboard Followers</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header.php'; ?>

<div class="h-2 w-full bg-white"></div>
<main class="md:container px-6 md:px-0 w-full bg-black-100 font-sans">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-y-6 gap-x-2% md:px-20">
        <div class="flex flex-row justify-center w-full py-6 md:py-12 md:pb-16 md:col-span-4">
            <h1 class="md:text-h1 text-h3 font-bold font-sans leading-h-c text-black-900">الحساب الخاص بك</h1>
        </div>

        <div class="w-full py-2.5 grid grid-cols-2 bg-white shadow md:col-start-1 md:place-items-center md:py-0 md:pt-12 md:px-5 md:row-span-2 md:mb-10 md:shadow-lg mt-6 h-537px">
            <div class="mr-4 md:mr-0 md:col-span-2">
                <img src="../svgs/profile-placement.svg" alt="Profile Placement" class="w-40px md:w-80px md:rounded-full">
            </div>
            <div class="flex-row flex justify-end md:hidden">
                <div class="ml-4">
                    <button class="bg-transparent text-black-800 rounded-full py-1 pl-5 pr-4 flex items-center justify-between focus:outline-none text-base" onclick="profileTabHandler()" >
                        <p class="text-15px leading-8">قائمة</p>
                        <i class="icon-arrow-dropdown mr-2"></i>
                    </button>
                </div>
            </div>
            <div class="hidden md:col-span-2 md:block ">
                <p class="text-xl font-normal text-black-900 font-libre leading-tight">John Doe</p>
            </div>
            <div class="relative w-full hidden md:block col-span-2 row-span-4 " id="profileTab" >
                <div class="col-span-2 md:block row-span-2 w-full row-start-3 mt-5">
                        <a href="/dashboard.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 text-red-800 font-bold bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">الملف الشخصي</p></a>
                        <a href="/dashboard_email.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">البريد الإلكتروني والأمان</p></a>
                        <a href="/dashboard_followers.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">اتبع</p></a>
                        <a href="/dashboard_my_reads.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans xl:h-18 text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full w-full">ما قرأته</p></a>
                </div>
            </div>
            
            <div class="col-span-2 hidden md:block w-full pr-2" id="profileExtension">
            <div class="w-full border-b border-black-400  col-span-2"></div>
                <button class="bg-transparent flex flex-row items-center justify-end focus:outline-none focus text-s-1 font-sans py-5" onclick="profileLougoutHandler()">
                    <i class="icon-log-out text-24px ml-3"></i>
                    <p class="leading-8">الخروج من الحساب</p>
                </button>
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
