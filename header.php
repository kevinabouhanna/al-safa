<div class="bg-white shadow">
    <div class="container flex items-center grid grid-cols-3 py-2 md:py-10 max-w-1400px" id="regularTopHeader">
        <div>
            <button class="btn btn-yellow hidden md:block text-15px px-3">
                اشترك في الصحيفة
            </button>
            <button class="btn block md:hidden">
                اشترك
            </button>
        </div>
        <a href="/">
            <img class="md:w-80 w-28 md:h-32 mx-auto" src="images/logo.png" alt="">
        </a>
        <div class="hidden md:flex items-center justify-end">
            <div class="ml-6 flex items-center justify-between cursor-pointer" onclick="searchPreview()">
                <div class="text-15px">
                    بحث
                </div>
                <i class="icon-search_24px mr-3 text-s-1"></i>
            </div>
            <button class="btn btn-white flex items-center justify-between border-black-300">
                <i class="icon-user_24px ml-3 text-s-1"></i>
                <div class="text-15px">
                    تسجيل الدخول
                </div>
            </button>
        </div>
        <div class="text-left block md:hidden ">
            <i class="icon-menu text-2xl" onclick="hamburgListHandler()"></i>
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
            <i class="text-h3 icon-close cursor-pointer p-2" onclick="hamburgListHandler()"></i>
        </div>
    </div>
    <div class="hidden md:flex md:flex flex-col md:flex-row md:items-center md:justify-center md:bg-black-100 md:py-3 md:h-20 md:text-2xl md:text-black-800 md:gap-y-8 md:gap-x-12 md:w-full pr-4" id="smallSearchList">
    <a href="articles.php" class="leading-10 hover:text-red-800 border-0 py-5 mt-4 md:mt-0 hover:bg-red-300 md:hover:bg-transparent hover:border-red-800 ">
            موقف   
        </a>
        <a href="#" class="leading-10  hover:text-red-800 py-5 border-0 md:hover:border-b hover:border-red-800 hover:bg-red-300 md:hover:bg-transparent">
            بالتفصيل   
        </a>
        <a href="#" class="leading-10 hover:text-red-800 py-5 border-0  md:hover:border-b hover:border-red-800 hover:bg-red-300 md:hover:bg-transparent">
            بالعربي 
        </a>
        <a href="#" class="leading-10 hover:text-red-800 py-5 border-0  md:hover:border-b hover:border-red-800 hover:bg-red-300 md:hover:bg-transparent">
            لا سياسي    
        </a>
        <a href="#" class="leading-10 hover:text-red-800 py-5  border-0  md:hover:border-b hover:border-red-800 hover:bg-red-300 md:hover:bg-transparent">
            وثيقة   
        </a>
        <a href="#" class="leading-10 hover:text-red-800 py-5 border-0 md:hover:border-b hover:border-red-800 hover:bg-red-300 md:hover:bg-transparent">
            اضبارة  
        </a>
        <a href="#" class="leading-10 hover:text-red-800 py-5 border-0  md:hover:border-b hover:border-red-800 hover:bg-red-300 md:hover:bg-transparent">
            صوت و صورة  
        </a>
        <div class="md:hidden flex flex-col items-start justify-start pb-10">
            <div class="w-full h-h-1px bg-black-300 mb-8 mt-6"></div>
            <div class="ml-6 flex flex-row-reverse items-center justify-end cursor-pointer w-full" onclick="searchPreviewSmall()">
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
    <div class="hidden top-0 w-full bg-black-200 z-50" id="smallScreenSearch">
        <div class="w-full h-40 ">
            <div class="grid grid-cols-3 h-16 bg-white w-full">
                <div class="flex flex-row items-center justify-center col-start-2">
                    <p class="text-h3 font-bold">بحث</p>
                </div>
                <div class="col-start-3 flex flex-row items-center justify-end">
                    <i class="icon-close text-24px p-3" onclick="closeSearchPreviewSmall()"></i>
                </div>
            </div>
            <div class="h-full w-full bg-white static mt-1 ">
                <div class="h-full pt-4 px-4">
                    <div class="flex flex-row border-2 border-black-300 rounded-full">
                        <div class="flex flex-row justify-center items-center">
                            <i class="icon-search_24px text-24px mr-4"></i>
                        </div>
                        <input type="text" placeholder="بحث" class=" h-8 pr-3 focus:outline-none ">
                    </div>
                </div>
                <div class="h-screen bg-white w-full pt-32">
                    <div class="flex flex-row items-center justify-center">
                        <div classs="flex flex-col justify-center">
                            <i class="icon-article text-34px text-black-500 pr-3"></i>
                            <p class="text-black-600 ">ابدأ البحث</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<div class="md:hidden block h-1 bg-black-100 md:mb-2">

</div>
