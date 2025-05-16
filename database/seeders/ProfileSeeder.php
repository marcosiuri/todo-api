<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        $profiles = [
            ['name' => 'Admin', 'description' => 'Acesso completo ao sistema'],
            ['name' => 'Manager', 'description' => 'Gerencia projetos e usuários limitados'],
            ['name' => 'User', 'description' => 'Usuário comum com acesso às suas tarefas'],
            ['name' => 'Guest', 'description' => 'Somente leitura, sem permissões de escrita'],
        ];

        foreach ($profiles as $profile) {
            Profile::firstOrCreate(['name' => $profile['name']], $profile);
        }
    }
}