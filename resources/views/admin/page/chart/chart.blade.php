Schema::create('reservations', function (Blueprint $table) {
    $table->id();

    $table->unsignedBigInteger('id_articles');
    $table->foreign('id_articles')
    ->references('id')
    ->on('articles')
    ->onDelete('cascade')
    ->onUpdate('cascade');

    $table->unsignedBigInteger('id_users');
    $table->foreign('id_users')
    ->references('id')
    ->on('users')
    ->onDelete('cascade')
    ->onUpdate('cascade');

    
    $table->timestamps();
});