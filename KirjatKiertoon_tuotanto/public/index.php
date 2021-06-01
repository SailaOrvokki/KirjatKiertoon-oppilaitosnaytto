<?php
session_start();
set_include_path(dirname(__FILE__) . '/../');

require_once 'env.php'; // ottaa yhteyden tietokantaan
require_once 'router/Request.php'; // reitittää kyselyt
require_once 'router/Router.php'; // tekee reitit
require_once 'libraries/helpers.php'; // apu funktiot mm. tietojen tyhjennys ja salasanan "sotkeminen"
require_once 'controllers/userManagement.php'; // käyttäjän toimintojen kontrollointi
require_once 'controllers/articleManagement.php'; // kirjailmoitusten toimintojen kontrollointi
require_once 'controllers/mailManagement.php'; // viesti toimintojen kontrollointi

$router = new Router(new Request);

$router->get('/', function($request) {
  loginController();
});

// Etusivu
$router->get('/kirjailmoitus', function($request) {
  viewArticlesController();
});

// Rekisteröityminen
$router->get('/register', function($request) {
  registerController();
});

$router->post('/register', function($request) {
  registerController();
});

// Kirjautuminen sisälle ja ulos
$router->get('/login', function($request) {
  loginController();
});

$router->post('/login', function($request) {
  loginController();
});

// Kirjautuneen käyttäjän ohjaaminen käyttäjän sivuille
$router->get('/user', function($request) {
  if(isLoggedIn()){
    require 'views/user.view.php';
} else {
  registerController();
  echo "Vain kirjautuneille";
}
});
//uloskirjautuminen
$router->get('/logout', function($request) {
  logoutController();
});

// Ilmoituksen tekeminen kirjautuneelle käyttäjälle
// $router->get('/kirjailmoitus', function($request) {
//   if(isLoggedIn()){
//     require 'views/kirjailmoitus.view.php';
// } else {
//   registerController();
//   echo "Vain kirjautuneille";
// }
// });



// Uuden kirjan lisääminen
$router->get('/lisää_kirja', function($request) {
  if(isLoggedIn()){
    addArticleController();
  } else {
    loginController();
  }
});

$router->post('/lisää_kirja', function($request) {
  if(isLoggedIn()){
    addArticleController();
  } else {
    loginController();
  }
});

// Kirjan poistaminen
$router->get('/poista_kirja', function($request) {
  $id = $request->parseId();
  if($id){
    deleteArticleController($id);
  } else {
    viewArticlesController();
  }
});

// Kirjan tietojen päivittäminen
$router->get('/paivita_kirja', function($request) {
  $id = $request->parseId();
  if($id){
    editArticleController($id);
  } else {
    viewArticlesController();
  }
});

$router->post('/paivita_kirja', function($request) {
  $id = $request->parseId();
  if($id){
    updateArticleController($id);
  } else {
    viewArticlesController();
  }
});

// Uuden viestin lähettäminen
$router->get('/viesti', function($request) {
  if(isLoggedIn()){
    addMailController();
  } else {
    loginController();
  }
});

$router->post('/viesti', function($request) {
  if(isLoggedIn()){
    addMailController();
  } else {
    loginController();
  }
});