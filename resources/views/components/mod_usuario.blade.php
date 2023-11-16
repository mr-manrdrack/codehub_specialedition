<div>
    <form>
        @csrf
        <div>
            <img href="" alt=""/>
            <button>Alterar Imagem</button>
        </div>  
        <div>
            <h3>Dados do usuário</h3>
            <label for="text">Nome:</label>
            <input type="text" name="" id="" placeholder="{{ $nomeUser }}">
            <label for="text">Email:</label>
            <input type="text" name="" id="" placeholder="{{ $emailUser }}">
            <label for="text">Aniversário:</label>
            <input type="text" name="" id="" placeholder="{{ $aniversarioUser }}" disabled>
            <label for="text">Matrícula:</label>
            <input type="text" name="" id="" placeholder="{{ $matriculaUser }}" disabled>
            <label for="text">Usuário:</label>
            <input type="text" name="" id="" placeholder="{{ $user }}">
            <label for="text">Senha:</label>
            <input type="text" name="" id="">
            <label for="text">Confirmar Senha:</label>
            <input type="text" name="" id="">
        </div>
        <input class="botao" type="submit" value="Confirmar">
    </form>
</div>