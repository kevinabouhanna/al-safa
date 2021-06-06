<a href="article.php" class="block relative">
    <?php $articleImagePath = file_exists('images/article_' . $i . '.png') ? 'images/article_' . $i . '.png' : 'images/article_' . rand(1,
            11) . '.png'; ?>
    <img class="w-full h-full object-cover object-center shadow-" src="<?php echo $articleImagePath; ?>" alt="">
    <div class="absolute bottom-0 w-full h-full flex flex-col justify-end text-white px-4 shadow-article-over">
        <div class="text-2xl font-bold">
            غزة: مليونا شخص رهينة القرار السياسي الاسرائيلي لادخال اللقاح
        </div>
        <div class="my-2 flex flex-row">
        <div class="font-bold">كريم الخوري -</div>
             صحافي لبناني
        </div>
    </div>
</a>
