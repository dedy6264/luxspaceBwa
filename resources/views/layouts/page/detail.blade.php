@extends('layouts.frontend')

@section('ul')
<ul
              class="fixed inset-0 z-0 flex flex-col items-center justify-center invisible bg-white opacity-0 md:visible md:flex-row md:bg-transparent md:relative md:opacity-100 md:flex md:items-center"
              id="menu"
            >
            <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-black hover:underline"
                  >Showcase</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-black hover:underline"
                  >Catalog</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-black hover:underline"
                  >Delivery</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="#" class="text-black md:text-black hover:underline" 
                {{-- yg di class pake {{\Route::current()->getName()=='index'?'md:text-white hover:underline','md:text-black hover:underline'}} --}}
                  >Rewards</a
                >
              </li>
@auth
              <li class="py-6 mx-3 md:py-0">
                <a href="{{route('dashboard.index')}}" class="text-black md:text-black hover:underline"
                  >Dashboard</a
                >
              </li>
@endauth
@guest
              <li class="py-6 mx-3 md:py-0">
                <a href="{{route('login')}}" class="text-black md:text-black hover:underline"
                  >Login</a
                >
              </li>
              <li class="py-6 mx-3 md:py-0">
                <a href="{{route('register')}}" class="text-black md:text-black hover:underline"
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
                  class="relative z-50 flex items-center justify-center w-8 h-8 text-black md:text-black focus:outline-none"
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
                  href="{{route('cart')}}"
                  class="flex items-center justify-center w-8 h-8 text-black cart cart-filled"
                >
                  <svg
                    class="fill-current"
                    width="29"
                    height="25"
                    viewBox="0 0 29 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.8754 19.9824C9.61762 19.9824 8.59436 21.023 8.59436 22.3021C8.59436 23.5812 9.61762 24.6218 10.8754 24.6218C12.1331 24.6218 13.1564 23.5812 13.1564 22.3021C13.1563 21.023 12.1331 19.9824 10.8754 19.9824ZM10.8754 23.3265C10.3199 23.3265 9.86796 22.8669 9.86796 22.302C9.86796 21.7371 10.3199 21.2775 10.8754 21.2775C11.4308 21.2775 11.8828 21.7371 11.8828 22.302C11.8828 22.867 11.4308 23.3265 10.8754 23.3265Z"
                    />
                    <path
                      d="M18.8764 19.9824C17.6186 19.9824 16.5953 21.023 16.5953 22.3021C16.5953 23.5812 17.6186 24.6218 18.8764 24.6218C20.1342 24.6218 21.1575 23.5812 21.1575 22.3021C21.1574 21.023 20.1341 19.9824 18.8764 19.9824ZM18.8764 23.3265C18.3209 23.3265 17.869 22.8669 17.869 22.302C17.869 21.7371 18.3209 21.2775 18.8764 21.2775C19.4319 21.2775 19.8838 21.7371 19.8838 22.302C19.8838 22.867 19.4319 23.3265 18.8764 23.3265Z"
                    />
                    <path
                      d="M19.438 7.76947H10.3122C9.96051 7.76947 9.67542 8.0594 9.67542 8.41707C9.67542 8.77474 9.96056 9.06467 10.3122 9.06467H19.438C19.7897 9.06467 20.0748 8.77474 20.0748 8.41707C20.0748 8.05935 19.7897 7.76947 19.438 7.76947Z"
                    />
                    <path
                      d="M18.9414 11.1324H10.8089C10.4572 11.1324 10.1721 11.4223 10.1721 11.78C10.1721 12.1377 10.4572 12.4276 10.8089 12.4276H18.9413C19.293 12.4276 19.5781 12.1377 19.5781 11.78C19.5781 11.4224 19.293 11.1324 18.9414 11.1324Z"
                    />
                    <path
                      d="M25.6499 4.88404C25.407 4.58092 25.0472 4.40711 24.6626 4.40711H4.82655L4.42595 2.42947C4.34232 2.01694 4.06563 1.67055 3.68565 1.50276L0.890528 0.268963C0.567841 0.126419 0.192825 0.276999 0.0528584 0.60505C-0.0872597 0.933204 0.0608116 1.31463 0.383347 1.45696L3.17852 2.69081L6.2598 17.9014C6.38117 18.5004 6.90578 18.9352 7.50723 18.9352H22.7635C23.1152 18.9352 23.4003 18.6452 23.4003 18.2876C23.4003 17.9299 23.1152 17.64 22.7635 17.64H7.50728L7.13247 15.7897H22.8814C23.4828 15.7897 24.0075 15.3549 24.1288 14.7559L25.9101 5.96349C25.9876 5.58063 25.8928 5.1871 25.6499 4.88404ZM22.8814 14.4946H6.87012L5.08895 5.70226L24.6626 5.70231L22.8814 14.4946Z"
                    />
                    <g class="text-pink-400">
                      <circle
                        cx="25"
                        cy="4.89023"
                        r="4"
                        class="fill-current dot"
                      />
                    </g>
                  </svg>
                </a>
              </li>
            </ul>
