const express = require('express');
const { createProxyMiddleware } = require('http-proxy-middleware');

const app = express();

// Serveur Node.js
app.get('/api', (req, res) => {
  res.send('Réponse depuis le serveur Node.js');
});

// Configuration du proxy pour rediriger les requêtes PHP
const phpProxy = createProxyMiddleware('/php', {
  target: 'http://localhost:8000', // Remplacez par le port où votre serveur PHP fonctionne
  changeOrigin: true,
});

app.use(phpProxy);

// Port d'écoute du serveur Node.js
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Serveur Node.js en cours d'exécution sur le port ${port}`);
});
