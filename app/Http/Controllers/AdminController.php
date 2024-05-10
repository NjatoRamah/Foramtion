<?php

namespace App\Http\Controllers;

use App\Models\{User, personnel,formation,contact,article,annonce,etudiant,travaille,matiere,ecolage,payment,reservation,commentaire,info};
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;


class AdminController extends Controller
{
    public function dash(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpers = count($personnel);
        $nbart = count($article);
        return view('dashboard', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbart','user'));
    }
    public function liste(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
        
    }
/*annonce*/
    public function listeannonce(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $listeannonce = DB::table('annonces')->orderByDesc('id')->get();
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.annonce.liste', compact('listeannonce','annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
    }
    public function ajoutannonces(Request $req){
        $this->validate($req, [
            "titre" => "required",
            "prix" => "required",
            "dateentree" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif",
            "description" => "required",
        ]);

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

           
            $image->storeAs('images', $imageName, 'public');

            $annonce = new Annonce();
            $annonce->titre = $req->input('titre');
            $annonce->prix = $req->input('prix');
            $annonce->dateentree = $req->input('dateentree');
            $annonce->image = $imageName; 
            $annonce->description = $req->input('description');
            $annonce->save();

            return redirect()->Route('listeannonce');
        }
    }
    public function ajoutannonce(){
        return view('admin.page.annonce.ajout');
    }
    public function suprimmerannonce(string $id){
        $suprannonce = annonce::findOrFail($id);
        $suprannonce->delete();
        return redirect ()->Route('listeannonce')->with('success', 'suprimer avec succées');
        
    }
    public function modannonces(Request $req){
        $this->validate($req, [
            "id" => "required",
            "titre" => "required",
            "prix" => "required",
            "dateentree" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif",
            "description" => "required",
        ]);
        $id = $req->input('id');

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

           
            $image->storeAs('images', $imageName, 'public');

            $annonce = Annonce::find($id);
            $annonce->titre = $req->input('titre');
            $annonce->prix = $req->input('prix');
            $annonce->dateentree = $req->input('dateentree');
            $annonce->image = $imageName; 
            $annonce->description = $req->input('description');
            $annonce->update();

            return redirect()->Route('listeannonce');
        }
    }
    public function modifierannonce($id){
        $annonce = DB::table('annonces')->find($id);
        return view('admin.page.annonce.modifie', compact('annonce'));
    }
    public function detailannonce($id){
        $annonce = DB::table('annonces')->where('id',$id)->first();
        return view('admin.page.annonce.detail', compact('annonce'));
    }
    public function annonceDetail($id){
        $annonce = DB::table('annonces')->where('id',$id)->first();
        $info = DB::table('infos')->orderBy('id')->get();
        return view('user/page/service/annonceDetail', compact('annonce','info'));
    }
/*article*/
    public function ajoutarticles(Request $req){
        $this->validate($req, [
            "titre" => "required",
            "soustitre" => "required",
            "prix" => "required",
            "dateentree" => "required",
            "jours"=>'required',
            "heures"=>'required',
            "image" => "required|image|mimes:jpeg,png,jpg,gif",
            "description" => "required",
        ]);

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

           
            $image->storeAs('images', $imageName, 'public');

            $annonce = new Article();
            $annonce->titre = $req->input('titre');
            $annonce->soustitre = $req->input('soustitre');
            $annonce->prix = $req->input('prix');
            $annonce->dateentree = $req->input('dateentree');
            $annonce->jours = $req->input('jours');
            $annonce->heures = $req->input('heures');
            $annonce->image = $imageName; 
            $annonce->description = $req->input('description');
            $annonce->save();

            return redirect()->Route('listearticle');
        }
    }
    public function listearticle(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        $article = DB::table('articles')->orderByDesc('id')->get();
        return view('admin.page.article.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol','article'));
        
        
    }
    public function ajoutarticle(){
        return view('admin.page.article.ajout');
    }
    public function suprimmerarticle(string $id){
        $suprarticle = article::findOrFail($id);
        $suprarticle->delete();
        return redirect ()->Route('listearticle')->with('success', 'suprimer avec succées');
    }
    public function modarticles(Request $req){
        $this->validate($req, [
            "id" => "required",
            "titre" => "required",
            "soustitre" => "required",
            "prix" => "required",
            "dateentree" => "required",
            "jours"=>'required',
            "heures"=>'required',
            "image" => "required|image|mimes:jpeg,png,jpg,gif",
            "description" => "required",
        ]);
        $id=$req->input('id');
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('images', $imageName, 'public');
            $annonce = Article::find($id);
            $annonce->titre = $req->input('titre');
            $annonce->soustitre = $req->input('soustitre');
            $annonce->prix = $req->input('prix');
            $annonce->dateentree = $req->input('dateentree');
            $annonce->jours = $req->input('jours');
            $annonce->heures = $req->input('heures');
            $annonce->image = $imageName; 
            $annonce->description = $req->input('description');
            $annonce->update();

            return redirect()->Route('listearticle');
        }
    }
    public function modifierarticle($id){
        $article = DB::table('articles')->find($id);
        return view('admin.page.article.modifie', compact('article'));
    }
    public function articleDetail($id){
        $articles = DB::table('articles')->where('id',$id)->first();
        $info = DB::table('infos')->orderBy('id')->get();
        return view('user/page/service/articleDetail', compact('articles','info'));
    }
    public function detailarticle($id){
        $article = DB::table('articles')->where('id',$id)->first();
        return view('admin.page.article.detail', compact('article'));
    }
 
