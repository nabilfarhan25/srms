<div x-data="levelGeotechnical()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Level of Geotechnical Engineering Input</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A1 :</h2>
            <input type="text" readonly :value="A1" disabled
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="10" id="level1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with none
                or little geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="3" id="level2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication of some geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="1" id="level3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication of substantial geotechnical engineering input</label>
        </div>

    </div>
    <script>
        function levelGeotechnical() {
            return {
                A1: {{$rating->A1}},
            }
        }
    </script>
</div>
<x-line />

<div x-data="{
    featureHeight: {{$geometry->feature_height}},
    rockSlopeAngle: {{$geometry->rock_slope_angle}},
    a2Value: {{$rating->A2}}}">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Geometry</legend>
        <div class="flex items-center">

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2:</h2>
                <input type="text" id="a2_value" x-model="a2Value" name="A2" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Feature
                    Height:</label>
                <input type="text" id="feature_height" x-model="featureHeight" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Rock Slope
                    Angle:</label>
                <input type="text" id="rock_slope_angle" x-model="rockSlopeAngle" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>
</div>
<x-line />

<div x-data="{
    modeOfFailure: 'Wedge',
    scaleOfFailure: 'Medium',
    potentialForFailure: 0.5,
    a3aValue: 0,
    a3Value: 0,
    calculateA3a() {
        this.a3aValue = calculateA3a(this.modeOfFailure, this.scaleOfFailure);
    },
    calculateA3() {
        this.calculateA3a();
        this.a3Value = calculateA3(this.a3aValue, this.potentialForFailure);
    }
}" x-init="calculateA3()">

    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Instability Classification</legend>
        <div class="flex items-center">

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A3:</h2>
                <input type="text" id="a3_value" x-model="a3Value" name="A3" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>

    <h2 class="font-bold mb-2">Mode and scale of failure</h2>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="mode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mode
                of Failure:</label>
            <select id="mode_of_failure" x-model="modeOfFailure" @change="calculateA3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                <option value="Ravelling">Ravelling</option>
                <option value="Toppling">Toppling</option>
                <option value="Wedge">Wedge</option>
                <option value="Planar">Planar</option>
            </select>
        </div>
        <div>
            <label for="scale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scale of
                Failure:</label>
            <select id="scale_of_failure" name="scale_of_failure" x-model="scaleOfFailure" @change="calculateA3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                <option value="Large">Large (> 50 m³)</option>
                <option value="Medium">Medium (5 - 50 m³)</option>
                <option value="Small">Small (< 5 m³)</option>
                <option value="None">None</option>
            </select>
        </div>

        <div>
            <label for="pot" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Potential for
                Failure:</label>
            <select id="potential_for_failure" x-model="potentialForFailure" @change="calculateA3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                <option value="0.5">Low potential for failure</option>
                <option value="1.0">High potential for failure</option>
            </select>
        </div>
        <div>
            <label for="a3a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mode
                and scale of failure x Potential for failure:</label>
            <input type="text" id="a3a_value" x-model="a3aValue" readonly
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500" />
        </div>

    </div>
    <script>
        function calculateA3a(mode, scale) {
            const table = {
                'Ravelling': { 'Large': 6, 'Medium': 3, 'Small': 2, 'None': 1 },
                'Toppling': { 'Large': 10, 'Medium': 6, 'Small': 3, 'None': 1 },
                'Wedge': { 'Large': 10, 'Medium': 6, 'Small': 3, 'None': 1 },
                'Planar': { 'Large': 10, 'Medium': 6, 'Small': 3, 'None': 1 }
            };
            return table[mode][scale];
        }
    
        function calculateA3(a3a, a3b) {
            return a3a * a3b;
        }
    </script>
</div>
<x-line />

