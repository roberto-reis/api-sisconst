<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Contracts\AceRepositoryInterface::class,
            \App\Repositories\Eloquent\AceRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\AceTiposServicoRepositoryInterface::class,
            \App\Repositories\Eloquent\AceTiposServicoRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ClienteRepositoryInterface::class,
            \App\Repositories\Eloquent\ClienteRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\EmpreiteiroRepositoryInterface::class,
            \App\Repositories\Eloquent\EmpreiteiroRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\EstacaoRepositoryInterface::class,
            \App\Repositories\Eloquent\EstacaoRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ObraRepositoryInterface::class,
            \App\Repositories\Eloquent\ObraRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\OrdemServicoRepositoryInterface::class,
            \App\Repositories\Eloquent\OrdemServicoRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\OsTiposServicoRepositoryInterface::class,
            \App\Repositories\Eloquent\OsTiposServicoRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\PermissaoRepositoryInterface::class,
            \App\Repositories\Eloquent\PermissaoRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ProjetoRepositoryInterface::class,
            \App\Repositories\Eloquent\ProjetoRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ProjetoTipoServicoRepositoryInterface::class,
            \App\Repositories\Eloquent\ProjetoTipoServicoRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\StatusObraRepositoryInterface::class,
            \App\Repositories\Eloquent\StatusObraRepository::class
        );

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
