<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles.css" rel="stylesheet">
    <link href="icons.css" rel="stylesheet">
    <title>Title Goes Here</title>
</head>
<body dir="rtl">
<?php include 'header.php'; ?>

<main class="px-16px md:px-offset-md w-full">
    <div id="wrapper" class="md:grid grid-cols-4 gap-x-2%">
        <div class="bg-transparent grid place-items-center py-6 md:py-16 col-span-4">
            <h1 class="md:text-h1 text-h3 font-bold font-sans leading-h-c text-black-900">الحساب الخاص بك</h1>
        </div>

        <div class="w-full py-2.5 grid grid-cols-2 bg-white shadow md:col-start-1 md:place-items-center md:py-0 md:pt-12 md:px-5 md:row-span-2
            md:mb-10 md:shadow-lg">
            <div class="mr-4 md:mr-0 md:col-span-2">
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
            <div class="hidden md:col-span-2 md:block -mt-4">
                <p class="text-xl font-normal text-black-900 font-libre leading-tight">John Doe</p>
            </div>
            <div class="relative w-full hidden md:block col-span-2 row-span-4">
                <div class="hidden col-span-2 md:block row-span-2 w-full  row-start-3">
                    <a href="#" class=""><p class="text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3">الملف الشخصي</p></a>
                    <a href="#"><p class="text-s-1 font-normal font-sans text-black-900 leading-32 mt-6 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3">البريد الإلكتروني والأمان</p></a>
                    <a href="#"><p class="text-s-1 font-normal font-sans text-black-900 leading-32 mt-6 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3">اتبع</p></a>
                    <a href="#"><p class="text-s-1 font-normal font-sans text-black-900 leading-32 mt-6 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3">ما قرأته</p></a>
                </div>
                <div class="w-full border-b border-black-400 top-56 hidden md:block col-span-2"></div>
            </div>
            <div class="col-span-2 hidden md:block w-full pr-2">
                <button class="bg-transparent flex flex-row items-center justify-end focus:outline-none focus text-s-1 font-sans">
                    <i class="icon-log-out text-24px ml-3"></i>
                    <p class="leading-8">الخروج من الحساب</p>
                </button>
            </div>
        </div>

        <div class="bg-white w-full flex flex-col justify-center items-center px-19px pt-19px pb-34px md:pb-52px mt-4.5 md:mt-0 shadow-lg md:col-start-2 md:col-end-5">
            <div class="w-full">
                <h4 class="text-h4 font-bold font-sans leading-h4 text-black-900 mb-10">صورة الملف الشخصي وصورة العنوان</h4>
            </div>
            <div class="bg-yellow-400 rounded w-full h-108px rounded border-2 border-black-200 relative h-108px">
                <div class="absolute right-4 bottom-2 rounded-full p-0.4 h-30px md:hidden">
                    <i class="icon-camera text-24px text-black-800"></i>
                </div>
                <div class="bg-transparent grid w-full h-full place-items-center hover:bg-gray-400 hidden md:grid">
                    <div class="flex-row flex">
                        <i class="icon-image text-24px text-white"></i>
                        <p class="text-s-1 font-normal font-sans text-black-900 leading-s1">تحديث صورة العنوان الخاصة بك</p>
                    </div>
                </div>
                <div class="absolute top-15 flex flex-row justify-center md:justify-start md:mr-10 md:top-16">
                    <div class="relative w-max pb-0.5 cursor-pointer flex">
                        <img src="../svgs/profile-placement.svg" alt="Profile Placement big" class="w-80px rounded-full p-1">
                        <i class="icon-camera text-24px absolute bottom-2 bg-white right-3 rounded-full p-0.5 md:hidden"></i> <!--DASHBOARD-HOVER-PAGE-22-WEB HOVER BUG-->
                        <div class="absolute top-0 h-full w-full flex flex-row justify-center items-center hidden md:flex">
                            <div class="w-full flex flex-row justify-center items-center">
                                <i class="icon-camera text-24px text-white rounded-full hover:shadow-inner-video p-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--FORM-INPUT-SECTION-->
        <!-- <div class="col-span-2 absolute top-400px shadow-inner-video w-full h-788px z-50">
            <div class="flex flex-col text-right w-full items-end pr-4.5">
                <div class="flex flex-row-reverse">
                    <input type="radio" name="" id="">
                    <img src="#" alt="#" class="mr-6">
                    <p class="mr-4">asdasda</p>
                </div>
                <div class="flex flex-row-reverse">
                    <input type="radio" name="" id="">
                    <img src="#" alt="#" class="mr-6">
                    <p class="mr-4">asdasda</p>
                </div>
                <div class="flex flex-row-reverse">
                    <input type="radio" name="" id="">
                    <img src="#" alt="#" class="mr-6">
                    <p class="mr-4">asdasda</p>
                </div>
                <div class="flex flex-row-reverse">
                    <input type="radio" name="" id="">
                    <img src="#" alt="#" class="mr-6">
                    <p class="mr-4">asdasda</p>
                </div>
                <div class="flex flex-row-reverse">
                    <input type="radio" name="" id="">
                    <img src="#" alt="#" class="mr-6">
                    <p class="mr-4">asdasda</p>
                </div>
            </div>
        </div> -->

        <div class="px-19px pt-4 bg-white mt-6 shadow-lg pb-10 col-start-2 col-end-5 md:grid md:grid-cols-3">
            <div class="md:col-start-1">
                <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">معلومات عنك</h4>
            </div>

            <div class="mt-12 md:col-start-1 md:row-start-2 md:pl-2">
                <div id="full-name" class="mb-12 md:px-0 text-right">
                    <label for="full-name--input" class="text-base font-sans md:pb-2 pr-1 leading-8 content-center">الاسم الكامل</label>
                    <input type="text" name="full-name" id="full-name--input" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl focus:border-black-800 focus:outline-none mt-4.5">
                </div>
            </div>

            <div class="mt-12 md:col-start-2 md:row-start-2 md:pl-2 md:pr-2">
                <div>
                    <div id="user-name" class="mb-12 text-right">
                        <label for="user-name--input" class="text-base font-sans pb-4 pr-1 leading-8 content-center">اسم المستخدم</label>
                        <input type="text" name="user-name" id="user-name--input" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl focus:border-black-800 focus:outline-none mt-4.5">
                    </div>
                </div>
            </div>

            <div class="md:col-start-3 md:row-start-2 md:flex md:flex-col md:justify-end md:pl-2 md:pr-2">
                <div id="user-country" class="mb-12 text-right">
                    <label for="user-country--select" class="text-base font-sans pb-4 pr-1 leading-8 content-center">البلد الذي أنت فيه</label>
                    <div class="relative mt-4.5">
                        <input name="user-country" id="user-country--select" type="text" class="border-2 h-h-i w-full rounded border-black-300 text-right text-xl focus:border-black-800 focus:outline-none">
                        <a href="#"><img src="../svgs/open-dialog.svg" alt="Open Dialog" class="absolute top-4 left-4 w-6"></a>
                    </div>
                </div>
            </div>

            <div class="flex w-full flex-row justify-end md:col-start-3 md:row-start-3">
                <button class="bg-black-300 text-gray-400 rounded-full py-1 px-6 flex items-center justify-between focus:outline-none text-base">
                    <p class="font-sans leading-8">حفظ</p>
                </button>
            </div>
        </div>

        <!--IMAGE-FOR-PLANS-->

        <div class="bg-white px-19px mt-7 pb-12 shadow-lg md:col-start-2 md:col-end-5 md:grid md:grid-cols-4">
            <div class="mb-12 pt-7 md:col-span-4 md:row-start-1">
                <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">نظرة عامة على الاشتراك</h4>
            </div>

            <div class="mb-9 md:col-start-1 md:row-start-2">
                <p class="text-15px font-bold font-sans text-black-900 leading-s2">الاشتراك الحالي</p>
            </div>

            <div class="grid grid-cols-2 relative md:col-span-3 md:row-start-2">
                <div class="col-start-1 row-start-1">
                    <p class="text-s-1 font-bold font-sans text-black-900 leading-s1">شهرياً</p>
                </div>

                <div class="col-start-1 row-start-2 mt-1">
                    <p class="text-base font-normal font-sans text-black-500 leading-snug">٨$ شهرياً</p>
                </div>

                <div class="col-start-2 row-span-2 flex flex-row justify-end items-end">
                    <div>
                        <button class="bg-yellow-800 text-black-800 rounded-full py-1 px-5 flex items-center justify-between focus:outline-none text-base">
                            <p class="font-sans leading-8 px-1.5">تغيير الاشتراك</p>
                        </button>
                    </div>
                </div>

                <div class="border-b border-black-400 absolute top-20 w-full"></div>
            </div>

            <div class="mt-12 md:col-start-1 md:row-start-3">
                <p class="text-15px font-bold font-sans text-black-900 leading-s2">تاريخ الدفع التالي</p>
            </div>

            <div class="mt-5 grid grid-cols-60-40 md:col-span-3 md:row-start-3 md:mt-10">
                <div class="col-start-1 row-start-1">
                    <p class="text-s-1 font-bold font-sans text-black-900 leading-s1">١٢ ايار ٢٠٢١</p>
                </div>

                <div class="col-start-1 row-start-2 mt-1">
                    <p class="text-base font-normal font-sans text-black-500 leading-snug">سيتم تجديد الدفع تلقائيًا</p>
                </div>

                <div class="flex flex-row justify-end items-end col-start-2 row-span-2">
                    <div>
                        <button class="bg-transparent text-black-800 rounded-full py-1 px-5 border-gray-300 border flex items-center justify-between focus:outline-none text-base">
                            <p class="font-sans leading-8 px-1.5 md:hidden">تاريخ الدفع</p>
                            <p class="font-sans leading-8 px-1.5 hidden md:block"> تاريخ دفع الفاتورة</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--PAYMENT-INFOS-->

        <div class="bg-white px-19px mt-7 pb-8 shadow-lg md:col-start-2 md:col-end-5">
            <div class="mb-14 pt-7 md:col-span-4 md:row-start-1">
                <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">معلومات الدفع</h4>
            </div>

            <div class="grid grid-cols-20-60-20 relative">
                <div class="col-start-1 col-end-3 md:col-end-2 row-start-1">
                    <p class="text-15px font-bold font-sans text-black-900 leading-s2">طريقة الدفع او السداد</p>
                </div>

                <div class="mt-4.5 col-span-2 row-start-2 md:col-start-2 md:row-start-1 md:mt-0">
                    <div class="flex-row flex pb-2">
                        <p class="text-base font-normal font-sans text-black-900 leading-snug ml-2">…. 5020 Expires 10/22</p>
                        <img src="../images/img-fi-mastercard.png" alt="Master Card Image">
                    </div>
                </div>

                <div class="col-start-3 row-span-2 flex flex-row justify-end items-end md:col-start-3 md:row-start-1">
                    <div>
                        <button class="bg-yellow-800 text-black-800 rounded-full py-1 px-6 flex items-center justify-between focus:outline-none text-base">
                            <p class="font-sans leading-8">تعديل</p>
                        </button>
                    </div>
                </div>
                <div class="absolute w-full border-b border-black-400 top-26 md:top-20"></div>
            </div>

            <div class="md:grid md:grid-cols-20-60-20 md:mt-18">
                <div class="mt-18 md:col-start-1 md:row-start-1 md:mt-0">
                    <p class="text-15px font-bold font-sans text-black-900 leading-s2">تفاصيل الفاتورة</p>
                </div>

                <div class="md:col-start-2 md:row-start-1">
                    <p class="text-xl font-normal text-black-900 font-libre leading-tight mt-5 md:mt-0">johndoe@gmail.com</p>
                    <p class="text-xl font-normal text-black-900 font-libre leading-tight mt-4">3333  Godfrey Street, Oregon,  Clackamas 97015</p>
                </div>

                <div class="flex flex-row justify-end mt-8 md:col-start-3 md:row-start-1">
                    <div>
                        <button class="bg-yellow-800 text-black-800 rounded-full py-1 px-6 flex items-center justify-between focus:outline-none text-base">
                            <p class="font-sans leading-8">تعديل</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--DISABLE-PLAN-->
        <div class="bg-white px-19px mt-7 pb-8 shadow-lg mb-16 md:col-start-2 md:col-end-5 md:grid md:grid-cols-70-30">
            <div class="mb-10 pt-7 md:col-span-2">
                <h4 class="md:text-h4 text-s-1 font-bold font-sans leading-h4 text-black-900">إلغاء الاشتراك</h4>
            </div>

            <div>
                <p class="md:text-s-1 text-p-16px font-normal font-sans text-black-900 leading-b-t-1">بعد الإلغاء ، ستتمكن من استخدام خدمة الصفا حتى نهاية فترة الفوترة الحالية. </p>
            </div>

            <div class="flex flex-row justify-end mt-8 md:mt-0">
                <div>
                    <button class="bg-transparent text-black-800 rounded-full py-1 px-5 border-gray-300 border flex items-center justify-between focus:outline-none text-base">
                        <p class="font-sans leading-8 px-1">إلغاء الاشتراك</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
include 'pre_footer.php';
include "footer.php";
include "footer_after.php";
?>

</body>
</html>
