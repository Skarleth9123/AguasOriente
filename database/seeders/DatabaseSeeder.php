<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Factura;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this ->call([
            ClienteSeeder::class,
            ServicioSeeder::class,
            FacturaSeeder::class
        ]);
    }
}
