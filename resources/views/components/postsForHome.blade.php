<div class='bg-gradient-to-r from-primary to-secondary '>

    
            
            <h1 class='mx-8 pt-8 text-white text-2xl'>Blog</h1>
            <ScrollContainer class="scroll-container mx-4">
                <div class='flex space-x-4 space-x-reverse py-8'>
                  
                    
                        @foreach($posts as $post)

                            <Link href='/post/ID/azInHarfa'  key={{$post->id}}>
                                <div class='relative w-90 mr-6 hover:scale-105 transition-all duration-300 ease-linear flex justify-start cursor-pointer'>
                                    <div class='relative post-card w-80 ml-4 mb-4 select-text'>
                                        <Image width={{600}} height={{300}} src={{asset('storage/').'/'.$post->image->url}} alt={{$post->descriptopn}}  class='object-fill w-80 h-[200px] z-0'></Image>
                                        <div class='absolute bottom-0 w-[100%] flex justify-center backdrop-blur-sm bg-white/30'>
                                            <h6 class='text-tcolor m-4 z-1 text-center text-lg' > {{$post->title}}> </h6>
                                        </div>
                                    </div>
                                    <div class='absolute bg bottom-0 w-[75%] flex justify-end items-center group'>

                                    <Image width={100} height={100} src='https://files.virgool.io/upload/users/137945/avatar/krIl20.png' alt={{$post->image->title}}
                                            class="author-avatar group-hover:author-avatar-hover transition-all duration-300 ease-linear"></Image>


                                        <div class='text-center bg-gray-900 rounded-2xl px-4 py-2 mx-2 scale-0 group-hover:scale-100 transition-all duration-300 ease-linear'>
                                            <h5 class=' text-white text-sm'>{{$post->user->name." ".$post->user->familyName}}</h5>
                                        </div>

       
                                    </div>
                                </div>
                            </Link>

                        @endforeach

                </div>
            </ScrollContainer>
        </div>