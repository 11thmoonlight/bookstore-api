<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('address');
            $table->string('phone_number');
            $table->string('postal_code');
            $table->enum('order_status', [
                'order placed', 
                'processing', 
                'shipped', 
                'delivered', 
                'canceled', 
                'returned', 
                'refunded'
            ])->default('order placed');
            $table->string('email_address');
            $table->string('stripe_payment_id')->nullable();
            $table->decimal('pay_amount', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
