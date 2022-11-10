const express = require('express');

module.exports = app => {
  app.use(express.json());
  app.get('/ping', (req,res) => res.status(200).json({ping: "pong"}));
}