<div class="container">
    <form action="{{$rota}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="label_input">
            <label for="">{{ $input1 }}</label><br>
            <input type="text" name="{{ $inputOpcao1 }}" placeholder="Digite o {{strtolower($input1)}}">
        </div>

        @if(!empty($input2))
        <div class="label_input">
            <label for="">{{ $input2 }}</label><br>
            <select class="select_input" name="{{ $inputOpcao2 }}" id="{{ $inputOpcao2 }}">
                <option value="aluno">Aluno</option>
                <option value="professor">Professor</option>
                <option value="coordenador">Coordenador</option>
            </select>
        </div>
        @endif

        @if(!empty($input3))
        <div class="label_input">
            <label for="">{{ $input3 }}</label><br>
            <input type="text" name="{{ $inputOpcao3 }}" placeholder="Digite o {{strtolower($input3)}}">
        </div>
        @endif

        @if(!empty($horario))
        <div class="label_input">
            <label for="">{{ $horario }}</label><br>
            <input type="datetime-local" name="{{ $inputHorario }}">
        </div>
        @endif

        @if(!empty($turma))
        <div class="label_input">
            <label for="">{{ $turma }}</label><br>
            <input type="text" name="{{ $inputTurma }}">
        </div>
        @endif

        @if(!empty($descricao))
        <div class="label_input">
            <label for="">{{ $descricao }}</label><br>
            <textarea id="story" name="{{ $inputDescricao }}" rows="5" cols="50" maxlength="500" placeholder="Digite a {{strtolower($inputDescricao)}}"></textarea>
        </div>
        @endif
        <div class="div_img">
            <label for="image">
                <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
                    <path d="M80.1049 61.4975L67.957 33.6751C63.843 24.236 56.2748 23.8554 51.1906 32.8378L43.8553 45.8164C40.1294 52.401 33.1822 52.9719 28.3696 47.0724L27.5158 46.0067C22.5092 39.8408 15.4455 40.6021 11.8361 47.6433L5.16058 60.7744C0.464434 69.909 7.25638 80.6802 17.6578 80.6802H67.1808C77.2717 80.6802 84.0636 70.5941 80.1049 61.4975Z" stroke="#101E3C" stroke-width="7.21402" stroke-linecap="round" stroke-linejoin="round" />
                    <path opacity="0.4" d="M23.013 27.3944C29.4434 27.3944 34.6563 22.2823 34.6563 15.9761C34.6563 9.67001 29.4434 4.55786 23.013 4.55786C16.5825 4.55786 11.3696 9.67001 11.3696 15.9761C11.3696 22.2823 16.5825 27.3944 23.013 27.3944Z" stroke="#101E3C" stroke-width="7.21402" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <br>
                Adicionar imagem 
            </label>
            <input class="from-control-file" type="file" name="image" id="image" />
            <img class="image-preview" />
        </div>
        <input class="botao" type="submit" value="SALVAR">
    </form>
    <script>
        const imageInput = document.getElementById("image");
        const imagePreview = document.querySelector(".image-preview");
        const form = document.querySelector("form");
        const button = document.querySelector(".botao");

        button.addEventListener("click", () => {
            const allFieldsFilled = form.querySelectorAll("input, select, textarea").every(field => field.value);
            if (allFieldsFilled) {
                alert("Evento cadastrado");
            } else {
                alert("Por favor, preencha todos os campos do formulário.");
            }
        });
        
        imageInput.addEventListener("change", () => {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    imagePreview.src = reader.result;
                    imagePreview.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</div>