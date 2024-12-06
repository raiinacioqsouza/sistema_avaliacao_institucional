<?php

// app/Providers/RouteServiceProvider.php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * O namespace para os controladores.
     *
     * @var string
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Defina as rotas para a aplicação.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Defina as rotas de API para a aplicação.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api') // Prefixo para todas as rotas de API
            ->middleware('api') // Middleware para rotas de API
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php')); // Caminho para o arquivo de rotas da API
    }

    /**
     * Defina as rotas da web para a aplicação.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web') // Middleware para as rotas da web
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php')); // Caminho para o arquivo de rotas da web
    }
}
