# faceclash
<h3>facemash clone using laravel 5 php</h3>

<h2> Current Features: </h2>
<li> upload pics</li>
<li> play the game: select more attractive image of the two loaded on screen. </li>
<li>each model has expected-win-chance and rank </li>
<li> stats page for all the models </li>

<h2>About</h2>
<p>
this project is a modified version of the facemash website shown in the social network movie.
Ranking of images is done using Elo-ranking algorithm.
the game presents you with 2 images .. the player votes an image by clicking it.
the algorithm then upadtes the scores and ranks accordingly.
the player is again given another 2 images randomly from the data base.
you can check an image's expected score,wins,losses by hovering over it.
the complete stats of all images are in the /stats route.
</p>

<h2>Ussage:</h2>
<li><b>Required:</b> laravel 5.4 , blade template engine </li>
<ol>
<li>Download xampp/wamp </li>
<li>Download composer </li>
<li>pull project</li>
<li> Rename .env.example file to .env inside your project root and fill the database information</li>
<li>Open the console and cd your project root directory</li>
<li>Run composer install or php composer.phar install </li>
<li>Run php artisan key:generate</li>
<li>Run php artisan migrate</li>
<li>run php artisan serve</li>
<li> project is hosted at localhost:8000 </li>
<li>save images in public/img/models</li>
<li>goto /uploads click upload.</li>
<li>once the upload ends you can play the game.</li>
</ol>

<h2>Updates and Todo :</h2>
<ul>
<li>use angualarjs or react for frontend</li>
<li>public upload link</li>
<li>invite friends</li>
<li>Ml for better prediction and removing abusive images</li>
</ul>
