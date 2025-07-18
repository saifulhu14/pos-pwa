<?php
Schema::create('stores', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});
