    
    {{-- Desktop Sidebar --}}
    <div class="fixed">
        <aside class="z-20 hidden w-64 overflow-y-auto scrollbar-hide h-screen bg-white md:block flex-shrink-0 shadow-sm shadow-stone-200 border-r border-stone-100">
            <div class="pt-4 text-stone-500 flex flex-col h-full">
                
                <a href="#" class="ml-6 text-lg font-bold text-stone-800 flex-none">
                    {{ Helper::getCompanyInformation()->name }}
                </a>
                <div class="mt-6 flex-auto text-black text-sm" style="font-weight: 600;">
                    <ul class="space-y-1">
                        {{-- dashboard --}}
                        <li class="px-4">
                            <a href="{{ route('dashboard') }}" class="px-6 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'dashboard') bg-stone-100 text-stone-500 @endif @endisset ">
                                <svg class="w-5 h-5" style=" fill:@isset($menu) @if($menu == 'dashboard') #78716c; @endif @endisset " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48" ><path d="M 23.951172 4 A 1.50015 1.50015 0 0 0 23.072266 4.3222656 L 8.859375 15.519531 C 7.0554772 16.941163 6 19.113506 6 21.410156 L 6 40.5 C 6 41.863594 7.1364058 43 8.5 43 L 18.5 43 C 19.863594 43 21 41.863594 21 40.5 L 21 30.5 C 21 30.204955 21.204955 30 21.5 30 L 26.5 30 C 26.795045 30 27 30.204955 27 30.5 L 27 40.5 C 27 41.863594 28.136406 43 29.5 43 L 39.5 43 C 40.863594 43 42 41.863594 42 40.5 L 42 21.410156 C 42 19.113506 40.944523 16.941163 39.140625 15.519531 L 24.927734 4.3222656 A 1.50015 1.50015 0 0 0 23.951172 4 z M 24 7.4101562 L 37.285156 17.876953 C 38.369258 18.731322 39 20.030807 39 21.410156 L 39 40 L 30 40 L 30 30.5 C 30 28.585045 28.414955 27 26.5 27 L 21.5 27 C 19.585045 27 18 28.585045 18 30.5 L 18 40 L 9 40 L 9 21.410156 C 9 20.030807 9.6307412 18.731322 10.714844 17.876953 L 24 7.4101562 z"></path></svg>
                                <span class="ml-6">Dashboard</span>
                            </a>
                        </li>
                        {{-- attendance --}}
                        <li class="px-4" x-data="{ leave_attendance: @isset($menu) @if($menu == 'attendance' || $menu == 'leave') true @else false @endif @endisset }">
                            <button class="px-6 py-3 flex justify-between items-center w-full transition-colors duration-150 font-semibold hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'attendance'  || $menu == 'leave') bg-stone-100 text-stone-500 @endif @endisset "
                                @click="leave_attendance = !leave_attendance"
                                aria-haspopup="true" >
                                <span class="inline-flex items-center">
                                    <svg class="w-5 h-5" style=" fill:@isset($menu) @if($menu == 'attendance') #78716c; @endif @endisset " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48" style=" fill:#000000;"><path d="M 24 4 C 12.972066 4 4 12.972074 4 24 C 4 35.027926 12.972066 44 24 44 C 35.027934 44 44 35.027926 44 24 C 44 12.972074 35.027934 4 24 4 z M 24 7 C 33.406615 7 41 14.593391 41 24 C 41 33.406609 33.406615 41 24 41 C 14.593385 41 7 33.406609 7 24 C 7 14.593391 14.593385 7 24 7 z M 23.476562 11.978516 A 1.50015 1.50015 0 0 0 22 13.5 L 22 25.5 A 1.50015 1.50015 0 0 0 23.5 27 L 31.5 27 A 1.50015 1.50015 0 1 0 31.5 24 L 25 24 L 25 13.5 A 1.50015 1.50015 0 0 0 23.476562 11.978516 z"></path></svg>
                                    <span class="ml-6">Attendance</span>
                                </span>
                                <svg
                                    class="w-4 h-4"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    >
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" ></path>
                                </svg>
                            </button>
                            <template x-if="leave_attendance">
                                <ul
                                    x-transition:enter="transition-all ease-in-out duration-300"
                                    x-transition:enter-start="opacity-25 max-h-0"
                                    x-transition:enter-end="opacity-100 max-h-xl"
                                    x-transition:leave="transition-all ease-in-out duration-300"
                                    x-transition:leave-start="opacity-100 max-h-xl"
                                    x-transition:leave-end="opacity-0 max-h-0"
                                    class="p-2 space-y-2 overflow-hidden text-black " 
                                    aria-label="submenu" >

                                    <li class="px-12 py-1 transition-colors duration-150 hover:text-stone-900 @isset($menu) @if($menu == 'attendance') text-stone-500 @endif @endisset" >
                                        <a href="#">
                                            <span class="ml-3">
                                                Attendance
                                            </span>
                                        </a>
                                    </li>
                                    <li class="px-12 py-1 transition-colors duration-150 hover:text-stone-900 @isset($menu) @if($menu == 'leave') text-stone-500 @endif @endisset" >
                                        <a href="#">
                                            <span class="ml-3">
                                                Leave
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                        {{-- report --}}
                        <li class="px-4">
                            <a href="#" class="px-6 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'report') bg-stone-100 text-stone-500 @endif @endisset " >
                                <svg class="w-5 h-5" style=" fill:@isset($menu) @if($menu == 'report') #78716c; @endif @endisset "xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"viewBox="0 0 48 48"><path d="M 12.5 4 C 10.032499 4 8 6.0324991 8 8.5 L 8 39.5 C 8 41.967501 10.032499 44 12.5 44 L 35.5 44 C 37.967501 44 40 41.967501 40 39.5 L 40 18.5 A 1.50015 1.50015 0 0 0 39.560547 17.439453 L 39.544922 17.423828 L 26.560547 4.4394531 A 1.50015 1.50015 0 0 0 25.5 4 L 12.5 4 z M 12.5 7 L 24 7 L 24 15.5 C 24 17.967501 26.032499 20 28.5 20 L 37 20 L 37 39.5 C 37 40.346499 36.346499 41 35.5 41 L 12.5 41 C 11.653501 41 11 40.346499 11 39.5 L 11 8.5 C 11 7.6535009 11.653501 7 12.5 7 z M 27 9.1210938 L 34.878906 17 L 28.5 17 C 27.653501 17 27 16.346499 27 15.5 L 27 9.1210938 z M 17.5 25 A 1.50015 1.50015 0 1 0 17.5 28 L 30.5 28 A 1.50015 1.50015 0 1 0 30.5 25 L 17.5 25 z M 17.5 32 A 1.50015 1.50015 0 1 0 17.5 35 L 26.5 35 A 1.50015 1.50015 0 1 0 26.5 32 L 17.5 32 z"></path></svg>
                                <span class="ml-6">Report</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- PROFILE --}}
                <div x-cloak x-data="{ profileDropdown: false }" class="flex flex-col border border-stone-200 rounded-t-2xl">
                    {{-- profile button --}}
                    <button x-on:click="profileDropdown = !profileDropdown" class="px-4 py-4 flex justify-between space-x-2 focus:outline-none border-0">
                        <div class="flex">
                            <div class="flex-none flex justify-center items-center w-12">
                                <div class="flex items-center justify-center bg-white rounded-xl border border-stone-300 p-1 focus:outline-none focus:shadow-outline-stone">
                                    <img src="{{ asset('storage/img/users/'. Auth::user()->profile_photo_path) }}" 
                                        class="h-10 w-10 rounded-lg object-cover"
                                    />
                                </div>
                            </div>
                            <div class="flex-auto flex items-center justify-center">
                                <div class="w-40 px-2">
                                    <p class="text-left text-sm font-bold leading-5 text-stone-900">
                                        {{ Auth::user()->informal_name() }}
                                    </p>
                                    <p class="text-left text-sm font-medium line-clamp-2 text-stone-500">
                                        <span class="">{{ Auth::user()->email }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none flex items-center justify-center m-1 h-10 fa-sm text-stone-400">
                            <i class="fa-solid fa-angles-down"></i>
                        </div>
                    </button>
                    {{-- DROPDOWN --}}
                    <div x-show="profileDropdown" class="w-full text-black text-sm pb-4" style="font-weight: 600;">
                        <ul class="space-y-1">
                            {{-- profile --}}
                            <li class="px-4">
                                <a href="#" class="px-6 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'profile') bg-stone-100 text-stone-500 @endif @endisset ">
                                    <i class="@isset($menu) {{ $menu == 'profile' ? 'text-stone-500' : 'text-stone-900' }} @endisset fa-solid fa-user"></i>
                                    <span class="ml-6">My Profile</span>
                                </a>
                            </li>
                            <li class="px-4">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="px-6 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'home') bg-stone-100 text-stone-500 @endif @endisset ">
                                        <i class=" fa-solid fa-arrow-right-from-bracket "></i>
                                        <span class="ml-6">Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </aside>
    </div>
    {{-- Mobile Sidebar --}}
    <div x-cloak class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
    </div>
    <aside x-cloak class="fixed inset-y-0 z-20 flex-shrink-0 w-64 overflow-y-auto bg-white md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -transtone-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -transtone-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu" >

        <div class="pt-4 text-stone-500 flex flex-col h-full">
                
            <a href="#" class="ml-6 text-lg font-bold text-stone-800 flex-none">
                {{ Helper::getCompanyInformation()->name }}
            </a>
            <div class="mt-6 flex-auto text-black text-sm" style="font-weight: 600;">
                <ul class="space-y-1">
                    {{-- dashboard --}}
                    <li class="px-4">
                        <a href="{{ route('dashboard') }}" class="px-6 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'dashboard') bg-stone-100 text-stone-500 @endif @endisset ">
                            <svg class="w-5 h-5" style=" fill:@isset($menu) @if($menu == 'dashboard') #78716c; @endif @endisset " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48" ><path d="M 23.951172 4 A 1.50015 1.50015 0 0 0 23.072266 4.3222656 L 8.859375 15.519531 C 7.0554772 16.941163 6 19.113506 6 21.410156 L 6 40.5 C 6 41.863594 7.1364058 43 8.5 43 L 18.5 43 C 19.863594 43 21 41.863594 21 40.5 L 21 30.5 C 21 30.204955 21.204955 30 21.5 30 L 26.5 30 C 26.795045 30 27 30.204955 27 30.5 L 27 40.5 C 27 41.863594 28.136406 43 29.5 43 L 39.5 43 C 40.863594 43 42 41.863594 42 40.5 L 42 21.410156 C 42 19.113506 40.944523 16.941163 39.140625 15.519531 L 24.927734 4.3222656 A 1.50015 1.50015 0 0 0 23.951172 4 z M 24 7.4101562 L 37.285156 17.876953 C 38.369258 18.731322 39 20.030807 39 21.410156 L 39 40 L 30 40 L 30 30.5 C 30 28.585045 28.414955 27 26.5 27 L 21.5 27 C 19.585045 27 18 28.585045 18 30.5 L 18 40 L 9 40 L 9 21.410156 C 9 20.030807 9.6307412 18.731322 10.714844 17.876953 L 24 7.4101562 z"></path></svg>
                            <span class="ml-6">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- PROFILE --}}
            <div x-cloak x-data="{ profileDropdown: false }" class="flex flex-col border border-stone-200 rounded-t-2xl">
                {{-- profile button --}}
                <button x-on:click="profileDropdown = !profileDropdown" class="px-4 py-4 flex justify-between space-x-2 focus:outline-none border-0">
                    <div class="flex">
                        <div class="flex-none flex justify-center items-center w-12">
                            <div class="flex items-center justify-center bg-white rounded-xl border border-stone-300 p-1 focus:outline-none focus:shadow-outline-stone">
                                <img src="{{ asset('storage/img/users/'. Auth::user()->profile_photo_path) }}" 
                                    class="h-10 w-10 rounded-lg object-cover"
                                />
                            </div>
                        </div>
                        <div class="flex-auto flex items-center justify-center">
                            <div class="w-40 px-2">
                                <p class="text-left text-sm font-bold leading-5 text-stone-900">
                                    {{ Auth::user()->informal_name() }}
                                </p>
                                <p class="text-left text-sm font-medium line-clamp-2 text-stone-500">
                                    <span class="">{{ Auth::user()->email }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none flex items-center justify-center m-1 h-10 fa-sm text-stone-400">
                        <i class="fa-solid fa-angles-down"></i>
                    </div>
                </button>
                {{-- DROPDOWN --}}
                <div x-show="profileDropdown" class="w-full text-black text-sm pb-4" style="font-weight: 600;">
                    <ul class="space-y-1">
                        {{-- profile --}}
                        <li class="px-4">
                            <a href="#" class="px-6 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'profile') bg-stone-100 text-stone-500 @endif @endisset ">
                                <i class="@isset($menu) {{ $menu == 'profile' ? 'text-stone-500' : 'text-stone-900' }} @endisset fa-solid fa-user"></i>
                                <span class="ml-6">My Profile</span>
                            </a>
                        </li>
                        <li class="px-4">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="px-6 py-3 inline-flex items-center w-full transition-colors duration-150 hover:text-stone-500 rounded-full @isset($menu) @if($menu == 'home') bg-stone-100 text-stone-500 @endif @endisset ">
                                    <i class=" fa-solid fa-arrow-right-from-bracket "></i>
                                    <span class="ml-6">Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </aside>

    <!-- Mobile hamburger -->
    <div class="fixed top-0 left-0 p-4">
        <button class="p-2 rounded-xl md:hidden focus:outline-none text-white bg-stone-900"
            @click="toggleSideMenu"
            aria-label="Menu">
            <svg class="w-5 h-5"  style=" fill:#fff;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48"><path d="M 5.5 9 A 1.50015 1.50015 0 1 0 5.5 12 L 42.5 12 A 1.50015 1.50015 0 1 0 42.5 9 L 5.5 9 z M 5.5 22.5 A 1.50015 1.50015 0 1 0 5.5 25.5 L 42.5 25.5 A 1.50015 1.50015 0 1 0 42.5 22.5 L 5.5 22.5 z M 5.5 36 A 1.50015 1.50015 0 1 0 5.5 39 L 42.5 39 A 1.50015 1.50015 0 1 0 42.5 36 L 5.5 36 z"></path></svg>
        </button>
    </div>