<a href="article.php" class="block pt-1 md:col-span-2 col-span-5">
    <?php $articleImagePath = file_exists('images/article_'.$i.'.png') ? 'images/article_'.$i.'.png' : 'images/article_'.rand(1,11).'.png'; ?>
    <div class="grid grid-cols-4 md:grid-cols-6 flex items-center font-sans pb-8 gap-x-7">
        <div>
            <img class="w-full md:h-80 h-56 object-cover object-center" src="<?php echo $articleImagePath; ?>" alt="">
        </div>
        <div class="md:col-span-4 col-span-5 w-full">
            <div class="pb-2 md:pt-1 flex flex-row items-center gap-2 text-15px justify-between md:justify-start w-full">
                <div class="flex flex-row items-center gap-2">
                    <div class="w-6 h-0.5 rounded-full bg-black-700 "></div>
                    <div class="pl-2">
                            بالعربي
                    </div>
                    <div class="text-gray-500 pl-2">
                            اذار ٣،  ٢٠٢١
                    </div>
                </div>
                <i class="icon-bookmark_border text-24px"></i>
            </div>  
            <div class="<?php echo $titleFontSize; ?> font-bold py-2 leading-relaxed">
                جامعو خردة قاصرون ينبشون كنز لبنان ...
            </div>
            <div class="text-gray-700 md:py-2 md:text-s-1 text-16px leading-9">
                في خطوة فاجأت جميع المعنيّين بالشأن السياسيّ، بمن فيهم الكتائبيّون أنفسهم، أعلن نائب المتن ورئيس حزب الكتائب…
            </div>
            <div>
            <div class="flex-row flex items-center ">
                <div class="inline-block rounded-full bg-black-100 px-1">
                    <div class="flex items-center justify-between p-1 pl-2 pr-1">
                        <i class="icon-time ml-2 text-red-700 text-24px"></i>
                        <div class="text-15px">
                        ٧ دقائق للقراءة
                        </div>
                    </div>
                </div>
                <a href="#" class="mr-6 text-red-800 text-15px" >
                    اقرأ أكثر
                </a>
                </div>
            </div>
        </div>
    </div>
</a>
