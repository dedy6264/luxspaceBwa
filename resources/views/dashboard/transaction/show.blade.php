<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    <x-slot name="script">
        <script>
        var datatable=$('#crudTable').DataTable( {
            ajax:{
                url:'{!!url()->current()!!}',
            },
            columns:[
                {data:'id', name:'id'},
                {data:'name', name:'name'},
                {data:'price', name:'price'},
            ],
        } );

        
    </script>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- <div class="mb-10">
                <a href="{{ route('dashboard.product.create') }}" class="px-4 py-2 font-bold text-white bg-indigo-600 rounded shadow-lg hover:bg-red-600">
                    + Create Product
                </a>
            </div> --}}
            <div class="mb-10 overflow-hidden shadow sm-rounded-md">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto">
                        <tr><th>Nama</th><td>{{$transaction->name}}</td></tr>
                        <tr><th>Email</th><td>{{$transaction->email}}</td></tr>
                        <tr><th>Address</th><td>{{$transaction->address}}</td></tr>
                        <tr><th>Phone</th><td>{{$transaction->phone}}</td></tr>
                        <tr><th>Courier</th><td>{{$transaction->courier}}</td></tr>
                        <tr><th>Payment</th><td>{{$transaction->payment}}</td></tr>
                        <tr><th>Payment URL</th><td>{{$transaction->payment_url}}</td></tr>
                        <tr><th>Total Price</th><td>{{$transaction->total_price}}</td></tr>
                        <tr><th>Status</th><td>{{$transaction->status}}</td></tr>
                     </table>
                </div></div>
                <h2 class="mb-5 text-lg font-semibold leading-tight text-gray-800">Transaction Items</h2>
            <div class="overflow-hidden shadow sm-rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    
                    <table id="crudTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produk</th>
                            <th>Harga</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
