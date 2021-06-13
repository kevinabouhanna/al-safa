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
            <i class="icon-menu text-2xl" id="hamburg" onclick="changeBtnPreview()"></i>
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
    <div class="flex flex-col md:flex-row md:items-center md:justify-center md:bg-black-100 md:py-3 md:h-20 md:text-2xl md:text-black-800 md:gap-y-8 md:gap-x-12 md:w-full pr-4">
        <a href="articles.php" class="leading-10 hover:bg-red-300 hover:text-red-800 p-2 mt-4 md:mt-0 md:relative">
            موقف    <div class="hidden md:block md:absolute md:-bottom-3 md:left-0 md:w-full md:h-1 md:bg-red-800"></div>
        </a>
        <a href="#" class="leading-10 hover:bg-red-300 hover:text-red-800 p-2 md:relative">
            بالتفصيل    <div class="hidden md:block md:absolute md:-bottom-3 md:left-0 md:w-full md:h-1 md:bg-red-800"></div>
        </a>
        <a href="#" class="leading-10 hover:bg-red-300 hover:text-red-800 p-2 md:relative">
            بالعربي <div class="hidden md:block md:absolute md:-bottom-3 md:left-0 md:w-full md:h-1 md:bg-red-800"></div>
        </a>
        <a href="#" class="leading-10 hover:bg-red-300 hover:text-red-800 p-2 md:relative">
            لا سياسي    <div class="hidden md:block md:absolute md:-bottom-3 md:left-0 md:w-full md:h-1 md:bg-red-800"></div>
        </a>
        <a href="#" class="leading-10 hover:bg-red-300 hover:text-red-800 p-2 md:relative">
            وثيقة   <div class="hidden md:block md:absolute md:-bottom-3 md:left-0 md:w-full md:h-1 md:bg-red-800"></div>
        </a>
        <a href="#" class="leading-10 hover:bg-red-300 hover:text-red-800 p-2 md:relative">
            اضبارة  <div class="hidden md:block md:absolute md:-bottom-3 md:left-0 md:w-full md:h-1 md:bg-red-800"></div>
        </a>
        <a href="#" class="leading-10 hover:bg-red-300 hover:text-red-800 p-2 md:relative">
            صوت و صورة  <div class="hidden md:block md:absolute md:-bottom-3 md:left-0 md:w-full md:h-1 md:bg-red-800"></div>
        </a>
        <div class="md:hidden flex flex-col items-start justify-start pb-10">
            <div class="w-full h-h-1px bg-black-300 mb-8 mt-6"></div>
            <div class="ml-6 flex flex-row-reverse items-center justify-between cursor-pointer" onclick="searchPreview()">
                <div class="text-15px">
                    بحث
                </div>
                <i class="icon-search_24px ml-3 text-24px"></i>
            </div>
            <button class="btn btn-white flex items-center justify-between p-0 mt-9">
                <i class="icon-user_24px ml-3 text-24px"></i>
                <div class="text-15px">
                    تسجيل الدخول
                </div>
            </button>
        </div>
    </div>
</div>
<div class="md:hidden block h-2 bg-black-100 mb-6">

</div>
