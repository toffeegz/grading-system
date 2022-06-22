<div class="bg-white w-full md:pl-5 pl-1 pr-5 py-3 border-b border-gray-100">
    {{-- header --}}
    <div class="flex">
        <div class="flex-auto flex">
            <div class="md:hidden flex">
                <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150">
                    <span class="w-5 text-center text-black">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </a>
            </div>
            <div class="text-base text-black  font-medium flex items-center" style="letter-spacing: .015em; ">
                My Dashboard
            </div>
        </div>
        <div class="flex-none flex justify-center items-center w-12">
            <div class="flex items-center justify-center bg-white rounded-full border border-stone-300 w-11 h-11 focus:outline-none focus:shadow-outline-stone">
                <img src="{{ asset('storage/images/users/'. Auth::user()->profile_photo_path) }}" 
                    class="h-10 w-10 rounded-full object-cover"
                />
            </div>
        </div>
    </div>
    {{-- sub-header --}}

</div>