const Post = require('../models/PostModel');

module.exports = {
    add: async (req, res) => {
        const { title, body, language } = req.body;

        const newPost = await Post.create({
            title,
            body,
            language
        });

        return res.status(201).json(newPost);
    },
    list: async (req, res) => {
        const { data } = req;

        return res.json(data);
    }
}