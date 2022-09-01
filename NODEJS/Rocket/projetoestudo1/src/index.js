const express = require('express');
const { v4: uuidv4 } = require('uuid');
const app = express();

app.use(express.json());

const users = [];

function verifyUserToken(req, res, next) {
    const { token } = req.headers;
    const user = users.find((user) => user.token === token);
    if (!user) {
        return res.status(400).json({ error: "You have to be logged in!" });
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

        return result1.trim();
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

app.get('/users', (req, res) => {
    if (users.length === 0) {
        return res.status(400).json({ error: "There are no users!" });
    }
    return res.json({ users });
})

app.post('/login', (req, res) => {
    const { login, password } = req.body;

    const user = users.find((user) => user.login === login);

    if (!user || user.password !== password) {
        return res.status(400).json({ error: "Data is invalid!" });
    }

    return res.json({ success: "Successfully login!" });
});

app.get('/user', verifyUserToken, (req, res) => {
    const { user } = req;

    res.json(user);
});

app.put('/user', verifyUserToken, (req, res) => {
    const { name, password } = req.body;
    const { user } = req;

    if(name){
        user.name = name;
    }
    if(password){
        user.password = password;
    }
    if(!name && !password){
        return res.status(400).json({error: "Data invalid!"});
    }

    return res.status(201).json({
        success: "User changed successfully!",
        user
    });
});

app.listen(3333, () => {
    console.log("Servidor rodando na porta 3333");
});