<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{GetController, ArticleController, PostController, AdminController};

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
/*page d'acceuille*/

Route::get('/', [GetController::class, 'welcome'])->name('home');
Route::get('/{#homeannonce}', [GetController::class, 'homeannonce'])->name('homeannonce');
Route::get('/{#homeformation}', [GetController::class, 'homeformation'])->name('homeformation');
Route::get('/{#homecontact}', [GetController::class, 'homecontact'])->name('homecontact');
Route::get('/{#homepersonnel}', [GetController::class, 'homepersonnel'])->name('homepersonnel');
Route::get('/{#homearchives}', [GetController::class, 'homearchives'])->name('homearchives');
Route::get('/{#homeinformation}', [GetController::class, 'homeinformation'])->name('homeinformation');
Route::get('/{#homearticle}', [GetController::class, 'homearticle'])->name('homearticle');
Route::get('/{#homeslider}', [GetController::class, 'homeslider'])->name('homeslider');
/* fin pade d'acceuille */
/*autre page */
Route::get('articleDetail/{id}', [AdminController::class, 'articleDetail'])->name('articleDetail');
Route::get('annonceDetail/{id}', [AdminController::class, 'annonceDetail'])->name('annonceDetail');
Route::get('personnelDetail/{id}', [AdminController::class, 'personnelDetail'])->name('personnelDetail');

Route::controller(ArticleController::class)->group(function (){
    Route::get('articleAjout', 'ArticleController')->name('articleAjout');
});

Route::get('annonce', [GetController::class, 'annonce'])->name('annonce');
Route::get('formation', [GetController::class, 'formation'])->name('formation');
Route::get('contact', [GetController::class, 'contact'])->name('contact');
Route::get('personnel', [GetController::class, 'personnel'])->name('personnel');
Route::get('archives', [GetController::class, 'archives'])->name('archives');
Route::get('information', [GetController::class, 'information'])->name('information');
Route::get('info', [GetController::class, 'info'])->name('info');
Route::get('article', [GetController::class, 'article'])->name('article');
Route::get('slider', [GetController::class, 'slider'])->name('slider');
Route::get('login', [GetController::class, 'login'] )->name('login');
Route::get('inscription', [GetController::class, 'inscription'] )->name('inscription');


/*authentification*/
Route::post('inscrire',[PostController::class,'inscrire'])->name('inscrire');
Route::post('conecter',[PostController::class,'conecter'])->name('conecter');
Route::get('deconnexion',[PostController::class,'deconnexion'])->name('logout');
/*etudiant*/
Route::post('insertionetudiants',[PostController::class,'insertionetudiants'])->name('insertionetudiants');
Route::get('insertetudiant',[PostController::class, 'insertetudiant'])->name('insertetudiant');

// Route::get('deconnexion',[AdminController::class,'deconnexion'])->name('deconnexion');

/*administration*/
Route::get('dash',[AdminController::class,'dash'])->name('dash');
Route::get('liste',[AdminController::class,'liste'])->name('liste');

Route::get('listeannonce',[AdminController::class,'listeannonce'])->name('listeannonce');
Route::get('listepersonnel',[AdminController::class,'listepersonnel'])->name('listepersonnel');
Route::get('listearticle',[AdminController::class,'listearticle'])->name('listearticle');
Route::get('listeetudiant',[AdminController::class,'listeetudiant'])->name('listeetudiant');
Route::get('listeclient',[AdminController::class,'listeclient'])->name('listeclient');
Route::get('listeabout',[AdminController::class,'listeabout'])->name('listeabout');
Route::get('listeinfo',[AdminController::class,'listeinfo'])->name('listeinfo');
Route::get('listetravaille',[AdminController::class,'listetravaille'])->name('listetravaille');
Route::get('listematiere',[AdminController::class,'listematiere'])->name('listematiere');
Route::get('listeecolage',[AdminController::class,'listeecolage'])->name('listeecolage');
Route::get('listepayment',[AdminController::class,'listepayment'])->name('listepayment');
Route::get('listecontact',[AdminController::class,'listecontact'])->name('listecontact');
Route::get('listereservation',[AdminController::class,'listereservation'])->name('listereservation');
Route::get('listecommentaire',[AdminController::class,'listecommentaire'])->name('listecommentaire');

