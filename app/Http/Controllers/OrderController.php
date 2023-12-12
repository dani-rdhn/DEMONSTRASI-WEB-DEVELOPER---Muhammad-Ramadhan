<?php

// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Fungsi-fungsi controller lainnya

    public function returnOrder($orderId)
    {
        // Temukan pesanan berdasarkan ID
        $order = Order::find($orderId);

        if (!$order) {
            return response()->json(['error' => 'Pesanan tidak ditemukan.'], 404);
        }

        // Temukan produk berdasarkan ID produk di pesanan
        $product = Product::find($order->product_id);

        if ($product) {
            // Kembalikan quantity ke produk
            $product->increment('quantity', $order->quantity);

            // Tandai pesanan sebagai "sudah dikembalikan"
            $order->update(['status_pengembalian' => 'sudah dikembalikan']);

            return response()->json(['message' => 'Pengembalian berhasil.']);
        } else {
            return response()->json(['error' => 'Produk tidak ditemukan.'], 404);
        }
    }
}

