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

<div class="container pb-20 max-w-1400px">
    <div class="md:text-h1 text-h3 font-bold text-center py-10">
        بودكاست
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-16">
        <?php
        for ($i = 1; $i < 13; $i++) {
            $titleFontSize = 'text-h4';
            include 'components/podcast_in_grid.php';
        }
        ?>
    </div>

    <div class="pb-10 text-center hidden md:block mt-32">
        <div class="text-center text-gray-500">
            ١ - ٢٢ من ٥٥ مساهمات
        </div>
        <div class="flex items-center justify-center py-3 gap-4 text-s-1">
            <i class="icon-chevron-right text-2xl text-red-800"></i>
            <div>١</div>
            <div>٢</div>
            <div>٣</div>
            <div class="w-8 h-8 rounded-full flex items-center justify-center text-white bg-red-800">٤</div>
            <div>٥</div>
            <div>٦</div>
            <div>...</div>
            <div>٢٢</div>
            <i class="icon-chevron-left text-2xl text-red-800"></i>
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
