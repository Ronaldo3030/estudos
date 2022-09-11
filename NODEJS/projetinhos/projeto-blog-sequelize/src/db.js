require('dotenv').config();
const Sequelize = require('sequelize');
const sequelize = new Sequelize(process.env.DB, process.env.USER, process.env.PASS, {
    dialect: 'mysql',
    host: process.env.HOST,
    port: process.env.PORT_DB
});

module.exports = sequelize;