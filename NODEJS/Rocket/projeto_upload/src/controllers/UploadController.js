const fs = require('fs');
const { parse: csvParse } = require('csv-parse');

module.exports = {
    upload: async (req, res) => {
        const { file } = req;

        const stream = fs.createReadStream(file.path);

        const parseFile = csvParse();

        stream.pipe(parseFile);

        parseFile.on("data", async (line) => {
            console.log(line);
        });

        return res.send();
    }
}