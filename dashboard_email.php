<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./icons.css">
    <title>Dashboard_email</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header.php'; ?>

<!--MAIN-PART-->

<div class="h-2 w-full bg-white"></div>
<main class="md:container px-6 md:px-0 w-full bg-black-100 font-sans pb-7">
        <div class="md:grid grid-cols-4 gap-x-2% md:px-20" >
            <div class="bg-transparent grid place-items-center py-6 md:py-16 col-span-4">
                <h1 class="md:text-h1 text-h3 font-bold font-sans leading-h-c text-black-900">الحساب الخاص بك</h1>
            </div>

            <div class="w-full py-2.5 grid grid-cols-2 bg-white shadow md:col-start-1 md:place-items-center md:py-0 md:pt-12 md:px-5 md:row-span-2 md:mb-10 md:shadow-lg md:h-537px">
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
                <div class="relative w-full hidden md:block col-span-2 row-span-4" id="profileTab" >
                    <div class="col-span-2 md:block row-span-2 w-full row-start-3 mt-5">
                            <a href="/dashboard.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">الملف الشخصي</p></a>
                            <a href="/dashboard_email.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 text-red-800 font-bold bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">البريد الإلكتروني والأمان</p></a>
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

            <!--FORM-INPUT-SECTION-->

            <div class="px-19px pt-4 md:mt-0 bg-white mt-6 shadow-lg pb-10 col-start-2 col-end-5 md:grid md:grid-cols-3 md:pl-20">
                <div class="col-span-3">
                    <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">تغيير البريد الالكتروني</h4>
                </div>

                <div class="mt-12 col-span-3">
                    <div id="email" class=" text-right">
                        <label for="email--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">البريد الإلكتروني</label>
                        <div class="mt-3">
                            <input type="text" name="email" id="email--input" class="border-2 h-h-i w-full rounded-md border-black-300 text-right text-xl text-right  focus:border-black-800 focus:outline-none text-xl">
                        </div>
                    </div>
                </div>

                <div class="mt-12 md:col-span-3">
                    <div id="password" class="text-right">
                        <label for="password--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">كلمة المرور</label>
                        <div class="relative mt-3">     
                            <input type="password" name="password" id="password--input" class="border-2 h-h-i w-full rounded-md border-black-300 text-right text-xl focus:outline-none focus:border-black-800">
                        </div>
                    </div>
                </div>

                <div class="flex w-full flex-row justify-end col-start-3 mt-10 row-start-4">
                    <button class="bg-black-300 text-gray-400 rounded-full py-1 px-5 flex items-center justify-between focus:outline-none text-base">
                        <p class="font-sans leading-8 px-1.5">احفظ التغييرات</p>
                    </button>
                </div>
            </div>

            <!--IMAGE-FOR-PLANS-->

            <div class="px-19px pt-4 bg-white mt-6 shadow-lg pb-10 col-start-2 col-end-5 md:grid md:grid-cols-3 md:pl-20">
                <div class="col-span-3">
                    <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">تغيير كلمة المرور الخاصة بك</h4>
                </div>

                <div class="mt-12 col-span-3">
                    <div id="password" class="sm:px-0 text-right">
                        <label for="password--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">كلمة المرور الحالي</label>
                        <div class="relative mt-3">
                            <input type="password" name="password" id="password--input" class="border-2 h-h-i w-full rounded-md border-black-300 text-right text-xl focus:outline-none focus:border-black-800">
                            <i class="icon-visibility---off absolute left-4 top-4 text-24px"></i>
                        </div>
                    </div>
                </div>

                <div class="mt-12 md:col-span-3">
                    <div id="password" class="sm:px-0 text-right">
                        <label for="password--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">كلمة المرور الجديدة</label>
                        <div class="relative">
                            <input type="password" name="password" id="password--input" class="border-2 h-h-i w-full rounded-md border-black-300 text-right text-xl focus:outline-none focus:border-black-800">
                            <i class="icon-visibility---off absolute left-4 top-4 text-24px"></i>
                        </div>
                        <p class="mr-3.5 text-base text-right text-black-600 mt-2">يجب أن تتكون كلمة المرور من ٨ أحرف على الأقل</p>
                    </div>
                </div>

                <div class="flex w-full flex-row justify-end col-start-3 mt-10 row-start-4">
                    <button class="bg-black-300 text-gray-400 rounded-full py-1 px-5 flex items-center justify-between focus:outline-none text-base">
                        <p class="font-sans leading-8 px-1.5">احفظ التغييرات</p>
                    </button>
                </div>
            </div>
        </div>
    </main>

<div class="my-4"></div>

<?php
include "dashboard_profile_logout.php";
include "footer.php";
include "footer_after.php";
?>


</body>
</html>
