<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            //Aturan laravel foreiegn haru (nama_tabel_id)
            $table->foreignId('user_id')
            ->constrained('users');

            //foreign tidak menggunakan aturan laravel
            $table->unsignedBigInteger('paid_with')->nullable();
            $table->foreign('paid_with')
            ->references('id')
            ->on('app_settings');

            $table->string('code_transaction');
            $table->datetime('transaction_date');
            $table->enum('status', ['succes', 'cancel', 'pending', 'delivery']);
            $table->integer('total_amount');
            $table->enum('payment_type', ['cash','cashless']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
