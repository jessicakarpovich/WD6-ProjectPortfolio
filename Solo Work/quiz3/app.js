const express = require( 'express' )
const app = express()
const mongoose = require( 'mongoose' )
const bodyParser = require( 'body-parser' )

app.use( bodyParser.json() )
app.use( bodyParser.urlencoded({ extended: false }) )

// connect to mongo db running locally
mongoose.connect( 
  `mongodb://${process.env.MONGO_HOST}/${process.env.MONGO_DATABASE}` 
)

// default conn
const db = mongoose.connection

// handle error connecting
db.on( 'error', console.error.bind( console, 'MongoDB connection error:' ) )

// handle success connecting
db.once( 'open', () => console.log( 'DB CONNECTION SUCCESS' ) )

// Routes - add here as they are created
const grades = require( './routes/grades' )
app.use( '/' , grades)

module.exports = app