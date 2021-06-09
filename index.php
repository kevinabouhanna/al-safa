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
<?php include 'header-big.php'; ?>

<div class="container text-black-800 max-w-1400px">
    <div class="flex flex-row justify-center w-full pt-16">
        <div class="h-26 w-788px bg-black-500"></div>
    </div>
    <div class="pb-6 pt-16 relative hidden md:block">
        <img src="images/1.png" alt="Hero Image">
        <div class="absolute top-0 h-full px-20">
            <div class="flex flex-col justify-end h-full flex-wrap text-black-800 pb-20">
                <div class="flex flex-col justify-center">
                    <div class="flex flex-row items-center w-max" style="background-color: rgba(255,255,255,.8)">
                        <div class="w-7 h-0.5 bg-black-700 rounded-full"></div>
                        <div class="inline-block px-6 py-2 leading-hero py-4">
                            بالعربي
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div class="flex flex-row items-center">
                    <div class="inline-block bg-white px-6 md:text-h1 text-3xl font-bold leading-hero"
                         style="background-color: rgba(255,255,255,.8)">
                        جامعو خردة قاصرون ينبشون
                    </div>
                </div>
                <div>
                    <div class="inline-block bg-white px-6 text-4xl md:text-h1 font-bold py-3 leading-hero"
                         style="background-color: rgba(255,255,255,.8)">
                        كنز لبنان المدفون في النفايات
                    </div>
                </div>
                <div>
                    <div class="inline-block rounded-full bg-white mt-4 px-1 text-15px">
                        <div class="flex items-center justify-between p-1 px-2">
                            <i class="icon-time ml-2 text-red-700 text-18px"></i>
                            <div>
                            ٧ دقائق للقراءة
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="inline-block bg-white mt-4">
                        <div class="flex items-center justify-between px-6 text-15px py-3">
                            <div class="font-bold ml-2">
                                كريم الخوري
                            </div>
                            <div class="flex flex-row items-center ml-2">
                                <div class="w-3 h-h-1px bg-black-800"></div>
                            </div>
                            <div>
                                صحافي لبناني
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
        <?php
        for ($i = 1; $i < 3; $i++) {
            $titleFontSize = 'text-h2';
            include 'components/article_in_grid_main.php';
        }
        ?>
    </div>
    <div class="bg-black-100 mt-16 mb-20 h-1 "></div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-20">
        <?php
        for ($i = 3; $i < 9; $i++) {
            $titleFontSize = 'text-h4';
            include 'components/article_in_grid_without_icon.php';
        }
        ?>
    </div>
    <div class="bg-black-100 mt-16 mb-10 h-1"></div>
    <div class="hidden py-6 md:flex items-center justify-center gap-2">
        <div class="w-max relative md:flex items-center justify-center md:text-s-1">
            <div class="absolute top-0 -right-14">
                <img src="./images/send.svg" alt="" class="w-24" >
            </div>
            <div>
                اقرأ كل الاخبار, في أي وقت و في أي مكان.
            </div>
            <a href="#" class="text-blue-700 underline text-s-1">
                 انضم الى مجموعتنا
            </a>
            <div>
                لقراءة مقالات غير محدودة.
            </div>
        </div>
    </div>
    <div class="flex flex-wrap py-6 md:hidden items-center justify-center gap-2">
        <div>
            اقرأ كل الاخبار, في أي وقت و في أي مكان.
        </div>
        <div class="flex items-center gap-2">
            <a href="#" class="text-blue-700 underline">
                انضم الى مجموعتنا
            </a>
            <div>
                لقراءة مقالات غير محدودة.
            </div>
        </div>
    </div>
    <div class="bg-black-100 mt-10 mb-16 h-1"></div>
    <div class="mt-6">
        <div class="flex items-center justify-between">
            <div class="text-h1 font-bold">
                بودكاست
            </div>
            <a href="#" class="text-15px">
                <div class="flex flex-row items-center">
                    <p>الجميع</p>
                <i class="icon-arrow_left text-24px"></i>
            </div>  
            </a>
        </div>
    </div>
    <div class="bg-black-100 my-5 h-1"></div>
    <div class="mt-4">
        <div class="md:grid grid-cols-1 md:grid-cols-4 gap-6 hidden">
            <?php
                for ($i = 1; $i < 5; $i++) {
                    $titleFontSize = 'text-2xl';
                    include 'components/article_text_over.php';
                }
            ?>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 sm:hidden">
            <?php
                for ($i = 1; $i < 2; $i++) {
                    $titleFontSize = 'text-2xl';
                    include 'components/article_text_over.php';
                }
            ?>
        </div>
        <div class="flex flex-row justify-center text-sm bg-transparent text-red-300 mt-12 pb-20">
        <i class="icon-radio-botton"></i>
        <i class="icon-radio-botton mr-2"></i>
        <i class="icon-radio-botton mr-2"></i>
        <i class="icon-radio-botton mr-2 text-red-800"></i>
        </div>
    </div>
    <div class="bg-black-100 my-10 h-1"></div>
    <div class="py-6 hidden md:flex items-center justify-center gap-2 text-s-1">
        <img src="./images/podcast.svg" alt="">
        <a href="#" class="text-blue-700 underline">
            استمع الى محتوى عالي الجودة
        </a>
        <div>
            حول الشؤون الجارية, و الاعمال التجارية, و الاقتصاد
        </div>
    </div>
    <div class="py-6 block md:hidden gap-2">
        <i class="icon-podcast"></i>
        <a href="#" class="text-blue-700 underline inline-block">
            استمع الى محتوى عالي الجودة
        </a>
        <div class="inline-block">
            حول الشؤون الجارية, و الاعمال التجارية, و الاقتصاد
        </div>
    </div>
    <div class="bg-black-100 my-10 h-1"></div>
