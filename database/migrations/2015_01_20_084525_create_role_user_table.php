<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned()->index();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        Caffeinated\Shinobi\Models\Role::create(['name' => 'Administrador', 'slug' => 'admin', 'description' => 'rol usuario admin']);
        Caffeinated\Shinobi\Models\Role::create(['name' => 'Ejecutivo', 'slug' => 'ejecutivo', 'description' => 'rol usuario ejecutivo']);
        Caffeinated\Shinobi\Models\Role::create(['name' => 'Socio', 'slug' => 'socio', 'description' => 'rol usuario socio']);
        Caffeinated\Shinobi\Models\Role::create(['name' => 'Empresa', 'slug' => 'empresa', 'description' => 'rol usuario empresa']);

        $admin = App\User::create([
            'rut' => '12.345.678-9',
            'password' => '$2y$10$y8U22b/Cqb2zren2oCGNdO01k2SM9tW3YwmYePC/TW/XzXqoOHgIK',
            'name' => 'Administrador',
            'email' => 'andres.munoz.b@usach.cl',
        ]);

        $ejecutivo = App\User::create([
            'rut' => '19.646.487-5',
            'password' => '$2y$10$y8U22b/Cqb2zren2oCGNdO01k2SM9tW3YwmYePC/TW/XzXqoOHgIK',
            'name' => 'Ejecutivo',
            'email' => 'af.munoz19@gmail.com',
        ]);
        $socio = App\User::create([
            'rut' => '19.448.718-5',
            'password' => '$2y$10$y8U22b/Cqb2zren2oCGNdO01k2SM9tW3YwmYePC/TW/XzXqoOHgIK',
            'name' => 'Socio',
            'email' => 'javier.arredondo.co@usach.cl',
        ]);

        $empresa = App\User::create([
            'rut' => '19.181.897-0',
            'password' => '$2y$10$y8U22b/Cqb2zren2oCGNdO01k2SM9tW3YwmYePC/TW/XzXqoOHgIK',
            'name' => 'Empresa',
            'email' => 'cristian@usach.cl',
        ]);

        $admin->assignRole(1);
        $ejecutivo->assignRole(2);
        $socio->assignRole(3);
        $empresa->assignRole(4);
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_user');
    }
}
