@extends('Normal.layout')
@section('content')
@include('Normal.hero')
            
        
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="images/main.jpeg"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">Vermicomposting Worms</h3>
                      
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                          
                            <div class="text-lg space-y-6">
                                <p>
                                Vermicompost is the product of earthworm digestion and aerobic decomposition using the activities of micro- and macroorganisms at room temperature. Vermicomposting, or worm composting, produces a rich organic soil amendment containing a diversity of plant nutrients and beneficial microorganisms.
                                </p>
                           

                                <a
                                    href="mailto:honore.kimenyi@gmail.com"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Us</a
                                >

                                <a
                                    href="https://rodaleinstitute.org/science/articles/vermicomposting-for-beginners/"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> Visit
                                    Website</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection