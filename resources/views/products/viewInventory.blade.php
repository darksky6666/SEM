<x-app-layout>
    <div class="h-full">
        <p class="text-xl mb-4">Inventory</p>
        <div class="flex justify-end w-full mb-5 relative right-0">
            {{-- @include('components.searchbar') --}}
            <form action="{{ route('search') }}" method="GET">
                <div class="flex items-center border rounded-lg">
                    <input type="text" name="query" placeholder="Search..."
                        class="px-4 py-2 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Search</button>
                </div>
            </form>
            <a href="{{ route('addInventory') }}"
                class="p-2 mx-2 border border-transparent rounded-xl hover:text-gray-600"
                style="background-color: #00AEA6;">
                Add Product
            </a>
        </div>
        <div class="w-full mb-3">
            {{-- Return alert message if inventory stock is low --}}
            @if ($alert->count() > 0)
                @foreach ($alert as $item)
                    <div class="bg-red-500 p-1 m-1 rounded-xl text-white text-center">
                        {{ $item->product_name }} is low in stock. Quantity left: {{ $item->product_quantity }}.
                    </div>
                @endforeach
            @endif
        </div>
        <div class="bg-white border border-slate-300 rounded-xl w-full p-4 overflow-y-auto h-4/5">
            <table class="table-auto w-full text-center">
                <thead>
                    <tr>
                        <th class="py-2">BARCODE</th>
                        <th class="py-2">NAME</th>
                        <th class="py-2">COST</th>
                        <th class="py-2">PRICE</th>
                        <th class="py-2">QUANTITY</th>
                        <th class="py-2">CATEGORY</th>
                        <th class="py-2">BRAND</th>
                        <th class="py-2">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr class="bg-gray-200 border-y-8 border-white">
                            <td class="py-2">{{ $item->product_id }}</td>
                            <td class="py-2">{{ $item->product_name }}</td>
                            <td class="py-2">{{ number_format($item->product_cost, 2) }}</td>
                            <td class="py-2">{{ number_format($item->product_price, 2) }}</td>
                            <td class="py-2">{{ $item->product_quantity }}</td>
                            <td class="py-2">{{ $item->product_category }}</td>
                            <td class="py-2">{{ $item->product_brand }}</td>
                            <td class="flex justify-center">
                                <a href="{{ route('editInventory', $item->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400 m-2"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                                <script>
                                    function confirmDeleteProduct() {
                                        return confirm('Are you sure you want to delete the product?');
                                    }
                                </script>
                                <form action="{{ route('deleteInventory', $item->id) }}" method="post">
                                    @csrf
                                    <button type="submit" onclick="return confirmDeleteProduct()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400 m-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
