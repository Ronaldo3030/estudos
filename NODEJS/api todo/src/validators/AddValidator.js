const { checkSchema } = require('express-validator');

module.exports = {
    addAction: checkSchema({
        text: {
            isLength: {
                options: { min: 5 }
            },
            errorMessage: "A tarefa tem que ter ao menos 5 letras!"
        }
    })
}