</div>

<div class="bg-yellow-400">
    <div class="container max-w-1400px">
        <div class="flex items-center justify-between pt-10">
            <div class="text-h1 font-bold">
                الأكثر قراءة
            </div>
            <a href="#"><div class="flex flex-row items-center"><p> الجميع</p><i class="icon-arrow_left text-s-1"></i></div>
            </a>
        </div>
        <div class="bg-black-100 mt-5 h-1 mb-10"></div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="col-span-1 md:col-span-2 row-start-1 row-end-2">
                    <img src="images/article_4.png" alt="" class="w-full h-96 object-cover object-center">
                </div>
                <div class="col-span-1 md:col-span-3 row-start-2 row-end-3 md:row-start-1 md:row-end-2">
                    <div>
                        <div class="w-max flex flex-row items-center">
                            <div class="w-7 h-0.5 bg-black-700 rounded-full"></div>
                            <div class="pb-2 pt-1 pr-5">
                                 بالعربي
                            </div>
                        </div>
                        <div class="md:text-h1 text-h4 font-bold py-2 leading-relaxed">
                            جامعو خردة قاصرون ينبشون كنز لبنان المدفون في النفايات
                        </div>
                        <div>
                            <div class="inline-block rounded-full bg-black-100 px-1 mt-2">
                                <div class="flex items-center justify-between p-1">
                                    <i class="icon-time ml-2 text-red-700"></i>
                                    <div class="text-15px">
                                    ٧ دقائق للقراءة
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 md:text-s-1 text-16px">
                            بدءاً من تسعينيات القرن الماضي, أصبحت الشراكات بين القطاعين العام و الخاص ذات اهمية محورية
                            في الطريقة التي يدار من خلالها ملف النفايات في مختلف ارجاء لبنان.
                        </div>
                        <div>
                            <div class="inline-block mt-2">
                                <div class="flex items-center justify-between p-1 text-15px">
                                    <div class="font-bold ml-2">
                                        كريم الخوري
                                    </div>
                                    <div class="flex flex-row items-center ml-2">
                                <div class="w-3 h-h-1px bg-black-800"></div>
                            </div>
                                    <div>
                                        صحافي لبناني
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center text-sm bg-transparent text-red-300 my-10 col-span-5">
                            <i class="icon-radio-botton"></i>
                            <i class="icon-radio-botton mr-2"></i>
                            <i class="icon-radio-botton mr-2"></i>
                            <i class="icon-radio-botton mr-2 text-red-800"></i>
                        </div>
            </div>
        </div>
    </div>
