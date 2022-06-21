    
    {{-- Desktop Sidebar --}}
    <div class="fixed">
        <aside class="z-20 hidden w-64 overflow-y-auto scrollbar-hide h-screen bg-white md:block flex-shrink-0 border-r-2 border-gray-100">
            <div class="pt-4 text-gray-500 flex flex-col h-full">
                
                <a href="#" class="ml-6 text-lg font-bold text-gray-800 flex-none">
                    {{ Helper::getCompanyInformation()->name }}
                </a>
                <div class="mt-6 flex-auto text-sm font-medium" style="color: #495057; letter-spacing: .015em; ">
                    <ul class="space-y-1">
                        {{-- home --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg @isset($menu) @if($menu == 'home') bg-gray-100 text-black @endif @endisset ">
                                <span class="w-5 text-center mr-4 ">
                                    <i class="fa-solid fa-house"></i>
                                </span>
                                <span>Home</span>
                            </a>
                        </li>
                        {{-- dashboard --}}
                        <li class="px-6">
                            <a href="{{ route('dashboard') }}" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'dashboard') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-table-columns"></i>
                                </span>
                                <span>My Dashboard</span>
                            </a>
                        </li>
                        {{-- notification --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'notifications') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-bell"></i>
                                </span>
                                <span>Notifications</span>
                            </a>
                        </li>
                    </ul>
                    <div class="px-6 py-2"><hr></div>
                    <ul class="space-y-1">
                        {{-- students --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'students') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-users"></i>
                                </span>
                                <span>Students</span>
                            </a>
                        </li>

                        {{-- class --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'classes') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-list"></i>
                                </span>
                                <span>Classes</span>
                            </a>
                        </li>
                        
                        {{-- subjects --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'subjects') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                </span>
                                <span>Subjects</span>
                            </a>
                        </li>
                        {{-- faculty --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'faculty') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-user-tie"></i>
                                </span>
                                <span>Faculty</span>
                            </a>
                        </li>
                        {{-- departments --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'departments') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-building-columns"></i>
                                </span>
                                <span>Departments</span>
                            </a>
                        </li>
                        {{-- rooms --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'rooms') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                </span>
                                <span>Rooms</span>
                            </a>
                        </li>
                        {{-- settings --}}
                        <li class="px-6">
                            <a href="#" class="px-4 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-black rounded-lg  @isset($menu) @if($menu == 'settings') bg-gray-100 text-black @endif @endisset">
                                <span class="w-5 text-center mr-4">
                                    <i class="fa-solid fa-gears"></i>
                                </span>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>4
                </div>
            </div>
        </aside>
    </div>