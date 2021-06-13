<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles.css" rel="stylesheet">
    <link href="icons.css" rel="stylesheet">
    <title>Homepage</title>
</head>
<body dir="rtl">
<?php include 'header-big.php'; ?>

<div class="container text-black-800 max-w-1400px">
    <div class="flex flex-row justify-center w-full md:pt-16 pt-2">
        <div class="md:h-26 h-16 w-788px bg-black-500"></div>
    </div>
    <div class="md:pb-6 md:pt-16 relative mt-5 md:mt-0">
        <img class="w-full md:h-full h-72 object-cover" src="images/1.png" alt="Hero Image">
        <div class="md:absolute top-0 h-full md:px-32">
            <div class="flex flex-col justify-end h-full flex-wrap text-black-800 md:pb-20 font-sans">
                <div class="flex flex-col justify-center">
                    <div class="flex flex-row justify-between w-full md:mt-0 mt-2">
                        <div class="flex flex-row items-center w-max md:pr-3" style="background-color: rgba(255,255,255,.8)">
                            <div class="w-6 h-h-0.5 bg-black-700 rounded-full"></div>
                            <div class="inline-block pr-2 pl-7 leading-hero md:py-4">
                                بالعربي
                            </div>
                        </div>
                        <div class="md:hidden">
                            <i class="icon-bookmark_border text-24px"></i>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div class="flex flex-row items-center mt-3">
                    <div class="inline-block bg-white md:pr-3 md:pl-6 md:text-h1 text-h4 font-bold md:leading-hero"
                         style="background-color: rgba(255,255,255,.8)">
                        جامعو خردة قاصرون ينبشون
                    </div>
                </div>
                <div>
                    <div class="inline-block bg-white md:pr-3 md:pl-6 text-h4 md:text-h1 font-bold py-3 md:leading-hero"
                         style="background-color: rgba(255,255,255,.8)">
                        كنز لبنان المدفون في النفايات
                    </div>
                </div>
                <div>
                    <div class="inline-block rounded-full md:bg-white bg-black-100 mt-4 px-1 text-15px">
                        <div class="flex items-center justify-between p-1 px-2">
                            <i class="icon-time ml-2 text-red-700 text-18px"></i>
                            <div>
                            ٧ دقائق للقراءة
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="inline-block bg-white md:mt-4 mt-2">
                        <div class="flex items-center justify-between md:px-6 text-15px py-3">
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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:mt-10 mt-5">
        <?php
        for ($i = 1; $i < 3; $i++) {
            $titleFontSize = 'md:text-h2 text-h4';
            include 'components/article_in_grid_main.php';
        }
        ?>
    </div>
    <div class="bg-black-300 md:mt-16 md:mb-20 h-h-1px mt-8 mb-12 "></div>
    <div class="grid-cols-3 md:grid gap-x-6 gap-y-20 hidden">
        <?php
        for ($i = 3; $i < 9; $i++) {
            $titleFontSize = 'text-h4';
            include 'components/article_in_grid_without_icon.php';
        }
        ?>
    </div>
    <div class="grid grid-cols-1 gap-x-6 md:gap-y-20 gap-y-9 md:hidden">
        <?php
        for ($i = 3; $i < 8; $i++) {
            $titleFontSize = 'text-h4';
            include 'components/article_in_grid_without_icon.php';
        }
        ?>
    </div>
    <div class="bg-black-300 md:mt-16 mt-10 md:mb-10 mb-5 h-h-1px"></div>
    <div class="hidden py-6 md:flex items-center justify-center gap-2">
        <div class="w-max relative md:flex items-center justify-center md:text-s-1">
            <div class="absolute top-0 -right-14">
                <img src="./images/send.svg" alt="" class="w-32" >
            </div>
            <div>
                اقرأ كل الاخبار، في أي وقت و في أي مكان.&nbsp;
            </div>
            <a href="#" class="text-blue-700 underline text-s-1">
            انضم الى مجموعتنا&nbsp;
            </a>
            <div>
                لقراءة مقالات غير محدودة.
            </div>
        </div>
    </div>
    <div class="flex flex-wrap pb-6 md:hidden items-center justify-center gap-2">
        <div class="flex flex-row justify-center w-full pb-6">
                <img src="./images/send.svg" alt="" class="w-32" >
            </div>
        <div>
            اقرأ كل الاخبار، في أي وقت و في أي مكان.
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
    <div class="bg-black-300 md:mt-10 mt-5 md:mb-16 mb-10 h-h-1px"></div>
    <div class="mt-6">
        <div class="flex items-center justify-between">
            <div class="md:text-h1 text-h3 font-bold">
                بودكاست
            </div>
            <a href="#" class="text-15px">
                <div class="flex flex-row items-center">
                    <p>الجميع</p>
                <i class="icon-arrow_left md:text-24px text-s-1"></i>
            </div>  
            </a>
        </div>
    </div>
    <div class="bg-black-300 mt-5 mb-14 h-h-1px hidden md:block"></div>
    <div class="md:mt-4 mt-10">
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
        <div class="flex flex-row justify-center text-sm bg-transparent text-red-300 md:mt-14 mt-10 md:pb-20 pb-4">
        <i class="icon-radio-botton"></i>
        <i class="icon-radio-botton mr-2"></i>
        <i class="icon-radio-botton mr-2"></i>
        <i class="icon-radio-botton mr-2 text-red-800"></i>
        </div>
    </div>
    <div class="bg-black-300 md:my-10 mt-4 h-h-1px"></div>
    <div class="py-6 hidden md:flex items-center justify-center gap-2 text-s-1">
        <img src="./images/podcast.svg" alt="">
        <a href="#" class="text-blue-700 underline mr-2">
            استمع الى محتوى عالي الجودة
        </a>
        <div>
            حول الشؤون الجارية، و الاعمال التجارية، و الاقتصاد
        </div>
    </div>
    <div class="py-6 block md:hidden gap-2 tex-base">
        <div class="flex flex-row justify-center w-full mb-8">
            <img src="./images/podcast.svg" alt="">
        </div>
        <p class="leading-8">
            <a href="#" class="text-blue-700 underline inline-block">
                استمع الى محتوى عالي الجودة
            </a>
                حول الشؤون الجارية، و الاعمال التجارية، و الاقتصاد
        </p>
    </div>
    <div class="bg-black-300 mt-10 md:mb-24 mb-10 h-h-1px"></div>
