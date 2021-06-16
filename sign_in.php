<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles.css" rel="stylesheet">
    <link href="icons.css" rel="stylesheet">
    <title>Sign in</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header_auth.php'; ?>

<div class="container max-w-900px">
<div class="bg-white py-4 px-3 md:my-8 my-4 rounded shadow text-gray-800 md:px-32 font-sans px-5 md:mt-18">
    <div class="text-s-1 font-bold text-center mt-4 mb-12 md:text-h4 md:mt-10">
        تسجيل الدخول إلى حسابك
    </div>
    <div class="mb-8 md:mt-18">
        <label for="" class="cursor-pointer mb-3 block">البريد الإلكتروني</label>
        <input type="text" class="w-full border-2 border-black-300 rounded-lg p-1 h-14">
    </div>
    <div class="mb-8 md:mt-12">
        <label for="" class="cursor-pointer mb-3 block">كلمة المرور</label>
        <div class="relative">
            <input type="password" class="w-full border-2 border-black-300 rounded-lg p-1 h-14">
            <i class="icon-visibility---off text-24px absolute left-5 bottom-3"></i>
        </div>
    </div>
    <div class="mt-8 md:mt-12 flex items-center justify-end mb-8">
        <a href="/" class="text-blue-700 underline text-15px">لا تستطيع الدخول؟</a>
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
        <button class="text-base md:text-s-1 shadow-md p-2 rounded w-full flex items-center justify-center gap-2 md:gap-4 flex flex-row jutify-end">
            <i class="icon-mail text-24px"></i>
            تسجيل الدخول عبر البريد الإلكتروني
        </button>
        <button class="mt-4 md:pl-12 text-base md:text-s-1 shadow-md p-2 rounded w-full flex items-center justify-center gap-2 md:gap-4  flex flex-row jutify-end">
            <img src="images/google.png" alt="" style="width: 24px;height: 24px">
            تسجيل الدخول باستخدام جوجل
        </button>
        <button class="text-base mt-4 md:text-s-1 shadow-md p-2 rounded w-full flex items-center justify-center gap-2  md:gap-4 flex flex-row jutify-end">
            <img src="images/facebook.png" alt="" style="width: 24px;height: 24px">
            تسجيل الدخول باستخدام الفيسبوك
        </button>
    </div>
    <div class="mt-5 md:mt-16    md:mb-4 flex items-center md:justify-end justify-center">
        <a href="/" class="text-blue-700 underline text-15px">العودة الى الصفحة الرئيسية</a>
    </div>
</div>
</div>
<?php
include "footer_after.php";
?>

</body>
</html>
