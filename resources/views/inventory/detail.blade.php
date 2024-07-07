<x-app-layout>
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

                                    Slope Inventory<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
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
            <div class="col-span-2 ">
                <div class="p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">

                    <div class="mb-6 flex justify-between">
                        <div>
                            <h1 class="font-bold text-5xl mb-2">
                                {{$slope->slope_name}}
                            </h1>
                            <p class="text-gray-600">
                                {{$slope->location}}
                            </p>
                        </div>
                        <div>
                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                <a
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-2 focus:ring-lime-700 focus:text-lime-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-lime-500 dark:focus:text-white">
                                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 17v-5h1.5a1.5 1.5 0 1 1 0 3H5m12 2v-5h2m-2 3h2M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m6 4v5h1.375A1.627 1.627 0 0 0 14 15.375v-1.75A1.627 1.627 0 0 0 12.375 12H11Z" />
                                    </svg>
                                    Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                                data-tabs-toggle="#default-styled-tab-content"
                                data-tabs-active-classes="text-lime-600 hover:text-lime-600 dark:text-lime-500 dark:hover:text-lime-500 border-lime-600 dark:border-lime-500"
                                data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                                role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                                        data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Slope Information</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                        role="tab" aria-controls="dashboard" aria-selected="false">Slope Geometry</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="settings-styled-tab" data-tabs-target="#styled-settings" type="button"
                                        role="tab" aria-controls="settings" aria-selected="false">Slope
                                        Characteristic</button>
                                </li>

                            </ul>
                        </div>
                        <div id="default-styled-tab-content">
                            <div class="hidden px-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile"
                                role="tabpanel" aria-labelledby="profile-tab">

                                <div class="grid grid-cols-2 ">
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        Location
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->location}}
                                    </div>
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        Slope Type
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->slope_type}}
                                    </div>
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        Side of Road
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->side_of_road}}
                                    </div>
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        KM :
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->sta1}} |
                                        {{$slope->sta1}}
                                    </div>
                                    <div class="py-5  font-bold">
                                        Coordinate :
                                    </div>
                                    <div class="py-5">
                                        {{$slope->gps1}} |
                                        {{$slope->gps2}}
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard"
                                role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="grid sm:grid-cols-2 ">
                                    <div class="py-5 font-bold">
                                        <h4 class="font-bold mb-2 text-gray-800">Geometry</h4>
                                    </div>
                                    <div class="bg-gray-100">
                                        <div class="relative overflow-x-auto">
                                            <table
                                                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3">

                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Section 1-1
                                                        </th>
                                                        @isset($geometry->section)
                                                        <th scope="col" class="px-6 py-3">
                                                            Section 2-2
                                                        </th>
                                                        @endisset
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Soil Slope
                                                                Height,<span class="italic text-gray-600">
                                                                    H<sub>s</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->soil_slope_height}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->soil_slope_height_2}} m
                                                        </td>
                                                        @endisset
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Rock Slope
                                                                Height,<span class="italic text-gray-600">
                                                                    H<sub>r</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->rock_slope_height}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->rock_slope_height_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Rock Slope
                                                                Height,<span class="italic text-gray-600">
                                                                    H<sub>r'</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_r}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_r_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Crest Wall
                                                                Height,<span class="italic text-gray-600">
                                                                    H<sub>cw</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->crest_wall_height}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->crest_wall_height_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Toe Wall
                                                                Height,<span class="italic text-gray-600">
                                                                    H<sub>tw</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->toe_wall_height}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->toe_wall_height_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Upslope
                                                                Angle,
                                                                <span class="italic text-gray-600">
                                                                    β
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->upslope_angle}} Deg
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->upslope_angle_2}} Deg
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Surcharge
                                                                above
                                                                <br>
                                                                the
                                                                Slope Crest,
                                                                <span class="italic text-gray-600">
                                                                    s
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->surchange_above_slope_crest}} kPa
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->surchange_above_slope_crest_2}} kPa
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Soil Slope
                                                                Angle,
                                                                <span class="italic text-gray-600">
                                                                    θ<sub>s</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->soil_slope_angle}} Deg
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->soil_slope_angle_2}} Deg
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Average Slope
                                                                Angle,
                                                                <span class="italic text-gray-600">
                                                                    θ
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->average_slope_angle}} Deg
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->average_slope_angle_2}} Deg
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Downslope
                                                                Gradient,
                                                                <span class="italic text-gray-600">
                                                                    α
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->downslope_gradient}} Deg
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->downslope_gradient_2}} Deg
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Soil bulk
                                                                unit weight,<span class="italic text-gray-600">
                                                                    γ<sub>b</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4" colspan="2">
                                                            {{$geometry->soil_bulk_unit_weight}} kN/m<sup>3</sup>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Feature
                                                                Height,<span class="italic text-gray-600"> H
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->feature_height}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->feature_height_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">H<sub>w</sub>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_w}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_w_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">H<sub>c</sub>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_c}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_c_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">H<sub>o</sub>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_o}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{$geometry->height_o_2}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <label class="text-sm sm:font-medium sm:mb-0 mb-2">Effective
                                                                Height,
                                                                H<sub>e</sub>
                                                                </span>
                                                            </label>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{round($geometry->effective_height,2)}} m
                                                        </td>
                                                        @isset($geometry->section)
                                                        <td class="px-6 py-4">
                                                            {{round($geometry->effective_height_2,2)}} m
                                                        </td>
                                                        @endisset
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <x-line />
                                <div>
                                    <h4 class="font-bold mb-2 text-gray-800">Affected Facilities</h4>
                                    <p class="text-gray-800 mb-5">(refer to <a href="#"
                                            class="text-lime-600 underline dark:text-lime-500 hover:no-underline"
                                            data-popover-target="popover-image">Table
                                            2.1</a>)</p>
                                    <div data-popover id="popover-image" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                        <div class="p-3">
                                            <table class="text-xs max-w-xl">
                                                <thead>
                                                    <tr>
                                                        <th class="border border-gray-300 p-2">Facility Group</th>
                                                        <th class="border border-gray-300 p-2">Facilities</th>
                                                        <th class="border border-gray-300 p-2">Consequence-to-life Category
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border border-gray-300 p-2 text-center" rowspan="2">1
                                                        </td>
                                                        <td class="border border-gray-300 p-2">
                                                            (a) Heavily Used Buildings
                                                            <ul class="list-disc list-inside">
                                                                <li>residential building, commercial office, store and shop,
                                                                    hotel, factory,
                                                                    school, power
                                                                    station, ambulance depot, market, hospital, polyclinic,
                                                                    clinic, welfare
                                                                    centre</li>
                                                            </ul>
                                                        </td>
                                                        <td class="border border-gray-300 p-2 text-center" rowspan="3">1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border border-gray-300 p-2">
                                                            (b) Others
                                                            <ul class="list-disc list-inside">
                                                                <li>cottage, licensed and squatter areas</li>
                                                                <li>bus shelter, railway platform and other sheltered public
                                                                    waiting area
                                                                </li>
                                                                <li>dangerous goods storage site (e.g. petrol stations)</li>
                                                                <li>road with very heavy vehicular or pedestrian traffic
                                                                    density</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border border-gray-300 p-2 text-center" rowspan="2">2
                                                        </td>

                                                        <td class="border border-gray-300 p-2">
                                                            (a) Lightly Used Buildings
                                                            <ul class="list-disc list-inside">
                                                                <li>indoor car park, building within barracks, abattoir,
                                                                    incinerator, indoor
                                                                    games' sport
                                                                    hall, sewage treatment plant, refuse transfer station,
                                                                    church, temple,
                                                                    monastery, civic
                                                                    centre, manned substation</li>
                                                            </ul>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border border-gray-300 p-2">
                                                            (b) Others
                                                            <ul class="list-disc list-inside">
                                                                <li>major infrastructure facility (e.g. railway, tramway,
                                                                    flyover, subway,
                                                                    tunnel portal,
                                                                    service reservoir)</li>
                                                                <li>construction site (if future use not certain)</li>
                                                                <li>road with heavy vehicular or pedestrian traffic density
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="border border-gray-300 p-2 text-center" rowspan="2">2
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="border border-gray-300 p-2 text-center">3</td>
                                                        <td class="border border-gray-300 p-2">
                                                            <ul class="list-disc list-inside">
                                                                <li>
                                                                    Heavily used open space and public waiting area (e.g.
                                                                    heavily used
                                                                    playground, open car
                                                                    park, heavily used sitting out area, horticulture
                                                                    garden)
                                                                </li>
                                                                <li>
                                                                    Road with moderate vehicular or pedestrian traffic
                                                                    density
                                                                </li>
                                                            </ul>

                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border border-gray-300 p-2 text-center">4</td>
                                                        <td class="border border-gray-300 p-2">
                                                            <ul class="list-disc list-inside">
                                                                <li>
                                                                    Lightly used open-air recreation area (e.g. district
                                                                    open space, lightly
                                                                    used playground,
                                                                    cemetery, columbarium)
                                                                </li>
                                                                <li>
                                                                    Non-dangerous goods storage site
                                                                </li>
                                                                <li>
                                                                    Road with low vehicular or pedestrian traffic density
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="border border-gray-300 p-2 text-center" rowspan="2">3
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border border-gray-300 p-2 text-center">5</td>
                                                        <td class="border border-gray-300 p-2">
                                                            <ul class="list-disc list-inside">
                                                                <li>
                                                                    Remote area (e.g. country park, undeveloped green belt,
                                                                    abandoned quarry)
                                                                </li>
                                                                <li>
                                                                    Road with very low vehicular or pedestrian traffic
                                                                    density
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td></td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                    <div class="relative overflow-x-auto">
                                        <table class="bg-slate-50 border border-gray-300 w-full">
                                            <thead>
                                                <tr class="bg-gray-200">
                                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                                        Section 1-1
                                                    </th>
                                                    <th class="min-w-96 border border-gray-300 px-4 py-2 text-left ">
                                                        Facility Type
                                                    </th>
                                                    <th class="min-w-52 border border-gray-300 px-4 py-2 text-left">
                                                        Facility Group
                                                    </th>
                                                    <th class="min-w-64 border border-gray-300 px-4 py-2 text-left"
                                                        colspan="2">
                                                        Proximity
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2 font-bold">Toe</td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        {{$geometry->toe_facility_type}}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <span class="uppercase">{{$geometry->toe_facility_group}}</span>

                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <div class="">
                                                            <label for="toe_l" class="block mb-1 font-medium">Distance
                                                                (L)
                                                                : <span class="font-bold">{{$geometry->toe_l}}
                                                                    m</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <div>
                                                            <label for="toe_w" class="block mb-1 font-medium">Shadow
                                                                Angle (&#969;)
                                                                : <span class="font-bold">{{$geometry->toe_w}}
                                                                    Deg</span></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2 font-bold">Crest</td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        {{$geometry->crest_facility_type}}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <span class="uppercase">{{$geometry->crest_facility_group}}</span>
                                                    </td>

                                                    <td class="border border-gray-300 px-4 py-2" colspan="2">
                                                        <label for="toe_l" class="block mb-1 font-medium">Distance (D)
                                                            : <span class="font-bold">{{$geometry->crest_d}}
                                                                m</span></label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @isset($geometry->section)
                                    <div class="relative overflow-x-auto">
                                        <table class="bg-slate-50 border border-gray-300 w-full">
                                            <thead>
                                                <tr class="bg-gray-200">
                                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                                        Section 2-2
                                                    </th>
                                                    <th class="min-w-96 border border-gray-300 px-4 py-2 text-left ">
                                                        Facility Type
                                                    </th>
                                                    <th class="min-w-52 border border-gray-300 px-4 py-2 text-left">
                                                        Facility Group
                                                    </th>
                                                    <th class="min-w-64 border border-gray-300 px-4 py-2 text-left"
                                                        colspan="2">
                                                        Proximity
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2 font-bold">Toe</td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        {{$geometry->toe_facility_type_2}}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <span class="uppercase">{{$geometry->toe_facility_group_2}}</span>

                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <div class="">
                                                            <label for="toe_l" class="block mb-1 font-medium">Distance
                                                                (L)
                                                                : <span class="font-bold">{{$geometry->toe_l_2}}
                                                                    m</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <div>
                                                            <label for="toe_w" class="block mb-1 font-medium">Shadow
                                                                Angle (&#969;)
                                                                : <span class="font-bold">{{$geometry->toe_w_2}}
                                                                    Deg</span></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2 font-bold">Crest</td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        {{$geometry->crest_facility_type}}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">
                                                        <span class="uppercase">{{$geometry->crest_facility_group_2}}</span>
                                                    </td>

                                                    <td class="border border-gray-300 px-4 py-2" colspan="2">
                                                        <label for="toe_l" class="block mb-1 font-medium">Distance (D)
                                                            : <span class="font-bold">{{$geometry->crest_d_2}}
                                                                m</span></label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings"
                                role="tabpanel" aria-labelledby="settings-tab">
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <h4 class="font-bold">Slope Protection</h4>

                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <p class="font-medium text-gray-800">
                                                    Surface cover with :
                                                </p>
                                            </div>
                                            <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                                {{$characteristic->surface_cover}} %
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <p class="font-medium text-gray-800">
                                                    1. Based on above, slope surface is:
                                                </p>
                                            </div>
                                            <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                                {{$characteristic->slope_surface}}
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <p class="font-medium text-gray-800">
                                                    2. Zone(s) of depression or potential ponding exist within the crest
                                                    area (within H/2):
                                                </p>
                                            </div>
                                            <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                                {{$characteristic->zone_of_depression}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <x-line />

                                <div class="mb-3">
                                    <div class="mb-2">
                                        <label for="" class="font-bold"> Surface Drainage Provision :</label>
                                    </div>

                                    <div class="mb-3 border border-gray-200 ">
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="text-center py-3 px-2">
                                                        Location
                                                    </th>
                                                    <th scope="col" class="text-center py-3 px-2">
                                                        Size (mm)
                                                    </th>
                                                    <th scope="col" class="text-center py-3 px-2">
                                                        Spacing (m)
                                                    </th>
                                                    <th scope="col" class="text-center py-3 px-2">
                                                        Type
                                                    </th>
                                                    <th scope="col" class="text-center py-3 px-2">
                                                        Adequate Capacity
                                                    </th>
                                                    <th scope="col" class="text-center py-3 px-2">
                                                        Remarks
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row"
                                                        class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Crest
                                                    </th>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->crest_size) ?
                                                            $characteristic->crest_size : '-'}}
                                                        </div>

                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->crest_spacing) ?
                                                            $characteristic->crest_spacing : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->crest_type) ?
                                                            $characteristic->crest_type : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->crest_adequante) ?
                                                            $characteristic->crest_adequante : '-'}}
                                                        </div>
                                                    </td>

                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->crest_remarks) ?
                                                            $characteristic->crest_remarks : '-'}}
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row"
                                                        class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Berm
                                                    </th>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->berm_size) ?
                                                            $characteristic->berm_size : '-'}}
                                                        </div>

                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->berm_spacing) ?
                                                            $characteristic->berm_spacing : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->berm_type) ?
                                                            $characteristic->berm_type : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->berm_adequante) ?
                                                            $characteristic->berm_adequante : '-'}}
                                                        </div>
                                                    </td>

                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->berm_remarks) ?
                                                            $characteristic->berm_remarks : '-'}}
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row"
                                                        class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        On Slope
                                                    </th>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->onslope_size) ?
                                                            $characteristic->onslope_size : '-'}}
                                                        </div>

                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->onslope_spacing) ?
                                                            $characteristic->onslope_spacing : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->onslope_type) ?
                                                            $characteristic->onslope_type : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->onslope_adequante) ?
                                                            $characteristic->onslope_adequante : '-'}}
                                                        </div>
                                                    </td>

                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->onslope_remarks) ?
                                                            $characteristic->onslope_remarks : '-'}}
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row"
                                                        class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Toe
                                                    </th>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->toe_size) ?
                                                            $characteristic->toe_size : '-'}}
                                                        </div>

                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->toe_spacing) ?
                                                            $characteristic->toe_spacing : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->toe_type) ?
                                                            $characteristic->toe_type : '-'}}
                                                        </div>
                                                    </td>
                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->toe_adequante) ?
                                                            $characteristic->toe_adequante : '-'}}
                                                        </div>
                                                    </td>

                                                    <td class="p-2">
                                                        <div
                                                            class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                                            {{isset($characteristic->toe_remarks) ?
                                                            $characteristic->toe_remarks : '-'}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    @isset($characteristic->surface_drainage_provision)
                                    <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                        {{$characteristic->surface_drainage_provision}}
                                    </div>
                                    @endisset
                                </div>
                                <x-line />

                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <h4 class="font-bold">Hydrogeological Settings</h4>
                                        <p class="text-gray-400 text-xs">(Provide photographic
                                            records of signs of seepage
                                            and indicate location &
                                            extent on plan &
                                            cross-sections)</p>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <legend class=" mb-2">Signs of Seepage</legend>

                                            </div>
                                            <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                                {{$characteristic->signs_of_seepage}}
                                            </div>
                                        </div>

                                        @if ($characteristic->signs_of_seepage === "Yes")
                                        <table class="text-sm w-full bg-white border border-gray-300"
                                            x-data="{ above_mid_height: '{{isset($characteristic->above_mid_height) ? $characteristic->above_mid_height : ''}}', below_mid_height: '{{isset($characteristic->below_mid_height) ? $characteristic->below_mid_height : ''}}'}">
                                            <thead>
                                                <tr class="bg-gray-200">
                                                    <th class="border border-gray-300 px-4 py-2 text-left">Seepage
                                                        Location</th>
                                                    <th class="border border-gray-300 px-4 py-2 text-center">Copious</th>
                                                    <th class="border border-gray-300 px-4 py-2 text-center">
                                                        Trickling/damp</th>
                                                    <th class="border border-gray-300 px-4 py-2 text-center">Stain</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2">At or above mid-height
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            type="radio" disabled value="copious"
                                                            x-model="above_mid_height">
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            type="radio" disabled value="trickling/damp"
                                                            x-model="above_mid_height">
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            type="radio" disabled value="stain" x-model="above_mid_height">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2">Below mid-height</td>
                                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            type="radio" disabled value="copious"
                                                            x-model="below_mid_height">
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            type="radio" disabled value="trickling/damp"
                                                            x-model="below_mid_height">
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            type="radio" disabled value="stain" x-model="below_mid_height">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        @endif

                                    </div>


                                </div>
                                <x-line />

                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <h4 class="font-bold">Geological Features</h4>
                                        <p class="text-gray-400 text-xs">(Provide photographic
                                            records of the site
                                            observations)</p>
                                    </div>
                                    <div class="mb-3">
                                        <legend class="mb-2">Presence of the following based on site
                                            observations or available records:
                                        </legend>
                                        <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                            {{$characteristic->geological_features}}
                                        </div>
                                    </div>
                                </div>
                                <x-line />
                            
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <h4 class="font-bold">Signs of Distress</h4>
                                        <p class="text-gray-400 text-xs">(Provide photographic
                                            records of signs of distress
                                            and indicate location &
                                            extent on plan &
                                            cross-sections)</p>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                                {{$characteristic->signs_of_distress}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <x-line />
                                
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <h4 class="font-bold">Instability after
                                            Formation/Treatment</h4>
                                        <p class="text-gray-400 text-xs">(Provide photographic
                                            records of signs of distress(Provide photographic
                                            records of the inferred
                                            failure scar and indicate
                                            location on plan &
                                            cross-sections)</p>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                                                {{$characteristic->instability_after_slope}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <x-line />


                            </div>
                        
                        </div>
                    </div>
                
                </div>
            </div>

            <div>
                <div class="bg-white border border-gray-200 p-3 rounded-2xl mb-5">
                    <div class="h-72 shadow-sm rounded-xl" id="map"></div>
                </div>

                <div class="bg-white border border-gray-200 p-5 rounded-2xl">
                    <h2 class="mb-3 font-bold text-xl">
                        Documentation
                    </h2>
                    @php
                    $ref = [
                        'plan' => 'PLAN SECTION',
                        'cross'=>'CROSS SECTION',
                        'img_slope_protection' => 'SLOPE PROTECTION',
                        'img_surface_drainage_provision' => 'SURFACE DRAINAGE PROVISION',
                        'img_hydrogeological_settings' => 'HYDROGEOLOGICAL SETTINGS',
                        'img_geological_features' => 'GEOLOGICAL FEATURES',
                        'img_signs_of_distress' => 'SIGNS OF DISTRESS',
                        'img_instability_after' => 'INSTABILITY',
                        ];
                @endphp
                
                    <div id="accordion-collapse" data-accordion="collapse">
                        
                            @foreach ($ref as $r => $val)
                            @php
                                $count = 0;
                            @endphp
                            <h2 id="{{$r}}">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#n-{{$r}}" aria-expanded="false" aria-controls="n-{{$r}}">
                                      <span>{{ucwords(str_replace("_", " ", $val))}}</span>
                                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                      </svg>
                                </button>
                            </h2>
                            <div id="n-{{$r}}" class="hidden" aria-labelledby="{{$r}}">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 ">
                                    <ul id="p-{{$r}}" class="grid grid-cols-3 gap-2">
                                    @foreach ($img as $i)
                                        @if ($i->type == $r)
                                        @php
                                            $count++
                                        @endphp
                                        <li>
                                            <img id="p-{{$r}}" src="/storage/{{$slope->slug}}/{{$i->file}}/{{$i->img}}" class="w-full rounded-lg h-44 object-cover"  alt="">
                                        </li>
                                        
                                        @endif
                                    @endforeach

                                    @if ($count == 0)
                                       <div class="col-span-3 rounded-lg bg-gray-200 text-gray-400 text-center p-5">
                                        There's No Documentation
                                       </div>
                                    @endif

                                    </ul>
                                    <script>
                                        const {{$r}} = new Viewer(document.getElementById('p-{{$r}}'));
                                    </script>
                                </div>
                            </div>
                           
                            @endforeach
                    </div>

                    {{-- @foreach ($img as $i)
                    @if ($i->type=='plan')
                        <img src="/storage/{{$slope->slug}}/{{$i->file}}/{{$i->img}}" class="w-24"  alt="">
                    @endif
                    @endforeach --}}

                </div>
            </div>

            <script>
                var map = L.map('map').setView([51.505, -0.09], 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([51.5, -0.09]).addTo(map)
                    .bindPopup('A pretty CSS popup.<br> Easily customizable.')
                    .openPopup();


                const gallery = new Viewer(document.getElementById('images'));
            </script>
        </div>
    </div>
</x-app-layout>