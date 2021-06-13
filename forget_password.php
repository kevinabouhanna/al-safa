<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="./icons.css">
    <title>Document</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header_auth.php'; ?>
<div class="container  max-w-1400px">
<div class="pt-18 pb-14 px-4 rounded">
    <div class="w-full bg-white md:px-sign-in-p12 shadow-lg px-5">
        <div class="mt-10 flex flex-row justify-center pt-14">
            <h4 class="text-s-1 md:text-h4 font-bold font-sans leading-h4 text-black-900">لا تستطيع الدخول؟</h4>
        </div>
        <div class="mt-14">
            <div id="email" class="text-right">
                <label for="email--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">البريد الإلكتروني</label>
                <input type="text" name="email" id="email--input" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl text-right  focus:border-black-800 focus:outline-none text-xl mt-4">
            </div>
        </div>
        <div class="mt-10">
            <button class="bg-red-800 text-white rounded-full py-1 w-full rounded-full flex items-center justify-center focus:outline-none text-base">
                <p class="font-sans leading-8">إرسال ارتباط الاسترداد</p>
            </button>
        </div>
        <div class="w-full flex flex-row justify-between flex-wrap md:flex-nowrap">
            <div class="flex flex-row w-full md:mt-14 md:pb-10 w-full md:justify-start justify-center mt-10">
                <a href="#" class=""><p class="text-15px leading-normal border-blue-800 border-b w-max text-blue-800">اتصل بالدعم</p></a>
            </div>
            <div class="w-full">
                <div class="flex flex-row w-full md:mt-14 md:pb-10 w-full md:justify-end justify-center mt-10 pb-8">
                    <a href="/" class=""><p class="text-15px leading-normal border-blue-800 border-b w-max text-blue-800">العودة الى الصفحة الرئيسية</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-row justify-center mt-10">
        <div class="flex flex-row w-full w-full justify-center">
            <a href="login.php" class=""><p class="text-15px leading-normal border-blue-800 border-b w-max text-blue-800">العودة لتسجيل الدخول</p></a>
        </div>
    </div>
</div>
</div>
<?php
include "footer_after.php";
?>
</body>
</html>