/*personnel*/
    public function listepersonnel(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        $personnel = DB::table('travailles')->join('personnels','travailles.id','=','personnels.poste_id')->get();
        
        return view('admin.page.personnel.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol','personnel'));
        
        
        
    }
    public function ajoutpersonnel(Request $req){
        $this->validate($req, [
            "nom" => "required",
            "prenom" => "required",
            "datenaissance" => "required",
            "email" => "email|required|unique:personnels",
            "contact" => "required",
            "sexe" => "required",
            "poste_id" => "required",
            "matricule" => "required",
            "dateentree" => "required",
            "pdp" =>"required|image|mimes:jpeg,png,jpg,gif",
            "mdp" => "required",
            "cmdp"=> "required",
            "postale" => "required",
            "adresse" => "required",
            "ville" => "required",
            "region" => "required",
            "province" => "required",
            "cin" => "required",
            "delivre" => "required",
            "datedelivre" => "required",
            "dateexpiration" => "required"
        ]);
            $pwd = $req->input('mdp');
            $pwdConf = $req->input('cmdp');
            $personnel = new Personnel();
            
            $travaille = DB::table('travailles')->orderByDesc('id')->get();
            if ($pwd === $pwdConf) {
                if ($req->hasFile('pdp')){
                    $pdp = $req->file('pdp');
                    $pdpname = time() . '.' . $pdp->getClientOriginalExtension();
                    $pdp->storeAs('pdp', $pdpname, 'public');
                }
                $personnel->nom =$req->input('nom');
                $personnel->prenom =$req->input('prenom');
                $personnel->datenaissance =$req->input('datenaissance');
                $personnel->email =$req->input('email');
                $personnel->contact =$req->input('contact');
                $personnel->sexe =$req->input('sexe');
                $personnel->poste_id =$req->input('poste_id');
                $personnel->matricule =$req->input('matricule');
                $personnel->dateentree =$req->input('dateentree');
                $personnel->pdp = $pdpname;
                $personnel->mdp = bcrypt($req->input('email'));
                $personnel->postale =$req->input('postale');
                $personnel->adresse =$req->input('adresse');
                $personnel->ville =$req->input('ville');
                $personnel->region =$req->input('region');
                $personnel->province =$req->input('province');
                $personnel->cin =$req->input('cin');
                $personnel->delivre =$req->input('delivre');
                $personnel->datedelivre =$req->input('datedelivre');
                $personnel->dateexpiration =$req->input('dateexpiration');
                $personnel->save();
                return redirect()->Route('listepersonnel');
            }else{
                $error ='mot de passe non identique';
                return back()->with('error',$error, compact('travaille'));
            }
        
    }
    public function ajoutpersonne(){
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        return view('admin.page.personnel.ajout', compact('travaille'));
    }
    public function suprimmerpersonnel(string $id){
        $suprpersonnel = personnel::findOrFail($id);
        $suprpersonnel->delete();
        return redirect ()->Route('listepersonnel')->with('success', 'suprimer avec succées');
        
    }
    public function modpersonnel(Request $req){
        $this->validate($req, [
            "id" => "required",
            "nom" => "required",
            "prenom" => "required",
            "datenaissance" => "required",
            "email" => "email|required|unique:personnels",
            "contact" => "required",
            "sexe" => "required",
            "poste_id" => "required",
            "matricule" => "required",
            "dateentree" => "required",
            "pdp" =>"required|image|mimes:jpeg,png,jpg,gif",
            "mdp" => "required",
            "cmdp"=> "required",
            "postale" => "required",
            "adresse" => "required",
            "ville" => "required",
            "region" => "required",
            "province" => "required",
            "cin" => "required",
            "delivre" => "required",
            "datedelivre" => "required",
            "dateexpiration" => "required"
        ]);
            $pwd = $req->input('mdp');
            $pwdConf = $req->input('cmdp');
            $id=$req->input('id');
            $personnel = Personnel::find($id);
            
            if ($pwd === $pwdConf) {
                if ($req->hasFile('pdp')){
                    $pdp = $req->file('pdp');
                    $pdpname = time() . '.' . $pdp->getClientOriginalExtension();
                    $pdp->storeAs('pdp', $pdpname, 'public');
                }
                $personnel->nom =$req->input('nom');
                $personnel->prenom =$req->input('prenom');
                $personnel->datenaissance =$req->input('datenaissance');
                $personnel->email =$req->input('email');
                $personnel->contact =$req->input('contact');
                $personnel->sexe =$req->input('sexe');
                $personnel->poste_id =$req->input('poste_id');
                $personnel->matricule =$req->input('matricule');
                $personnel->dateentree =$req->input('dateentree');
                $personnel->pdp = $pdpname;
                $personnel->mdp = bcrypt($req->input('email'));
                $personnel->postale =$req->input('postale');
                $personnel->adresse =$req->input('adresse');
                $personnel->ville =$req->input('ville');
                $personnel->region =$req->input('region');
                $personnel->province =$req->input('province');
                $personnel->cin =$req->input('cin');
                $personnel->delivre =$req->input('delivre');
                $personnel->datedelivre =$req->input('datedelivre');
                $personnel->dateexpiration =$req->input('dateexpiration');
                $personnel->update();
                return redirect()->Route('listepersonnel');
            }else{
                $error ='mot de passe non identique';
                return back()->with('error',$error);
            }
        
    }
    public function modifierpersonnel($id){
        
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->where('personnels.id',$id)->first();
        $travaille = DB::table('travailles')->where('travailles.id',$personnel->poste_id)->get();
        
        return view('admin.page.personnel.modifie', compact('personnel','travaille'));
    }
    public function detailpersonnel($id){
        
        $personnels = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->where('personnels.id','=',$id)->first();
        // dd($personnels);
        $travaille = DB::table('travailles')->where('travailles.id',$personnels->poste_id)->get();
       return view('admin.page.personnel.detail', compact('personnels','travaille'));
    }
    public function personnelDetail($id){
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->where('personnels.id','=',$id)->first();
        $travaille = DB::table('travailles')->where('travailles.id',$personnel->poste_id)->get();
        $info = DB::table('infos')->orderBy('id')->get();
        return view('user/page/service/personnelDetail', compact('personnel','info','travaille'));
    }
