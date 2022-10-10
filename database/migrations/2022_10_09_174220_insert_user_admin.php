<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $email = env('ADMIN_EMAIL', 'admin@laravel.com');
        $password = bcrypt(env('ADMIN_PASSWORD', 'admin'));

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => $email,
            'password' => $password
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $email = env('ADMIN_EMAIL', 'admin@laravel.com');
        DB::delete('DELETE FROM USERS where email = ?', [$email]);
    }
};
