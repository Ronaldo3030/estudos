const Sequelize = require('sequelize');
const db = require('../db');

const Post = db.define('post', {
    title: {
        type: Sequelize.STRING(100),
        allowNull: false
    },
    body: {
        type: Sequelize.STRING(775),
        allowNull: false
    },
    language: {
        type: Sequelize.STRING(50),
        allowNull: false
    },
});

module.exports = Post;