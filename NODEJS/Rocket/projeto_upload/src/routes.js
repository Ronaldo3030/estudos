const express = require('express');
const multer = require('multer');

const UploadController = require('./controllers/UploadController');

const router = express.Router();
const upload = multer({
    dest: "./tmp"
});

router.post('/import', upload.single("file"), UploadController.upload);

module.exports = router;