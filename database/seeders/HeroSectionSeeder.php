<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::create([
            "name"=> "Shourab",
            "title"=> "Full Stack Developer Based in Bangladesh",
            "expertise"=> "FRONT-END & WEB DEVELOPER",
            "total_clients"=> "7000+ Clients Review",
        ]);
    }
}
