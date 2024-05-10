@extends('admin.page.liste')
@section('liste')
    

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>prix</th>
                            <th>date entrée</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>detail</th>
                            <th>Modifier</th>
                            <th>Suprimmer</th>
                        
                            
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>prix</th>
                            <th>date entrée</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>detail</th>
                            <th>Modifier</th>
                            <th>Suprimmer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($listeannonce as $annonce)
                        
                            <tr class="tr">
                                
                                <td> {{ $annonce->id }} </td>
                                <td> {{ $annonce->titre }} </td>
                                <td> {{ $annonce->prix }} </td>
                                <td> {{ $annonce->dateentree }} </td>
                                <td> {{ $annonce->description }} </td>
                                <td><img src="{{ asset('storage/images/'.$annonce->image) }}" alt="" width = "40px" height = "40px" style="padding-top:10px;margin-left:10px;"></td>
                                <td><a href="{{ url('detailannonce/'.$annonce->id) }}">detail</a></td>
                                <td><a href="{{ url('modifierannonce/'.$annonce->id) }}" class="nav-link"  >♻</a></td>
                                <td>
                                    <form action="{{ url('suprimmerannonce/'.$annonce->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
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