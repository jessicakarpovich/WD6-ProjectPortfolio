const express = require( 'express' )
const router = express.Router()
const Student = require( '../models/Student' )


// use / route for displaying grades and form to add new grade
router.get('/', ( req, res, next ) => {
    
    res.render('index', { 
        studentArray: [{ name: 'bob' }]
    })
})

module.exports = router;