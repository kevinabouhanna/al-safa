<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">

    <title>About</title>
</head>

<body dir="rtl">

<!--Header-->
<?php include 'header.php'; ?>


<!--heading-->
<div class="flex flex-row justify-center md:my-14">
    <h1 class="p-3 text-3xl md:text-h1 font-bold my-5">
        هويتنا
    </h1>
</div>

<!--Image with texts and paragraphes under it-->
<div class="container max-w-1400px">
    <div>
        <img src="./images/1.png" alt="" class="mb-6">
    </div>
    <div class="mb-6 space-y-5 text-16px md:text-s-1 md:mt-10 mt-5 ">
        <p class=" text-16px tracking-wide leading-9">
            في الليلة الأولى في منزلها بعد رجوعها من المستشفى، توقفت جدتي عن سؤالي مراراً وتكراراً بالفرنسية، بين
            نوبات الألم الذي يعتصرها، “ماذا فعلتُ؟”.
        </p>
        <p class="mb-4 text-16px  leading-9">
            تبلغ جدتي دنيس 82 سنة، وهي في المراحل المتأخرة من مرض الزهايمر، ما يعني أنه لم يعد في إمكانها تكوين
            ذكريات جديدة. في الصيف الماضي -من المستحيل تحديد الوقت على وجه الدقة- تعثرت جدتي وانكسرت إحدى فقرات
            ظهرها. لكنها نسيت حدوث ذلك على الفور، وبقي الألم دليلاً على ذاك السقوط. احتاجت عائلتي أسابيع، وزيارتين
            إلى المستشفى، قبل أن تفهم السبب وراء امتناعها عن الأكل وملازمتها الفراش.

        </p>

        <p class="mb-4 text-16px tracking-wide leading-9">
            استعداداً لخروجها الثاني من المستشفى، سافرت إلى فرنسا من أجل رعايتها. عندما وصلت إلى الشقة التي تعيش
            فيها بمفردها، لم أكن مهيأة تماماً للمدى الذي قد يزيد به مرض الزهايمر معاناتها.

        </p>

        <p class="mb-4 text-16px tracking-wide leading-9">
            تكاد حنجرة جدتي تنخلع من مكانها مع كل نفس، إضافة إلى تأوهها خلال نومها. وعندما أحاول حثها على القيام من
            الفراش لتناول الطعام، تدخل في نوبات غضب طفولية وتضربني بيديها وقدميها. وقد أُصيبت بسعال شديد للغاية
            لدرجة أنه قد يهيأ لمن في غرفة بعيدة أنها تتقيأ! وهو ما يتحول أحياناً إلى قيء بالفعل بينما يحاول جسدها
            طرد الألم بعيداً. لم تعد تميز الليل من النهار وأصبحت تتوه داخل منزلها، بل وحتى في غرفة نومها.
        </p>
    </div>

    <div class="mt-9 md:mt-28">
        <h1 class="text-3xl md:text-h1 font-bold">
            فريقنا
        </h1>
    </div>
    <div class="w-full h-h-1px bg-black-400 mt-8"></div>

    <!--Author Cards-->
    <div class="mt-8 mb-14 md:mt-16 md:mb-20">
        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-3 gap-y-6">
            <div>
                <div class="flex justify-center">
                    <img src="images/1.png" alt="" class="h-56 md:h-80 object-center">
                </div>
                <div class="flex flex-col flex-wrap mt-2">

                    <h1 class="text-h4 md:text-h4 my-3 md:mt-4 text-black font-bold flex justify-center">بسكال صوما</h1>
                    <h2 class="flex justify-center mb-3 text-s-1">شريك مؤسّس ورئيسة مجلس إدارة</h2>
                </div>
                <div class="flex flex-row justify-center mt-2">
                    <button
                        class="ml-2 bg-transparent text-black-900 rounded-full py-1 pl-2 pr-3 border-gray-300 border flex items-center justify-between hover:bg-yellow-50 focus:bg-yellow-100 focus:outline-none text-base font-sans">
                        <i class="icon-mail text-18px ml-2"></i>
                        <p class="ml-2.5 leading-7">
                            اتصل
                        </p>
                    </button>

                    <button
                        class="bg-transparent text-black-900 rounded-full py-1 pl-2 pr-3 border-gray-300 border flex items-center justify-between hover:bg-yellow-50 focus:bg-yellow-100 focus:outline-none text-base font-sans">
                        <i class="icon-twitter text-18px ml-2"></i>
                        <p class="ml-2.5 leading-7">
                            تابعني على تويتر
                        </p>
                    </button>

                </div>
            </div>


            <div>
                <div class="flex justify-center mt-3">
                    <img src="images/1.png" alt="" class="h-56 md:h-80 object-center">
                </div>
                <div class="flex flex-col flex-wrap mt-2">

                    <h1 class="text-h4 md:text-h4 my-3 md:mt-4 text-black font-bold flex justify-center">بسكال صوما</h1>
                    <h2 class="flex justify-center mb-3 text-s-1">شريك مؤسّس ورئيسة مجلس إدارة</h2>
                </div>
                <div class="flex flex-row justify-center mt-2">
                    <button
                        class="ml-2 bg-transparent text-black-900 rounded-full py-1 pl-2 pr-3 border-gray-300 border flex items-center justify-between hover:bg-yellow-50 focus:bg-yellow-100 focus:outline-none text-base font-sans">
                        <i class="icon-mail text-18px ml-2"></i>
                        <p class="ml-2.5 leading-7">
                            اتصل
                        </p>
                    </button>

                    <button
                        class="bg-transparent text-black-900 rounded-full py-1 pl-2 pr-3 border-gray-300 border flex items-center justify-between hover:bg-yellow-50 focus:bg-yellow-100 focus:outline-none text-base font-sans">
                        <i class="icon-twitter text-18px ml-2"></i>
                        <p class="ml-2.5 leading-7">
                            تابعني على تويتر
                        </p>
                    </button>

                </div>
            </div>



            <div>
                <div class="flex justify-center mt-3">
                    <img src="images/1.png" alt="" class="h-56 md:h-80 object-center">
                </div>
                <div class="flex flex-col flex-wrap mt-2">

                    <h1 class="text-h4 md:text-h4 my-3 md:mt-4 text-black font-bold flex justify-center">بسكال صوما</h1>
                    <h2 class="flex justify-center mb-3 text-s-1">شريك مؤسّس ورئيسة مجلس إدارة</h2>
                </div>
                <div class="flex flex-row justify-center mt-2">
                    <button
                        class="ml-2 bg-transparent text-black-900 rounded-full py-1 pl-2 pr-3 border-gray-300 border flex items-center justify-between hover:bg-yellow-50 focus:bg-yellow-100 focus:outline-none text-base font-sans">
                        <i class="icon-mail text-18px ml-2"></i>
                        <p class="ml-2.5 leading-7">
                            اتصل
                        </p>
                    </button>

                    <button
                        class="bg-transparent text-black-900 rounded-full py-1 pl-2 pr-3 border-gray-300 border flex items-center justify-between hover:bg-yellow-50 focus:bg-yellow-100 focus:outline-none text-base font-sans">
                        <i class="icon-twitter text-18px ml-2"></i>
                        <p class="ml-2.5 leading-7">
                            تابعني على تويتر
                        </p>
                    </button>

                </div>
            </div>



            </div>

        </div>


    </div>

    <!--Title with link-->
    <div class="text-center justify-between relative w-full md:h-96 h-40">
        <div class="mt-14 md:mt-40">
            <h1 class="text-3xl md:text-h1 font-bold">
                ١٣٢ مليون قارئ و يتزايد
            </h1>

        </div>

        <div class="mt-7 md:mt-14">
            <p class="text-blue-800">
                <a href="#" class=" border-b border-blue-800 md:border-blue-600">
                    انضم وكن جزءًا من عائلتنا
                </a>

            </p>

        </div>
        <div class="absolute bottom-0 left-0 right-0">
            <div class="w-full">
                    <img src="../svgs/about-us-section.svg" alt="About Us Image" class="w-full">
            </div>
        </div>
    </div>
