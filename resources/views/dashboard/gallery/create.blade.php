<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Product &raquo; Create
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    {{-- <x-slot name="script">
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
    </x-slot> --}}
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- <div class="mb-10">
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
            </div> --}}
            <div>
                @if($errors->any())
                <div class="mb-5" role="alert">
<div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
    There's something wrong
</div>
<div class="px-4 py-3 bg-red-100 border border-t-0 border-red-400 rounded-b text-red 700">
    <p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach)
        </ul>
    </p>
</div>
 </div>
                @endif
                <form action="{{ route('dashboard.product.gallery.store',$product->id) }}" class="w-full" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">Name</label>
                            <input type="file" multiple accept="image/*" name="files[]" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3">
                            <button type="submit" value="submit" class="px-4 py-2 font-bold text-white bg-indigo-600 rounded shadow-lg hover:bg-red-600">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</x-app-layout>
