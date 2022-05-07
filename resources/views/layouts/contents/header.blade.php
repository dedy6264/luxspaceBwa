 <!-- START: HEADER -->
   <header class="{{\Route::current()->getName()=='index'? 'absolute w-full z-50 px-4':'w-full z-50 px-4'}}w-full z-50 px-4">
      <div class="container mx-auto py-5">
        <div class="flex flex-stretch items-center">
          <div class="w-56 items-center flex">
            <img
              src="{{url('/frontend/images/content/logo.png')}}"
              alt="Luxspace | Fulfill your house with beautiful furniture"
            />
          </div>
          <div class="w-full"></div>
          <div class="w-auto">
            @yield('ul')
              
          
                  
          </div>
        </div>
      </div>
    </header>

    <!-- END: HEADER -->