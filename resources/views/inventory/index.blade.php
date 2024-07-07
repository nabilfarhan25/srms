<x-app-layout>

    <div class="p-5">
        <div class="flex justify-between p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                <!-- Breadcrumb -->
                @php
                $bread = [
                // ['url' => '/', 'label' => 'Dashboard'],
                ['url' => '/inventory', 'label' => 'Inventory','active' => true],
                ];
                @endphp
                <x-bread :items="$bread" />
                
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

        <div class="sm:grid grid-cols-4 gap-2 mb-5">
            <div class="col-span-3 p-5 mb-3 sm:mb-0 flex flex-col justify-between bg-white rounded-2xl bg-center bg-cover"
                style="background-image: url('/components/inventory-bg.webp')">
                <h2 class="text-white text-3xl font-bold uppercase mb-5">
                    Slope Inventory<br>System
                </h2>

                <div class="text-white sm:flex">
                    <a href="/inventory">
                        <div
                            class=" bg-white text-gray-800 border-2 font-semibold border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                            <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                            </svg>

                            Slope Inventory
                        </div>
                    </a>
                    <a href="/management">
                        <div
                            class=" border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                            <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>

                            Slope Priority
                        </div>
                    </a>
                    <a href="/inspection">
                        <div
                            class=" border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                            <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>

                            Inspection
                        </div>
                    </a>
                    <a href="/mitigation">
                        <div
                            class=" border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">

                            <svg class="w-6 h-6 mr-2s" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z" />
                            </svg>
                            Mitigation
                        </div>
                    </a>
                    <a href="/map">
                        <div
                            class=" border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                            <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            Slope Information
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div
                    class=" p-3 sm:p-5 h-32 bg-white border border-gray-200 shadow-sm rounded-2xl mb-2 hover:bg-lime-600 group transition duration-150">
                    <h2
                        class="text-3xl font-thin group-hover:text-white group-hover:animate-fade-left animate-once animate-duration-500 animate-ease-in-out">
                        {{count($slopes)}} Slope
                    </h2>
                    <p class="text-lg font-semibold text-gray-800">
                        Total Slope
                    </p>
                </div>
                <div
                    class=" p-3 sm:p-5 h-32 bg-white border border-gray-200 shadow-sm rounded-2xl mb-2 hover:bg-lime-600 group transition duration-150">
                    <h2
                        class="text-3xl font-thin group-hover:text-white group-hover:animate-fade-left animate-once animate-duration-500 animate-ease-in-out">
                        {{$sideA}} Slope
                    </h2>
                    <p class="text-lg font-semibold text-gray-800">
                        Side A
                    </p>
                </div>
                <div
                    class=" p-3 sm:p-5 h-32 bg-white border border-gray-200 shadow-sm rounded-2xl hover:bg-lime-600 group transition duration-150">
                    <h2
                        class="text-3xl font-thin group-hover:text-white group-hover:animate-fade-left animate-once animate-duration-500 animate-ease-in-out">
                        {{$sideB}} Slope
                    </h2>
                    <p class="text-lg font-semibold text-gray-800">
                        Side B
                    </p>
                </div>
            </div>
        </div>

        {{-- ALERT --}}
        @if ($errors->any())
        <div id="alert-2"
            class="flex p-4 mb-4 text-red-800 rounded-lg border border-red-600 bg-red-200 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <div>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Danger</span>
                    <span class="font-medium">Ensure that these requirements are met:</span>
                </div>
                <ul class="mt-1.5 list-disc list-inside ml-8">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endif

        <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div class="sm:flex justify-between mb-5">
                <div>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <input type="text" id="table-search"
                            class="block p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full w-80 bg-gray-50 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                            placeholder="Search for Slope">

                    </div>
                </div>
                @auth
                @if (Auth::user()->isAdmin())
                <x-primary-button data-modal-target="addslope-modal" data-modal-toggle="addslope-modal" type="button">
                    Add Slope
                </x-primary-button>

                <!-- Add Slope modal -->
                <div id="addslope-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-3xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add New Slope
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="addslope-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="p-4 md:p-5" method="POST" action="">
                                @csrf

                                <div class="grid gap-4 mb-4 grid-cols-2">

                                    <div class="col-span-2">
                                        <label for="slope_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Slope
                                            Name</label>
                                        <input type="text" name="slope_name" id="slope_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="Type a unique slope name">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="location"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Location</label>
                                        <input type="text" name="location" id="location"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="sta1"
                                            class="block text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>STA</label>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="sta1" id="sta1"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="0+000">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="sta2" id="sta2"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="0+000">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="latitude"
                                            class="block text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Coordinate</label>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="latitude" id="latitude"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="Latitude">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="longtitude" id="longtitude"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="Longtitude">
                                    </div>


                                    <div class="col-span-2">
                                        <label for="gps1"
                                            class="block text-sm font-medium text-gray-900 dark:text-white">GPS</label>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="gps1" id="gps1"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="S:">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="gps2" id="gps2"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="E:">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="category"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Side
                                            of Road</label>
                                        <select id="category" name="side_of_road"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="A" selected hidden>Select Side..</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>

                                        </select>
                                    </div>

                                </div>

                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Slope
                                    Type</label>
                                <ul class="mb-5 grid w-full gap-3 md:grid-cols-2">
                                    <li>
                                        <input type="hidden" name="slope_type" value="" />
                                        <input type="radio" id="cut-type" name="slope_type" value="cut-type"
                                            class="hidden peer">
                                        <label for="cut-type"
                                            class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Cut Slope</div>
                                            </div>
                                            <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="fill-type" name="slope_type" value="fill-type"
                                            class="hidden peer">
                                        <label for="fill-type"
                                            class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Fill Slope</div>
                                            </div>
                                            <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="rock-type" name="slope_type" value="rock-type"
                                            class="hidden peer">
                                        <label for="rock-type"
                                            class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Rock Slope</div>
                                            </div>
                                            <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="retaining-type" name="slope_type" value="retaining-type"
                                            class="hidden peer">
                                        <label for="retaining-type"
                                            class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Retaining Walls</div>
                                            </div>
                                            <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="combine-type" name="slope_type" value="combine-type"
                                            class="hidden peer">
                                        <label for="combine-type"
                                            class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Combined Slope</div>
                                            </div>
                                            <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                </ul>

                                <button type="submit"
                                    class="text-white inline-flex items-center bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-lime-600 dark:hover:bg-lime-700 dark:focus:ring-lime-800">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Add new slope
                                </button>


                            </form>
                        </div>
                    </div>
                </div>

                @endif
                @endauth
            </div>

            @foreach ($slopes as $slope)
            <div
                class="flex px-5 py-3 mb-4 rounded-lg bg-gray-50 border border-gray-200 hover:bg-gray-100 hover:border-lime-600">
                <div class="w-full border-r border-gray-300">
                    <div class="text-lg font-bold">{{$slope->slope_name}}</div>
                    <p class="text-sm text-gray-500">
                        Updated at: {{$slope->updated_at}}
                    </p>
                </div>
                <div class="w-full text-center border-r border-gray-300">
                    <p class="text-sm text-gray-500">
                        Location :
                    </p>
                    <div class=" font-semibold">{{$slope->location}}</div>
                </div>
                <div class="w-full md:block hidden text-center border-r border-gray-300">
                    <p class="text-sm text-gray-500">
                        Coordinate :
                    </p>
                    <div class=" font-semibold">Long: {{$slope->longtitude}} - Lat : {{$slope->latitude}}</div>
                </div>
                <div class="w-full md:block hidden text-center border-r border-gray-300">
                    <p class="text-sm text-gray-500">
                        KM :
                    </p>
                    <div class=" font-semibold">{{$slope->sta1}} - {{$slope->sta2}}</div>
                </div>
                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                    <p class="text-sm my-auto text-gray-500">Side of Road : <span
                            class="font-semibold text-gray-800">{{$slope->side_of_road}}</span>
                    </p>
                </div>
                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                    <p class="text-sm my-auto text-gray-500">Slope Type : <span
                            class="text-base font-semibold border-2 border-gray-300 px-3 rounded-full text-gray-800">
                            {{$slope->slope_type}}</span>
                    </p>
                </div>
                <div class="w-full sm:flex hidden items-center justify-end pl-5">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <a href="/inventory/{{$slope->slug}}"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-2 focus:ring-lime-700 focus:text-lime-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-lime-500 dark:focus:text-white">
                            <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            Detail
                        </a>
                        <a
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-2 focus:ring-lime-700 focus:text-lime-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-lime-500 dark:focus:text-white">
                            <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                <path
                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                            </svg>
                            Downloads
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @if(!isset($slopes))
            <div>
                <p class=" text-center text-gray-500 font-semibold py-2 bg-stone-100">No Data can be
                    Show
                </p>
            </div>
            @endif
        </div>
    </div>

</x-app-layout>