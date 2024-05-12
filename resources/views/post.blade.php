@vite('resources/css/app.css')

<div class="lg:px-32 py-16 flex flex-col gap-4 bg-repeat bg-cloud bg-[length:45px_45px]">


        <div class='flex flex-col gap-4 align-middle items-center bg-white rounded-lg p-8 shadow-lg'>


            {{-- AUTHOR DETAIL --}}
            <div class='w-full flex align-middle items-center gap-4'>


                <div>
                    <Image alt={{$post->image->title}} width={1920/2} height={1080/2}  src="https://files.virgool.io/upload/users/137945/avatar/krIl20.png" class="rounded-3xl cursor-pointer h-24 w-24 hover:rounded-md transition-all duration-300 ease-linear " />
                </div>
                <div class='flex flex-col'>
                    <div class='text-tcolor text-lg'>
                        {{$post->user->name." ".$post->user->familyName}}
                    </div>

                    <div class='text-tcolor text-lg '>
                        {{$post->user->email}}
                    </div>
                </div>
            </div>



            {{--  POST DETAIL  --}}
            <div class='flex flex-col items-center align-middle gap-4'>
                <Image alt={{$post->image->title}} width={1920/2} height={1080/2} src={{asset('storage/').'/'.$post->image->url}} class="rounded-xl" />

                <h1 class='text-tcolor text-3xl font-bold mt-8'>{{$post->title}} </h1>

                

                <div class='iner-html w-[70%]'>
                    {!! $post->content !!}
                </div>

                <br></br>


                
                <div class='flex gap-4'>
                   
                    @foreach ( $post->seo_keys as $key )

                        {{$key.", "}}
                            
                    @endforeach 
                        
                   
                </div>


            </div>


        </div>






    </div>