/*etudiant*/
    public function listeetudiant(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        return view('admin.page.etudiant.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol','etudiant'));
        
        
        
    }
    public function ajoutetudiants(Request $req){
        $this->validate($req, [
            "nom" => "required",
            "prenom" => "required",
            "contact" => "required",
            "sexe" => "required",
            "departement" => "required",
            "matricule" => "required",
            "pdp" =>"required|image|mimes:jpeg,png,jpg,gif",
            "adresse" => "required",
        ]);
            $etudiant = new Etudiant();
            if ($req->hasFile('pdp')){
                $pdp = $req->file('pdp');
                $pdpname = time() . '.' . $pdp->getClientOriginalExtension();
                $pdp->storeAs('pdp', $pdpname, 'public');
            }
            $etudiant->nom =$req->input('nom');
            $etudiant->prenom =$req->input('prenom');
            $etudiant->contact =$req->input('contact');
            $etudiant->matricule =$req->input('matricule');
            $etudiant->sexe =$req->input('sexe');
            $etudiant->departement =$req->input('departement');
            $etudiant->pdp = $pdpname;
            $etudiant->adresse =$req->input('adresse');
            $etudiant->save();
            return redirect()->Route('listeetudiant');
        
    }
    public function modetudiants(Request $req){
        $this->validate($req, [
            "id" => "required",
            "nom" => "required",
            "prenom" => "required",
            "contact" => "required",
            "sexe" => "required",
            "departement" => "required",
            "matricule" => "required",
            "pdp" =>"required|image|mimes:jpeg,png,jpg,gif",
            "adresse" => "required",
        ]);
        $id=$req->input('id');
            $etudiant =Etudiant::find($id);
            if ($req->hasFile('pdp')){
                $pdp = $req->file('pdp');
                $pdpname = time() . '.' . $pdp->getClientOriginalExtension();
                $pdp->storeAs('pdp', $pdpname, 'public');
            }
            $etudiant->nom =$req->input('nom');
            $etudiant->prenom =$req->input('prenom');
            $etudiant->contact =$req->input('contact');
            $etudiant->matricule =$req->input('matricule');
            $etudiant->sexe =$req->input('sexe');
            $etudiant->departement =$req->input('departement');
            $etudiant->pdp = $pdpname;
            $etudiant->adresse =$req->input('adresse');
            $etudiant->update();
            return redirect()->Route('listeetudiant');
        
    }
    public function ajoutetudiant(){
        $matieres = DB::table('matieres')->orderByDesc('id')->get();
        return view('admin.page.etudiant.ajout',compact('matieres'));
    }
    public function suprimmeretudiant(string $id){
        $supretudiant =etudiant::findOrFail($id);
        $supretudiant->delete();
        return redirect ()->Route('listeetudiant')->with('success', 'suprimer avec succées');
    }
    public function modifieretudiant($id){
        $etudiant = DB::table('etudiants')->find($id);
        return view('admin.page.etudiant.modifie', compact('etudiant'));
    }

