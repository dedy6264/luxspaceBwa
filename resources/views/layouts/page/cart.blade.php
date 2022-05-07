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
            <a href="#" aria-label="current-page">Shopping Cart</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- END: BREADCRUMB -->
@endsection
@section('content')
    <!-- START: COMPLETE YOUR ROOM -->
    <section class="md:py-16">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 mb-4 md:w-8/12 md:mb-0" id="shopping-cart">
            <div
              class="flex pb-3 mt-8 mb-4 border-b border-gray-200 flex-start md:border-b-0"
            >
              <h3 class="text-2xl">Shopping Cart</h3>
            </div>

            <div class="hidden mb-4 border-b border-gray-200 md:block">
              <div class="flex items-center pb-2 -mx-4 flex-start">
                <div class="flex-none px-4">
                  <div class="" style="width: 90px">
                    <h6>Photo</h6>
                  </div>
                </div>
                <div class="w-5/12 px-4">
                  <div class="">
                    <h6>Product</h6>
                  </div>
                </div>
                <div class="w-5/12 px-4">
                  <div class="">
                    <h6>Price</h6>
                  </div>
                </div>
                <div class="w-2/12 px-4">
                  <div class="text-center">
                    <h6>Action</h6>
                  </div>
                </div>
              </div>
            </div>
            @forelse ($carts as $cart)
              <!-- START: ROW 1 -->
              <div
              class="flex flex-wrap items-center mb-4 -mx-4 flex-start"
              data-row="1"
            >
              <div class="flex-none px-4">
                <div class="" style="width: 90px; height: 90px">
                  <img
                    src="{{Storage::url($cart->url)}}"
                    alt="chair-1"
                    class="object-cover w-full h-full rounded-xl"
                  />
                </div>
              </div>
              <div class="flex-1 w-auto px-4 md:w-5/12">
                <div class="">
                  <h6 class="text-lg font-semibold leading-8 md:text-xl">
                    {{$cart->name}}
                  </h6>
                  <span class="text-sm md:text-lg">Office Room</span>
                  <h6
                    class="block text-base font-semibold md:text-lg md:hidden"
                  >
                    IDR {{number_format($cart->price)}}
                  </h6>
                </div>
              </div>
              <div
                class="flex-none hidden w-auto px-4 md:flex-1 md:w-5/12 md:block"
              >
                <div class="">
                  <h6 class="text-lg font-semibold">IDR {{number_format($cart->price)}}</h6>
                </div>
              </div>
              <div class="w-2/12 px-4">
                <div class="text-center">
                  <form method="post" action="{{route('cart-delete',$cart->id)}}">
                  @csrf
                  @method('DELETE')
                    <button type="submit"
                    {{-- data-delete-item="1" --}}
                    class="px-3 py-1 text-red-600 border-none focus:outline-none"
                  >
                    X
                  </button>
                  </form>
                </div>
              </div>
            </div>
            <!-- END: ROW 1 -->
            @empty
            <p id="cart-empty" class="py-8 text-center ">
              Ooops... Cart is empty
              <a href="{{route('index')}}" class="underline">Shop Now</a>
            </p>
            @endforelse


          </div>
          <div class="w-full md:px-4 md:w-4/12" id="shipping-detail">
            <div class="px-4 py-6 bg-gray-100 md:p-8 md:rounded-3xl">
              <form action="success.html">
                <div class="flex mb-6 flex-start">
                  <h3 class="text-2xl">Shipping Details</h3>
                </div>

                <div class="flex flex-col mb-4">
                  <label for="complete-name" class="mb-2 text-sm"
                    >Complete Name</label
                  >
                  <input
                    data-input
                    type="text"
                    id="complete-name"
                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                    placeholder="Input your name"
                  />
                </div>

                <div class="flex flex-col mb-4">
                  <label for="email" class="mb-2 text-sm">Email Address</label>
                  <input
                    data-input
                    type="email"
                    id="email"
                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                    placeholder="Input your email address"
                  />
                </div>

                <div class="flex flex-col mb-4">
                  <label for="address" class="mb-2 text-sm">Address</label>
                  <input
                    data-input
                    type="text"
                    id="address"
                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                    placeholder="Input your address"
                  />
                </div>

                <div class="flex flex-col mb-4">
                  <label for="phone-number" class="mb-2 text-sm"
                    >Phone Number</label
                  >
                  <input
                    data-input
                    type="tel"
                    id="phone-number"
                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                    placeholder="Input your phone number"
                  />
                </div>

                <div class="flex flex-col mb-4">
                  <label for="complete-name" class="mb-2 text-sm"
                    >Choose Courier</label
                  >
                  <div class="flex flex-wrap -mx-2">
                    <div class="w-6/12 h-24 px-2 mb-4">
                      <button
                        type="button"
                        data-value="fedex"
                        data-name="courier"
                        class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none"
                      >
                        <img
                          src="/frontend/images/content/logo-fedex.svg"
                          alt="Logo Fedex"
                          class="object-contain max-h-full"
                        />
                      </button>
                    </div>
                    <div class="w-6/12 h-24 px-2 mb-4">
                      <button
                        type="button"
                        data-value="dhl"
                        data-name="courier"
                        class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none"
                      >
                        <img
                          src="/frontend/images/content/logo-dhl.svg"
                          alt="Logo dhl"
                          class="object-contain max-h-full"
                        />
                      </button>
                    </div>
                  </div>
                </div>

                <div class="flex flex-col mb-4">
                  <label for="complete-name" class="mb-2 text-sm"
                    >Choose Payment</label
                  >
                  <div class="flex flex-wrap -mx-2">
                    <div class="w-6/12 h-24 px-2 mb-4">
                      <button
                        type="button"
                        data-value="midtrans"
                        data-name="payment"
                        class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none"
                      >
                        <img
                          src="/frontend/images/content/logo-midtrans.png"
                          alt="Logo midtrans"
                          class="object-contain max-h-full"
                        />
                      </button>
                    </div>
                    <div class="w-6/12 h-24 px-2 mb-4">
                      <button
                        type="button"
                        data-value="mastercard"
                        data-name="payment"
                        class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none"
                      >
                        <img
                          src="/frontend/images/content/logo-mastercard.svg"
                          alt="Logo mastercard"
                        />
                      </button>
                    </div>
                    <div class="w-6/12 h-24 px-2 mb-4">
                      <button
                        type="button"
                        data-value="bitcoin"
                        data-name="payment"
                        class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none"
                      >
                        <img
                          src="/frontend/images/content/logo-bitcoin.svg"
                          alt="Logo bitcoin"
                          class="object-contain max-h-full"
                        />
                      </button>
                    </div>
                    <div class="w-6/12 h-24 px-2 mb-4">
                      <button
                        type="button"
                        data-value="american-express"
                        data-name="payment"
                        class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none"
                      >
                        <img
                          src="/frontend/images/content/logo-american-express.svg"
                          alt="Logo american-logo-american-express"
                        />
                      </button>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button
                    type="submit"
                    disabled
                    class="w-full px-6 py-3 text-lg text-black transition-all duration-200 bg-pink-400 rounded-full hover:bg-black hover:text-pink-400 focus:outline-none focus:text-black"
                  >
                    Checkout Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END: COMPLETE YOUR ROOM -->
@endsection