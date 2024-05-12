<div class='bg-gradient-to-r from-primary to-secondary '>

            
            <h1 class='pt-8 px-16 text-white text-2xl'>Blog</h1>
                <div class='flex space-x-4 space-x-reverse py-8 px-12 items-center justify-center'>
                    
                        @foreach($posts as $post)

                            <a href={{URL::to("/post/$post->id")}}  key={{$post->id}}>
                                <div class='relative w-90 mr-6 hover:scale-105 transition-all duration-300 ease-linear flex justify-start cursor-pointer'>
                                    <div class='relative post-card w-80 ml-4 mb-4 select-text'>
                                        <img src={{asset('storage/').'/'.$post->image->url}} alt={{$post->descriptopn}}  class='object-fill w-80 h-[200px] z-0'></img>
                                        <div class='absolute bottom-0 w-[100%] flex justify-center backdrop-blur-sm bg-white/30'>
                                            <h6 class='text-tcolor m-4 z-1 text-center text-lg' >{{$post->title}}</h6>
                                        </div>
                                    </div>
                                    <div class='absolute bg bottom-0 w-[75%] flex justify-end items-center group hover:bg-slate-700 hover:p-4 hover:rounded-lg'>

                                    <img width={100} height={100} src='https://files.virgool.io/upload/users/137945/avatar/krIl20.png' alt={{$post->image->title}}
                                            class="author-avatar group-hover:author-avatar-hover transition-all duration-300 ease-linear"></img>


                                        <div class='text-center bg-gray-900 rounded-2xl px-4 py-2 mx-2 scale-0 group-hover:scale-100 transition-all duration-300 ease-linear'>
                                            <h5 class=' text-white text-sm'>{{$post->user->name." ".$post->user->familyName}}</h5>
                                        </div>

       
                                    </div>
                                </div>
                            </Link>

                        @endforeach

                </div>
        </div>