/*client*/
    public function listeclient(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        $user = DB::table('users')->orderByDesc('id')->get();
        $nbClt = count($user);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbart = count($article);
        
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        return view('admin.page.client.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol','user','nbClt','nbart','article'));
        
    }
    public function suprimmerclient(string $id){
        $suprclient = user::findOrFail($id);
        $suprclient->delete();
        return redirect ()->Route('listeclient')->with('success', 'suprimer avec succées');
    }
    public function modifierclient($id){
        $user = DB::table('users')->find($id);
        return view('admin.page.client.modifie', compact('user'));
    }

/*about*/
    public function modabouts(Request $req){
        $this->validate($req, [
            "id" => "required",
            "titre" => "required",
            "description" => "required",
        ]);
        $id=$req->input('id');
        $about = formation::find($id);
        $about->titre = $req->input('titre');
        $about->description = $req->input('description');
        $about->update();

        return redirect()->Route('listeabout');
    }

    public function ajoutabouts(Request $req){
        $this->validate($req, [
            "titre" => "required",
            "description" => "required",
        ]);
        $about = new formation();
        $about->titre = $req->input('titre');
        $about->description = $req->input('description');
        $about->save();

        return redirect()->Route('listeabout');

    }
    public function listeabout(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        $user = DB::table('users')->orderByDesc('id')->get();
        $nbClt = count($user);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbart = count($article);
        $about = DB::table('formations')->orderByDesc('id')->get();
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        return view('admin.page.about.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol','user','nbClt','nbart','article','about'));
        
    }
    public function ajoutabout(){
        return view('admin.page.about.ajout');
    }
    public function suprimmerabout(string $id){
        $suprabout = formation::findOrFail($id);
        $suprabout->delete();
        return redirect ()->Route('listeabout')->with('success', 'suprimer avec succées');
    }
    public function modifierabout($id){
        $about = DB::table('formations')->find($id);
        return view('admin.page.about.modifie', compact('about'));
    }

/*****deconnection****/ 
    public function deconnexion(){
        Session::forget('admin');
        return redirect()->Route('home');
    }

/*travaille*/
    public function ajouttravailles(Request $req){
        $this->validate($req,[
            "poste" => "required",
            "prix" => "required",
        ]);
        $travaille = new Travaille();
        $travaille->poste = $req->input('poste');
        $travaille->prix = $req->input('prix');
        $travaille->save();
        return redirect()->Route('listetravaille');
    }
    public function modtravaille(Request $req){
        $this->validate($req,[
            "id" => "required",
            "poste" => "required",
            "prix" => "required",
        ]);
        $id=$req->input('id');
        $travaille = Travaille::find($id);
        $travaille->poste = $req->input('poste');
        $travaille->prix = $req->input('prix');
        $travaille->update();
        
        return redirect()->Route('listetravaille');
    }
    public function listetravaille(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.travaille.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
        
        
        
    }
    public function ajouttravaille(){
        return view('admin.page.travaille.ajout');
    }
    public function suprimmertravaille(string $id){
        $suprtravaille = travaille::findOrFail($id);
        $suprtravaille->delete();
        return redirect ()->Route('listetravaille')->with('success', 'suprimer avec succées');
    }
    public function modifiertravaille($id){
        $travaille = DB::table('travailles')->find($id);
        return view('admin.page.travaille.modifier', compact('travaille'));
    }

/*matiere*/
    public function ajoutmatieres(Request $req){
        $this->validate($req,[
            "matiere" => "required",
        ]);
        $matiere = new matiere();
        $matiere->matiere = $req->input('matiere');
        $matiere->save();
        return redirect()->Route('listematiere');
    }
    public function modmatieres(Request $req){
        $this->validate($req,[
            "id" => "required",
            "matiere" => "required",
        ]);
        $id=$req->input('id');
        $matiere = matiere::find($id);
        $matiere->matiere = $req->input('matiere');
        $matiere->update();
        return redirect()->Route('listematiere');
    }
    public function listematiere(){
        $matiere = DB::table('matieres')->groupBy('matiere')->get();
        return view('admin.page.matiere.liste', compact('matiere'));
    }
    public function ajoutmatiere(){
        return view('admin.page.matiere.ajout');
    }
    public function suprimmermatiere(string $id){
        $suprmatiere = matiere::findOrFail($id);
        $suprmatiere->delete();
        return redirect ()->Route('listematiere')->with('success', 'suprimer avec succées');
    }
    public function modifiermatiere($id){
        $matiere = DB::table('matieres')->find($id);
        return view('admin.page.matiere.modifier', compact('matiere'));
    }
/*ecolage*/
    public function ajoutecolages(Request $req){
        $this->validate($req,[
            "prix" => "required",
            "id_matieres"=>"required"
        ]);
        // $matiere = DB::table('matieres')->where('id',$id)->first();
        $matieres = DB::table('matieres')->orderByDesc('id')->get();
        $ecolage = new Ecolage();
        $ecolage->prix = $req->input('prix');
        $ecolage->id_matieres = $req->input('id_matieres');
        $ecolage->save();
        return redirect()->Route('listeecolage',compact('matieres'));
    }
    public function modecolages(Request $req){
        $this->validate($req,[
            "id" =>"required",
            "prix" => "required",
            "id_matieres"=>"required"
        ]);
        $id=$req->input('id');
        $ecolage = Ecolage::find($id);
        $ecolage->prix = $req->input('prix');
        $ecolage->id_matieres = $req->input('id_matieres');
        $ecolage->update();
        return redirect()->Route('listeecolage');
    }
    public function listeecolage(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.ecolage.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
        
       
    }
    public function ajoutecolage(){
        $matieres = DB::table('matieres')->orderByDesc('id')->get();
        return view('admin.page.ecolage.ajout', compact('matieres'));
    }
    public function suprimmerecolage($id){
        $suprecolage = ecolage::findOrFail($id);
        $suprecolage->delete();
        return redirect ()->Route('listeecolage')->with('success', 'suprimer avec succées');
    }
    public function modifierecolage($id){
        $ecolage = DB::table('ecolages')->find($id);
        return view('admin.page.ecolage.modifier', compact('ecolage'));
    }
