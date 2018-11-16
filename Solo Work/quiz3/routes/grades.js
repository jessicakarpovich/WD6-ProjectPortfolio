const express = require('express');
const router = express.Router();



// use / route for displaying grades and form to add new grade
router.get('/', (req, res, next) => {
    
    res.send('<h1>Hello</h1>')
})

module.exports = router;