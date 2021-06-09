<div class="bg-black-800">
    <div class="container max-w-1400px">
        <div class="grid grid-cols-1 md:grid-cols-8 gap-10 text-white py-10 md:h-408px pt-16">
            <div class=" flex flex-row justify-center md:col-span-2">
                <i class="icon-logo text-white md:text-89px text-7xl"></i>
            </div>
            <div class="col-span-2">
                <div class="pb-8 border-b border-black-700 w-90% text-s-1 font-bold ">عرض حسب الفئة</div>
                <div>
                    <div class="grid grid-cols-2 md:grid-cols-2 pt-8 text-2xl leading-9">
                        <div>
                            <a href="#" class="block pb-2">موقف</a>
                            <a href="#" class="block pb-2">بالتفصيل</a>
                            <a href="#" class="block pb-2">بالعربي</a>
                            <a href="#" class="block pb-2">لا سياسي</a>
                            <a href="#" class="block pb-2">وثيقة</a>
                        </div>
                        <div>
                            <a href="#" class="block pb-2">اضبارة</a>
                            <a href="#" class="block pb-2">صوت و صورة</a>
                            <a href="podcasts.php" class="block pb-2">البودكاست</a>
                            <a href="#" class="block pb-2">بالأجنبي</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="pb-8 border-b border-black-700 text-s-1 font-bold">أســــــامينا</div>
                <div class="pt-8 grid md:grid-cols-1 grid-cols-2 text-2xl leading-9">
                    <a href="#" class="block pb-2">أسامينا</a>
                    <a href="#" class="block pb-2">هويتنا</a>
                    <a href="#" class="block pb-2">بالعربي</a>
                    <a href="#" class="block pb-2">للتواصل</a>
                    <a href="#" class="block pb-2">خطة الاشتراك</a>
                </div>
            </div>
            <div class="col-span-2 md:col-span-3 md:pr-24 leading-9">
                <div class="pb-10 text-s-1 font-bold">النشرة الاخبارية</div>
                <div class="text-base">
                    كن من أول المطلعين على آخر الاخبار، انضم و كن جزئا من الصفا
                </div>
                <div class="mt-8 flex items-center justify-between">
                    <input class="w-full bg-black-700 rounded-r-full py-2 px-4 focus:outline-none placeholder-white" type="text"
                           placeholder="بريدك الالكتروني">
                    <button class="btn btn-red rounded-r-none px-8">تسجيل</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    let regularTopHeader = document.getElementById('regularTopHeader');
    let searchTopHeader = document.getElementById('searchTopHeader');

    function searchPreview() {
        regularTopHeader.classList.add('hidden');
        searchTopHeader.classList.remove('hidden');
        searchTopHeader.classList.add('flex');
    }

    function closeSearchPreview() {
        regularTopHeader.classList.remove('hidden');
        searchTopHeader.classList.add('hidden');
    }

    function showSearchPage(value) {
        let characterCount = value.length;
        if(characterCount > 1){
            window.location.replace('/search.php');
        }
    }
</script>
