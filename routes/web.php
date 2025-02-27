<?php

use Illuminate\Support\Facades\Route;



//Auth
use App\Http\Controllers\user\CustomProfileController;
use App\Http\Controllers\user\CustomPhotoController;

use App\Http\Controllers\user\CustomShowController;
use App\Http\Controllers\user\CustomCreateController;

//controladores dos porteiros
use App\Http\Controllers\porteiro\AuthController;
use App\Http\Controllers\porteiro\ListController;
use App\Http\Controllers\porteiro\panelController;

//controladores dos administradores
use App\Http\Controllers\administrador\cadastroController;
use App\Http\Controllers\administrador\gerenciarController;
use App\Http\Controllers\administrador\dashboardController;
use App\Http\Controllers\administrador\sistemaController;
use App\Http\Controllers\SessionController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/criarconta', [SessionController::class, 'criarconta'])->name('criarconta');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /**
     * administradores
     */

    Route::prefix('admin')->group(function () {
        //dasboard
        Route::get(
            'dashboard',
            [dashboardController::class, 'dashboard']
        )->name('dashboard');

        //cadastro
        Route::prefix('cadastrar')->group(function () {
            Route::get(
                'morador',
                [cadastroController::class, 'cadastrarMorador']
            )->name('morador.cadastrar');

            Route::get(
                'porteiro',
                [cadastroController::class, 'cadastrarPorteiro']
            )->name('porteiro.cadastrar');
            Route::get(
                'vistia',
                [cadastroController::class, 'cadastrarVisita']
            )->name('visita.cadastrar');
        });
        //gerenciar
        Route::prefix('gerenciar')->group(function () {
            Route::get(
                'morador',
                [gerenciarController::class, 'gerenciarMorador']
            )->name('morador.gerenciar');

            Route::get(
                'porteiro',
                [gerenciarController::class, 'gerenciarPorteiro']
            )->name('porteiro.gerenciar');

            Route::get(
                'visita',
                [gerenciarController::class, 'gerenciarVisita']
            )->name('visita.gerenciar');
        });
        //perfil
        Route::get('conta', action: function () {
            return view('administrador.conta');
        })->name('admin.profile.show');
        //Relatório
        Route::get(
            'relatoriocompleto',
            [sistemaController::class, 'relatorio']
        )->name('relatoriocompleto.sistema');

        //Controlo de acesso
        Route::get(
            'configuration',
            [sistemaController::class, 'configuration']
        )->name('configuration.sistema');
    });
    //moradores
    Route::prefix('morador')->group(function () {
        Route::get('dashboard', function () {
            return view('morador.home')->with("message", "Bem Vindo ao Sistema");
        })->name('dashboard.morador');
        Route::get('notificacoes', function () {
            return view('morador.notificacao');
        })->name('notification.morador');
    });

    //porteiros
    Route::prefix('porteiro')->group(function () {
        //autenticação
        Route::prefix('auth')->group(function () {
            Route::get(
                'morador',
                [AuthController::class, 'AuthMorador']
            )->name('moradores.auth');
            Route::get(
                'visita',
                [AuthController::class, 'AuthVisita']
            )->name('visitas.auth');
            Route::get(
                'prestador',
                [AuthController::class, 'AuthPrestador']
            )->name('prestadores.auth');
            Route::get(
                'autorizado',
                [AuthController::class, 'AuthAutorizado']
            )->name('autorizados.auth');
        });
        //lista
        Route::prefix('lista')->group(function () {
            Route::get(
                'morador',
                [ListController::class, 'ListMorador']
            )->name('moradores.list');
            Route::get(
                'visita',
                [ListController::class, 'ListVisita']
            )->name('visitas.list');
            Route::get(
                'prestador',
                [ListController::class, 'ListPrestador']
            )->name('prestadores.list');
        });

        //perfil
        Route::get('conta', action: function () {
            return view('porteiro.conta');
        })->name('porteiro.profile.show');
        //central de controle
        //painel
        Route::get(
            'painel',
            [PanelController::class, 'PanelPainel']
        )->name('painel');

        //relatório
        Route::get(
            'relatorio',
            [PanelController::class, 'PanelRelatorio']
        )->name('relatorio');

        Route::get(
            'exibirrelatorio',
            [PanelController::class, 'PanelRelatorioExibir']
        )->name('relatorio.exibir');

        //alerta
        Route::get(
            'alerta',
            [PanelController::class, 'PanelAlerta']
        )->name('alerta');
    });


    //profile
    Route::put('profile/update', [CustomProfileController::class, 'update'])->name('customProfile.update');
    Route::put('profile/updatef', [CustomPhotoController::class, 'update'])->name('customProfilef.update');
    Route::get('profile/show', [CustomShowController::class, 'show'])->name('customShow.show');
    Route::post('profile/create', [CustomCreateController::class, 'create'])->name('customCreate.create');
    Route::post('profile/foto', [CustomCreateController::class, 'create'])->name('customCreate.create');

    //User
    Route::put(
        'gerenciar/update',
        [gerenciarController::class, 'update']
    )->name('update.gerenciar');
});
