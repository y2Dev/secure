<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Actu-Editer
                    
                    <!-- component -->
                    <form action="{{route("admin-actu-editer")}}" method="POST">
                        @csrf
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
                        <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST</h1>
                            <div class="space-y-4">
                            <div>
                                <label for="title" class="text-lx font-serif">Title:</label>
                                <input type="text" placeholder="title" name="titre" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                            </div>
                            <div>
                                <label for="description" class="block mb-2 text-lg font-serif">Description:</label>
                                <textarea id="description" cols="30" rows="10" placeholder="whrite here.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
                            </div>
                            <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">ADD POST</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
