
<div  x-data="{ showBar: false }">
    <nav id="header" class=" w-full z-30 top-0 py-1 bg-white border-b" :class="{ ' border-gray-200 shadow-sm shadow-gray-200 transition duration-100' : showBar }"
        @scroll.window="showBar = (window.pageYOffset > 20) ? true : false">
        <div class="w-full container flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <div class="text-base text-black  font-medium flex items-center" style="letter-spacing: .015em; ">
                    My Dashboard
                </div>
            </div>

            <div class="order-1 md:order-2 block md:hidden">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                    {{ Helper::getCompanyInformation()->name }}
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <div class="flex items-center justify-center bg-white rounded-full border border-stone-300 w-11 h-11 focus:outline-none focus:shadow-outline-stone">
                    <img src="{{ asset('storage/images/users/'. Auth::user()->profile_photo_path) }}" 
                        class="h-10 w-10 rounded-full object-cover"
                    />
                </div>

            </div>
        </div>
    </nav>
</div>