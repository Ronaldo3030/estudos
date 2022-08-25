const { validationResult, matchedData } = require('express-validator');

const Todo = require('../models/To_do');

module.exports = {
    getList: async (req, res) => {
        let todos = await Todo.find();
        res.json({ todos });
    },
    getItem: async (req, res) => {
        
    },
    addAction: async (req, res) => {
        const errors = validationResult(req);
        if(!errors.isEmpty()){
            res.json({error: errors.mapped()});
            return;
        }

        const data = matchedData(req);

        res.json({
            tudocerto: true,
            data: data
        });
    },
    editAction: async (req, res) => {

    }
};