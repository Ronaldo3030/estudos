

module.exports = {
    validateBody: async (req, res, next) => {
        const { title, body, language } = req.body;

        if(!title || !body || !language){
            res.status(401).json({error: "Data is not defined"})
        }

        const post = {
            title,
            body,
            language
        }

        req.post = post;
        next();
    }
}