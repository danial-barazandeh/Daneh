@vite('resources/css/app.css')

@include('components/navbar')
<div>


    <div
        class='grid col-span-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 justify-center items-center'>
        <div class='mx-8 relative w-fit 2xl:w-[65%] flex justify-center items-center group img-child-blur'>
            <div class='static w-[100%] h-[50%] group img   pl-16'>
                {{-- <Lottie animationData={freelancer} loop={true}  --}}

                <Image width={800} height={842} alt='Sci' src={{ asset('storage/sci.png') }}></Image>

                {{-- hover:blur-lg hover:saturate-50 transition-all duration-300 ease-linear  --}}
            </div>
            <div class='absolute   pl-16'>
                <p
                    class='scale-0 text-center group-hover:scale-100 text-white font-extrabold text-3xl transition-all duration-300 child-parent-blur  drop-shadow-[0_1.2px_1.2px_rgba(239,172,91,0.8)]'>
                    Lets start learning together </p>
            </div>
        </div>


        <div class='mx-8'>
            <h6 class=' text-purple size text-3xl font-extrabold'> Daneh </h6>

            <div class='flex justify-start items-center'>
                <h6 class=' text-tcolor text-xl'> Daneh helps you to </h6>
                <h6 class=' text-tcolor text-2xl font-extrabold'>&nbsp;learn&nbsp;</h6>
                <h6 class=' text-tcolor text-xl'> hard skills</h6>
                <h6 class=' text-tcolor text-2xl font-extrabold'>&nbsp;easily</h6>
                <h6 class=' text-tcolor text-xl text-justify'>.</h6>
            </div>

            <div class='flex justify-start items-center'>
                <h6 class=' text-tcolor text-xl text-justify'> You could be part of our</h6>
                <h6 class=' text-tcolor text-2xl font-extrabold'>&nbsp;community&nbsp;</h6>
                <h6 class=' text-tcolor text-xl text-justify'> now!</h6>
            </div>

            <div class='flex justify-start items-center'>
                <h6 class=' text-tcolor text-xl text-justify'> lets do it </h6>
                <h6 class=' text-tcolor text-2xl font-extrabold'>&nbsp;together</h6>
                <h6 class=' text-tcolor text-xl text-justify'>.</h6>
            </div>
        </div>

    </div>

    @include('components.postsForHome')

    <br>
    </br>

    
        <div class='flex flex-row items-center justify-center gap-16'>

            <x-package-feature title="Instance Access" content="You get full access without waiting"
                startColor="from-[#FF8DB8]" shadowColor="shadow-[#F55484]" endColor="to-[#F55484]">
                <x-lucide-clipboard-check class="h-20 w-20" />
            </x-package-feature>

            <x-package-feature title="Free Update" content="You get free access to all of the updates"
                startColor="from-[#B09EFE]" shadowColor="shadow-[#8E78FB]" endColor="to-[#8E78FB]">
                <x-lucide-heart class="h-20 w-20" />
            </x-package-feature>

            <x-package-feature title="For Professionals" content="Everything is design for professional use"
                startColor="from-[#FDD29E]" shadowColor="shadow-[#FF9C2A]" endColor="to-[#FF9C2A]">
                <x-lucide-badge-euro class="h-20 w-20" />
            </x-package-feature>

            <x-package-feature title="24/7 Support" content="You could reach us anytime" startColor="from-[#8AE5FE]"
                shadowColor="shadow-[#43C5E9]" endColor="to-[#43C5E9]">
                <x-lucide-badge-euro class="h-20 w-20" />
            </x-package-feature>

        </div>

    <br></br>

    <ProductsForHome></ProductsForHome>
</div>
