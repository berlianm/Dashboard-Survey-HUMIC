<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::create([            
            'quiz' => 'Bagaimana kondisi gigi anda',
            'description' => ''         
        ]);
        Quiz::create([            
            'quiz' => 'Bagaimana kondisi puskesmas di tempat anda',
            'description' => ''            
        ]);
        Quiz::create([            
            'quiz' => 'Bagaimana pelayanan puskesmas di tempat anda',
            'description' => ''          
        ]);              
         Quiz::create([            
            'quiz' => 'Bagaimana kondisi parkiran puskesmas di tempat anda',
            'description' => ''           
        ]);
        Quiz::create([            
            'quiz' => 'Bagaimana pelayanan kantin puskesmas di tempat anda',
            'description' => ''          
        ]);         
    }
}
