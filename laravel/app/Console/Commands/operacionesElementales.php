<?php

namespace raspaUneg\Console\Commands;

use Illuminate\Console\Command;

class operacionesElementales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operacionesElementales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creando si comando para la prueba';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $num_a= $this->ask("ingrese el primer digito: ");
        $operacion= $this->ask("¿Que operacion matematica desea realizar? :");
        $num_b= $this->ask("ingrese el segundo digito para completar la operacion: ");
        $this->info("El digito ingresado fue: $num_a $operacion $num_b");

    }
}
