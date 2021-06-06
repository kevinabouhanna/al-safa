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

<div class="container ">
<div class="bg-white py-4 px-20 my-8 rounded shadow text-gray-800">
    <div class="text-xl font-bold text-center mt-4 mb-16">
        تسجيل الدخول إلى حسابك
    </div>
    <div class="mb-8">
        <label for="" class="cursor-pointer mb-1 block">البريد الإلكتروني</label>
        <input type="text" class="w-full border border-black-100 shadow rounded p-1">
    </div>
    <div class="mb-8">
        <label for="" class="cursor-pointer mb-1 block">كلمة المرور</label>
        <div class="relative">
            <input type="password" class="w-full border border-black-100 shadow rounded p-1">
            <i class="icon-visibility---off text-24px absolute left-3 bottom-0"></i>
        </div>
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
        <button class="text-lg shadow p-2 rounded w-full flex items-center justify-center gap-2">
            <i class="icon-mail"></i>
            تسجيل الدخول عبر البريد الإلكتروني
        </button>
        <button class="mt-4 text-lg shadow p-2 rounded w-full flex items-center justify-center gap-2">
            <img src="images/google.png" alt="" style="width: 24px;height: 24px">
            تسجيل الدخول باستخدام جوجل
        </button>
        <button class="text-lg mt-4 shadow p-2 rounded w-full flex items-center justify-center gap-2">
            <img src="images/facebook.png" alt="" style="width: 24px;height: 24px">
            تسجيل الدخول باستخدام الفيسبوك
        </button>
    </div>
    <div class="my-8 flex items-center justify-center w-full gap-2">

    </div>
    <div class="mt-8 flex items-center justify-between">
        <div></div>
        <a href="/" class="text-blue-700 underline">العودة الى الصفحة الرئيسية</a>
    </div>
</div>
</div>
<?php
include "footer_after.php";
?>

</body>
</html>