</div>

<div class="bg-yellow-400">
    <div class="container max-w-1400px font-sans">
        <div class="flex items-center justify-between md:pt-18 pt-10">
            <div class="md:text-h1 text-h4 font-black">
                الأكثر قراءة
            </div>
            <a href="#"><div class="flex flex-row items-center"><p> الجميع</p><i class="icon-arrow_left text-s-1 mr-2"></i></div>
            </a>
        </div>
        <div class="bg-black-400 mt-5 h-h-1px mb-10 hidden md:block"></div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mt-4">
                <div class="col-span-1 md:col-span-2 row-start-1 row-end-2">
                    <img src="images/article_4.png" alt="" class="w-full md:h-96 h-60 object-cover object-center">
                </div>
                <div class="col-span-1 md:col-span-3 row-start-2 row-end-3 md:row-start-1 md:row-end-2">
                    <div>
                        <div class="flex flex-row justify-between w-full">
                            <div class="w-max flex flex-row items-center">
                                <div class="w-6 h-h-0.5 bg-black-700 rounded-full"></div>
                                <div class="md:pb-2 md:pt-1 pr-5">
                                    بالعربي
                                </div>
                            </div>
                            <div class=" md:hidden">
                                    <i class="icon-bookmark_border text-24px"></i>
                                </div>
                        </div>
                        <div class="md:text-h1 text-h4 font-bold py-2 leading-relaxed">
                            جامعو خردة قاصرون ينبشون كنز لبنان المدفون في النفايات
                        </div>
                        <div>
                            <div class="inline-block rounded-full bg-black-100 px-1 md:mt-2 my-4">
                                <div class="flex items-center justify-between p-1">
                                    <i class="icon-time ml-2 text-red-700 text-s-1"></i>
                                    <div class="text-15px">
                                    ٧ دقائق للقراءة
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 md:text-s-1 text-16px leading-9">
                            بدءاً من تسعينيات القرن الماضي، أصبحت الشراكات بين القطاعين العام و الخاص ذات اهمية محورية
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
                <div class="col-span-1 flex flex-row justify-center text-sm bg-transparent text-red-300 md:mb-14 md:mt-10 my-8 md:col-span-5">
                            <i class="icon-radio-botton"></i>
                            <i class="icon-radio-botton mr-2"></i>
                            <i class="icon-radio-botton mr-2"></i>
                            <i class="icon-radio-botton mr-2 text-red-800"></i>
                        </div>
            </div>
        </div>
    </div>
