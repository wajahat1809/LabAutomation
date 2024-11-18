<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

public function showProducts()
{
    $products = Product::all();
    return view('products', compact('products'));
}


    // Show all products
    public function index()
    {
        $products = Product::all(); // Fetching all products
        return view('products.index', compact('products')); // Returning view
    }

    // Show form to create a new product
    public function create()
    {
        return view('products.create'); // Show product creation form
    }

    // Store new product
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0', // Ensure price is numeric and >= 0
            'stock' => 'required|integer|min:1', // Ensure stock is an integer and >= 1
        ]);

        // Store the product data into the database
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
        ]);

        // Redirect to the products index page with a success message
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    // Show edit form for product
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Find product by ID
        return view('products.edit', compact('product')); // Show edit form
    }

    // Update product
    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0', // Ensure price is numeric and >= 0
            'stock' => 'required|integer|min:1', // Ensure stock is an integer and >= 1
        ]);

        $product = Product::findOrFail($id); // Find product by ID

        // Update the product with the validated data
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
        ]);

        // Redirect back to the products index page with a success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete product
    public function destroy($id)
    {
        $product = Product::findOrFail($id); // Find product by ID
        $product->delete(); // Delete the product

        // Redirect back to the products index page with a success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
