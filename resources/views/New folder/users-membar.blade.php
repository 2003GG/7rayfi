@extends('layouts.app')

@section('title', 'Team Members')

@section('content')

<div class="px-6 py-6">

    {{-- ===================== BREADCRUMB + SEARCH + ADD BUTTON ===================== --}}
    <div class="flex flex-wrap items-center justify-between gap-4 mb-8">

        <div class="flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-3">
                <h4 class="text-lg font-semibold text-gray-800 capitalize">Team Members</h4>
                <span class="text-sm text-gray-400 border-l border-gray-300 pl-3">Home</span>
            </div>

            <form action="/" class="flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-3 py-2 shadow-sm">
                <img src="img/svg/search.svg" alt="search" class="w-4 h-4 opacity-40">
                <input class="text-sm text-gray-600 bg-transparent outline-none w-48 placeholder-gray-400"
                    type="search" placeholder="Search by Name" aria-label="Search">
            </form>
        </div>

        <a href="#"
            class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors duration-200"
            data-bs-toggle="modal" data-bs-target="#new-member">
            <i class="las la-plus text-base"></i>
            Team Members
        </a>

    </div>

    {{-- ===================== MEMBER CARDS GRID ===================== --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-6">

        {{-- Card 1 --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition-shadow duration-300">
            <div class="p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img class="w-24 h-24 rounded-full object-cover ring-4 ring-indigo-50" src="img/tm1.png" alt="profile">
                </div>
                <div class="pb-3">
                    <h6 class="text-sm font-semibold text-gray-800 mb-1">Garry Sobars</h6>
                    <p class="text-xs text-gray-400 m-0">Founder &amp; CEO</p>
                </div>
                <ul class="flex items-center justify-center gap-2 mb-0 list-none p-0">
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-200" href="#"><i class="lab la-facebook-f text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-sky-50 text-sky-500 hover:bg-sky-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-twitter text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-pink-50 text-pink-500 hover:bg-pink-500 hover:text-white transition-colors duration-200" href="#"><i class="las la-basketball-ball text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-rose-50 text-rose-500 hover:bg-rose-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-instagram text-base"></i></a></li>
                </ul>
                <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    <div class="dropdown dropdown-click">
                        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border-0 p-0 transition-colors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="w-4 h-4">
                        </button>
                        <div class="dropdown-menu w-40 bg-white rounded-xl shadow-lg border border-gray-100 py-1">
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item One</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Two</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Three</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition-shadow duration-300">
            <div class="p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img class="w-24 h-24 rounded-full object-cover ring-4 ring-indigo-50" src="img/tm2.png" alt="profile">
                </div>
                <div class="pb-3">
                    <h6 class="text-sm font-semibold text-gray-800 mb-1">Barbara Marion</h6>
                    <p class="text-xs text-gray-400 m-0">Tech Executive</p>
                </div>
                <ul class="flex items-center justify-center gap-2 mb-0 list-none p-0">
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-200" href="#"><i class="lab la-facebook-f text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-sky-50 text-sky-500 hover:bg-sky-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-twitter text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-pink-50 text-pink-500 hover:bg-pink-500 hover:text-white transition-colors duration-200" href="#"><i class="las la-basketball-ball text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-rose-50 text-rose-500 hover:bg-rose-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-instagram text-base"></i></a></li>
                </ul>
                <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    <div class="dropdown dropdown-click">
                        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border-0 p-0 transition-colors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="w-4 h-4">
                        </button>
                        <div class="dropdown-menu w-40 bg-white rounded-xl shadow-lg border border-gray-100 py-1">
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item One</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Two</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Three</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition-shadow duration-300">
            <div class="p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img class="w-24 h-24 rounded-full object-cover ring-4 ring-indigo-50" src="img/tm3.png" alt="profile">
                </div>
                <div class="pb-3">
                    <h6 class="text-sm font-semibold text-gray-800 mb-1">Christine Arnold</h6>
                    <p class="text-xs text-gray-400 m-0">Lead Designer</p>
                </div>
                <ul class="flex items-center justify-center gap-2 mb-0 list-none p-0">
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-200" href="#"><i class="lab la-facebook-f text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-sky-50 text-sky-500 hover:bg-sky-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-twitter text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-pink-50 text-pink-500 hover:bg-pink-500 hover:text-white transition-colors duration-200" href="#"><i class="las la-basketball-ball text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-rose-50 text-rose-500 hover:bg-rose-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-instagram text-base"></i></a></li>
                </ul>
                <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    <div class="dropdown dropdown-click">
                        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border-0 p-0 transition-colors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="w-4 h-4">
                        </button>
                        <div class="dropdown-menu w-40 bg-white rounded-xl shadow-lg border border-gray-100 py-1">
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item One</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Two</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Three</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition-shadow duration-300">
            <div class="p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img class="w-24 h-24 rounded-full object-cover ring-4 ring-indigo-50" src="img/tm4.png" alt="profile">
                </div>
                <div class="pb-3">
                    <h6 class="text-sm font-semibold text-gray-800 mb-1">Natalie Corwin</h6>
                    <p class="text-xs text-gray-400 m-0">Product Designer</p>
                </div>
                <ul class="flex items-center justify-center gap-2 mb-0 list-none p-0">
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-200" href="#"><i class="lab la-facebook-f text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-sky-50 text-sky-500 hover:bg-sky-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-twitter text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-pink-50 text-pink-500 hover:bg-pink-500 hover:text-white transition-colors duration-200" href="#"><i class="las la-basketball-ball text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-rose-50 text-rose-500 hover:bg-rose-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-instagram text-base"></i></a></li>
                </ul>
                <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    <div class="dropdown dropdown-click">
                        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border-0 p-0 transition-colors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="w-4 h-4">
                        </button>
                        <div class="dropdown-menu w-40 bg-white rounded-xl shadow-lg border border-gray-100 py-1">
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item One</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Two</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Three</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 5 --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition-shadow duration-300">
            <div class="p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img class="w-24 h-24 rounded-full object-cover ring-4 ring-indigo-50" src="img/tm5.png" alt="profile">
                </div>
                <div class="pb-3">
                    <h6 class="text-sm font-semibold text-gray-800 mb-1">Carolyn Park</h6>
                    <p class="text-xs text-gray-400 m-0">Lead Designer</p>
                </div>
                <ul class="flex items-center justify-center gap-2 mb-0 list-none p-0">
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-200" href="#"><i class="lab la-facebook-f text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-sky-50 text-sky-500 hover:bg-sky-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-twitter text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-pink-50 text-pink-500 hover:bg-pink-500 hover:text-white transition-colors duration-200" href="#"><i class="las la-basketball-ball text-base"></i></a></li>
                    <li><a class="w-9 h-9 flex items-center justify-center rounded-full bg-rose-50 text-rose-500 hover:bg-rose-500 hover:text-white transition-colors duration-200" href="#"><i class="lab la-instagram text-base"></i></a></li>
                </ul>
                <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    <div class="dropdown dropdown-click">
                        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border-0 p-0 transition-colors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="w-4 h-4">
                        </button>
                        <div class="dropdown-menu w-40 bg-white rounded-xl shadow-lg border border-gray-100 py-1">
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item One</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Two</a>
                            <a class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Item Three</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- ends: grid --}}

</div>
{{-- ends: outer wrapper --}}


{{-- ===================== ADD NEW MEMBER MODAL ===================== --}}
<div class="modal fade new-member" id="new-member" role="dialog"
    tabindex="-1" aria-labelledby="newMemberLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="bg-white rounded-2xl shadow-2xl w-full">

            {{-- Modal Header --}}
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h6 class="text-base font-semibold text-gray-800" id="newMemberLabel">Create project</h6>
                <button type="button"
                    class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-400 hover:text-gray-600 transition-colors border-0 bg-transparent"
                    data-bs-dismiss="modal" aria-label="Close">
                    <img src="img/svg/x.svg" alt="x" class="w-4 h-4">
                </button>
            </div>

            {{-- Modal Body --}}
            <div class="px-6 py-5">
                <div class="new-member-modal">
                    <form class="space-y-4">

                        {{-- Name --}}
                        <div>
                            <input type="text"
                                class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"
                                placeholder="Duran Clayton">
                        </div>

                        {{-- Category Select --}}
                        <div>
                            <div class="category-member">
                                <select class="js-example-basic-single js-states w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"
                                    id="category-member">
                                    <option value="JAN">1</option>
                                    <option value="FBR">2</option>
                                </select>
                            </div>
                        </div>

                        {{-- Description --}}
                        <div>
                            <textarea
                                class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition resize-none"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Project description"></textarea>
                        </div>

                        {{-- Status Checkboxes --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <div class="flex flex-wrap gap-4">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input class="w-4 h-4 text-indigo-600 checkbox" type="checkbox" id="check-grp-1" checked>
                                    <span class="text-sm text-gray-600">status</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input class="w-4 h-4 text-indigo-600 checkbox" type="checkbox" id="check-grp-2">
                                    <span class="text-sm text-gray-600">Deactivated</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input class="w-4 h-4 text-indigo-600 checkbox" type="checkbox" id="check-grp-3">
                                    <span class="text-sm text-gray-600">Blocked</span>
                                </label>
                            </div>
                        </div>

                        {{-- Project Member --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="name47">Project member</label>
                            <input type="text"
                                class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-indigo-400 transition mb-3"
                                id="name47" placeholder="Search members">
                            <ul class="flex flex-wrap gap-2 list-none p-0 mb-0">
                                <li><a href="#"><img class="w-9 h-9 rounded-full object-cover" src="img/tm1.png" alt="author"></a></li>
                                <li><a href="#"><img class="w-9 h-9 rounded-full object-cover" src="img/tm2.png" alt="author"></a></li>
                                <li><a href="#"><img class="w-9 h-9 rounded-full object-cover" src="img/tm3.png" alt="author"></a></li>
                                <li><a href="#"><img class="w-9 h-9 rounded-full object-cover" src="img/tm4.png" alt="author"></a></li>
                                <li><a href="#"><img class="w-9 h-9 rounded-full object-cover" src="img/tm5.png" alt="author"></a></li>
                            </ul>
                        </div>

                        {{-- Date Range --}}
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700 mb-1" for="datepicker">Start Date</label>
                                <div class="relative">
                                    <input type="text"
                                        class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-indigo-400 transition"
                                        id="datepicker" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700 mb-1" for="datepicker2">End Date</label>
                                <div class="relative">
                                    <input type="text"
                                        class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-indigo-400 transition"
                                        id="datepicker2" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="flex items-center gap-3 pt-2">
                            <button type="submit"
                                class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2.5 px-4 rounded-lg transition-colors duration-200">
                                Add new project
                            </button>
                            <button type="button"
                                class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-600 text-sm font-medium py-2.5 px-4 rounded-lg transition-colors duration-200"
                                data-bs-dismiss="modal">
                                Cancel
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- ends: #new-member modal --}}

@endsection
