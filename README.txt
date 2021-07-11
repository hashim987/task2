TASK NUMBER 2:
it will allow the user to choose a direction for an engine.
first of all, the "Main Page", this page contain two buttons, the first button for moving the arm, 
if the user press this button it will move him to the arm movement page 'Task 1', 
the second button the user will be able to move the platform of the robot.

____________________________________________________________________________________________________________________
For the First task, here is a descreption for it:
at first I start with HTML file, I applied the 6 engine and the two buttons, 
and I have added a welcoming word in the top of the page.
after that I start using css, first thing was adding the picture, then after 
that modifying the text and makes it look prettier.
and try my best to do color matching.
after that I work in the database, the table i created consist of 7 column, 
6 columns for the engine,
the last column to indicate the state of the engines, which means whether they
 are on save mode or on play mode.
then finally I I made a php page and link the user Interface with the database I created.
and also, I make sure that the data being inserted to the database, otherwise it 
will show a message that the data could not added to the database.


____________________________________________________________________________________________________________________
And for the second task, here is it
when the user presses the button in the home page it will move him to this page, in this page I made 5 buttons,
four of them is for picking the direction you want to move the robot, 
and the one in the middle to stop the robot from moving.

data will be sent to the database to the table called 'direction'.
this table consist of only one column for storing the direction only.
the data will be stored as numbers.
0 ==> stop
1 ==> forward
2 ==> Right
3 ==> Back
4 ==> Left

____________________________________________________________________________________________________________________
(IMPORTANT NOTES):
then you have to put this file in 'htdocs' inside the XAMPP folders.
how to run? go to the browser , then type 'localhost' followed by the port number , ex:1234 ,then the folder name 
Example:localhost:1234/Tasks/

now you can rotate the engines and send the data to the database.

also note that in the video I recorded, I show the user interface and i SAVE the data and show it to you after it is being 
inserted to the database and it has '0' in its status.
And when I try again with different data and push the PLAY button, data will be stored also and the status will contain '1'.
