<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $orders = Order::where('tenggat_waktu', '<', Carbon::now())
                        ->where('status_pengembalian', 'belum dikembalikan')
                        ->get();

            foreach ($orders as $order) {
                // Kurangkan stok produk dan tandai pesanan sebagai "sudah dikembalikan"
                $product = Product::find($order->product_id);
                $product->increment('quantity', $order->quantity);
                
                $order->update(['status_pengembalian' => 'sudah dikembalikan']);
            }
        })->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    // app/Http/Kernel.php

    protected $middlewareGroups = [
        'web' => [
            // ...
            \App\Http\Middleware\VerifyCsrfToken::class,
            // ...
        ],
    ];

}
