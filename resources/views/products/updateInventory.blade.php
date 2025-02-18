<x-app-layout>
    <div class="w-full">
        <p class="text-xl mb-4">Edit Product</p>
        <div class="flex justify-end w-full mb-5 relative right-0">
            @include('components.searchbar')
        </div>
        <div class="bg-white border border-slate-300 rounded-xl w-full p-3">
            <form action="{{ route('updateInventory', $product->id) }}" method="post">
                @csrf
                <table class="rounded-xl px-4 w-3/6">
                    <tbody >
                        <tr>
                            <td class="px-4 py-2"><label>Barcode</label></td>
                            <td class="px-4 py-2"><input type="text" name="product_id" value="{{ $product->product_id }}" class="form-control rounded-xl w-2/5 bg-gray-200 border border-slate-400" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Name</label></td>
                            <td class="px-4 py-2"><input type="text" name="name" value="{{ $product->product_name }}" class="form-control rounded-xl w-full bg-gray-200 border border-slate-400" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Cost</label></td>
                            <td class="px-4 py-2"><input type="number" name="cost" value="{{ $product->product_cost }}" class="form-control rounded-xl bg-gray-200 border border-slate-400" step=".01" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Price</label></td>
                            <td class="px-4 py-2"><input type="number" name="price" value="{{ $product->product_price }}" class="form-control rounded-xl bg-gray-200 border border-slate-400" step=".01" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Quantity</label></td>
                            <td class="px-4 py-2"><input type="text" name="quantity" value="{{ $product->product_quantity }}" class="form-control rounded-xl w-2/6 bg-gray-200 border border-slate-400" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Category</label></td>
                            <td class="px-4 py-2"><select name="category" required value="{{ $product->product_category }}" class="rounded-xl w-2/5 bg-gray-200 border border-slate-400">
                                <option value="food">Food</option>
                                <option value="stationary">Stationary</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Brand</label></td>
                            <td class="px-4 py-2"><input type="text" value="{{ $product->product_brand }}" name="brand" class="form-control rounded-xl w-full bg-gray-200 border border-slate-400" required></td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-end px-4 py-2">
                    <div class="px-4">
                        <input type="reset" value="Reset" class="btn border border-slate-400 bg-gray-400 px-3 py-2 rounded-xl hover:bg-gray-300">
                    </div>
                    <div class="px-4">
                        <input type="submit" value="Save" class="btn btn-success border border-slate-300 bg-emerald-500/80 px-3 py-2 rounded-xl hover:bg-emerald-400/80">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
