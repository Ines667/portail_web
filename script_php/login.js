const mysql = require('mysql');
 
// Configurer la connexion à la base de données MySQL
const connection = mysql.createConnection({
  host: 'db5011701111.hosting-data.io',
  user: 'dbu5537428',
  password: 'Mathiscamille2021',
  database: 'dbs9859875'
});

// Établir la connexion à la base de données
connection.connect();

// Sélectionner le formulaire et les champs d'entrée
const loginForm = document.querySelector('#login-form');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');

// Ajouter un gestionnaire d'événements pour le formulaire de connexion
loginForm.addEventListener('submit', (event) => {
  event.preventDefault(); // Empêcher le formulaire de se soumettre

  // Récupérer les valeurs des champs d'entrée
  const email = emailInput.value;
  const password = passwordInput.value;

  // Exécuter une requête SELECT pour récupérer les informations de l'utilisateur
  connection.query('SELECT * FROM user WHERE mail = ? AND password = ?', [email, password], (error, results, fields) => {
    if (error) throw error;
    console.log(results);
  });
});

// Fermer la connexion à la base de données
connection.end();
