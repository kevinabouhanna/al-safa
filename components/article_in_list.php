<a href="article.php" class="block py-2 md:col-span-2 col-span-5">
    <?php $articleImagePath = file_exists('images/article_'.$i.'.png') ? 'images/article_'.$i.'.png' : 'images/article_'.rand(1,11).'.png'; ?>
    <div class="grid grid-cols-5 gap-2 flex items-center">
        <div>
            <img class="w-full h-80 object-cover object-center" src="<?php echo $articleImagePath; ?>" alt="">
        </div>
        <div class="md:col-span-3 col-span-5">
            <div class="pb-2 pt-1 flex flex-row items-center gap-2 text-15px">
                <div class="w-4 h-0.5 rounded-full bg-black-700"></div>
                <div>
                        بالعربي
                </div>
                <div class="text-gray-500">
                        اذار ٣،  ٢٠٢١
                </div>
                <i class="icon-bookmark_border text-s-1"></i>
            </div>
            <div class="<?php echo $titleFontSize; ?> font-bold py-2 leading-relaxed">
                جامعو خردة قاصرون ينبشون كنز لبنان ...
            </div>
            <div class="text-gray-700 py-2 md:text-s-1 text-15px">
                في خطوة فاجأت جميع المعنيّين بالشأن السياسيّ، بمن فيهم الكتائبيّون أنفسهم، أعلن نائب المتن ورئيس حزب الكتائب…
            </div>
            <div>
            <div class="flex-row flex items-center">
                <div class="inline-block rounded-full bg-black-100 px-1">
                    <div class="flex items-center justify-between p-1">
                        <i class="icon-time ml-2 text-red-700"></i>
                        <div>
                            7 دقائق للقراءة
                        </div>
                    </div>
                </div>
                <a href="#" class="mr-2 text-red-800">
                    اقرأ أكثر
                </a>
                </div>
            </div>
        </div>
    </div>
</a>
