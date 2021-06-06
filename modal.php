<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="icons.css">

    <title>Modal</title>
</head>

<body dir="rtl">
<div class="container max-w-1400px z-50 absolute top-52 left-0 right-0 shadow-outter-dash p-0">
    <div class="bg-white w-full h-788px flex flex-col justify-center lg:pr-26 lg:pl-10 px-5">
        <div class="grid grid-cols-2 content-center">
        <div class="absolute top-10 left-10">
            <button class="focus:outline-none">
                <i class="icon-close text-h2"></i>
            </button>
        </div>
            <div class="grid col-span-2 lg:col-span-1">
                <div class="flex flex-col justify-center">
                    <h1 class="p-3 md:text-h1 text-s-1 font-bold my-7">
                        إشترك في الصفا
                    </h1>
                    <p class="text-s-1">
                        سنرسل لك أحدث المقالات الموجودة هنا في الصفا مرة واحدة شهريًا
                    </p>
                    <div class="flex flex-row mt-6">
                        <input type="text" placeholder="بريدك الإلكتروني" class="h-14 w-9/12 border-2 text-s-1 pr-4">
                        <div class="flex flex-row items-center mr-1">
                        <button
                            class="mr-4 bg-red-800 text-white rounded-full pl-2 pr-3 flex items-center justify-between hover:bg-red-700 focus:bg-red-600 focus:outline-none text-base font-sans py-2">
                            <p class="px-1.5 ml-2.5 leading-6">
                                إشترك الآن
                            </p>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid lg:col-start-2 lg:col-end-3 justify-items-center row-start-1 col-span-2">
                <img class="mr-10" src="./svgs/modal-subscription.svg">
            </div>
        </div>
    </div>
</div>
</body>
</html>