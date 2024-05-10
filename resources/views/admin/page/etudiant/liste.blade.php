
@extends('admin.page.liste');<br>
@section('liste')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>Nom et prenom</th>
                            <th>adresse</th>
                            <th>Sexe</th>
                            <th>contact</th>
                            <th>Image</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                        <tr>
                            <th>Nom et prenom</th>
                            <th>adresse</th>
                            <th>Sexe</th>
                            <th>contact</th>
                            <th>Image</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($etudiant as $etudiant)
                            
                            <tr class="tr">
                                
                                <td>{{ $etudiant->nom }}{{ $etudiant->prenom }}</td>
                                <td>{{ $etudiant->adresse }}</td>
                                <td>{{ $etudiant->sexe }}</td>
                                <td>{{ $etudiant->contact }}</td>
                                <td><img src="{{ asset('storage/pdp/'.$etudiant->pdp) }}" alt="" width = "40px" height = "40px" style="padding-top:10px;margin-left:10px;"></td>
                                
                                <td><a href="{{ url('modifieretudiant/'.$etudiant->id) }}" class="nav-link"  >♻</a></td>
                                <td>
                                    <form action="{{ url('suprimmeretudiant/'.$etudiant->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
                                        @csrf    
                                        <button>❌</button>
                                    </form>
                                </td>
                                
                            </tr>
                       
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection