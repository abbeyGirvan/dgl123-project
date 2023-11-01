# dgl123-project

dgl-123 final project

Abbey Girvan

## November 1st lab

Flowcharting logic for dynamic pages. For flowchart images see MS word document included in documentation folder, file name Lab9a. 

Self Eval: 3/4 
Created flowcharts for major logic sections, and created more documenation within README. Didn't implement any new code/logic in project.

### HOME: display task list based on account logged in

    -	Must be sortable.
    -	Must display room, task, due date, status.
    -	Checking the status box must update the table row.

### ADD A TABLE: create a new task (new table row)

    -	Must add data to Tasks table in DB.
    -	Must update display on the home page.

### LOGIN: verify email and password

    -	Must check if email exists in accounts table.
    -	Must check that provided email matches password in that row.
    -	Link to login only active if email exists and email + password match.
    -	If conditions not met needs feedback to tell user input not good
    -	Button inactive entirely until all fields filled.
    -	Needs feedback if user tries to click when fields missing.

### SIGNUP: add data to accounts table

    -	Must check if email already exists in database (is a unique field)
    -	Needs to provide feedback to user if email already in use.
    -	Must check if password and confirmation password field match.
    -	Must add new row to accounts table after sign-up button clicked. (If fields are valid)
    -	Add first name, last name, email, and FIRST password field.
    -	Link to sign up only active if email is unique and passwords match.
    -   If conditions not met needs to give feedback to user explaining what’s not good
    -	Button inactive entirely until fields all filled.
    -   Needs feedback if user tries to click when fields missing.



## October 25th lab

### FEATURE TO WORK ON:
    - create sign up page
    - create login page
    - dummy data for logins and signups

### PROGRESS
    - sign up page structure completed
    - log in page structure completed
    - some structure to create user profiles created
    - comments left for future work


## STATUS:

**W.I.P.** Milestone 3

1. Database creation and linkage
2. Basic web app functionality
3. Flow Diagrams for logic

This milestone focuses on generating a working prototype for your target app.  While your app may be rough, most functionality should be in place and demonstrable.  This milestone will include techniques and contributions from weekly assignments as well -- please only evaluate your work here that isn't an exact duplicate of weekly assignments.

For this milestone, you'll need to connect your front end components to the back-end and integrate your database functionality. 

**Completed** Milestone 2

1. Finalize your design
2. Identify your target file structure
3. Implement HTML/CSS/PHP sufficiently to present your interface

This milestone focuses on the design and implementation of the UI elements for your semester project.  That means you'll be completing 1/2 of the build (the front-end build) by producing the UI elements corresponding to your Milestone 1 sketches and wireframes.  That also means the back-end is still somewhat undecided. 

The outcome should be a working interface, in the sense that it's rendered via PHP in a web browser.  You can expect to dummy up an interaction to show the screens as if a user were logged in, for example, by supplying mock data that will later come from a database.