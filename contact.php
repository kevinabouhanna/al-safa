<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">

    <title>Contact</title>
</head>

<body dir="rtl">
<!--Header-->
<?php include 'header.php'; ?>
<!--heading-->
<div class="flex flex-row justify-center">
    <h1 class="p-3 text-4xl font-bold my-7">
        اتصل بنا
    </h1>
</div>


<div class="w-full md:container">
    <div class="bg-black-100">
        <div class="grid grid-cols-1 text-lg md:grid-cols-2 grid-rows-1 gap-1 mt-4 text-md p-4">
            <div class="flex items-center gap-2">
                <div>
                    مكتبنا في النتوورك, بلوك ا,بيروت, لبنان </div>
            </div>
            <div class="hidden md:flex flex-col items-center gap-2">
                <div class="">
                    اتبعنا
                </div>
                <div class="flex items-center gap-2">
                <i class="icon-twitter"></i>
                <i class="icon-instagram"></i>
                <i class="icon-facebook-no-color"></i>
                <i class="icon-youtube"></i>
                </div>

            </div>

            <div class="flex text-md md:hidden flex items-center gap-2">
                <div>
                    04 123 456
                </div>
                <i class="icon-mail text-grey-800"></i>

                <div class="hidden md:text-normal">
                    info@alsafanews.com
                </div>
                <i class="hidden md:icon-mail text-grey-800"></i>


            </div>
            <div class="flex items-center gap-2">
                <div class="hidden md:flex text-normal text-md">
                    04 123 456
                </div>
                <i class="icon-phone text-grey-800"></i>

                <div>
                    info@alsafanews.com
                </div>
                <i class="icon-mail text-grey-800"></i>

            </div>
            <div class="md:hidden flex flex-row-reverse items-center gap-2">
                <i class="icon-twitter"></i>
                <i class="icon-instagram"></i>
                <i class="icon-facebook-no-color"></i>
                <i class="icon-youtube"></i>
            </div>
        </div>
    </div>


    <!--heading 2-->
    <div class="px-3">
        <div class="flex flex-row justify-center md:justify-start">
            <div class="text-3xl md:py-3 md:text-xl font-bold mt-9 mb-2">
                تحتاج إلى مساعدة؟ أرسل طلبًا أدناه وسنبدأ العمل!
            </div>
        </div>
        <div class="text-md md:text-xs text-normal">
            يجب ملء كل شيء يحتوي على هذا الرمز "*"
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="col-span-2 md:col-start-1 md:col-end-2">
                <div class="mt-12 pb-5">
                    الإسم الأول*
                </div>
                <input type="text" class="w-full h-14 border-2 ">
            </div>
            <div class="col-span-2 md:col-span-1">
                <div class="mt-12 pb-5">
                    إسم الشهرة*
                </div>
                <input type="text" class="w-full h-14 border-2">
            </div>

            <div class="md:col-span-1 col-span-2 ">
                <div class="mt-12 pb-5">
                    البريد الإلكتروني*
                </div>
                <input type="text" class="w-full h-14 border-2 ">
            </div>
            <div class="col-span-1">
                <div class="mt-12 pb-5">
                    رقم الهاتف*
                </div>
                <input type="text" class="w-full h-14 border-2">
            </div>

        </div>

        <div>
            <div class="mt-12 pb-5">
                الرسالة* </div>
            <input type="text" class="w-full h-72 border-2 ">
        </div>

        <div>
            <div class="mt-12 pb-5">
                تحميل ملفات
            </div>
            <div class="w-full h-48 border-dashed border-2 bg-red-100 flex flex-col justify-center bg-yellow-300">
                <p class="hidden md:flex flex-row justify-center">أضف ملفات أو أسقط الملفات هنا</p>
                <div>
                    <p class="text-bold text-lg flex flex-row justify-center md:hidden">رفع ملف</p>
                    <i class="icon-attachment"></i>
                </div>
            </div>
        </div>

        <div class="flex flex-row justify-end my-14">
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
