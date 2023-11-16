 // Função para criar uma nova nota
 function criarCard() {
  // Obtenha elementos do DOM para interação
  const tituloInput = document.getElementById('tituloInput');
  const textarea = document.getElementById('meuTextarea');
  const cardsContainer = document.getElementById('cardsContainer');
  // Obtenha os valores do título e do texto da nota
  const titulo = tituloInput.value;
  const texto = textarea.value;

  // Verifique se o título e o texto não estão em branco
  if (titulo.trim() === '' || texto.trim() === '') {
      // Exiba um alerta se ambos estiverem em branco
      alert('Por favor, insira um título e conteúdo.');
      return;
  }

  // Crie um novo elemento de nota
  const card = document.createElement('div');
  card.className = 'card';

  // Crie um elemento de título para a nota
  const tituloCard = document.createElement('h2');
  tituloCard.textContent = titulo;

  // Crie um ícone de menu para a nota
  if (!tituloCard.querySelector('.menu-icon')) {
      const menuIcon = document.createElement('span');
      menuIcon.className = 'menu-icon';
      menuIcon.style.cursor = 'pointer';

      // Crie um menu suspenso
      const menuDropdown = document.createElement('div');
      menuDropdown.className = 'dropdown-content';

      // Crie itens de menu para editar o título e o texto
      const editarTituloItem = document.createElement('span');
      editarTituloItem.textContent = 'Editar Título';
      editarTituloItem.style.cursor = 'pointer';
      // Adicione um evento para editar o título
      editarTituloItem.addEventListener('click', function() {
          const novoTitulo = prompt('Editar Título:', tituloCard.textContent);
          if (novoTitulo !== null) {
              tituloCard.textContent = novoTitulo;
          }
      });

      const editarTextoItem = document.createElement('span');
      editarTextoItem.textContent = 'Editar Texto';
      editarTextoItem.style.cursor = 'pointer';
      // Adicione um evento para editar o texto
      editarTextoItem.addEventListener('click', function() {
          const novoTexto = prompt('Editar Texto:', textoCard.textContent);
          if (novoTexto !== null) {
              textoCard.textContent = novoTexto;
          }
      });

      // Crie um item de menu para excluir a nota
      const excluirItem = document.createElement('span');
      excluirItem.textContent = 'Excluir';
      excluirItem.style.cursor = 'pointer';
      // Adicione um evento para excluir a nota
      excluirItem.addEventListener('click', function() {
          cardsContainer.removeChild(card);
      });

      // Adicione os itens ao menu suspenso
      menuDropdown.appendChild(editarTituloItem);
      menuDropdown.appendChild(editarTextoItem);
      menuDropdown.appendChild(excluirItem);

      // Adicione o menu ao ícone de menu
      menuIcon.appendChild(menuDropdown);
      tituloCard.appendChild(menuIcon);
  }

  // Crie um elemento de texto para a nota
  const textoCard = document.createElement('p');
  textoCard.textContent = texto;

  // Anexe o título e o texto à nota
  card.appendChild(tituloCard);
  card.appendChild(textoCard);

  // Insira a nova nota no início do contêiner
  cardsContainer.insertBefore(card, cardsContainer.firstChild);

  // Limpe os campos de entrada
  tituloInput.value = '';
  textarea.value = '';
}