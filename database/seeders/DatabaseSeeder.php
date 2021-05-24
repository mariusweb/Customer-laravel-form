<?php

namespace Database\Seeders;

use App\Models\Darbuotojai;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{

    protected $toTruncate = ['darbuotojai'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Schema::disableForeignKeyConstraints();

        foreach ($this->toTruncate as $table) {
            if (Schema::hasTable($table)) {
                DB::table($table)->truncate();
            }
        }
        
        $this->call(DarbuotojaiSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
