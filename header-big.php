<div class="bg-white">
    <div class="container flex items-center grid grid-cols-3 py-2 md:py-12 max-w-1400px" id="regularTopHeader">
        <div class="">
            <button class="btn btn-yellow hidden md:block text-15px px-6">
                اشترك في الصحيفة
            </button>
            <button class="btn block md:hidden">
                اشترك
            </button>
        </div>
        <div class="flex flex-row justify-center">
            <a href="/">
                <img src="./images/logo.png" alt="Al-Safaa Logo Image" class="sm:w-100 w-93px ">
            </a>
        </div>
        <div class="hidden md:flex items-center justify-end">
            <div class="ml-6 flex items-center justify-between cursor-pointer h-10" onclick="searchPreview()">
                <div class="text-15px">
                    بحث
                </div>
                <i class="icon-search_24px mr-3 text-18px"></i>
            </div>
            <button class="btn btn-white flex items-center justify-between border-black-400">
                <i class="icon-user_24px ml-3 text-18px"></i>
                <div class="text-15px">
                    تسجيل الدخول
                </div>
            </button>
        </div>
        <div class="text-left block md:hidden">
            <i class="icon-menu text-2xl"></i>
        </div>
    </div>
    <div class="z-20 container flex items-center grid grid-cols-3 py-2 md:py-6 bg-yellow-500 hidden h-64"
         id="searchTopHeader">
        <div class="flex items-center gap-2">
            <i class="icon-search_24px text-h3"></i>
            <input onkeydown="showSearchPage(this.value)" class="bg-yellow-500 focus:outline-none font-bold text-h3" type="text"
                   placeholder="بحث">
        </div>
        <div class="opacity-0 w-full">
            <img class="w-full md:w-96 md:h-40 mx-auto" src="images/logo.png" alt="">
        </div>
        <div class="flex items-center justify-end w-full">
            <i class="text-h3 icon-close cursor-pointer" onclick="closeSearchPreview()"></i>
        </div>
    </div>
    <div class="hidden md:flex items-center justify-center bg-black-100 py-3 h-20 text-2xl text-black-800 gap-y-8 gap-x-12 w-full">
        <a href="articles.php">
            موقف
        </a>
        <a href="#">
            بالتفصيل
        </a>
        <a href="#">
            بالعربي
        </a>
        <a href="#">
            لا سياسي
        </a>
        <a href="#">
            وثيقة
        </a>
        <a href="#">
            اضبارة
        </a>
        <a href="#">
            صوت و صورة
        </a>
    </div>
</div>
<div class="md:hidden block h-2 bg-black-100 mb-6">

</div>