<div x-data="{ A4: '{{$rating->A4}}', A4_pos: '{{$rating->A4_pos}}'}">
    <div class="flex justify-between items-center mb-3">
        <legend class="text-lg font-semibold">Seepage and Drainage Conditions</legend>
        <div class="flex items-center mt-4">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A4 :</h2>
            <input type="text" readonly :value="A4" disabled
                class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>
    <div class=" dark:border-gray-700 sm:rounded-lg">
        <table
            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th rowspan="2" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        Drainage Provision
                    </th>
                    <th colspan="3" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        Seepage
                    </th>
                </tr>
                <tr>
                    <th class="px-6 py-3 text-center border border-gray-200">
                        Heavy
                    </th>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        Moderate
                    </th>
                    <th class="px-6 py-3 text-center border border-gray-200">
                        Slight or none
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td
                        class="px-6 py-4 font-medium text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                        Potential for convergence
                        of runoff at crest area
                        and/or potential for water
                        ingress into open
                        discontinuities
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" disabled value="8" {{$rating->A4_pos == '1-1' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        8
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        <input type="radio" disabled value="6" {{$rating->A4_pos == '1-2' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        6
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" disabled value="4" {{$rating->A4_pos == '1-3' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        4
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                        Insufficient or no drainage
                        measures in place to direct
                        water away from the crest
                        area and face of the slope
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" disabled value="6" {{$rating->A4_pos == '2-1' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        6
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        <input type="radio" disabled value="4" {{$rating->A4_pos == '2-2' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        4
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" disabled value="2" {{$rating->A4_pos == '2-3' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        2
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                        Drainage measures
                        adequately direct water
                        away from the crest area
                        and face of the slope
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" disabled value="4" {{$rating->A4_pos == '3-1' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        4
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        <input type="radio" disabled value="2" {{$rating->A4_pos == '3-2' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        2
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" disabled value="1" {{$rating->A4_pos == '3-3' ? 'checked' :''}}
                        class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600">
                        1
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<x-line />

<div x-data="actualPerformance()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Signs of Distress</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">B1 :</h2>
            <input type="text" readonly :value="B1" disabled
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>
    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="10" id="act1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="act1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Severe</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="4" id="act2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="act2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Moderate</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="1" id="act3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="act3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Minor/None</label>
        </div>


    </div>
    <script>
        function actualPerformance() {
            return {
                B1: {{$rating->B1}},
            }
        }
    </script>
    <hr class="h-px my-3 bg-gray-300 border-0 dark:bg-gray-700">
</div>

<div x-data="instabilityAfter()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Instability after Slope Treatment/Formation</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">B2 :</h2>
            <input type="text" readonly :value="B2" disabled
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>
    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="10" id="ins1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Documented evidence
                of past instability (failure volume ≥ 50 m3)</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="5" id="ins2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Documented evidence
                of past instability (failure volume < 50 m3 )</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="2" id="ins3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Observed evidence of
                past instability</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="1" id="ins5" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins5" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No recorded or
                observed evidence of past instability</label>
        </div>
    </div>
    <script>
        function instabilityAfter() {
            return {
                B2: {{$rating->B2}},
            }
        }
    </script>
</div>
<x-line />


<div x-data="crestHandler()" class="">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Facilities Above Crest of Feature</legend>
        <div class="flex items-center">
            <div class="flex items-center mr-5">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C1:</h2>
                <input type="text" id="C1" value="{{$rating->C1}}" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C2:</h2>
                <input type="text" id="C2" value="{{$rating->C2}}" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Type
                    of
                    Crest Facility:</label>
                <input type="text" id="type" value="{{$geometry->crest_facility_type}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Facility
                    Group:</label>
                <input type="text" value="{{$geometry->crest_facility_group}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Distance
                    (D) from Crest
                    (m):</label>
                <input type="number" step="0.01" id="distance" value="{{$geometry->crest_d}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Feature
                    Height (H) (m):</label>
                <input type="number" step="0.01" id="height" value="{{$geometry->feature_height}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>


</div>
<x-line />

<div x-data="toeHandler()" class="">
    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Facility at Toe of Feature</legend>
            <div class="flex items-center">
                <div class="flex items-center mr-5">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D1:</h2>
                    <input type="text" id="D1" value="{{$rating->D1}}" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
                <div class="flex items-center">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D2:</h2>
                    <input type="text" id="D2" value="{{$rating->D2}}" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Type
                    of Toe Facility:</label>
                <input type="text" id="type" value="{{$geometry->toe_facility_type}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Facility
                    Group:</label>
                <input type="text" value="{{$geometry->toe_facility_group}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Distance
                    (L) from Toe to
                    Facility (m):</label>
                <input type="number" step="0.01" readonly id="distance" value="{{$geometry->toe_l}}"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Shadow
                    Angle (ω) from
                    Crest of Feature to Toe Facility (°):</label>
                <input type="number" step="0.01" readonly id="shadowAngle" value="{{$geometry->toe_w}}"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

        </div>

    </div>
</div>
<x-line />

<h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Consequence To Life (CTL)
    Catergory
</h3>

<div class="inline-flex w-full p-5 text-lime-600 border border-lime-600 rounded-2xl ">
    <div class="block">
        @if ($rating->consequence_to_life == 'category-1')
        <div class="w-full text-xl font-bold mb-3">Category 1</div>
        <div class="w-full">
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting occupied buildings (e.g. residential, educational,
                commercial or industrial buildings, bus shelters, railway platforms).
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting buildings storing dangerous goods.
            </div>
        </div>
        @endif

        @if ($rating->consequence_to_life == 'category-2')
        <div class="w-full text-xl font-bold mb-3">Category 2</div>
        <div class="w-full">
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting heavily used open spaces and recreational facilities
                (e.g. sitting-out areas, playgrounds, car parks).
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting roads with high vehicular or pedestrian traffic
                density.
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting public waiting areas (e.g. bus stops , petrol
                stations).
            </div>
        </div>
        @endif

        @if ($rating->consequence_to_life == 'category-3')
        <div class="w-full text-xl font-bold mb-3">Category 3</div>
        <div class="w-full">
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting country parks and
                lightly used open-air recreation areas.
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting roads with low traffic
                density.
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting storage compounds
                (non-dangerous goods).
            </div>
        </div>
        @endif

    </div>
</div>