<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./icons.css">
    <title>Dashboard</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header.php'; ?>

<!--MAIN-PART-->

<main class="px-16px md:px-offset-md w-full">
        <div id="wrapper" class="md:grid grid-cols-4 gap-x-2%">
            <div class="bg-transparent grid place-items-center py-6 md:py-16 col-span-4">
                <h1 class="md:text-h1 text-h3 font-bold font-sans leading-h-c text-black-900">الحساب الخاص بك</h1>
            </div>

            <div class="md:col-start-1 md:py-0 md:row-span-2">
                <div class="w-full grid grid-cols-2 bg-white shadow md:shadow-lg md:place-items-center h-408px md:h-537px pt-3">
                    <div class="mr-4 md:mr-0 md:col-span-2 md:pt-10">
                        <img src="../svgs/profile-placement.svg" alt="Profile Placement" class="w-40px md:w-80px md:rounded-full">
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
                            <a href="#"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 w-full">الملف الشخصي</p></a>
                            <a href="#"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 w-full">البريد الإلكتروني والأمان</p></a>
                            <a href="#"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 w-full">اتبع</p></a>
                            <a href="#"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 w-full">ما قرأته</p></a>
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

            <!--FORM-INPUT-SECTION-->

            <div class="px-19px pt-4 md:mt-0 bg-white mt-6 shadow-lg pb-10 col-start-2 col-end-5 md:grid md:grid-cols-3">
                <div class="col-span-3">
                    <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">تغيير البريد الالكتروني</h4>
                </div>

                <div class="mt-12 col-span-3">
                    <div id="email" class=" text-right">
                        <label for="email--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">البريد الإلكتروني</label>
                        <div class="mt-3">
                            <input type="text" name="email" id="email--input" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl text-right  focus:border-black-800 focus:outline-none text-xl">
                        </div>
                    </div>
                </div>

                <div class="mt-12 md:col-span-3">
                    <div id="password" class="text-right">
                        <label for="password--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">كلمة المرور</label>
                        <div class="relative mt-3">     
                            <input type="password" name="password" id="password--input" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl focus:outline-none focus:border-black-800">
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

            <div class="px-19px pt-4 bg-white mt-6 shadow-lg pb-10 col-start-2 col-end-5 md:grid md:grid-cols-3">
                <div class="col-span-3">
                    <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">تغيير كلمة المرور الخاصة بك</h4>
                </div>

                <div class="mt-12 col-span-3">
                    <div id="password" class="sm:px-0 text-right">
                        <label for="password--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">كلمة المرور الحالي</label>
                        <div class="relative mt-3">
                            <input type="password" name="password" id="password--input" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl focus:outline-none focus:border-black-800">
                            <i class="icon-visibility---off absolute left-4 top-4 text-2xl"></i>
                        </div>
                    </div>
                </div>

                <div class="mt-12 md:col-span-3">
                    <div id="password" class="sm:px-0 text-right">
                        <label for="password--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">كلمة المرور الجديدة</label>
                        <div class="relative">
                            <input type="password" name="password" id="password--input" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl focus:outline-none focus:border-black-800">
                            <i class="icon-visibility---off absolute left-4 top-4 text-2xl"></i>
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
include "footer.php";
include "footer_after.php";
?>


</body>
</html>
