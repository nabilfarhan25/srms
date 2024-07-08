<x-app-layout>
    {{--
    <x-header /> --}}
    <div class="p-5">
        <div class="flex justify-between p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                <nav class="sm:flex justify-between hidden" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center">
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 16 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-10v.4A3.6 3.6 0 0 1 8.4 9H6.61A3.6 3.6 0 0 0 3 12.605M14.458 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                                <a href="/"
                                    class="mr-3 text-sm font-medium text-gray-700 hover:text-lime-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
                            </div>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <button id="dropdownDatabase" data-dropdown-toggle="dropdown-database"
                                    class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">

                                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10 3v4a1 1 0 0 1-1 1H5m4 10v-2m3 2v-6m3 6v-3m4-11v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                                    </svg>

                                    Inspection<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="dropdown-database"
                                    class="bg-white z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefault">
                                        <li>
                                            <a href="/inventory"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Slope
                                                Inventory</a>
                                        </li>
                                        <li>
                                            <a href="/management"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Slope
                                                Priority</a>
                                        </li>
                                        <li>
                                            <a href="/inspection"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inspection</a>
                                        </li>
                                        <li>
                                            <a href="mitigation"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mitigation</a>
                                        </li>
                                        <li>
                                            <a href="/map"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Slope
                                                Info</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 16 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-10v.4A3.6 3.6 0 0 1 8.4 9H6.61A3.6 3.6 0 0 0 3 12.605M14.458 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                                <a href="#"
                                    class="mr-3 text-sm font-medium text-gray-700 hover:text-lime-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">SP-00A</a>
                            </div>
                        </li>

                        <span class="mx-2 text-gray-400">/</span>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 16 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-10v.4A3.6 3.6 0 0 1 8.4 9H6.61A3.6 3.6 0 0 0 3 12.605M14.458 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                                <a href="#"
                                    class="mr-3 text-sm font-medium text-gray-700 hover:text-lime-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Engineer
                                    Inspection</a>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>
            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                class="inline-flex items-center p-2 text-sm font-medium text-center bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <div class="mr-3 font-medium text-base text-gray-800">Welcome, {{ Auth::user()->name }}</div>
                <svg class="w-5 h-5 text-lime-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownDots"
                class=" z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                    <li>
                        <a href="/profile"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a {{ __('Log Out') }} </a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                    Out</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4">

            <div>
                <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                    <div>
                        <h2 class="text-gray-700 text-5xl font-bold">
                            SP-00A
                        </h2>
                        <p class="text-gray-500">
                            Location : Tol Semarang - Solo
                        </p>
                    </div>

                    <x-line />
                    <div class="mb-5">
                        <h4 class="text-lg text-gray-700 font-semibold mb-3">
                            Inspection Schedule
                        </h4>

                        <ol class="flex items-center mb-2">
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>
                                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>

                            </li>
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>

                                </div>

                            </li>
                        </ol>

                        <div class="bg-gray-200 p-3 rounded-xl flex w-full">
                            <div class="w-full">
                                latest inspection :
                                <h2 class="font-bold text-lg">
                                    {{date('d M Y', strtotime($slope->updated_at))}}
                                </h2>
                            </div>
                            <div class="w-full">
                                next inspection :
                                <h2 class="font-bold text-lg">
                                    ~20 June 2022
                                </h2>
                            </div>

                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg text-gray-700 font-semibold mb-3">
                            Maintenance Schedule
                        </h4>

                        <ol class="flex items-center mb-2">
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>
                                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>

                            </li>
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>

                                </div>

                            </li>
                        </ol>

                        <div class="bg-gray-200 p-3 rounded-xl flex w-full">
                            <div class="w-full">
                                latest inspection :
                                <h2 class="font-bold text-lg">
                                    20 June 2022
                                </h2>
                            </div>
                            <div class="w-full">
                                next inspection :
                                <h2 class="font-bold text-lg">
                                    20 June 2022
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-2 p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">


                <div class="mb-5">
                    <a href="/inspection/sp-00a"
                        class="inline-flex items-center justify-center px-4 py-2 border border-lime-600 rounded-full text-lime-600 hover:bg-lime-600 hover:text-white transition duration-150">
                        <svg class="w-5 h-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m15 19-7-7 7-7" />
                        </svg>
                        Back
                    </a>
                </div>

                <h2 class="text-xl font-bold mb-6">
                    Current Slope Ranking
                </h2>

                <div class="grid grid-cols-4 gap-4 mb-20">
                    <div class="">
                        <p class="">
                            Ranking Score (RS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->TS*0.062,2)}}
                        </h2>
                    </div>

                    <div class="">
                        <p class="">
                            Total Score (TS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->TS,2)}}
                        </h2>
                    </div>

                    <div class="">
                        <p class="">
                            Instability Score (IS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->IS,2)}}
                        </h2>
                    </div>

                    <div class="">
                        <p class="">
                            Consequence Score (CS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->CS,2)}}
                        </h2>
                    </div>

                </div>
                <x-line />
                <div>

                    <div class="mb-4">
                        <ul class="flex flex-wrap text-sm font-medium text-center" id="default-styled-tab"
                            data-tabs-toggle="#default-styled-tab-content"
                            data-tabs-active-classes="text-lime-600 hover:text-lime-600 bg-white border border-gray-100"
                            data-tabs-inactive-classes="bg-gray-200 dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            role="tablist">
                            <li class="rounded-l-full bg-gray-200" role="presentation">
                                <button class="inline-block font-bold py-3 px-4 rounded-full" id="profile-styled-tab"
                                    data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Start Inspection</button>
                            </li>
                            <li class="rounded-r-full bg-gray-200" role="presentation">
                                <button
                                    class="inline-block font-bold py-3 px-4 rounded-full hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                    role="tab" aria-controls="dashboard" aria-selected="false">History</button>
                            </li>

                        </ul>
                    </div>
                    <div id="default-styled-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-100 dark:bg-gray-800" id="styled-profile"
                            role="tabpanel" aria-labelledby="profile-tab">

                            <div>
                                <h3 class="font-bold mb-2">
                                    Start Inspection
                                </h3>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iure
                                    autem odio
                                    obcaecati sapiente, velit repellendus quaerat sequi voluptates, nobis, molestias
                                    officia labore aut! Optio voluptates velit nulla rerum eum?</p>
                                <x-primary-link href="/inspection/geometry/{{$slope->slug}}">
                                    Start Inspection
                                </x-primary-link>
                            </div>

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-100 dark:bg-gray-800" id="styled-dashboard"
                            role="tabpanel" aria-labelledby="dashboard-tab">

                            @foreach ($inspections as $inspection)
                            <div
                                class="flex px-5 py-3 mb-4 rounded-lg bg-gray-200 border border-gray-300 hover:border-lime-600">
                                <div class="w-full border-r border-gray-300">
                                    <p class="text-sm text-gray-500">
                                        Inspection on:
                                    </p>
                                    <div class="text-lg font-bold">{{DateTime::createFromFormat('d/m/Y', $inspection->date_of_inspection)->format('d M Y')}}</div>
                                </div>
                                <div class="w-full md:block hidden text-center border-r border-gray-300">
                                    <p class="text-sm text-gray-500">
                                        Ranking Score :
                                    </p>
                                    <div class=" font-semibold">{{round(json_decode($inspection->ranking)->TS*0.062,2)}}</div>
                                </div>

                                <div class="w-full md:block hidden text-center border-r border-gray-300">
                                    <p class="text-sm text-gray-500">
                                        Total Score :
                                    </p>
                                    <div class=" font-semibold">{{round(json_decode($inspection->ranking)->TS,2)}}</div>
                                </div>
                                <div class="w-full md:block hidden text-center border-r border-gray-300">
                                    <p class="text-sm text-gray-500">
                                        Instability Score :
                                    </p>
                                    <div class=" font-semibold">{{round(json_decode($inspection->ranking)->IS,2)}}</div>
                                </div>
                                <div class="w-full md:block hidden text-center">
                                    <p class="text-sm text-gray-500">
                                        Consequence Score :
                                    </p>
                                    <div class=" font-semibold">{{round(json_decode($inspection->ranking)->CS,2)}}</div>
                                </div>
                            </div>
                            @endforeach



                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>
</x-app-layout>