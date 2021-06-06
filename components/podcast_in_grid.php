<a href="podcast.php" class="block">
    <?php $articleImagePath = file_exists('images/article_'.$i.'.png') ? 'images/article_'.$i.'.png' : 'images/article_'.rand(1,11).'.png'; ?>
    <div class="relative">
        <img class="w-full h-72 object-cover object-center" src="<?php echo $articleImagePath; ?>" alt="">
        <div class="bg-white p-1 absolute bottom-2 right-2 rounded w-8 h-8 md:w-14 md:h-14 flex items-center justify-center">
            <i class="icon-podcasts md:text-4xl text-2xl" style="color:#964FBF"></i>
        </div>
    </div>
    <div>
        <div class="pb-2 pt-1">
            <div class="flex items-center justify-between">
                <div class="text-gray-500 text-15px">
                    اذار ٣،  ٢٠٢١
                </div>
                <div>
                    <i class="icon-bookmark_border text-24px"></i>
                </div>
            </div>
        </div>
        <div class="<?php echo $titleFontSize; ?> font-bold py-2 leading-relaxed">
            جامعو خردة قاصرون ينبشون كنز لبنان المدفون في النفايات
        </div>
        <div>
            <div class="inline-block rounded-full bg-black-100 px-1 mt-2">
                <div class="flex items-center justify-between p-1">
                    <i class="icon-play ml-2 text-red-700"></i>
                    <div>
                    ٧ دقائق للاستماع
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="inline-block bg-white mt-2">
                <div class="flex items-center justify-between p-1">
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
</a>
