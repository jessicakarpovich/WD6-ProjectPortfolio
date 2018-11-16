# Quiz 3

This is similar to the Quiz 2 grades app in concept but has some key differences:

- JavaScript instead of PHP
- frameworks used - Express.js
- run using `node bin/www` instead of setting up a virtual box first
- uses MongoDB, not MySQL
- Pug - view engine

## Getting Started

Make sure you have [NPM](https://www.npmjs.com/get-npm) and [MongoDB](https://www.mongodb.com/) set up. If you're on a Mac, you can install and start it using [homebrew](https://docs.mongodb.com/manual/tutorial/install-mongodb-on-os-x/). Make sure it's set up and started before you run the app or you will get an error about the db connection.

No need to worry about creating the db, the app will do that for you.

- Pull down a copy of the repo 
- Rename the .env.example to .env
- cd into the project directory

Then run `npm install` to install the dependencies and you should be good to go! If you are missing anything, the terminal output will tell you what else to install.

To run the app, make sure you are in the quiz3 directory and run `npm bin/www`