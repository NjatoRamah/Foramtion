@extends('admin.page.liste')
@section('liste')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                         <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($about as $abouts)
                            
                            <tr class="tr"> 
                                <td> {{ $abouts->titre }} </td>
                                <td> {{ $abouts->description }} </td>
                                <td><a href="{{ url('modifierabout/'.$abouts->id) }}" class="nav-link"  >♻</a></td>
                                <td>
                                    <form action="{{ url('suprimmerabout/'.$abouts->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
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