<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="icons.css">

    <title>Modal</title>
</head>

<body dir="rtl">
<div class="w-full z-50 fixed md:top-2/4 top-1/4 left-0 right-0 shadow-outter-dash p-0 h-full flex flex-row justify-center bg-black-100">
    <div class="w-full h-2/4  flex flex-col justify-center max-w-1400px">
        <div class="grid grid-cols-2 content-center px-5 lg:px-0">
            <div class="grid col-span-2 lg:col-span-1 mb-10 lg:mb-0 ">
                <div class="flex flex-col justify-start">
                    <h1 class="p-3 md:text-h1 text-s-1 font-bold my-7">
                    اقرأ هذه القصة مجاناً
                    </h1>
                    <p class="text-s-1">
                    لمتابعة القراءة بدون اشتراك ، يرجى إنشاء حساب الصفا.
                    </p>
                </div>
            </div>
            <div class="grid lg:col-start-2 lg:col-end-3 lg:justify-end justify-center row-start-2 lg:row-start-1 col-span-2">
                <div class="grid grid-col-1 gap-y-3">
                    <button class="bg-white text-lg h-20 shadow p-2 rounded w-full flex items-center justify-center gap-2 px-12">
                        <i class="icon-mail"></i>
                           تسجيل الدخول عبر البريد الإلكتروني
                    </button>
                    <button class="bg-white h-20 text-lg shadow p-2 rounded w-full flex items-center justify-center gap-2">
                        <img src="images/google.png" alt="" style="width: 24px;height: 24px">
                    تسجيل الدخول باستخدام جوجل
                    </button>
                    <button class="bg-white text-lg h-20 shadow p-2 rounded w-full flex items-center justify-center gap-2">
                        <img src="images/facebook.png" alt="" style="width: 24px;height: 24px">
                    تسجيل الدخول باستخدام الفيسبوك
                    </button>
                    <div class="flex items-center justify-center mt-7">
                        <a href="/" class="text-blue-700 underline">لديك حساب الصفا؟ تسجيل الدخول</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>