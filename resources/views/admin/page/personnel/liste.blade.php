
@extends('admin.page.liste');<br>
@section('liste')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>Nom et Prenom</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Sexe</th>
                            <th>Poste</th>
                            <th>Image</th>
                            <th>Voir plus</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                        <tr>
                            <th>Nom et Prenom</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Sexe</th>
                            <th>Poste</th>
                            <th>Image</th>
                            <th>Voir plus</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($personnel as $personnels)
                        {{-- @dd($personnels) --}}
                            
                            <tr class="tr">
                                
                                <td>{{ $personnels->nom }} {{ $personnels->prenom }}</td>
                                <td>{{ $personnels->email }}</td>
                                <td>{{ $personnels->contact }}</td>
                                <td>{{ $personnels->sexe }}</td>
                                <td>{{ $personnels->poste }}</td>
                                <td><img src="{{ asset('storage/pdp/'.$personnels->pdp) }}" alt="" width = "40px" height = "40px" style="padding-top:10px;margin-left:10px;"></td>
                                <td><a href="{{ url('detailpersonnel/'.$personnels->id) }}" class="nav-link"  > <i class="fa fa-plus btn btn-primary"></i> </a></td>
                                <td><a href="{{ url('modifierpersonnel/'.$personnels->id) }}" class="nav-link"  >♻</a></td>
                                <td>
                                    <form action="{{ url('suprimmerpersonnel/'.$personnels->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
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