const Post = require('../models/PostModel');

module.exports = {
    validateBody: async (req, res, next) => {
        const { title, body, language } = req.body;

        if (!title || !body || !language) {
            res.status(401).json({ error: "Data is not defined" })
        }

        const post = {
            title,
            body,
            language
        }

        req.post = post;
        next();
    },
    
    validateAnyBody: async (req, res, next) => {
        const { title, body, language } = req.body;

        if (!title && !body && !language) {
            res.status(401).json({ error: "Data is not defined" })
        }

        const post = {
            title,
            body,
            language
        }

        req.post = post;
        next();
    },

    validateIdParams: async (req, res, next) => {
        const { id } = req.params;

        const postExists = await Post.findOne({
            where: {
                id
            }
        });

        if (postExists.length) {
            return res.status(400).json({ error: "Invalid ID" });
        }

        req.postDB = postExists;
        next();
    },

    validateNameDB: async (req, res, next) => {
        const { post } = req;

        const postExists = await Post.findOne({
            where: {
                title: post.title
            }
        });

        if (postExists) {
            return res.status(402).json({ error: "This Post already exists" });
        }

        next();
    },

    validateList: async (req, res, next) => {
        const data = await Post.findAll();

        if (data.length <= 0) {
            return res.status(401).json({ error: "There is no Post" })
        }

        req.data = data;
        next();
    }
}