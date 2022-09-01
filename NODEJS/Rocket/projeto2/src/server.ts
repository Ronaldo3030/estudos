import express from 'express';
import { createCourse } from './routes';

const app = express();

app.get("/ping", (req,res) => {
    res.json({"pong": true});
});

app.get('/', createCourse);

app.listen(3333);