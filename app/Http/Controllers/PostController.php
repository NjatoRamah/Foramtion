<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, reservation, article, etudiant, matiere};
use Illuminate\Support\Facades\{DB,Hash,Mail};
use App\Mail\formationMail;

use Session;


class PostController extends Controller
{
/*******INSCRIPTION */
    public function inscrire(Request $req){
        $this->validate($req, [
            'nom'=> "required",
            "email" => "email|required|unique:users",
            "pdp" =>"required|image|mimes:jpeg,png,jpg,gif",
            "mdp"=>"required",
            "cmdp" => "required",
        ]);
        $pwd = $req->input('mdp');
        $pwdConf = $req->input('cmdp');
        $simpleUsers = new User();
        if ($req->hasFile('pdp')){
            $pdp = $req->file('pdp');
            $pdpname = time() . '.' . $pdp->getClientOriginalExtension();
            $pdp->storeAs('pdp', $pdpname, 'public');
        }
        if($pwd == $pwdConf){
            $simpleUsers->nom = $req->input('nom');
            $simpleUsers->email = $req->input('email');
            $simpleUsers->status = "user";
            $simpleUsers->pdp = $pdpname;
            $simpleUsers->mdp = bcrypt($req->input('mdp'));
            $simpleUsers->save();
            $error = 'vous êtes inscrit';
            return redirect()->Route('home')->with('error', $error);
        }else{
            $error = 'mot de passez non identique';
            return back()->with('error', $error);
        }
    }
/*******CONECTION */
    public function conecter(Request $req){
        $this->validate($req,[
            'email' => 'email|required',
            'mdp' => 'required|min:3',
        ]);
        

        $client = User::where('email', $req->input('email'))->first();
    //  dd($client->password);
        if($client){
            if(bcrypt($req->input('mdp') === $client->password)){
                Session::put('client', $client);
                if ($client->status === "user"){
                    return redirect()->Route('home');
                }
                else{
                    return redirect()->Route('dash');
                }
            }
            else{
                return back()->with('errors','votre mot de passe est incorrect');
            }
        } else {
            return back()->with('errors','votre email est incorrect');
        }
    }

/*****deconnection****/ 
     public function deconnexion(){
        Session::forget('client');
        return redirect()->Route('home');
    }
/*verification email*/
/*insertion etudiants*/
    public function insertionetudiants(Request $req){
        $this->validate($req, [
            "nom" => "required",
            "prenom" => "required",
            "contact" => "required",
            "sexe" => "required",
            "departement" => "required",
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
            $etudiant->sexe =$req->input('sexe');
            $etudiant->departement =$req->input('departement');
            $etudiant->pdp = $pdpname;
            $etudiant->adresse =$req->input('adresse');
            $etudiant->save();
            
            return redirect()->Route('home')->with('success', 'vous êtes bien inscrit');
        }
        public function insertetudiant(){
            $matieres = DB::table('matieres')->orderByDesc('id')->get();
            $info = DB::table('infos')->orderBy('id')->get();
            
            return view('user.page.contact.insertionetudiant',compact('matieres','info'));
        }

//send email
    public function formationMail(Request $req)
    {
        $this->validate($req,[
            "nom"=>"required",
            "email"=>"required | email",
            "sms7j" => "required",
        ]);

        $to_email = "oramahery@gmail.com";
        $title = 'Nouvel e-email';
        $content = 'ceci est de.'.$req->input('nom');
        $someso = $req->input("sms");
        Mail::to($to_email)->send(new formationMail($title, $content,$someso));

        return "Message envoyer avec succes";
    }
}

