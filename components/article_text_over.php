<a href="article.php" class="block relative">
    <?php $articleImagePath = file_exists('images/article_' . $i . '.png') ? 'images/article_' . $i . '.png' : 'images/article_' . rand(1,
            11) . '.png'; ?>
    <img class="w-full h-408px object-cover shadow-" src="<?php echo $articleImagePath; ?>" alt="">
    <div class="absolute bottom-0 w-full h-full flex flex-col justify-end text-white px-4 shadow-article-over">
        <div class="font-bold text-h4 px-3 ">
            غزة: مليونا شخص رهينة القرار السياسي الاسرائيلي لادخال اللقاح
        </div>
        <div class="my-2 flex flex-row">
        <div class="font-bold text-15px pb-4">كريم الخوري  </div>
        <div class="flex flex-row items-center mx-2 mt-1 h-1/2">
                                <div class="w-3 h-h-1px bg-white"></div>
                            </div>
             صحافي لبناني
        </div>
    </div>
</a>
