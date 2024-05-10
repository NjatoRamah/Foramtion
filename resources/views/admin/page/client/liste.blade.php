
@extends('admin.page.liste');<br>
@section('liste')
<div class="col-md-8 col-xl-8 col-lg-12">
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Statistique des nombres des client</h6>
        </div>
        @include('admin.page.client.chart')
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Image</th>
                            
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Suprimer</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($user as $clients)
                            
                            <tr class="tr">
                                
                                <td>{{ $clients->nom }}</td>
                                <td>{{ $clients->email }}</td>
                                <td>{{ $clients->status }}</td>
                                <td><img src="{{ asset('storage/pdp/'.$clients->pdp) }}" alt="" width = "40px" height = "40px" style="padding-top:10px;margin-left:10px;"></td>
                                
                                
                                <td>
                                    <form action="{{ url('suprimmerclient/'.$clients->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
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