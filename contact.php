<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="icons.css">

    <title>Contact</title>
</head>

<body dir="rtl">
<!--Header-->
<?php include 'header.php'; ?>
<!--heading-->
<div class="flex flex-row justify-center font-sans md:my-14">
    <h1 class=" text-h3 font-black mt-7 mb-5 md:text-h1">
        اتصل بنا
    </h1>
</div>


<div class="w-full md:container max-w-1400px">
    <div class="bg-black-100">
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-1 gap-1 mt-4 p-4 text-s-1 leading-9 md:pt-18 md:pb-8 md:pl-40 md:pr-6">
            <div class="flex items-center gap-2 ">
                <div>
                    مكتبنا في النتوورك, بلوك ا,بيروت, لبنان </div>
            </div>
            <div class="flex text-md flex-col md:flex-row items-start gap-x-6 md:row-start-2 md:col-start-1">
                <div class="flex flex-row items-center gap-x-2">
                    <div>
                        04 123 456
                    </div>
                    <i class="icon-phone text-24px"></i>
                </div>
                <div class="flex flex-row  items-center gap-x-2">
                    <div class="">
                        info@alsafanews.com
                    </div>
                    <i class="icon-mail text-24px"></i>
                </div>
            </div>
            <div class="flex flex-row md:row-start-1 md:row-end-3 md:col-start-2 md:justify-end md:items-start">
                <div class="flex flex-col justify-flex-end items-center">
                    <div class="hidden md:block">
                            اتبعنا
                        </div>
                    <div class="flex flex-row mt-4 items-center gap-x-4 pb-5">
                        <a href="#"><i class="icon-twitter text-24px"></i></a>
                        <a href="#"><i class="icon-instagram text-24px"></i></a>
                        <a href="#"><i class="icon-facebook-no-color text-24px"></i></a>
                        <a href="#"><i class="icon-youtube text-24px"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--heading 2-->
    <div class="px-3 font-sans container">
        <div class="flex flex-row justify-center md:justify-start">
            <div class="text-h4 md:py-3  font-bold mt-9 mb-2">
                تحتاج إلى مساعدة؟ أرسل طلبًا أدناه وسنبدأ العمل!
            </div>
        </div>
        <div class=" text-15px">
            يجب ملء كل شيء يحتوي على هذا الرمز "*"
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-x-8">
            <div class="col-span-2 md:col-start-1 md:col-end-2">
                <div class="mt-12 pb-5">
                    الإسم الأول*
                </div>
                <input type="text" class="w-full h-14 border-2 border-black-300 rounded-md ">
            </div>
            <div class="col-span-2 md:col-span-1">
                <div class="mt-12 pb-5">
                    إسم الشهرة*
                </div>
                <input type="text" class="w-full h-14 border-2 border-black-300 rounded-md ">
            </div>

            <div class="md:col-span-1 col-span-2 ">
                <div class="mt-12 pb-5">
                    البريد الإلكتروني*
                </div>
                <input type="text" class="w-full h-14 border-2 border-black-300 rounded-md  ">
            </div>
            <div class="col-span-2 md:col-span-1">
                <div class="mt-12 pb-5">
                    رقم الهاتف*
                </div>
                <input type="text" class="w-full h-14 border-2 border-black-300 rounded-md ">
            </div>

        </div>

        <div>
            <div class="mt-14 pb-3">
                الرسالة* </div>
            <input type="text" class="w-full h-72 border-2  border-black-300 rounded-md">
        </div>

        <div>
            <div class="mt-12 pb-5 text-15px">
                تحميل ملفات
            </div>
            <div class="w-full h-48 border-dashed border-black-300 border-2 flex flex-col justify-center bg-yellow-300">
                <p class="hidden md:flex flex-row justify-center text-s-1">أضف ملفات أو أسقط الملفات هنا</p>
                <div class="flex flex-row-reverse justify-center items-center gap-x-4 md:hidden">
                    <p class="text-bold text-s-1 flex flex-row justify-center">رفع ملف</p>
                    <i class="icon-attachment text-24px "></i>
                </div>
            </div>
        </div>

        <div class="flex flex-row justify-end my-14 pt-5 md:pb-20">
            <button
                class="bg-red-800 text-white rounded-full py-1 pl-4 pr-5 flex items-center justify-between hover:bg-red-700 focus:bg-red-600 focus:outline-none text-base font-sans">
                <p class="px-0.5 ml-2.5 leading-8">
                    إرسال
                </p>
            </button>
        </div>
    </div>
</div>

<div>
    <!--Pre-footer-->
    <?php include 'pre_footer.php'?>


    <!--footer-->
    <?php include 'footer.php'?>

</div>



</body>


</html>
