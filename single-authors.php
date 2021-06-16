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

<div class="bg-yellow-400">
    <div class="container max-w-1400px md:pb-10 md:pt-16">
        <div>
            <div class="grid grid-cols-1 md:grid-cols-6 gap-6 pb-6">
                <div class="col-span-2 mt-2">
                    <img src="images/article_4.png" alt="" class="w-full md:h-80 h-72 object-cover object-center mt-4">
                </div>
                <div class="md:col-span-4">
                    <div>
                        <div class="pb-2 pt-1 md:pr-5 text-s-1">
                            صحافية لبنانية
                        </div>
                        <div class="md:text-h1 text-h3 font-bold leading-relaxed pb-2">
                        باسكال صوما
                        </div>
                        <div class="py-2 md:text-s-1 text-16px leading-8">
                            بباسكال صوما في لبنان وترعرعت في تشيلي ، وهي مؤلفة عدد من الكتب الأكثر مبيعًا والتي نالت استحسان النقاد ، بما في ذلك The House of the Spirits و Of Love and Shadows و Eva Luna و Paula و In the Midst of Winter. تُرجمت كتبها إلى أكثر من اثنتين وأربعين لغة وبيعت منها أكثر من أربعة وسبعين مليون نسخة حول العالم.
                        </div>
                        <div class="flex flex-row gap-x-2 flex-wrap py-4">
                            <button class="bg-red-700 text-white rounded-full py-1 px-6 flex items-center justify-between   focus:outline-none text-base">
                                <p class="font-sans px-0.5 leading-8" >تابعني على الصفا</p>
                            </button>
                            <button class="bg-transparent text-black-800 rounded-full py-1 pl-5 pr-4 border-gray-300 border flex items-center justify-between focus:outline-none text-base">
                                <i class="icon-twitter"></i>
                                <p class="font-sans leading-8 mr-2 px-1">تابعني على تويتر</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="md:py-10 pt-7 pb-5 text-center container max-w-1400px md:mt-10">
    <div class="text-3xl font-bold md:text-h1">
        ١٢ مساهمات
    </div>
</div>
<div class="container md:py-10 pb-26 md:mt-5 max-w-1400px">
    <div class="grid grid-cols-4 ">
        <div class="col-span-4">
            <?php
            for ($i = 1; $i < 6; $i++) {
                $titleFontSize = ' text-h4';
                include 'components/article_in_list_end.php';
            }
            ?>
        </div>
    </div>
</div>

<div class="container py-20 max-w-1400px hidden md:block">
    <div class="text-center text-gray-500">
    ١ -  ٢٢ من ٥٥ مساهمات
    </div>
    <div class="flex flex-row justify-center items-center">
        <button class="btn-yellow text-sm mt-4 py-3 px-4 text-15px flex-row flex">
            أظهر المزيد 
            <div class="flex flex-row items-center justify-center mr-3">
                <i class="icon-chevron-expand text-s-1"></i>
            </div>
        </button>
    </div>
</div>


<?php
include 'pre_footer.php';
include "footer.php";
include "footer_after.php"
?>

</body>
</html>