</div>

<div class="container pb-12 pt-10 max-w-1400px" dir="ltr">
    <div class="mt-12 mb-4 pb-2">
        <div class="flex items-center justify-between">
            <div class="md:text-h1 text-24px font-bold">
                Articles In Foreign Languages
            </div>
            <a href="#" class="hidden md:block "><div class="flex flex-row items-center"><p> ALL ARTICLES</p><i class="icon-arrow-right text-s-1 ml-2"></i></div>
            </a>
        </div>
    </div>
    <div class="bg-black-300 w-full h-0.5 mb-10"></div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <img class="w-full h-72 object-cover object-center" src="images/article_10.png" alt="">
            <div>
                <div class="pb-2 pt-1">
                <div class="w-full flex flex-row items-center" dir="rtl">
                    <div class="w-7 h-0.5 bg-black-700 rounded-full"></div>
                    <div class="pb-2 pt-1 pr-5">
                             بالعربي
                    </div>
                </div>
                </div>
                <div class="md:text-34px text-16px font-bold py-2 leading-10">
                    "Divorcing" Is Literature That Looks Beyond Life
                </div>
                <div>
                    <div class="inline-block rounded-full bg-black-100 px-1 mt-2">
                        <div class="flex items-center justify-between p-1">
                            <i class="icon-time mr-2 text-red-700"></i>
                            <div>
                                10 min read
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 md:text-s-1 text-sm leading-8">
                    In Chicago, sharp disagreements about when and how public schools should reopen brought the city to
                    the edge of a strike.
                </div>
                <div>
                    <div class="inline-block bg-white mt-2">
                        <div class="flex items-center justify-between p-1 md:text-base text-xs">
                            <div class="font-bold md:ml-2">
                                John Doe
                            </div>
                            <div class="flex flex-row items-center mx-2">
                                <div class="w-3 h-h-1px bg-black-800"></div>
                            </div>
                            <div>
                                 Journalist
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img class="w-full h-72 object-cover object-center" src="images/article_11.png" alt="">
            <div>
                <div class="pb-2 pt-1">
                <div class="w-full flex flex-row items-center" dir="rtl">
                    <div class="w-7 h-0.5 bg-black-700 rounded-full"></div>
                    <div class="pb-2 pt-1 pr-5">
                             بالعربي
                    </div>
                </div>
                </div>
                <div class="md:text-34px text-16px font-bold py-2 leading-10">
                    "Divorcing" Is Literature That Looks Beyond Life
                </div>
                <div>
                    <div class="inline-block rounded-full bg-black-100 px-1 mt-2">
                        <div class="flex items-center justify-between p-1">
                            <i class="icon-time mr-2 text-red-700"></i>
                            <div>
                                10 min read
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 md:text-s-1 text-sm leading-8">
                    In Chicago, sharp disagreements about when and how public schools should reopen brought the city to
                    the edge of a strike.
                </div>
                <div>
                    <div class="inline-block bg-white my-2">
                        <div class="flex items-center justify-between p-1 md:text-15px text-xs">
                            <div class="font-bold md:ml-2">
                                John Doe
                            </div>
                            <div class="flex flex-row items-center mxs-1-2">
                                <div class="w-3 h-h-1px bg-black-800"></div>
                            </div>
                            <div>
                                 Journalist
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center mt-10 p-4 mb-14">
            <a href="#" class="md:hidden"><div class="flex flex-row items-center"><p> ALL ARTICLES</p><i class="icon-arrow-right text-s-1 ml-2"></i></div>
            </a>
        </div>
    </div>
</div>



<?php
include 'pre_footer.php';
include "footer.php";
include "footer_after.php";
?>

</body>
</html>
