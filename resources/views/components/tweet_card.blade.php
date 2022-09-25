<div class="mt-6 bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
    <div class="px-4 py-8 sm:px-10">
        <div class="relative mt-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300">
                </div>
            </div>
            <div class="relative flex justify-center text-sm leading-5">
                <span class="font-bold px-2 text-gray-500 bg-white">
                    tweetを入れやがれ
                </span>
            </div>
        </div>
        <div class="mt-6">
            <div class="w-full space-y-6">
                <div class="w-full">
                    <div class=" relative ">
                        <form action="" method="'post">
                            @csrf
                            <textarea cols="30" rows="5" type="text" id="search-form-price"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="ツイートを入れて"></textarea>
                    </div>
                </div>
                <div>
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="button"
                            class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            ツイートする
                        </button>
                    </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
