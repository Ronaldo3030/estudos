import express from 'express';
import { createService } from './routes';
import ServiceController from './ServiceController';

const app = express();

app.get('/', createService);

app.listen(3333, () => {
    console.log("Servidor rodando!");
});