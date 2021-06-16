<a href="podcast.php" class="block">
    <?php $articleImagePath = file_exists('images/article_'.$i.'.png') ? 'images/article_'.$i.'.png' : 'images/article_'.rand(1,11).'.png'; ?>
    <div class="relative">
        <img class="w-full md:h-80 h-56 object-cover object-center" src="<?php echo $articleImagePath; ?>" alt="">
        <div class="absolute bottom-4 right-2">
            <img src="svgs/podcast-2-big.svg" alt="">
        </div>
    </div>
    <div class="font-sans">
        <div class="pb-2 pt-4">
            <div class="flex items-center justify-between">
                <div class="text-gray-500 text-15px">
                    اذار ٣،  ٢٠٢١
                </div>
                <div>
                    <i class="icon-bookmark_border text-24px"></i>
                </div>
            </div>
        </div>
        <div class="<?php echo $titleFontSize; ?> font-bold pt-1 pb-2 leading-relaxed">
            جامعو خردة قاصرون ينبشون كنز لبنان المدفون في النفايات
        </div>
        <div>
            <div class="inline-block rounded-full bg-black-100 px-1 mt-2">
                <div class="flex items-center justify-between p-1 pl-3 pr-1">
                    <i class="icon-play ml-2 text-red-700 text-24px"></i>
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
