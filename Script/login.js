const loginBtn = document.getElementById('btn-login');

loginBtn.addEventListener('submit', (event) => {
  event.preventDefault();
  
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  fetch('http://exemple.com/api/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ email, password })
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Mauvais nom d\'utilisateur ou mot de passe');
    }
    return response.json();
  })
  .then(data => {
    // La connexion a réussi, vous pouvez rediriger l'utilisateur vers une page de profil ou afficher un message de bienvenue.
  })
  .catch(error => {
    // La connexion a échoué, vous pouvez afficher un message d'erreur à l'utilisateur.
    console.error(error);
  });
});
