require('dotenv').config();
const express = require('express');
const cors = require('cors');

const db = require('./src/db');
const Post = require('./src/models/PostModel');

const routes = require('./src/routes');
const port = process.env.PORT || '3000';

const swaggerUi = require('swagger-ui-express');
const swaggerFile = require('./swagger.json');

const app = express();

app.use(express.json());
app.use(cors());
app.use("/api-docs", swaggerUi.serve, swaggerUi.setup(swaggerFile));
app.use('/', routes);

app.listen(port, async () => {
    await db.sync();
    console.log("Servidor rodando na porta: " + port);
});
