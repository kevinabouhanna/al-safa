<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles.css" rel="stylesheet">
    <link href="icons.css" rel="stylesheet">
    <title>Title Goes Here</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header_auth.php'; ?>

<div class="container max-w-900px pt-5 pb-20">
<div class="bg-white py-4 xl:px-20 my-8 rounded text-gray-800 px-6">
    <div class="text-xl md:text-h4 font-bold text-center mt-10 mb-16">
        تسجيل الدخول إلى حسابك
    </div>
    <div class="mb-12">
        <label for="" class="cursor-pointer mb-5 block">اسمك الكامل</label>
        <input type="text" class="w-full border border-black-400 rounded p-1 h-14">
    </div>
    <div class="mb-12">
        <label for="" class="cursor-pointer mb-5 block">البريد الإلكتروني</label>
        <input type="text" class="w-full border border-black-400 rounded p-1 h-14">
    </div>
    <div class="mb-12">
        <label for="" class="cursor-pointer mb-5 block">كلمة المرور</label>
        <div class="relative">
            <input type="password" class="w-full border border-black-400 rounded p-1 h-14">
            <i class="icon-visibility---off text-24px absolute left-3 bottom-0"></i>
        </div>
        <div class="text-sm text-black-600 mt-2 mb-6">
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
    <div class="my-8 text-center text-xl font-bold">
        أو
    </div>
    <div>
        <button class="text-lg shadow p-2 rounded w-full flex items-center justify-center gap-2 mt-3">
            <img src="images/google.png" alt="" style="width: 24px;height: 24px">
            تسجيل الدخول باستخدام جوجل
        </button>
        <button class="text-lg mt-4 shadow p-2 rounded w-full flex items-center justify-center gap-2 mt-3">
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
    <div class="mt-8 flex items-center justify-between flex-wrap">
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
