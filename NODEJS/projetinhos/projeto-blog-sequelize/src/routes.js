const express = require('express');
const PostController = require('./controllers/PostController');
const PostMiddleware = require('./middleware/PostMiddleware');

const router = express.Router();

router.get('/ping', (req, res) => {
    res.json({ pong: true });
});

router.post('/posts', PostController.add);

module.exports = router;