</div>

<div class="container pb-12 md:pt-6 max-w-1400px" dir="ltr">
    <div class="mt-12 mb-4 pb-2">
        <div class="flex items-center justify-between">
            <div class="md:text-h1 text-24px font-bold">
                Articles In Foreign Languages
            </div>
            <a href="#" class="hidden md:block "><div class="flex flex-row items-center font-bold"><p> ALL ARTICLES</p><i class="icon-arrow-right text-s-1 ml-2"></i></div>
            </a>
        </div>
    </div>
    <div class="bg-black-300 w-full h-h-1px mb-10 hidden md:block"></div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="mt-2 md:mt-0">
            <img class="w-full md:h-72 h-48 object-cover" src="images/article_10.png" alt="">
            <div>
                <div class="md:pb-2 pt-1 text-p-9.8px md:text-base">
                    <div class="w-full flex flex-row items-center" dir="rtl">
                        <div class="md:w-6 w-4 h-h-0.5 bg-black-700 rounded-full"></div>
                        <div class="md:pb-2 pb-1 pt-1 md:pr-5 pr-2">
                                بالعربي
                        </div>
                    </div>
                </div>
                <div class="md:text-34px text-16px font-bold md:py-2 leading-snug">
                    "Divorcing" Is Literature That Looks Beyond Life
                </div>
                <div>
                    <div class="inline-block rounded-full bg-black-100 px-1 md:mt-2">
                        <div class="flex items-center justify-between p-1">
                            <i class="icon-time mr-2 text-red-700 md:text-base text-p-9.8px"></i>
                            <div class="md:text-base text-6.8px">
                                10 MIN READ
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:py-2 md:text-s-1 text-p-9.8px md:leading-9 mt-2">
                    In Chicago, sharp disagreements about when and how public schools should reopen brought the city to
                    the edge of a strike.
                </div>
                <div>
                    <div class="inline-block bg-white mt-2">
                        <div class="flex items-center justify-between p-1 md:text-base text-6.8px">
                            <div class="font-bold">
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
        <div class="mt-2 md:mt-0">
            <img class="w-full md:h-72 h-48 object-cover" src="images/article_11.png" alt="">
            <div>
                <div class="md:pb-2 pt-1 text-p-9.8px md:text-base">
                    <div class="w-full flex flex-row items-center" dir="rtl">
                        <div class="md:w-6 w-4 h-h-0.5 bg-black-700 rounded-full"></div>
                        <div class="md:pb-2 pb-1 pt-1 md:pr-5 pr-2">
                                بالعربي
                        </div>
                    </div>
                </div>
                <div class="md:text-34px text-16px font-bold md:py-2 leading-snug">
                    "Divorcing" Is Literature That Looks Beyond Life
                </div>
                <div>
                    <div class="inline-block rounded-full bg-black-100 px-1 md:mt-2">
                        <div class="flex items-center justify-between p-1">
                            <i class="icon-time mr-2 text-red-700 md:text-base text-p-9.8px"></i>
                            <div class="md:text-base text-6.8px">
                                10 MIN READ
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:py-2 md:text-s-1 text-p-9.8px md:leading-9 mt-2">
                    In Chicago, sharp disagreements about when and how public schools should reopen brought the city to
                    the edge of a strike.
                </div>
                <div>
                    <div class="inline-block bg-white mt-2">
                        <div class="flex items-center justify-between p-1 md:text-base text-6.8px">
                            <div class="font-bold">
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
        <div class="flex flex-row justify-center mt-10 p-4 mb-14 pb-20 md:pb-0">
            <a href="#" class="md:hidden"><div class="flex flex-row items-center font-bold"><p> ALL ARTICLES</p><i class="icon-arrow-right text-24px ml-2"></i></div>
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
