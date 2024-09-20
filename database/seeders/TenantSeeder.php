<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t1 = Tenant::create(['id'=>'tenant1', 'name'=>'Tenant 1']);
        $t1->domains()->create(['domain'=>'tenant1.localhost']);

        $t1 = Tenant::create(['id'=>'tenant2', 'name'=>'Tenant 2']);
        $t1->domains()->create(['domain'=>'tenant2.localhost']);

        $t1 = Tenant::create(['id'=>'tenant3', 'name'=>'Tenant 3']);
        $t1->domains()->create(['domain'=>'tenant3.localhost']);

    }
}
