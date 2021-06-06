<div class="bg-white">
    <div class="container flex items-center grid grid-cols-3 py-2 md:py-10" id="regularTopHeader">
        <div class="">
            <button class="btn btn-yellow hidden md:block text-15px px-3">
                اشترك في الصحيفة
            </button>
            <button class="btn block sm:hidden">
                اشترك
            </button>
        </div>
        <a href="/">
            <img class="w-full md:w-80 md:h-32 mx-auto" src="images/logo.png" alt="">
        </a>
        <div class="hidden md:flex items-center justify-end">
            <div class="ml-6 flex items-center justify-between cursor-pointer" onclick="searchPreview()">
                <div class="text-15px">
                    بحث
                </div>
                <i class="icon-search_24px mr-4"></i>
            </div>
            <button class="btn btn-white flex items-center justify-between">
                <i class="icon-user_24px ml-4"></i>
                <div class="text-15px">
                    تسجيل الدخول
                </div>
            </button>
        </div>
        <div class="text-left block md:hidden">
            <i class="icon-menu text-2xl"></i>
        </div>
    </div>
    <div class="z-20 container flex items-center grid grid-cols-3 py-2 bg-yellow-500 hidden h-52"
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
    <div class="hidden md:flex items-center justify-center bg-black-100 py-3 h-20 text-2xl text-black-800 gap-8">
        <a href="articles.php" class="text-red-800 font-black h-full relative flex items-center">
            موقف    <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>
        <a href="#" class="text-red-800 font-black h-full relative flex items-center">
            بالتفصيل    <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>
        <a href="#" class="text-red-800 font-black h-full relative flex items-center">
            بالعربي <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>
        <a href="#" class="text-red-800 font-black h-full relative flex items-center">
            لا سياسي    <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>
        <a href="#" class="text-red-800 font-black h-full relative flex items-center">
            وثيقة   <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>    
        <a href="#" class="text-red-800 font-black h-full relative flex items-center">
            اضبارة  <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>
        <a href="#" class="text-red-800 font-black h-full relative flex items-center">
            صوت و صورة  <div class="absolute -bottom-3 left-0 w-full h-1 bg-red-800"></div>
        </a>
    </div>
</div>
<div class="md:hidden block h-2 bg-black-100 md:mb-6">

</div>
