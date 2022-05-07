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
                {data:'action', name:'action', orderable:false, searchable:false},
            ],
        } );

        
    </script>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.product.create') }}" class="px-4 py-2 font-bold text-white bg-indigo-600 rounded shadow-lg hover:bg-red-600">
                    + Create Product
                </a>
            </div>
            <div class="py-12 overflow-hidden shadow sm-rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
