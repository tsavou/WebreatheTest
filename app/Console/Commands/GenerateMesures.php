<?php

namespace App\Console\Commands;

use App\Models\Mesure;
use App\Models\Module;
use Illuminate\Console\Command;

class GenerateMesures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-mesures';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Récupère tous les modules

    $modules = Module::all();

    foreach ($modules as $module) {

        // etat aléatoire du module
        $module->status = rand(0, 1);
        $module->save();

        // si le module est actif
        if ($module->status==1) {

            // genere des mesures aleatoires

            $mesureValue=rand(0, 100);

            // enregistre la mesure dans la base de données

            Mesure::create([
                'module_id' => $module->id,
                'valeur_mesuree' => $mesureValue,
                'date_mesure' => now(),

            ]);

        }


    }
    }
}
