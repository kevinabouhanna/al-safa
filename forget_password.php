<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="./icons.css">
    <title>Forget password</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include 'header_auth.php'; ?>

<div class="container  max-w-900px">
<div class="rounded">
    <div class="bg-white py-4 px-3 md:my-8 my-4 rounded shadow text-gray-800 md:px-32 font-sans px-5 md:mt-18">
        <div class="flex flex-row justify-center">
            <h4 class="text-s-1 font-bold text-center mt-4 mb-12 md:text-h4 md:mt-10">لا تستطيع الدخول؟</h4>
        </div>
        <div class="md:mt-10">
            <div id="email" class="text-right">
                <label for="email--input" class="text-base font-sans pb-2 pr-1 leading-8 content-center">البريد الإلكتروني</label>
                <input type="text" name="email" id="email--input" class="border-2 h-h-i w-full rounded-md border-black-300 text-right  focus:border-black-800 focus:outline-none h-12 text-xl mt-4">
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
    <div class="w-full flex flex-row justify-center mt-10 pb-34 ">
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
