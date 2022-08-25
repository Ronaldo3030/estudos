const express = require('express');
const router = express.Router();

const AddValidator = require('./validators/AddValidator');

const TodoController = require('./controllers/TodoController');

router.get('/ping', (req, res) => {
    res.json({ pong: true });
});

router.get('/todo/list', TodoController.getList);
router.get('/todo/item', TodoController.getItem);
router.post('/todo/add', AddValidator.addAction, TodoController.addAction);
router.post('/todo/edit/:id', TodoController.editAction);

module.exports = router;