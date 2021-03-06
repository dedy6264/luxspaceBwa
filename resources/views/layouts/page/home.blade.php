@extends('layouts/frontend')

@section('ul')
          <ul
              class="fixed inset-0 flex flex-col items-center justify-center invisible bg-white opacity-0 md:visible md:flex-row md:bg-transparent md:relative md:opacity-100 md:flex md:items-center"
              id="menu"
            >
            <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-white hover:underline"
                  >Showcase</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-white hover:underline"
                  >Catalog</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-white hover:underline"
                  >Delivery</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-white hover:underline"
                {{-- yg di class pake {{\Route::current()->getName()=='index'?'md:text-white hover:underline','md:text-black hover:underline'}} --}}
                  >Rewards</a
                >
              </li>
@auth
              <li class="py-6 mx-3 md:py-0">
                <a href="{{route('dashboard.index')}}" class="text-black md:text-white hover:underline"
                  >Dashboard</a
                >
              </li>
@endauth
@guest
              <li class="py-6 mx-3 md:py-0">
                <a href="{{route('login')}}" class="text-black md:text-white hover:underline"
                  >Login</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="{{route('register')}}" class="text-black md:text-white hover:underline"
                  >Register</a
                >
              </li>
              @endguest
            </ul>
            </div>
          <div class="w-auto">
            <ul class="flex items-center">
              <li class="block ml-6 md:hidden">
                <button
                  id="menu-toggler"
                  class="relative z-50 flex items-center justify-center w-8 h-8 text-black md:text-white focus:outline-none"
                >
                <svg
                    class="fill-current"
                    width="18"
                    height="17"
                    viewBox="0 0 18 17"
                  >
                    <path
                      d="M15.9773 0.461304H1.04219C0.466585 0.461304 0 0.790267 0 1.19609C0 1.60192 0.466668 1.93088 1.04219 1.93088H15.9773C16.5529 1.93088 17.0195 1.60192 17.0195 1.19609C17.0195 0.790208 16.5529 0.461304 15.9773 0.461304Z"
                    />
                    <path
                      d="M15.9773 7.68802H1.04219C0.466585 7.68802 0 8.01698 0 8.42281C0 8.82864 0.466668 9.1576 1.04219 9.1576H15.9773C16.5529 9.1576 17.0195 8.82864 17.0195 8.42281C17.0195 8.01692 16.5529 7.68802 15.9773 7.68802Z"
                    />
                    <path
                      d="M15.9773 14.9147H1.04219C0.466585 14.9147 0 15.2437 0 15.6495C0 16.0553 0.466668 16.3843 1.04219 16.3843H15.9773C16.5529 16.3843 17.0195 16.0553 17.0195 15.6495C17.0195 15.2436 16.5529 14.9147 15.9773 14.9147Z"
                    />
                  </svg>
                </button>
              </li>
              <li class="ml-6">
                <a
                  id="header-cart"
                  class="flex items-center justify-center w-8 h-8 text-black md:text-white"
                  href="{{route('cart')}}"
                >
                  <svg
                    class="fill-current"
                    width="26"
                    height="24"
                    viewBox="0 0 26 24"
                  >
                    <path
                      d="M10.8754 18.7312C9.61762 18.7312 8.59436 19.7115 8.59436 20.9164C8.59436 22.1214 9.61762 23.1017 10.8754 23.1017C12.1331 23.1017 13.1564 22.1214 13.1564 20.9164C13.1563 19.7115 12.1331 18.7312 10.8754 18.7312ZM10.8754 21.8814C10.3199 21.8814 9.86796 21.4485 9.86796 20.9163C9.86796 20.3842 10.3199 19.9512 10.8754 19.9512C11.4308 19.9512 11.8828 20.3842 11.8828 20.9163C11.8828 21.4486 11.4308 21.8814 10.8754 21.8814Z"
                    />
                    <path
                      d="M18.8764 18.7312C17.6186 18.7312 16.5953 19.7115 16.5953 20.9164C16.5953 22.1214 17.6186 23.1017 18.8764 23.1017C20.1342 23.1017 21.1575 22.1214 21.1575 20.9164C21.1574 19.7115 20.1341 18.7312 18.8764 18.7312ZM18.8764 21.8814C18.3209 21.8814 17.869 21.4485 17.869 20.9163C17.869 20.3842 18.3209 19.9512 18.8764 19.9512C19.4319 19.9512 19.8838 20.3842 19.8838 20.9163C19.8838 21.4486 19.4319 21.8814 18.8764 21.8814Z"
                    />
                    <path
                      d="M19.438 7.2262H10.3122C9.96051 7.2262 9.67542 7.49932 9.67542 7.83626C9.67542 8.1732 9.96056 8.44632 10.3122 8.44632H19.438C19.7897 8.44632 20.0748 8.1732 20.0748 7.83626C20.0748 7.49927 19.7897 7.2262 19.438 7.2262Z"
                    />
                    <path
                      d="M18.9414 10.3942H10.8089C10.4572 10.3942 10.1721 10.6673 10.1721 11.0042C10.1721 11.3412 10.4572 11.6143 10.8089 11.6143H18.9413C19.293 11.6143 19.5781 11.3412 19.5781 11.0042C19.5781 10.6673 19.293 10.3942 18.9414 10.3942Z"
                    />
                    <path
                      d="M25.6499 4.508C25.407 4.22245 25.0472 4.05871 24.6626 4.05871H4.82655L4.42595 2.19571C4.34232 1.80709 4.06563 1.48078 3.68565 1.32272L0.890528 0.160438C0.567841 0.0261566 0.192825 0.168008 0.0528584 0.477043C-0.0872597 0.786176 0.0608116 1.14549 0.383347 1.27957L3.17852 2.4419L6.2598 16.7708C6.38117 17.3351 6.90578 17.7446 7.50723 17.7446H22.7635C23.1152 17.7446 23.4003 17.4715 23.4003 17.1346C23.4003 16.7976 23.1152 16.5245 22.7635 16.5245H7.50728L7.13247 14.7815H22.8814C23.4828 14.7815 24.0075 14.3719 24.1288 13.8076L25.9101 5.52488C25.9876 5.16421 25.8928 4.79349 25.6499 4.508ZM22.8814 13.5615H6.87012L5.08895 5.27879L24.6626 5.27884L22.8814 13.5615Z"
                    />
                  </svg>
                </a>
              </li>
            </ul>
