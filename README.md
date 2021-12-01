<h2>Sherpa Notes Development Task</h2>
<p>Steps to get up and running:</p>

<p>1. Clone this repository</p>
<p>2. Start the required Docker containers to run the project. (This is utilising <a target="_blank" href="https://laravel.com/docs/8.x/sail">Laravel Sail</a>): `./vendor/bin/sail up`</p>

<p>3. Create a new user using the User Factory</p>
<p>4. Head to `http://localhost/user/{id}` to view the user's profile</p>

To submit the task, fork the repository and submit the forked repository to Sherpa.

_Some notes:_
1. A component for the note layout has been created for you in resources/js/components.
2. The user factory has been created for you.
3. Only the basic migrations have been included in this project. You'll need to create the notes table yourself.