/*payment*/
    public function ajoutpayments(Request $req){
        $this->validate($req,[
            "mois" => "required",
            "id_ecolages"=>"required",
            "id_etudiants"=>"required",
        ]);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $ecolages = DB::table('ecolages')->orderByDesc('id')->get();
        $payment = new payment();
        $payment->mois = $req->input('mois');
        $payment->id_ecolages = $req->input('id_ecolages');
        $payment->id_etudiants = $req->input('id_etudiants');
        $payment->save();
        return redirect()->Route('listepayment', compact('ecolages', 'etudiant'));
    }
    public function modpayments(Request $req){
        $this->validate($req,[
            "id" => "required",
            "mois" => "required",
            "id_ecolages"=>"required",
            "id_etudiants"=>"required",
        ]);
        $id=$req->input('id');
        // $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        // $ecolages = DB::table('ecolages')->orderByDesc('id')->get();
        $payment = payment::find($id);
        
        $payment->mois = $req->input('mois');
        $payment->id_ecolages = $req->input('id_ecolages');
        $payment->id_etudiants = $req->input('id_etudiants');
        $payment->update();
        return redirect()->Route('listepayment');
    }
    public function listepayment(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.payment.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
       
        
    }
    public function ajoutpayment(){
        $etudiants = DB::table('etudiants')->orderByDesc('id')->get();
        $ecolages = DB::table('ecolages')->orderByDesc('id')->get();
        return view('admin.page.payment.ajout', compact('etudiants','ecolages'));
    }
    public function suprimmerpayment(string $id){
        $suprpayment = payment::findOrFail($id);
        
        $suprpayment->delete();

        return redirect ()->Route('listepayment')->with('success', 'suprimer avec succées');
    }
    public function modifierpayment($id){
        $payments = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->where('payments.id',$id)->first();
        $ecolages = DB::table('ecolages')->where('ecolages.id',$payments->id_ecolages)->get();
        $etudiants = DB::table('etudiants')->where('etudiants.id',$payments->id_etudiants)->get();
        // $payments = payment::find($id);
        return view('admin.page.payment.modifier', compact('payments','ecolages','etudiants'));
    }

/*contact*/
    public function ajoutcontacts(Request $req){
        $this->validate($req,[
            "nom" => "required",
            "email"=>"required",
            "description"=>"required",
        ]);
        $contact = new contact();
        $contact->nom = $req->input('nom');
        $contact->email = $req->input('email');
        $contact->description = $req->input('description');
        $contact->save();
        return redirect()->Route('home');
    }
    public function listecontact(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.contact.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
       
        
    }
    public function ajoutcontact(){
        return view('user.page.contact.contact');
    }
    public function suprimmercontact(string $id){
        $suprcontact = contact::findOrFail($id);
        $suprcontact->delete();
        return redirect ()->Route('listecontact')->with('success', 'suprimer avec succées');
    }
/* reservation */
    public function suprimmerreservation(string $id){
        $suprreservation = reservation::findOrFail($id);
        $suprreservation->delete();
        return redirect ()->Route('listereservation')->with('success', 'suprimer avec succées');
    }
    public function listereservation(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.reservation.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
       
    }
    public function ajoutreservations(Request $req, $id){

        $reservation = new reservation();
        $article = DB::table('articles')->where('id',$id)->first();
        
        // $article = article::find($id); Io less ilay eloquebt
        $reservation->id_users = Session::get("client")->id;

        $reservation->id_articles = $article->id;
        $reservation->save();
        return back();
        
    }

