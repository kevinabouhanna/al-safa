<a class="block" href="article.php">
    <?php $articleImagePath = file_exists('images/article_'.$i.'.png') ? 'images/article_'.$i.'.png' : 'images/article_'.rand(1,11).'.png'; ?>
    <div class="w-full relative md:h-80 h-64">
        <img class="w-full h-full object-cover absolute " src="<?php echo $articleImagePath; ?>" alt="">
    </div>
    <div>
        <div class="pb-2 pt-1 flex flex-row items-center justify-between mt-1">
            <div class="flex flex-row justify-between w-full">
                <div class="flex flex-row items-center">
                    <div class="w-6 h-h-0.5 bg-black-700 rounded-full "></div>
                    <div class="pr-4 text-15px">
                    بالعربي
                    </div>
                </div>
                <div class=" md:hidden">
                    <i class="icon-bookmark_border text-24px"></i>
                </div>
            </div>
        </div>
        <div class="<?php echo $titleFontSize; ?> font-black py-2 leading-relaxed">
            جامعو خردة قاصرون ينبشون كنز لبنان المدفون في النفايات
        </div>
        <div>
            <div class="inline-block rounded-full bg-black-100 px-1 mt-2">
                <div class="flex items-center justify-between p-1">
                    <i class="icon-time ml-2 text-red-700"></i>
                    <div class="text-15px">
                    ٧ دقائق للقراءة
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="inline-block bg-white mt-2 text-15px">
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