@endsection
@section('breadcumb')
<!-- START: BREADCRUMB -->
<section class="px-4 py-8 bg-gray-100">
      <div class="container mx-auto">
        <ul class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#">Office Room</a>
          </li>
          <li>
            <a href="#" aria-label="current-page">Details</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- END: BREADCRUMB -->
@endsection

@section('content')

    <!-- START: DETAILS -->
    <section class="container mx-auto">
      <div class="flex flex-wrap my-4 md:my-12">
        <div class="w-full px-4 md:hidden">
          <h2 class="text-5xl font-semibold">{{$product->name}}</h2>
          <span class="text-xl">IDR {{number_format($product->price)}}</span>
        </div>
        <div class="flex-1">
          <div class="slider">
            <div class="thumbnail">
              @foreach ($products as $item)
              <div class="px-2">
                <div
                  class="item {{$loop->last ? 'selected':''}}"
                  data-img="{{Storage::url($item->url)}}"
                >
                  <img
                    src="{{Storage::url($item->url)}}"
                    alt="front"
                    class="object-cover w-full h-full rounded-lg"
                  />
                </div>
              </div>
              @endforeach
            </div>
            <div class="preview">
              <div class="h-full overflow-hidden rounded-lg item">
                <img
                  src="{{Storage::url($item->url)}}"
                  alt="front"
                  class="object-cover w-full h-full rounded-lg"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="flex-1 px-4 md:p-6">
          <h2 class="text-5xl font-semibold">{{$product->name}}</h2>
          <p class="text-xl">IDR {{number_format($product->price)}}</p>
<form action="{{route('cart-add',$product->id)}}" method="post">
  @csrf
          <button
            class="inline-flex px-8 py-3 mt-4 text-black transition-all duration-200 bg-pink-400 rounded-full focus:bg-black focus:text-pink-400"
            ><svg
              class="mr-3 fill-current"
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
            Add to Cart</button
          ></form>
          <hr class="my-8" />

          <h6 class="mb-4 text-xl font-semibold">About the product</h6>
          <p class="mb-6 text-xl leading-7">
            {!!$product->description!!}
            {{-- Tailored to a level of perfection synonymous with that of a Savile
            Row suit and with understated quality in the detail, Jetty has been
            influenced by timeless 1950s style. --}}
          </p>
          {{-- <p class="text-xl leading-7">
            Providing a subtle nod to the past, Jetty also provides a perfect
            solution for the way we work today. A comprehensive product family,
            Jetty features a variety of elegant chairs and sofas.
          </p> --}}
         
        </div>
      </div>
    </section>
    <!-- END: DETAILS -->

    <!-- START: COMPLETE YOUR ROOM -->
    <section class="px-4 py-16 bg-gray-100">
      <div class="container mx-auto">
        <div class="flex mb-4 flex-start">
          <h3 class="text-2xl font-semibold capitalize">
            Complete your room <br class="" />with what we designed
          </h3>
        </div>
        <div class="flex mb-4 -mx-3 overflow-x-auto">
          @foreach ($other as $item)
          <div class="flex-none px-3" style="width: 320px">
            <div class="relative p-4 pb-8 bg-white rounded-xl">
              <div class="w-full overflow-hidden rounded-xl card-shadow h-36">
                <img
                  src="{{Storage::url($item->url)}}"
                  alt=""
                  class="object-cover object-center w-full h-full"
                />
              </div>
              <h5 class="mt-4 text-lg font-semibold">{{$item->name}}</h5>
              <span class="">IDR {{number_format($item->price)}}</span>
              <a href="{{route('detail',$item->id)}}" class="stretched-link">
                <!-- fake children -->
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- END: COMPLETE YOUR ROOM -->
@endsection
