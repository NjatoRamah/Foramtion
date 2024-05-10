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
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Date création</th>
                            <th>Modifier</th>
                            <th>Suprimmer</th>
                        
                            
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                        <tr>
                            <th>id</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Date création</th>
                            <th>Modifier</th>
                            <th>Suprimmer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($contact as $contacts)
                        
                            <tr class="tr">
                                
                                <td> {{ $contacts->id }} </td>
                                <td> {{ $contacts->nom }} </td>
                                <td> {{ $contacts->email }}</td>
                                <td> {{ $contacts->description }} </td>
                                <td> {{ $contacts->created_at }} </td>
                                
                                
                                <td><a href="{{ url('modifiercontact/'.$contacts->id) }}" class="nav-link"  >♻</a></td>
                               
                                <td>
                                    <form action="{{ url('suprimmercontact/'.$contacts->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
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