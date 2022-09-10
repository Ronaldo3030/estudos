const express = require('express');
const PostController = require('./controllers/PostController');
const PostMiddleware = require('./middleware/PostMiddleware');

const router = express.Router();

router.get('/ping', (req, res) => {
    res.json({ pong: true });
});

router.post('/posts', PostMiddleware.validateBody, PostMiddleware.validateNameDB, PostController.add);
router.get('/posts', PostMiddleware.validateList, PostController.list);
router.get('/posts/:id', PostMiddleware.validateIdParams, PostController.get);
router.put('/posts/:id', PostMiddleware.validateAnyBody,  PostMiddleware.validateIdParams, PostMiddleware.validateNameDB, PostController.put);
router.delete('/posts/:id',  PostMiddleware.validateIdParams, PostController.delete);

module.exports = router;