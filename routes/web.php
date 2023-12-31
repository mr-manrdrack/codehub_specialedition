<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AddUserController,
    AuthController,
    HomeProfessorController,
    LoginController,
    HomeAlunoController,
    SelectClassController,
    NewsletterController,
    GradeController,
    FoodController,
    NoteController,
    UserController,
    UserProfessorController,
    CadastroController,
    GradeProfessorController,
    SelectClassProfessorController,
    SelectClassProfessorNoteController,
    CallClassProfessorController,
    NewsletterProfessorController,
    AnalisysClassController,
    AnalisysSupervisorController,
    FoodSupervisorController,
    GradeSupervisorController,
    NewsletterSupervisorController,
    UsersController,
    UserSupervisorController,
    EventsController,
    EventsSupervisorController,
    AddDisciplina
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/', [LoginController::class, 'store'])->name('login.store');

Route::get('/', [LoginController::class, 'index'])->name('login.index');

Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro.index');

Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');

Route::get('/aluno', [HomeAlunoController::class, 'index'])->name('aluno.index');

Route::get('/aluno/selecionar_turma', [SelectClassController::class, 'index'])->name('selecionar_turma.index');

Route::get('/aluno/boletim', [NewsletterController::class, 'index'])->name('alunoboletim.index');

Route::get('/aluno/boletim', [NewsletterController::class, 'show'])->name('alunoboletim.show');

//Route::get('/aluno/horario', [GradeController::class, 'index'])->name('horario.index');

Route::get('/aluno/horario', [GradeController::class, 'show'])->name('horario.show');

Route::get('/aluno/cardapio', [FoodController::class, 'index'])->name('cardapio.index');

Route::get('/aluno/cardapio', [FoodController::class, 'show'])->name('cardapio.show');

Route::get('/aluno/eventos', [EventsController::class, 'index'])->name('eventos.index');

Route::get('/aluno/blocodenotas', [NoteController::class, 'index'])->name('blocodenotas.index');

//Route::get('/aluno/blocodenotas', [NoteController::class, 'show'])->name('blocodenotas.show');

Route::post('/aluno/blocodenotas', [NoteController::class, 'post'])->name('blocodenotas.post');

//Route::get('/aluno/usuario', [UserController::class, 'show'])->name('usuario.show');

Route::get('/aluno/usuario', [UserController::class, 'index'])->name('usuario.index');

Route::get('/professor', [HomeProfessorController::class, 'index'])->name('professor.index');

//Route::get('/professor/horario', [GradeProfessorController::class, 'index'])->name('professor_horairo.index');

Route::get('/professor/horario', [GradeProfessorController::class, 'show'])->name('professor_horairo.show');

Route::get('/professor/selecionar_turma_boletim', [SelectClassProfessorNoteController::class, 'index'])->name('selecionar_turma_boletim.index');

Route::post('/professor/add_boletim',[NewsletterProfessorController::class, 'store'])->name('professor_add_boletim.store');

//Route::get('/professor/add_boletim',[NewsletterProfessorController::class, 'show'])->name('add_boletim.show');

Route::get('/professor/add_boletim',[NewsletterProfessorController::class, 'index'])->name('professor_add_boletim.index');

Route::get('/professor/analisar_turma',[AnalisysClassController::class, 'index'])->name('analisar_turma.index');

Route::get('/professor/selecionar_turma_chamada', [SelectClassProfessorController::class, 'index'])->name('selecionar_turma_chamada.index');

Route::get('/professor/realizar_chamada', [CallClassProfessorController::class, 'index'])->name('realizar_chamada.index');

Route::get('/professor/eventos', [EventsController::class, 'indexp']) -> name('eventos.index');

Route::get('/professor/usuario', [UserProfessorController::class, 'index'])->name('usuario_professor.index');

Route::get('/coordenador', function () {
    return view('coordenador/dashboard');
});
Route::get('/professor', function () {
    return view('professor/dashboard');
});
Route::get('/aluno', function () {
    return view('aluno/dashboard');
});

Route::get('/professor/boletim', [NewsletterProfessorController::class, 'index']) -> name('add_boletim.index');

Route::post('/professor/boletim', [NewsletterProfessorController::class, 'store']);

Route::get('/professor/boletim', [NewsletterProfessorController::class, 'create']);

Route::get('/coordenador/eventos', [EventsSupervisorController::class, 'index']);

Route::get('/coordenador/eventos', [EventsSupervisorController::class, 'create']);

Route::post('/coordenador/eventos', [EventsSupervisorController::class, 'store'])->name('coordenador_add_eventos.store');

Route::get('/coordenador/add_disciplina', [AddDisciplina::class, 'index'])->name('add_disciplina.index');

Route::post('/coordenador/add_disciplina', [AddDisciplina::class, 'store'])->name('add_disciplina.store');

Route::get('/coordenador/add_usuarios', [UserSupervisorController::class, 'index'])->name('add_usuarios.index');

Route::post('/coordenador/add_usuarios', [UserSupervisorController::class, 'store'])->name('add_usuarios.store');

Route::get('/coordenador/add_boletim', [NewsletterSupervisorController::class, 'index'])->name('coordenador_add_boletim.index');

Route::post('/coordenador/add_boletim', [NewsletterSupervisorController::class, 'store'])->name('coordenador_add_boletim.store');

Route::get('/coordenador/add_horario', [GradeSupervisorController::class, 'index'])->name('add_horario.index');

Route::post('/coordenador/add_horario', [GradeSupervisorController::class, 'store'])->name('add_horario.store');

Route::get('/coordenador/analisar_turma', [AnalisysSupervisorController::class, 'index'])->name('analisar_turma.index');

Route::get('/coordenador/add_refeicoes', [FoodSupervisorController::class, 'index'])->name('add_refeicoes.index');

Route::post('/coodenador/add_refeicoes', [FoodSupervisorController::class, 'store'])->name('add_refeicoes.store');

Route::get('/coordenador/usuario', [UserSupervisorController::class, 'index'])->name('usuario_professor.index');