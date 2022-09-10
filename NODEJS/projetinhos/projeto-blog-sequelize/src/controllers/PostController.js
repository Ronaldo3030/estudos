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
    },

    get: async (req, res) => {
        const { postDB } = req;

        return res.json(postDB);
    },

    put: async (req, res) => {
        const { postDB } = req;
        const { post } = req;

        await postDB.update({
            title: post.title,
            body: post.body,
            language: post.language,
            updatedAt: new Date()
        });

        await postDB.save();

        return res.status(201).json(postDB);
    }
}