/*commentaire*/
    public function ajoutcommentaires(Request $req, $id){
        $this->validate($req,[
            "commentaire" => "required",
        ]);
        
        $commentaire = new commentaire();
        
        $commentaire->commentaire = $req->input('commentaire');
        $article = DB::table('articles')->where('id',$id)->first();
        $commentaire->id_users = Session::get("client")->id;
        $commentaire->id_articles = $article->id;
        $commentaire->save();
        return back()->with('success', 'commentaire bien envoyer');
    }
    public function listecommentaire(){
        $reservation = DB::table('reservations')->Join('articles','reservations.id_articles','=','articles.id')->Join('users','reservations.id_users','=','users.id')->get();
        $nbreser = count($reservation);
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $nbmat = count($matiere);
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $nbann = count($annonce);
        $article = DB::table('articles')->orderBy('id')->paginate(4);
        $nbArt = count($article);
        $commentaire = DB::table('commentaires')->Join('articles','commentaires.id_articles','=','articles.id')->Join('users','commentaires.id_users','=','users.id')->get();
        $nbComm = count($commentaire);
        $client = DB::table('users')->orderBy('id')->get();
        $user = DB::table('users')->orderBy('id')->get();
        $nbClt = count($client);
        $nbuser = count($user);
        $contact = DB::table('contacts')->orderBy('id')->get();
        $nbcont = count($contact);
        $formation = DB::table('formations')->orderBy('id')->get();
        $nbfor = count($formation);
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        $payment = DB::table('payments')->Join('etudiants','payments.id_etudiants','=','etudiants.id')->Join('ecolages','payments.id_ecolages','=','ecolages.id')->get();
        $nbpay = count($payment);
        $nbpers = count($personnel);
        $etudiant = DB::table('etudiants')->orderByDesc('id')->get();
        $nbetu = count($etudiant);
        $travaille = DB::table('travailles')->orderByDesc('id')->get();
        $nbtrav = count($travaille);
        $ecolage = DB::table('ecolages')->Join('matieres','ecolages.id_matieres','=','matieres.id')->get();
        $nbecol = count($ecolage);
        return view('admin.page.commentaire.liste', compact('annonce','article','contact','formation','personnel','client','matiere','payment','nbClt','nbComm','commentaire','reservation','nbreser','nbcont','nbpers','nbArt','user','nbann','nbpay','nbfor','nbmat','etudiant','travaille','ecolage','nbetu', 'nbtrav', 'nbecol'));
        
    }
    public function suprimmercommentaire(string $id){
        $suprcommentaire = reservation::findOrFail($id);
        $suprcommentaire->delete();
        return redirect ()->Route('listecommentaire')->with('success', 'suprimer avec succées');
    }
/*configuration*/
/*infos*/
    public function modinfos(Request $req){
        $this->validate($req, [
            "id" => "required",
            "email" => "required",
            "Adresse" => "required",
            "numero" => "required",
            "site" => "required",
        ]);
        $id=$req->input('id');
        $info = info::find($id);
        $info->email = $req->input('email');
        $info->Adresse = $req->input('Adresse');
        $info->numero = $req->input('numero');
        $info->site = $req->input('site');
        $info->update();

        return redirect()->Route('listeinfo');
    }

    public function ajoutinfos(Request $req){
        $this->validate($req, [
            "email" => "required",
            "Adresse" => "required",
            "numero" => "required",
            "site" => "required",
        ]);
        $info = new info();
        $info->email = $req->input('email');
        $info->Adresse = $req->input('Adresse');
        $info->numero = $req->input('numero');
        $info->site = $req->input('site');
        $info->save();

        return redirect()->Route('listeinfo');

    }
    public function listeinfo(){
        $info = DB::table('infos')->orderByDesc('id')->get();
        return view('admin.page.info.liste', compact('info'));
    }
    public function ajoutinfo(){
        return view('admin.page.info.ajout');
    }
    public function suprimmerinfo(string $id){
        $suprinfo = info::findOrFail($id);
        $suprinfo->delete();
        return redirect ()->Route('listeinfo')->with('success', 'suprimer avec succées');
    }
    public function modifierinfo($id){
        $info = DB::table('infos')->find($id);
        return view('admin.page.info.modifie', compact('info'));
    }
/*fonction recherche */
    // public function recherche(Request $req){
    //     $this->validate($req, [
    //         "keyword" => "required",
    //         "article" => "required",
    //     ]);
    //     $keyword = $req->input("keyword");
    //     $article = $req->input("article");
        

    //     $query = Artcle::query();

    //     if($keyword){
    //         $query->where('titre', 'like', "%$keyword%")
    //         ->orwhere('description', 'like', "%$keyword%")
    //         ->orwhere('datecreation', 'like', "%$keyword%");
    //     }
    //     if ($article != "articles"){
    //         $query->where('articles_id', $article);
    //     }
    //     $result = $query->get();
    //     $nbart = count($result);

    //     // return view('')

    // }
}