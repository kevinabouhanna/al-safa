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

<div class="py-16 text-center container">
    <div class="text-3xl font-bold md:text-h1 py-5">
        نتائج البحث
    </div>
    <div class="flex items-center justify-center py-10">
        <input type="text" class="p-2 px-4 rounded-r-full border focus:outline-none ">
        <button class="btn-red border border-red-800 rounded-none rounded-l-full">بحث</button>
    </div>
</div>

<div class="container">
    <div class="flex items-center border-b gap-6 pb-2 text-2xl">
        <a href="/search.php" class="font-bold text-red-800 px-2 relative">
            مقالات  <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>
        <a href="/search_podcast.php">
            بودكاست
        </a>
        <a href="/search_authors.php">
            المؤلفون
        </a>
    </div>
</div>

<div class="container py-10 mt-5">
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-3">
            <?php
            for ($i = 1; $i < 8; $i++) {
                $titleFontSize = 'md:text-h4 text-s-1';
                include 'components/article_in_list.php';
            }
            ?>
        </div>
        <div class="col-span-1  hidden md:block">
            <div class="text-lg mb-4 md:text-s-1">
                العلامات
            </div>
            <div class="flex gap-4 flex-wrap pb-4 border-b">
                <div class="bg-black-200 px-3 rounded-full py-1"> الألم</div>
                <div class="bg-black-200 px-3 rounded-full py-1"> الخرف</div>
                <div class="bg-black-200 px-3 rounded-full py-1"> الزهايمر</div>
                <div class="bg-black-200 px-3 rounded-full py-1"> مرضى الخرف</div>
                <div class="bg-black-200 px-3 rounded-full py-1"> الزهايمر</div>
                <div class="bg-black-200 px-3 rounded-full py-1"> الخرف</div>
                <div class="bg-black-200 px-3 rounded-full py-1"> الألم</div>
            </div>
            <div class="mt-15">
                <?php
                for ($i = 1; $i < 5; $i++) {
                    include 'components/author_in_grid_sidebar.php';
                }
                ?>
            </div>
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
