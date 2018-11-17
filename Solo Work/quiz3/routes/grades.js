const express = require( 'express' )
const router = express.Router()
const Student = require( '../models/Student' )

/**** Functions to interact with the db *****/
// function to retrieve all student records from db
let getStudents = ( req, res, next ) => {
    Student.find( {}, (err, students) => {
        if ( err ) {
            console.log('err', err)
        } else if ( students ) {
            req.students = students
        }
        next()
    })
}

let getStudentById = ( req, res, next ) => {
    // check it's a valid id, favico icon appears sometimes
    if ( req.params.id.match( /^[0-9a-fA-F]{24}$/ ) ) {
        Student.find({ _id: req.params.id }, function( err, student ) {
            if ( err ) {
                console.log('err', err)
            } else if ( student ) {
                req.student = student
            }
            next()
        })
    }
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

router.get('/:id', getStudentById, (req, res, next) => {
    res.render('edit', { student: req.student[0] })
})

router.put('/:id', getStudentById, (req, res, next) => {
    // if there is a body being sent
    if ( req.body ) {
        // create a new student object
        // don't add letter grade until it passes validation
        let newStudent = req.student[0]
        newStudent.name = req.body.name
        newStudent.studentPercent = req.body.percent

        // validate input for new grade
        newStudent.validate( (err) => {
            // show errors by rendering the page again
            if ( err ) {
                res.render('edit', { 
                    student: newStudent,
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
                console.log(newStudent)
                Student.findOneAndUpdate({_id: newStudent._id}, newStudent, function(err, student) {
                    if (err) {
                        console.log('err', err);
                    } else {
                        console.log("success updating")
                    }
                    next()
                })
                // redirect back to main page
                res.json({ status: "Success", redirect: '/' })
            }
        })
    }
})

router.delete('/delete/:id', ( req, res, next ) => {
    Student.findOneAndRemove({ _id: req.params.id }, ( err, student ) => {
        if ( err ) {
            console.log( 'err', err )
        } else {
            res.json({ status: "Success", redirect: "/" })
        }
    })
})

module.exports = router;