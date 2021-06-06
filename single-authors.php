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

<div class="bg-yellow-300">
    <div class="container">
        <div class="bg-black-100 my-5 h-1"></div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 pb-6">
                <div class="col-span-2">
                    <img src="images/article_4.png" alt="" class="w-full md:h-80 h-72 object-cover object-center mt-4">
                </div>
                <div class="col-span-3">
                    <div>
                        <div class="pb-2 pt-1 pr-5 md:text-s-1">
                            صحافية لبنانية
                        </div>
                        <div class="md:text-h1 text-h4 font-bold leading-relaxed">
                        باسكال صوما
                        </div>
                        <div class="py-2 md:text-s-1 text-16px">
                            بباسكال صوما في لبنان وترعرعت في تشيلي ، وهي مؤلفة عدد من الكتب الأكثر مبيعًا والتي نالت استحسان النقاد ، بما في ذلك The House of the Spirits و Of Love and Shadows و Eva Luna و Paula و In the Midst of Winter. تُرجمت كتبها إلى أكثر من اثنتين وأربعين لغة وبيعت منها أكثر من أربعة وسبعين مليون نسخة حول العالم.
                        </div>
                        <div class="flex flex-row">
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

<div class="py-10 text-center container">
    <div class="text-3xl font-bold md:text-h1">
        ١٢ مساهمات
    </div>
</div>
<div class="container py-10 mt-5">
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4">
            <?php
            for ($i = 1; $i < 8; $i++) {
                $titleFontSize = 'md:text-h4 text-s-1';
                include 'components/article_in_list.php';
            }
            ?>
        </div>
    </div>
</div>

<div class="container py-20">
    <div class="text-center text-gray-500">
        ١ -  ٢٢ من ٥٥ نتائج
    </div>
    <div class="text-center">
        <button class="btn-yellow py-1 text-sm mt-3">
            أظهر المزيد <i class="icon-chevron-expand"></i>
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
