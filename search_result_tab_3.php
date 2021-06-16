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

<div class="py-16 text-center container max-w-1400px">
    <div class="text-3xl font-bold md:text-h1 py-5">
        نتائج البحث
    </div>
    <div class="flex items-center justify-center py-10 ">
        <input type="text" class="p-2 px-4 rounded-r-full border focus:outline-none placeholder-black-800 w-full sm:w-max" placeholder="بالتفصيل">
        <button class="btn-red border border-red-800 rounded-none rounded-l-full pl-10 pr-8">بحث</button>
    </div>
</div>

<div class="container max-w-1400px">
    <div class="flex items-center border-b gap-y-6 gap-x-10 text-2xl flex-wrap  ">
        <a href="/search.php" class=" pb-2">
            مقالات  
        </a>
        <a href="/search_podcast.php" class="pb-2">
            بودكاست 
        </a>
        <a href="/search_authors.php" class="pb-2 font-bold text-red-800 px-2 relative">
            المؤلفون    <div class="absolute bottom-0 left-0 w-full h-h-1px bg-red-800"></div>
        </a>
    </div>
</div>

<div class="container py-10 mt-10 max-w-1400px">
    <div class="grid md:grid-cols-4 grid-cols-1 gap-4">
        <?php
        for ($i = 1; $i < 21; $i++) {
            include 'components/author_card.php';
        }
        ?>
    </div>
</div>

<div class="container py-20 max-w-1400px">
    <div class="text-center text-gray-500">
        ١ -  ٢٢ من ٥٥ نتائج
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
