<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles.css" rel="stylesheet">
    <link href="icons.css" rel="stylesheet">
    <title>Sign up</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header_auth.php'; ?>

<div class="container max-w-900px ">
<div class="bg-white py-4 px-3 md:my-8 my-4 rounded shadow text-gray-800 md:px-32 font-sans px-5 md:mt-18">
    <div class="text-s-1 font-bold text-center mt-4 mb-12 md:text-h4 md:mt-10">
        تسجيل الدخول إلى حسابك
    </div>
    <div class="mb-8 md:mt-18">
        <label for="" class="cursor-pointer mb-5 block">اسمك الكامل</label>
        <input type="text" class="w-full border-2 border-black-300 rounded-lg p-1 h-14">
    </div>
    <div class="mb-12">
        <label for="" class="cursor-pointer mb-5 block">البريد الإلكتروني</label>
        <input type="text" class="w-full border-2 border-black-300 rounded-lg p-1 h-14">
    </div>
    <div class="mb-12">
        <label for="" class="cursor-pointer mb-5 block">كلمة المرور</label>
        <div class="relative">
            <input type="password" class="w-full border-2 border-black-300 rounded-lg p-1 h-14">
            <i class="icon-visibility---off text-24px absolute left-4 bottom-3"></i>
        </div>
        <div class="text-sm text-black-600 mt-4 mb-6">
            يجب أن تتكون كلمة المرور من ٨ أحرف على الأقل
        </div>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-black-200 h-1"></div>
            <div class="bg-black-200 h-1"></div>
            <div class="bg-black-200 h-1"></div>
            <div class="bg-black-200 h-1"></div>
            <div class="bg-black-200 h-1"></div>
        </div>
    </div>
    <div class="mb-8 flex items-center gap-2">
        <input type="checkbox" class="border-6">
        نعم أرسل لي الأخبار والنشرة الإخبارية من الصفا
    </div>
    <div class="mt-2">
        <button class="bg-black-300 text-black-500 w-full p-2 rounded-full">
            تسجيل الدخول
        </button>
    </div>
    <div class="my-8 text-center text-15px font-bold md:text-s-1">
        أو
    </div>
    <div class="flex flex-col gap-y-1">
    <button class="mt-4 md:pl-12 text-base md:text-s-1 shadow-md p-2 rounded w-full flex items-center justify-center gap-2 md:gap-4  flex flex-row jutify-end">
            <img src="images/google.png" alt="" style="width: 24px;height: 24px">
            تسجيل الدخول باستخدام جوجل
        </button>
        <button class="text-base mt-4 md:text-s-1 shadow-md p-2 rounded w-full flex items-center justify-center gap-2  md:gap-4 flex flex-row jutify-end">
            <img src="images/facebook.png" alt="" style="width: 24px;height: 24px">
            تسجيل الدخول باستخدام الفيسبوك
        </button>
    </div>
    <div class="my-8 flex items-center justify-center w-full gap-2 flex-wrap">
        بالتسجيل ، أنا أقبل
        <a href="#" class="text-blue-700 underline">شروط خدمة الصفا</a>
        وأقر
        <a href="#" class="text-blue-700 underline">بسياسة الخصوصية</a>
        .
    </div>
    <div class="mt-8 flex items-center md:justify-between justify-center flex-wrap">
        <a href="/login.php" class="text-blue-700 underline">لديك حساب الصفا؟ تسجيل الدخول</a>
        <a href="/" class="text-blue-700 underline mt-2 md:mt-0">العودة الى الصفحة الرئيسية</a>
    </div>
</div>
</div>
<?php
include "footer_after.php";
?>

</body>
</html>