</div>



<!--big Author Card -->
<div class="bg-yellow-400 md:mt-26">
    <div class="container max-w-1400px">
        <div class="flex items-center justify-between pt-10 pb-5 md:pt-14">
            <div class="md:text-h1 text-h4 font-bold">
                الأكثر قراءة
            </div>
            <a href="#"><div class="flex flex-row items-center"><p> الجميع</p><i class="icon-arrow_left text-s-1 mr-3"></i></div>
            </a>
        </div>
        <div class="bg-black-400  h-h-1px w-full"></div>
        <div class="pt-7 md:pt-14">
            <div class="grid grid-cols-1 md:grid-cols-5 md:gap-4 gap-0">
                <div class="col-span-1 md:col-span-2 row-start-1 row-end-2">
                    <img src="images/article_4.png" alt="" class="w-full h-96 md:h-408px object-cover object-center">
                </div>
                <div class="col-span-1 md:col-span-3 row-start-2 row-end-3 md:row-start-1 md:row-end-2 mt-5 md:mt-10">
                    <div>
                        <div class="w-max flex flex-row items-center">
                            <div class="md:pb-2 md:pt-1 md:pr-5 text-s-1">
                            صحافية لبنانية
                            </div>
                            <div class="flex-row items-center rounded-full bg-yellow-200 mr-3 hidden md:flex">
                                <div class="flex items-center justify-between p-1">
                                    <i class="icon-article ml-2 text-red-700"></i>
                                    <div class="text-15px">
                                    ٧ مساهمات
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:text-h1 text-h3 font-bold py-2 leading-relaxed">
                        باسكال صوما
                        </div>
                        <div>
                        </div>
                        <div class="py-2 md:text-s-1 text-16px leading-8 md:leading-10">
                            بباسكال صوما في لبنان وترعرعت في تشيلي ، وهي مؤلفة عدد من الكتب الأكثر مبيعًا والتي نالت استحسان النقاد ، بما في ذلك The House of the Spirits و Of Love and Shadows و Eva Luna و Paula و In the Midst of Winter. تُرجمت كتبها إلى أكثر من اثنتين وأربعين لغة وبيعت منها أكثر من أربعة وسبعين مليون نسخة حول العالم.
                        </div>
                        <div class="flex flex-row mt-8 justify-between md:justify-start w-full items-center flex-wrap">
                            <button class="bg-red-700 text-white rounded-full w-max py-1 px-6 flex items-center justify-between   focus:outline-none text-base">
                                <p class="font-sans px-0.5 leading-8" >تابعني على الصفا</p>
                            </button>
                            <div class="md:mr-5  md:mt-0">
                                <button class="bg-transparent text-black-800 rounded-full py-1 pl-5 pr-4 border-gray-300 border flex items-center justify-between focus:outline-none text-base">
                                    <i class="icon-twitter"></i>
                                    <p class="font-sans leading-8 mr-2 px-1">تابعني على تويتر</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center text-sm bg-transparent text-red-300 my-10 col-span-5 md:pb-8">
                            <i class="icon-radio-botton"></i>
                            <i class="icon-radio-botton mr-2"></i>
                            <i class="icon-radio-botton mr-2"></i>
                            <i class="icon-radio-botton mr-2 text-red-800"></i>
                        </div>
            </div>
        </div>
    </div>
</div>

<div class="container max-w-1400px mb-10">
    <div class="mt-14 md:mt-20">
        <h1 class="text-h3 md:text-h1 font-bold">
            الجهات المانحة
        </h1>
    </div>
    <div class="w-full h-h-1px bg-black-300 mt-4"></div>

</div>
<div>
    <!--Pre-footer-->
    <?php include 'pre_footer.php';?>


    <!--footer-->
    <?php include 'footer.php';
        include "footer_after.php";
    ?>

</div>

</body>

</html>
