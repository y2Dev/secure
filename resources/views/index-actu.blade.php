<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        ACTUS
                        <ul>
                            @foreach ($semaines as $item)

                            <li style="text ">{{$item->jour}}</li>
                                
                            @endforeach
                        </ul>
                    <a href="/detail">
                            @forelse ($actuList as $actu)
                                                                            <!-- component -->
                                <div class="flex flex-col gap-4 items-center justify-center bg-white">

                                    <!-- Card 1 -->
                                    <div  class="w-[30rem] border-2 border-b-4 border-gray-200 rounded-xl hover:bg-gray-50">
                                
                                        <!-- Badge -->
                                        <p class="bg-sky-500 w-fit px-4 py-1 text-sm font-bold text-white rounded-tl-lg rounded-br-xl"> {{$actu->created_at}} </p>

                                        <div class="grid grid-cols-6 p-5 gap-y-2">
                                    
                                            <!-- Profile Picture -->
                                            <div>
                                            <img src="{{Storage::url($actu->image)}}" class="max-w-16 max-h-16 rounded-full" />
                                            
                                            </div>
                                    
                                            <!-- Description -->
                                            <div class="col-span-5 md:col-span-4 ml-4">
                                    
                                    
                                            <p class="text-gray-600 font-bold"> {{$actu->titre}} </p>
                                    
                                    
                                            <p class="text-gray-400"> {{$actu->description}} </p>
                                    
                                            </div>
                                    

                                    
                                        </div>
                                    </div>
                                </div>     

                        <br>
                
                        @empty
                
                        @endforelse
                    </a>
                    


                </div>
            </div>
        </div>
    </div>
</x-app-layout>