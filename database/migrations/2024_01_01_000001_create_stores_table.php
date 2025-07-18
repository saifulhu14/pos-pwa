<?php
Schema::create('stores', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});

Schema::table('users', function (Blueprint $table) {
    $table->foreignId('store_id')->nullable()->constrained()->onDelete('cascade');
});

Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->foreignId('store_id')->constrained()->onDelete('cascade');
    $table->string('name');
    $table->integer('price');
    $table->integer('stock')->default(0);
    $table->timestamps();
});

Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('store_id')->constrained()->onDelete('cascade');
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->json('items');
    $table->integer('total');
    $table->timestamps();
});

