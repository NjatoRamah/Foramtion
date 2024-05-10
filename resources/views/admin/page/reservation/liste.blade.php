
@extends('admin.page.liste');<br>
@section('liste')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            
                            <th>id_articles</th>
                            <th>id_users</th>
                            
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                        <tr>
                            
                            <th>id_articles</th>
                            <th>id_users</th>
                            <th>Suprimer</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($reservation as $commentaires)
                            
                            <tr class="tr">
                                
                                
                                <td>{{ $commentaires->id_articles }}</td>
                                <td>{{ $commentaires->nom }} <br> {{ $commentaires->email }}</td>
                                <td>
                                    <form action="{{ url('suprimmerreservation/'.$commentaires->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('voulez vous suprimmer')">
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