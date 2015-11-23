<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UsuarioTableSeeder::class);
        
        $this->call(BodegaTableSeeder::class);
        $this->call(CavaTableSeeder::class);
        $this->call(ControlDeCavaTableSeeder::class);
        $this->call(ProgramasTableSeeder::class);
        $this->call(ProveedorTableSeeder::class);
        $this->call(MateriaPrimaTableSeeder::class);
        $this->call(FlujoDeBodegaTableSeeder::class);
        $this->call(LoteDeMateriaPrimaTableSeeder::class);
        $this->call(LoteDeLecheTableSeeder::class);
        $this->call(ProductoDerivadoTableSeeder::class);
        $this->call(TamanoTableSeeder::class);
        $this->call(FlujoDeCavaTableSeeder::class);

        Model::reguard();
    }
}
