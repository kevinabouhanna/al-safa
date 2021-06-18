<a class="block" href="article.php">
    <?php $articleImagePath = file_exists('images/article_'.$i.'.png') ? 'images/article_'.$i.'.png' : 'images/article_'.rand(1,11).'.png'; ?>
    <div class="relative">
        <img class="w-full md:h-80 h-60 object-cover object-center" src="<?php echo $articleImagePath; ?>" alt="">
        <div class="h-2 absolute bottom-0 right-0 z-10 bg-blue-300 w-full"></div>
    </div>
    <div>
        <div class="pb-2 pt-1 flex flex-row items-center justify-between mt-1">
            <div class="flex flex-row items-center text-black-600">
                <div class="pr-4 text-base">
                اذار ٣،  ٢٠٢١ 
                </div>
            </div>
            <div>
                <i class="icon-bookmark_border text-24px"></i>
            </div>
        </div>
        <div class="<?php echo $titleFontSize; ?> font-bold py-2 leading-relaxed">
            جامعو خردة قاصرون ينبشون كنز لبنان المدفون في النفايات
        </div>
        <div>
            <div class="inline-block rounded-full bg-black-100 px-1 mt-2">
                <div class="flex items-center justify-between p-1">
                    <i class="icon-time ml-2 text-red-700 text-24px"></i>
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
