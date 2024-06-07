<div class='bg-gradient-to-r from-primary to-secondary '>

            
            <h1 class='pt-8 px-16 text-white text-2xl'>Products</h1>
                <div class='flex space-x-4 space-x-reverse py-8 px-12 items-center justify-center'>
                    
                        @foreach($products as $product)

                            <a href={{URL::to("/product/$product->id")}}  key={{$product->id}}>
                                <div class='relative w-90 mr-6 hover:scale-105 transition-all duration-300 ease-linear flex justify-start cursor-pointer'>
                                    <div class='relative post-card w-80 ml-4 mb-4 select-text'>
                                        <img src={{asset('storage/').'/'.$product->image->url}} alt={{$product->descriptopn}}  class='object-fill w-80 h-[200px] z-0'></img>
                                        <div class='absolute bottom-0 w-[100%] flex justify-center backdrop-blur-sm bg-white/30'>
                                            <h6 class='text-tcolor m-4 z-1 text-center text-lg' >{{$product->title}}</h6>
                                        </div>
                                    </div>
                                    <div class='absolute bg bottom-0 w-[75%] flex justify-end items-center group hover:bg-slate-700 hover:p-4 hover:rounded-lg'>

                                    <img width={100} height={100} src='https://files.virgool.io/upload/users/137945/avatar/krIl20.png' alt={{$product->image->title}}
                                            class="author-avatar group-hover:author-avatar-hover transition-all duration-300 ease-linear"></img>


                                        <div class='text-center bg-gray-900 rounded-2xl px-4 py-2 mx-2 scale-0 group-hover:scale-100 transition-all duration-300 ease-linear'>
                                            <h5 class=' text-white text-sm'>{{$product->user->name." ".$product->user->familyName}}</h5>
                                        </div>

       
                                    </div>
                                </div>
                            </Link>

                        @endforeach

                </div>
        </div>