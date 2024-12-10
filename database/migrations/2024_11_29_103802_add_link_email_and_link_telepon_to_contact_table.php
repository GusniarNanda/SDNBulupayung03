<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkEmailAndLinkTeleponToContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->string('link_email')->nullable()->after('email'); // Menambahkan kolom link_email
            $table->string('link_telepon')->nullable()->after('telepon'); // Menambahkan kolom link_telepon
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->dropColumn('link_email'); // Menghapus kolom link_email
            $table->dropColumn('link_telepon'); // Menghapus kolom link_telepon
        });
    }
}
