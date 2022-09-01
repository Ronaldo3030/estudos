const express = require('express');
const { v4: uuidv4 } = require('uuid');
const app = express();

app.use(express.json());

const users = [];

function verifyUserToken(req, res, next) {
    const { token } = req.headers;
    const user = users.find((user) => user.token === token);
    if (!user) {
        return res.status(400).json({ error: "Token invalid!" });
    }

    req.user = user;

    return next();
}

app.get("/ping", (req, res) => {
    res.json({ "pong": true });
});

app.post("/register", (req, res) => {
    const { name, login, password } = req.body;

    const usersAlreadyExist = users.some(
        (user) => user.login === login
    );

    if (usersAlreadyExist) {
        return res.status(400).json({ error: "User already exists!" });
    }

    const generateRandomtoken = (num) => {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result1 = ' ';
        const charactersLength = characters.length;
        for (let i = 0; i < num; i++) {
            result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        return result1;
    }

    users.push({
        name,
        login,
        password,
        token: generateRandomtoken(55),
        id: uuidv4(),
    });

    res.status(201).send();
});

app.listen(3333, () => {
    console.log("Servidor rodando na porta 3333");
});