Route::post('ajoutpersonnel',[AdminController::class,'ajoutpersonnel'])->name('ajoutpersonnel');
Route::post('ajoutannonces',[AdminController::class,'ajoutannonces'])->name('ajoutannonces');
Route::post('ajoutarticles',[AdminController::class,'ajoutarticles'])->name('ajoutarticles');
Route::post('ajoutabouts',[AdminController::class,'ajoutabouts'])->name('ajoutabouts');
Route::post('ajoutinfos',[AdminController::class,'ajoutinfos'])->name('ajoutinfos');
Route::post('ajoutetudiants',[AdminController::class,'ajoutetudiants'])->name('ajoutetudiants');
Route::post('ajouttravailles',[AdminController::class,'ajouttravailles'])->name('ajouttravailles');
Route::post('ajoutmatieres',[AdminController::class,'ajoutmatieres'])->name('ajoutmatieres');
Route::post('ajoutecolages',[AdminController::class,'ajoutecolages'])->name('ajoutecolages');
Route::post('ajoutpayments',[AdminController::class,'ajoutpayments'])->name('ajoutpayments');
Route::post('ajoutcontacts',[AdminController::class,'ajoutcontacts'])->name('ajoutcontacts');
Route::post('ajoutcommentaires/{id}',[AdminController::class,'ajoutcommentaires'])->name('ajoutcommentaires');
Route::post('ajoutreservations/{id}',[AdminController::class,'ajoutreservations'])->name('ajoutreservations');

Route::get('ajoutpersonne',[AdminController::class,'ajoutpersonne'])->name('ajoutpersonne');
Route::get('ajoutabout',[AdminController::class,'ajoutabout'])->name('ajoutabout');
Route::get('ajoutinfo',[AdminController::class,'ajoutinfo'])->name('ajoutinfo');
Route::get('ajoutannonce',[AdminController::class,'ajoutannonce'])->name('ajoutannonce');
Route::get('ajoutarticle',[AdminController::class,'ajoutarticle'])->name('ajoutarticle');
Route::get('ajoutetudiant',[AdminController::class,'ajoutetudiant'])->name('ajoutetudiant');
Route::get('ajouttravaille',[AdminController::class,'ajouttravaille'])->name('ajouttravaille');
Route::get('ajoutmatiere',[AdminController::class,'ajoutmatiere'])->name('ajoutmatiere');
Route::get('ajoutecolage',[AdminController::class,'ajoutecolage'])->name('ajoutecolage');
Route::get('ajoutpayment',[AdminController::class,'ajoutpayment'])->name('ajoutpayment');
Route::get('ajoutcontact',[AdminController::class,'ajoutcontact'])->name('ajoutcontact');
Route::get('ajoutcommentaire',[AdminController::class,'ajoutcommentaire'])->name('ajoutcommentaire');

Route::get('modifierannonce/{id}',[AdminController::class,'modifierannonce'])->name('modifierannonce');
Route::get('modifierarticle/{id}',[AdminController::class,'modifierarticle'])->name('modifierarticle');
Route::get('modifierabout/{id}',[AdminController::class,'modifierabout'])->name('modifierabout');
Route::get('modifierinfo/{id}',[AdminController::class,'modifierinfo'])->name('modifierinfo');
Route::get('modifierpersonnel/{id}',[AdminController::class,'modifierpersonnel'])->name('modifierpersonnel');
Route::get('modifieretudiant/{id}',[AdminController::class,'modifieretudiant'])->name('modifieretudiant');
Route::get('modifierclient/{id}',[AdminController::class,'modifierclient'])->name('modifierclient');
Route::get('modifiertravaille/{id}',[AdminController::class,'modifiertravaille'])->name('modifiertravaille');
Route::get('modifiermatiere/{id}',[AdminController::class,'modifiermatiere'])->name('modifiermatiere');
Route::get('modifierecolage/{id}',[AdminController::class,'modifierecolage'])->name('modifierecolage');
Route::get('modifierpayment/{id}',[AdminController::class,'modifierpayment'])->name('modifierpayment');
Route::get('modifiercontact/{id}',[AdminController::class,'modifiercontact'])->name('modifiercontact');

