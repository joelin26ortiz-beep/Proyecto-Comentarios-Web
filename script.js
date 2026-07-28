const inpName = document.getElementById('nombre');
const inpComentario = document.getElementById('comentario');
const form = document.getElementById('formComentario');

function clearErrors() {
  [inpName, inpComentario].forEach((input) => {
    input.classList.remove('is-invalid');
    const err = document.getElementById('error-' + input.id);
    if (err) err.textContent = '';
  });
}

function showError(input, message) {
  input.classList.add('is-invalid');
  const err = document.getElementById('error-' + input.id);
  if (err) err.textContent = message;
}

form.addEventListener('submit', (e) => {
  e.preventDefault();
  clearErrors();

  const name = inpName.value.trim();
  const comentario = inpComentario.value.trim();
  let firstInvalid = null;

  if (!name) {
    showError(inpName, 'El nombre es obligatorio.');
    firstInvalid = firstInvalid || inpName;
  } else if (name.length < 3) {
    showError(inpName, 'El nombre debe tener al menos 3 caracteres.');
    firstInvalid = firstInvalid || inpName;
  }

  if (!comentario) {
    showError(inpComentario, 'El comentario no puede estar vacío.');
    firstInvalid = firstInvalid || inpComentario;
  } else if (comentario.length < 10) {
    showError(inpComentario, 'El comentario debe tener al menos 10 caracteres.');
    firstInvalid = firstInvalid || inpComentario;
  }

  if (firstInvalid) {
    firstInvalid.focus();
    return;
  }

  form.submit();
});