@endsection
@section('content')
    <!-- START: HERO -->
    <section class="flex items-center hero">
      <div
        class="absolute inset-0 z-20 flex flex-col justify-center w-full text-center md:relative md:w-1/2 hero-caption"
      >
        <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
          The Room <br class="" />You've Dreaming
        </h1>
        <h2 class="px-8 my-6 text-base tracking-wide md:px-0 md:text-lg">
          Kami menyediakan furniture berkelas yang
          <br class="hidden lg:block" />membuat ruangan terasa homey
        </h2>
        <div>
          <a
            href="#browse-the-room"
            class="flex-none inline-block px-8 py-3 mt-4 text-black transition duration-200 bg-pink-400 rounded-full hover:bg-black hover:text-pink-400"
            >Explore Now</a
          >
        </div>
      </div>
      <div class="inset-0 w-full md:relative md:w-1/2">
        <div class="relative hero-image">
          <div class="inset-0 z-10 bg-black overlay opacity-35"></div>
          <div class="bottom-0 right-0 overlay md:inset-0">
            <button
              class="z-30 video hero-cta focus:outline-none modal-trigger"
              data-content='<div class="relative z-50 w-screen pb-56 md:w-88 md:pb-56">
              <div class="absolute w-full h-full">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://www.youtube.com/embed/3h0_v1cdUIA"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>
            </div>'
            ></button>
          </div>
          <img
            src="{{url('/frontend/images/content/image-section-1.png')}}"
            alt="hero 1"
            class="absolute inset-0 object-cover object-center w-full h-full md:relative"
          />
        </div>
      </div>
    </section>
    <!-- END: HERO -->

    <!-- START: BROWSE THE ROOM -->
    <section class="flex px-4 py-16 bg-gray-100" id="browse-the-room">
      <div class="container mx-auto">
        <div class="flex mb-4 flex-start">
          <h3 class="text-2xl font-semibold capitalize">
            browse the room <br class="" />that we designed for you
          </h3>
        </div>
        <div class="grid grid-cols-9 grid-rows-2 gap-4">
          <div
            class="relative col-span-9 row-span-1 md:col-span-4 card"
            style="height: 180px"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="{{url('/frontend/images/content/image-catalog-1.png')}}"
                alt=""
                class="object-cover object-center w-full h-full overflow-hidden overlay rounded-xl"
              />
            </div>
            <div
              class="top-0 bottom-0 left-0 flex flex-col justify-center pl-48 overlay md:pl-72"
            >
              <h5 class="text-lg font-semibold">Living Room</h5>
              <span class="">18.309 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div
            class="relative col-span-9 row-span-1 md:col-span-2 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="{{url('/frontend/images/content/image-catalog-3.png')}}"
                alt=""
                class="object-cover object-center w-full h-full overflow-hidden overlay rounded-xl"
              />
            </div>
            <div
              class="top-0 bottom-0 left-0 right-0 flex flex-col justify-center pt-0 pl-48 overlay md:bottom-auto md:items-center md:pl-0 md:pt-12"
            >
              <h5 class="text-lg font-semibold">Decoration</h5>
              <span class="">77.392 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div
            class="relative col-span-9 row-span-1 md:col-span-3 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="{{url('/frontend/images/content/image-catalog-4.png')}}"
                alt=""
                class="object-cover object-center w-full h-full overflow-hidden overlay rounded-xl"
              />
            </div>
            <div
              class="top-0 bottom-0 left-0 right-0 flex flex-col justify-center pt-0 pl-48 overlay md:bottom-auto md:items-center md:pl-0 md:pt-12"
            >
              <h5 class="text-lg font-semibold">Living Room</h5>
              <span class="">22.094 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div class="relative col-span-9 row-span-1 md:col-span-4 card">
            <div class="card-shadow rounded-xl">
              <img
                src="{{url('/frontend/images/content/image-catalog-2.png')}}"
                alt=""
                class="object-cover object-center w-full h-full overflow-hidden overlay rounded-xl"
              />
            </div>
            <div
              class="top-0 bottom-0 left-0 flex flex-col justify-center pl-48 overlay md:pl-72"
            >
              <h5 class="text-lg font-semibold">Children Room</h5>
              <span class="">837 items</span>
            </div>
            <a href="details.html" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END: BROWSE THE ROOM -->

    <!-- START: JUST ARRIVED -->
    <section class="flex flex-col py-16">
      <div class="container mx-auto mb-4">
        <div class="flex justify-center mb-4 text-center">
          <h3 class="text-2xl font-semibold capitalize">
            Just Arrived <br class="" />this summer for you
          </h3>
        </div>
      </div>
      <div class="px-4 overflow-x-hidden" id="carousel">
        <div class="container mx-auto"></div>
        <!-- <div class="z-10 overflow-hidden"> -->
        <div class="relative flex flex-row -mx-4">
          @foreach ($products as $product)
            
          <!-- START: JUST ARRIVED ROW 1 -->
          <div class="relative px-4 card group">
            <div
              class="relative overflow-hidden rounded-xl card-shadow"
              style="width: 287px; height: 386px"
            >
              <div
                class="absolute flex items-center justify-center w-full h-full transition duration-200 bg-black opacity-0 group-hover:opacity-100 bg-opacity-35"
              >
                <div
                  class="flex items-center justify-center w-16 h-16 text-black bg-white rounded-full"
                >
                  <svg
                    class="fill-current"
                    width="43"
                    height="24"
                    viewBox="0 0 43 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z"
                    />
                    <path
                      d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z"
                    />
                  </svg>
                </div>
              </div>
              <img
                src="{{Storage::url($product->url)}}"
                {{-- <img src="'.Storage::url($item->url).'"/> --}}
                alt=""
                class="object-cover object-center w-full h-full"
              />
            </div>
            <h5 class="mt-4 text-lg font-semibold">{{$product->name}}</h5>
            <span class="">{{$product->price}}</span>
            <a href="{{route('detail',$product->id)}}" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <!-- END: JUST ARRIVED ROW 1 -->
          @endforeach
        </div>
        <!-- </div> -->
      </div>
    </section>
    <!-- END: JUST ARRIVED -->
@endsection
@section('client')
<!-- START: CLIENTS -->
<section class="container mx-auto">
      <div class="flex flex-wrap justify-center">
        <div
          class="flex-auto w-full px-4 my-4 md:w-auto md:flex-initial md:px-6 md:my-0"
        >
          <img src="{{url('/frontend/images/content/logo-adobe.svg')}}" alt="" class="mx-auto" />
        </div>
        <div
          class="flex-auto w-full px-4 my-4 md:w-auto md:flex-initial md:px-6 md:my-0"
        >
          <img src="{{url('/frontend/images/content/logo-ikea.svg')}}" alt="" class="mx-auto" />
        </div>
        <div
          class="flex-auto w-full px-4 my-4 md:w-auto md:flex-initial md:px-6 md:my-0"
        >
          <img
            src="{{url('/frontend/images/content/logo-hermanmiller.svg')}}"
            alt=""
            class="mx-auto"
          />
        </div>
        <div
          class="flex-auto w-full px-4 my-4 md:w-auto md:flex-initial md:px-6 md:my-0"
        >
          <img src="{{url('/frontend/images/content/logo-miele.svg')}}" alt="" class="mx-auto" />
        </div>
      </div>
    </section>
    <!-- END: CLIENTS -->
        
  @endsection