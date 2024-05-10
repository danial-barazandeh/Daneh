{{-- @vite('resources/css/app.css') --}}
<div>
    {{-- @include('components.postsForHome') --}}

    <div class='grid col-span-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 justify-center items-center'>
      <div class='mx-8 relative w-fit 2xl:w-[65%] flex justify-center items-center group img-child-blur'>
        <div class='static w-[100%] h-[50%] group img   pl-16'>
           {{-- <Lottie animationData={freelancer} loop={true}  --}}

          {{-- <Image width={800} height={842} alt='Sci' src={"http://localhost:3000/images/sci.png"}></Image> --}}
         
          {{-- hover:blur-lg hover:saturate-50 transition-all duration-300 ease-linear  --}}
        </div>
        <div class='absolute   pl-16'>
          <p class='scale-0 text-center group-hover:scale-100 text-white font-extrabold text-3xl transition-all duration-300 child-parent-blur  drop-shadow-[0_1.2px_1.2px_rgba(239,172,91,0.8)]'> Lets start learning together </p>
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

    <PostsForHome></PostsForHome>

    <br>
    </br>

    <ScrollContainer class='scroll-container'>
      <div class='flex gap-4 py-8 '>

        <div class='bg-primary rounded-full w-36 h-36 shadow-lg shadow-primary text-center text-5xl text-white flex flex-col justify-center items-center shrink-0 m-auto hover:scale-105 transition-all duration-300 hover:cursor-pointer'>
          <FaRegArrowAltCircleRight></FaRegArrowAltCircleRight>
          <div class='h-2'></div>
          <span class=' text-xs'>
            Why us ?
          </span>
        </div>

        <GradiantFeatures shadowColor="shadow-[#F55484]" startColor="from-[#FF8DB8]" endColor="to-[#F55484]" title="Instance Access" content="You get full access without waiting">
          <FaClipboardCheck></FaClipboardCheck>
        </GradiantFeatures>

        <GradiantFeatures shadowColor="shadow-[#8E78FB]" startColor="from-[#B09EFE]" endColor="to-[#8E78FB]" title="Free Update" content="You get free access to all of the updates">
          <FaHeart></FaHeart>
        </GradiantFeatures>


        <GradiantFeatures shadowColor="shadow-[#FF9C2A]" startColor="from-[#FDD29E]" endColor="to-[#FF9C2A]" title="For Professionals" content="Everything is design for professional use">
          <FaMoneyBillAlt></FaMoneyBillAlt>
        </GradiantFeatures>

        <GradiantFeatures shadowColor="shadow-[#43C5E9]" startColor="from-[#8AE5FE]" endColor="to-[#43C5E9]" title="24/7 Support" content="You could reach us anytime">
          <FaHeadphonesAlt></FaHeadphonesAlt>
        </GradiantFeatures>

      </div>
    </ScrollContainer>

    <br></br>

    <ProductsForHome></ProductsForHome>
  </div>