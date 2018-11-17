const mongoose = require( 'mongoose' )

const studentSchema = mongoose.Schema({
  name: String,
  studentName: { 
    type: String, 
    required: [ true, 'Enter the Student\"s name' ] 
  },
  studentPercent: { 
    type: Number, 
    required: [ true, 'Enter Student Grade as a Percent' ] 
  },
  studentLetterGrade: String
})

studentSchema.virtual( 'url' ).get( () => {
  return this._id
})

module.exports = mongoose.model( 'Student', studentSchema )