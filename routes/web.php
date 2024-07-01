<?php

use Illuminate\Support\Facades\Route;
use Psy\Readline\Hoa\Console;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = config("store");
    return view('home', $data);
});
Route::get('/home', function () {
    $data = config("store");
    return view('home', $data);
});
Route::get('/comic/{indice}', function ($indice) {
    $fumetti = config("store.comics");
    $fumetto = $fumetti[$indice];
    $data = [ "fumetto" => $fumetto];
    return view("more", $data);
})->name("comic");

// Route::get('/Vampire', function () {
//     $data = [
//         "title" => "American Vampire 1976 #1",
//         "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
//         "thumb" => "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
//         "price" => "$3.99",
//         "series" => "American Vampire 1976",
//         "sale_date" => "2020-10-06",
//         "type" => "comic book",
//     ];
//     return view('more', $data);
// });
// Route::get('/Aquaman', function () {
//     $data = [
//         "title" => "Aquaman Vol. 4: Underworld",
//         "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
//         "thumb" => "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
//         "price" => "$16.99",
//         "series" => "Aquaman",
//         "sale_date" => "2018-01-24",
//         "type" => "graphic novel",
//     ];
//     return view('more', $data);
// });
// Route::get('/Batgirl', function () {
//     $data = [
//         "title" => "Batgirl #1",
//         "description" => "“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.",
//         "thumb" => "https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg",
//         "price" => "$2.99",
//         "series" => "Batgirl",
//         "sale_date" => "2016-07-27",
//         "type" => "comic book",
//     ];
//     return view('more', $data);
// });
// Route::get('/Batman', function () {
//     $data = [
//         "title" => "Batman #56",
//         "description" => "The Dark Knight’s looking to drop both the hammer and sickle on the KGBeast, whose rampage across Gotham City takes a toll on Nightwing when he’s injured in the fray. Blaming himself for his ward’s fate, Batman gets grimmer than usual—and vows to take the Russian assassin down like the Berlin Wall. Is even Gotham City ready for that much violence? The streets will run red like borscht if the Dark Knight gets his way against this Soviet scourge.",
//         "thumb" => "https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg",
//         "price" => "$3.99",
//         "series" => "Batman",
//         "sale_date" => "2018-10-03",
//         "type" => "comic book",
//         "source" => "/Batman"
//     ];
//     return view('more', $data);
// });
// Route::get('/2', function () {
//     $data = [
//         "title" => "Batman Beyond #1",
//         "description" => "“THE RETURN” part one! Terry McGinnis is back as Batman, much to the delight of his family and friends. But is the original Joker really back as well? Inspired by the possible return of their role model, the Jokerz have taken over an entire section of Gotham City and are determined to wreak havoc in the still-rebuilding city. While Batman battles chaos on the streets, his friend Dana is at the mercy of the new leader of the now-unified gang.",
//         "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg",
//         "price" => "$2.99",
//         "series" => "Batman Beyond",
//         "sale_date" => "2016-10-26",
//         "type" => "comic book",
//         "source" => "/Batman#2"
//     ];
//     return view('more', $data);
// });
