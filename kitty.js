function trocar(tipo, imagem) {
  const todas = document.querySelectorAll(`.${tipo}`);
  // Sempre esconder todos primeiro
  todas.forEach(el => el.style.display = "none");

  // Se o valor for vazio, não mostrar nada (opção "Nenhuma")
  if (!imagem) return;

  // Mostrar o item escolhido
  const mostrar = Array.from(todas).find(el => el.src.includes(imagem));
  if (mostrar) {
    mostrar.style.display = "block";
  }
}