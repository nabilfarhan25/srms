<x-app-layout>
    <div class="p-5">
        <div
            class="flex justify-between items-center p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/management', 'label' => 'Managements'],
                ['url' => '/management/'.$slope->slug, 'label' => $slope->slope_name,'active' => true],

                ];
                @endphp
                <x-bread :items="$bread" />

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

        <div class="grid grid-cols-3 gap-4 mb-10">
            <div class="col-span-2 ">
                <div class="p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">

                    <div class="mb-10 flex justify-between">
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
                                @auth
                                @if (Auth::user()->isAdmin())
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="mr-2 block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                    type="button">
                                    Delete
                                </button>

                                <div id="popup-modal" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="popup-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    Are you sure you want to delete {{$slope->slope_name}}?</h3>
                                                <div class="flex justify-center">
                                                    <form action="/slope/{{$slope->slug}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" data-modal-hide="popup-modal"
                                                            type="button"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                            Yes, I'm sure
                                                        </button>
                                                    </form>
                                                    <button data-modal-hide="popup-modal" type="button"
                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                        cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endif
                                @endauth

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



                    <div class="flex mb-5">
                        <div class="w-full px-2">
                            <p class="text-sm">
                                Total Score (TS) :
                            </p>
                            <x-line />
                            <h2 class="text-4xl text-bold">
                                {{round(json_decode($slope->ranking)->TS,2)}}
                            </h2>
                        </div>
                        <div class="w-full px-2">
                            <p class="text-sm">
                                Instability Score (IS) :
                            </p>
                            <x-line />
                            <h2 class="text-4xl text-bold">
                                {{round(json_decode($slope->ranking)->IS,2)}}
                            </h2>
                        </div>

                        <div class="w-full px-2">
                            <p class="text-sm">
                                Consequence Score (CS) :
                            </p>
                            <x-line />
                            <h2 class="text-4xl text-bold">
                                {{round(json_decode($slope->ranking)->CS,2)}}
                            </h2>
                        </div>
                        <div class="w-full px-2">
                            <p class="text-sm">
                                Ranking Score (RS) :
                            </p>
                            <x-line />
                            <h2 class="text-4xl text-bold">
                                {{round(json_decode($slope->ranking)->TS*0.062,2)}}
                            </h2>
                        </div>
                    </div>

                    <div class="rounded-lg bg-gray-50 p-4">

                        @if ($slope->slope_type == 'cut-type')
                        @include('management.partials.detail_cut')
                        @elseif ($slope->slope_type == 'rock-type')
                        @include('management.partials.detail_rock')
                        @endif
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
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#n-{{$r}}" aria-expanded="false" aria-controls="n-{{$r}}">
                                <span>{{ucwords(str_replace("_", " ", $val))}}</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
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
                                        <img id="p-{{$r}}" src="/storage/{{$slope->slug}}/{{$i->file}}/{{$i->img}}"
                                            class="w-full rounded-lg h-44 object-cover" alt="">
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
                    <img src="/storage/{{$slope->slug}}/{{$i->file}}/{{$i->img}}" class="w-24" alt="">
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