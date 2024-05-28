const chooseFileButton = document.getElementById('choisir');
const fileInput = document.getElementById('recue');

chooseFileButton.addEventListener('click', () => {
  fileInput.click(); // Simule un clic sur l'élément input
});

fileInput.addEventListener('change', (event) => {
  const file = event.target.files[0];
  console.log('Fichier sélectionné :', file.name);
});
