const express = require( 'express' )
const router = express.Router()
const Student = require( '../models/Student' )

/**** Functions to interact with the db *****/
// function to retrieve all student records from db
let getStudents = ( req, res, next ) => {
    Student.find( {}, (err, students) => {
        err
        if ( err ) {
            console.log('err', err)
        } else if ( students ) {
            req.students = students
        }
        next()
    })
}


/***** Actual Routes *****/
// use / route for displaying grades
router.get('/', getStudents, ( req, res, next ) => {
    
    res.render('index', { studentArray: req.students })
})

// use / post route for displaying grades and form to add new grade
router.post('/', getStudents, ( req, res, next ) => {

    // if there is a body being sent
    if ( req.body ) {
        // create a new student object
        // don't add letter grade until it passes validation
        let newStudent = new Student({
            studentName: req.body.name,
            studentPercent: req.body.percent
        })

        // validate input for new grade
        newStudent.validate( (err) => {
            // show errors by rendering the page again
            if ( err ) {
                res.render('index', { 
                    studentArray: req.students,
                    errors: err
                })
            } else {
                const percent = req.body.percent
                if ( percent > 89 ) {
                    newStudent.studentLetterGrade = "A"
                } else if ( percent > 79 ) {
                    newStudent.studentLetterGrade = "B"
                } else if ( percent > 69 ) {
                    newStudent.studentLetterGrade = "C"
                } else if ( percent > 59 ) {
                    newStudent.studentLetterGrade = "D"
                } else {
                    newStudent.studentLetterGrade = "F"
                }
                newStudent.save( (err) => {
                    if ( err ) {
                        console.log( 'err', err )
                    }
                    console.log('Saved')
                })
                // redirect back to main page
                res.redirect('/')
            }
        })
    }
})

router.get('/:id', (req, res, next) => {
    
    res.send('<h1>Hello</h1>');
});

router.delete('/:id', ( req, res, next ) => {
    Student.findOneAndRemove({ _id: req.params.id }, ( err, student ) => {
        if ( err ) {
            console.log( 'err', err )
        } else {
            res.json({ status: "Success", redirect: "/" })
        }
    })
})

module.exports = router;