Route::post('suprimmerclient/{id}',[AdminController::class,'suprimmerclient'])->name('suprimmerclient');
Route::post('suprimmerabout/{id}',[AdminController::class,'suprimmerabout'])->name('suprimmerabout');
Route::post('suprimmerinfo/{id}',[AdminController::class,'suprimmerinfo'])->name('suprimmerinfo');
Route::post('suprimmerannonce/{id}',[AdminController::class,'suprimmerannonce'])->name('suprimmerannonce');
Route::post('suprimmerarticle/{id}',[AdminController::class,'suprimmerarticle'])->name('suprimmerarticle');
Route::get('suprimmerpersonnel/{id}',[AdminController::class,'suprimmerpersonnel'])->name('suprimmerpersonnel');
Route::get('suprimmeretudiant/{id}',[AdminController::class,'suprimmeretudiant'])->name('suprimmeretudiant');
Route::post('suprimmertravaille/{id}',[AdminController::class,'suprimmertravaille'])->name('suprimmertravaille');
Route::post('suprimmermatiere/{id}',[AdminController::class,'suprimmermatiere'])->name('suprimmermatiere');
Route::get('suprimmerecolage/{id}',[AdminController::class,'suprimmerecolage'])->name('suprimmerecolage');
Route::get('suprimmerpayment/{id}',[AdminController::class,'suprimmerpayment'])->name('suprimmerpayment');
Route::get('suprimmercontact/{id}',[AdminController::class,'suprimmercontact'])->name('suprimmercontact');
Route::post('suprimmercommentaire/{id}',[AdminController::class,'suprimmercommentaire'])->name('suprimmercommentaire');
Route::post('suprimmerreservation/{id}',[AdminController::class,'suprimmerreservation'])->name('suprimmerreservation');

Route::post('modabouts',[AdminController::class,'modabouts'])->name('modabouts');
Route::post('modinfos',[AdminController::class,'modinfos'])->name('modinfos');
Route::post('modetudiants',[AdminController::class,'modetudiants'])->name('modetudiants');
Route::post('modpersonnel',[AdminController::class,'modpersonnel'])->name('modpersonnel');
Route::post('modannonces',[AdminController::class,'modannonces'])->name('modannonces');
Route::post('modarticles',[AdminController::class,'modarticles'])->name('modarticles');
Route::post('modtravaille',[AdminController::class,'modtravaille'])->name('modtravaille');
Route::post('modmatieres',[AdminController::class,'modmatieres'])->name('modmatieres');
Route::post('modecolages',[AdminController::class,'modecolages'])->name('modecolages');
Route::post('modpayments',[AdminController::class,'modpayments'])->name('modpayments');
Route::post('modcontacts',[AdminController::class,'modcontacts'])->name('modcontacts');

Route::get('detailannonce/{id}',[AdminController::class,'detailannonce'])->name('detailannonce');
Route::get('detailarticle/{id}',[AdminController::class,'detailarticle'])->name('detailarticle');
Route::get('detailabout/{id}',[AdminController::class,'detailabout'])->name('detailabout');
Route::get('detailpersonnel/{id}',[AdminController::class,'detailpersonnel'])->name('detailpersonnel');
Route::get('detailetudiant/{id}',[AdminController::class,'detailetudiant'])->name('detailetudiant');
Route::get('detailclient/{id}',[AdminController::class,'detailclient'])->name('detailclient');

Route::prefix('configurations')->group(function(){
    Route::get('/', [ConfigurationController::class, 'index']);
});