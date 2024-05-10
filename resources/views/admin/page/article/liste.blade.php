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
                            <th>Sous titre</th>
                            <th>prix</th>
                            <th>date entrée</th>
                            <th>jours</th>
                            <th>heures</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>Modifier</th>
                            <th>Detail</th>
                            <th>Suprimmer</th>
                        
                            
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>Sous titre</th>
                            <th>prix</th>
                            <th>date entrée</th>
                            <th>description</th>
                            <th>jours</th>
                            <th>heures</th>
                            <th>Image</th>
                            <th>Modifier</th>
                            <th>detail</th>
                            <th>Suprimmer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($article as $articles)
                        
                            <tr class="tr">
                                
                                <td> {{ $articles->id }} </td>
                                <td> {{ $articles->titre }} </td>
                                <td> {{ $articles->soustitre }}</td>
                                <td> {{ $articles->prix }} </td>
                                <td> {{ $articles->dateentree }} </td>
                                <td> {{ $articles->jours }} </td>
                                <td> {{ $articles->heures }} </td>
                                <td> {{ $articles->description }} </td>
                                <td><img src="{{ asset('storage/images/'.$articles->image) }}" alt="" width = "40px" height = "40px" style="padding-top:10px;margin-left:10px;"></td>
                                <td><a href="{{ url('modifierarticle/'.$articles->id) }}" class="nav-link"  >♻</a></td>
                                <td><a href="{{ url('detailarticle/'.$articles->id) }}" class="nav-link"  >detail</a></td>
                                <td>
                                    <form action="{{ url('suprimmerarticle/'.$articles->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
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