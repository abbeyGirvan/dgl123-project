# project plan

This plan is based on personal notes about what is/isn't working at the moment in my project, in addition to the feedback I received from peers during critique on Nov 7. The ordered list below does represent priority of features to be completed. Items that are considered 'extra' and not essential to the MVP are noted as *if time allows*.

## features and fixes

1. update-able tasks: the task lists need to have a column to update the status of the task. Allow users to change the status to possible options: not done, in progress, blocked, done.
2. delete tasks: the user needs to be able to remove tasks from the list.
3. user specific data: the tasks displayed need to belong to the current user, and the My Account page will display information regarding the current user.
4. Update project documentation: in README file add description of how the application works, and functionality of the code. Include a word document in the documentation folder with explanation of how to use the end product.
5. Password strength validation: inlcude a check for strong password on creation. *if time allows*
6. responsive layout: current page layout and design is based on desktop viewing. Needs to shift and be well laid out for smaller screens as well. *if time allows*
7. sort-able tables: implement a feature that allows the user to determine how the list/table of tasks is displayed. *if time allows*
8. update styles on login/signup pages to better match the standard window look for login/signups. *if time allows*

## techniques

1. **CHAPTER 13** work with form elements like drop-downs to update specific rows of data. May also make use of some javascript and event listeners rather that forms and submit buttons, TBD. *WIP*
2. **CHAPTER 13** work with form elements like check boxes to delete specific rows. Likely also inlcude a pop-up or modal asking the user if they're sure they want to delete this task. May also make use of some javascript and event listeners rather that forms and submit buttons, TBD.
3. **CHAPTER 9** work with session data to provide specific information for each user. Need to make use of $_SESSION super global and pull information from the database at time of login to inform session data.
5. write a function to check that the password field contains certain characteristics on creation. Similar to checks already running on email and password/password-confirm. *if time allows*
6. work with CSS to add media queries that change the layout for different screen sizes. *if time allows*
7. possibly work with some kind of if/else block or switch statement to assess what order the task data is written out in. Would need a default state and then somekind of 'on-click' event to change the order and re-write the query data. *if time allows*
8. work with CSS to update the styles here to create a more boxed in look to the login and signup pages. Purely aesthetic to match industry standard. *if time allows*

## schedule

1. Currently working on item 1, attempt to complete and have working this week. **Completion date: Nov 21.**
2. Implement this after completing item 1, as code should be similar in structure. **Completion date: Nov 23.**
3. Larger section to make work, past struggles with this concept. **Completion date: Nov 28**
4. After completing essential elements of functionality, proper documentation can be complied. Considering creating the files now and making changes as I code to reduce end of project work. **Completion date: Nov 25.**

Items 5-8 are to be completed if the above schedule remains on track and there is time to work on acheiving these things, as they are not essential to the functionality of the program. If the above items take longer than expected to get to and acheive items 4-7 can be left off without any major loss to the end product.