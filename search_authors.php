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
    <div class="text-h1 font-bold">
        نتائج البحث
    </div>
    <div class="flex items-center justify-center py-10">
        <input type="text" class="p-2 px-4 rounded-r-full border focus:outline-none ">
        <button class="btn-red border border-red-800 rounded-none rounded-l-full">بحث</button>
    </div>
</div>

<div class="container max-w-1400px">
    <div class="flex items-center border-b gap-6 pb-2">
        <a href="/search.php">
            مقالات
        </a>
        <a href="/search_podcast.php">
            بودكاست
        </a>
        <a href="/search_authors.php" class="font-bold text-red-800 px-2 relative  ">
            المؤلفون    <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
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
