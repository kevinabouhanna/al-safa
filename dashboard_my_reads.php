<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icons.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Dashboard my reads</title>
</head>
<body dir="rtl" class="bg-black-100">
<?php include "header.php"; ?>

<div class="h-2 w-full bg-white"></div>
<main class="xl:container px-6 md:px-0 w-full bg-black-100 font-sans md:pb-20 pb-16 ">
    <div class="grid grid-cols-1 md:gap-x-2% md:grid-cols-4 gap-y-6 xl:px-20">
        <div class="flex flex-row justify-center w-full py-6 md:pt-12 md:pb-4 md:col-span-4">
            <h1 class="md:text-h1 text-h3 font-bold font-sans leading-h-c text-black-900">الحساب الخاص بك</h1>
        </div>

        <div class="md:col-start-1 md:py-0 md:row-span-2 row-start-2 md:col-start-1 mt-6">
            <div class="w-full grid grid-cols-2 bg-white shadow md:shadow-lg md:place-items-center py-2 md:shadow-lg md:h-537px">
            <div class="mr-4 md:mr-0 md:col-span-2 ">
                <img src="./svgs/profile-placement.svg" alt="Profile Placement" class="w-40px md:w-80px md:rounded-full">
            </div>
                <div class="flex-row flex justify-end md:hidden">
                <div class="ml-4">
                    <button class="bg-transparent text-black-800 rounded-full py-1 pl-5 pr-4 flex items-center justify-between focus:outline-none text-base" onclick="profileTabHandler()" >
                        <p class="text-15px leading-8">قائمة</p>
                        <i class="icon-arrow-dropdown mr-2"></i>
                    </button>
                </div>
            </div>
                <div class="hidden md:col-span-2 md:block -mt-2">
                    <p class="text-xl font-normal text-black-900 font-libre leading-tight">John Doe</p>
                </div>
                <div class="relative w-full hidden md:block col-span-2 row-span-4 " id="profileTab" >
                <div class="col-span-2 md:block row-span-2 w-full row-start-3 mt-5">
                        <a href="/dashboard.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">الملف الشخصي</p></a>
                        <a href="/dashboard_email.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">البريد الإلكتروني والأمان</p></a>
                        <a href="/dashboard_followers.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans text-black-900 leading-32 hover:text-red-800 hover:font-bold hover:bg-red-100 px-3 h-18 md:h-full xl:h-18 w-full">اتبع</p></a>
                        <a href="/dashboard_my_reads.php"><p class="flex flex-col justify-center text-p-16px md:text-s-1 font-normal font-sans xl:h-18 text-black-900 leading-32 text-red-800 font-bold bg-red-100 px-3 h-18 md:h-full w-full">ما قرأته</p></a>
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
        </div>
        <div class="row-start-3 bg-white grid md:grid-cols-45-55 grid-col-1 gap-x-6 p-5 md:col-start-2 md:col-end-5 md:grid-row-2 pb-14 shadow-md md:pl-14">
            <div class="md:col-span-2  col-start-1">
                <h4 class="text-s-1 md:text-h4 font-bold font-sans leading-h4 text-black-900">المقالات التي قرأتها</h4>
            </div>
            <div class="md:col-span-2 mt-6 pb-5 col-start-1">
                <p class="text-15px font-normal font-sans text-black-900 leading-s2">اليوم</p>
            </div>
            <div class="flex flex-row col-start-1">
                <div class=" w-full flex-row flex items-center">
                    <div class="relative w-full">
                        <img src="../images/1.png " alt="" class="object-cover w-full md:h-80">
                        <div class="h-2 absolute bottom-0 right-0 z-10 bg-blue-300 w-full"></div>
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast icon" class="absolute bottom-2 right-2 rounded-lg w-10 md:w-auto">
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:col-start-2 justify-center  col-start-1 pt-3 md:pt-0">
            <div class="flex flex-row items-center justify-between md:justify-start">
                    <div class="flex flex-row items-center">
                        <div class="w-6 h-h-0.5 bg-black-700 ml-3"></div>
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-3">بالعربي</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500 ml-5">اذار ٣،  ٢٠٢١ </p>
                        </div>
                    <i class="icon-bookmark_border text-24px"></i>
                </div>
                <div class="mt-5">
                    <h4 class="text-s-1 md:text-h4 font-bold font-sans leading-h4 text-black-900">جامعو خردة قاصرون ينبشون كنز لبنان…</h4>
                </div>
                <div class="mt-5">
                    <p class="md:text-s-1 text-p-16px font-normal font-sans text-black-900 leading-b-t-1">في خطوة فاجأت جميع المعنيّين بالشأن السياسيّ، بمن فيهم الكتائبيّون أنفسهم، أعلن نائب المتن ورئيس حزب…</p>
                </div>
                <div class="flex flex-row mt-8">
                    <button class="flex flex-row bg-black-100 py-1 pl-4 pr-1 items-center rounded-full">
                        <i class="icon-play text-24px text-red-800 ml-3"></i>
                        <p class="text-15px text-black-800 leading-6 font-sans">٧ دقائق للإستماع</p>
                    </button>
                    <button class="rounded-full bg-transparent mr-4">
                        <p class="text-15px text-red-800 leading-6 font-sans">اقرأ أكثر</p>
                    </button>
                </div>
            </div>
            <div class="md:col-span-2 h-14 w-90% bg-white col-start-1"></div>

            <div class="flex flex-row col-start-1">
                <div class=" w-full flex-row flex items-center">
                    <div class="relative w-full">
                        <img src="../images/1.png " alt="" class="object-cover w-full md:h-80">
                        <div class="h-2 absolute bottom-0 right-0 z-10 bg-blue-300 w-full"></div>
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast icon" class="absolute bottom-2 right-2 rounded-lg w-10 md:w-auto">
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:col-start-2 justify-center col-start-1 pt-3 md:pt-0">
            <div class="flex flex-row items-center justify-between md:justify-start">
                    <div class="flex flex-row items-center">
                        <div class="w-6 h-h-0.5 bg-black-700 ml-3"></div>
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-3">بالعربي</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500 ml-5">اذار ٣،  ٢٠٢١ </p>
                        </div>
                    <i class="icon-bookmark_border text-24px"></i>
                </div>
                <div class="mt-5">
                    <h4 class="text-s-1 md:text-h4 font-bold font-sans leading-h4 text-black-900">جامعو خردة قاصرون ينبشون كنز لبنان…</h4>
                </div>
                <div class="mt-5">
                    <p class="md:text-s-1 text-p-16px font-normal font-sans text-black-900 leading-b-t-1">في خطوة فاجأت جميع المعنيّين بالشأن السياسيّ، بمن فيهم الكتائبيّون أنفسهم، أعلن نائب المتن ورئيس حزب…</p>
                </div>
                <div class="flex flex-row mt-8">
                    <button class="flex flex-row bg-black-100 py-1  pl-4 pr-1 items-center rounded-full">
                        <i class="icon-play text-24px text-red-800 ml-3"></i>
                        <p class="text-15px text-black-800 leading-6 font-sans">٧ دقائق للإستماع</p>
                    </button>
                    <button class="rounded-full bg-transparent">
                        <p class="text-15px text-red-800 leading-6 font-sans mr-4">اقرأ أكثر</p>
                    </button>
                </div>
            </div>

            <div class="md:col-span-2 h-14 w-90% bg-white col-start-1"></div>

            <div class="md:col-span-2 pb-4 col-start-1">
                <p class="text-15px font-normal font-sans text-black-900 leading-s2">قائمة القراءة الأخيرة</p>
            </div>

            <div class="flex flex-row col-start-1">
                <div class=" w-full flex-row flex items-center">
                    <div class="relative w-full">
                        <img src="../images/1.png " alt="" class="object-cover w-full md:h-80">
                        <div class="h-2 absolute bottom-0 right-0 z-10 bg-blue-300 w-full"></div>
                        <img src="../svgs/podcast-2-big.svg" alt="Podcast icon" class="absolute bottom-2 right-2 rounded-lg w-10 md:w-auto">
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:col-start-2 justify-center col-start-1 pt-3 md:pt-0">
                <div class="flex flex-row items-center justify-between md:justify-start">
                    <div class="flex flex-row items-center">
                        <div class="w-6 h-h-0.5 bg-black-700 ml-3"></div>
                        <p class="text-15px font-normal font-sans text-black-900 leading-s2 ml-3">بالعربي</p>
                        <p class="text-base font-normal font-sans leading-h4 text-gray-500 ml-5">اذار ٣،  ٢٠٢١ </p>
                        </div>
                    <i class="icon-bookmark_border text-24px"></i>
                </div>
                <div class="mt-5">
                    <h4 class="text-s-1 md:text-h4 font-bold font-sans leading-h4 text-black-900">جامعو خردة قاصرون ينبشون كنز لبنان…</h4>
                </div>
                <div class="mt-5">
                    <p class="md:text-s-1 text-p-16px font-normal font-sans text-black-900 leading-b-t-1">في خطوة فاجأت جميع    المعنيّين بالشأن السياسيّ، بمن فيهم الكتائبيّون أنفسهم، أعلن نائب المتن ورئيس حزب…</p>
                </div>
                <div class="flex flex-row mt-8">
                    <button class="flex flex-row bg-black-100 py-1 pl-4 pr-1 items-center rounded-full">
                        <i class="icon-play text-24px text-red-800 ml-3"></i>
                        <p class="text-15px text-black-800 leading-6 font-sans">٧ دقائق للإستماع</p>
                    </button>
                    <button class="rounded-full bg-transparent">
                        <p class="text-15px text-red-800 leading-6 font-sans mr-4">اقرأ أكثر</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "footer.php";
include "footer_after.php";
?>
</body>
</html>
