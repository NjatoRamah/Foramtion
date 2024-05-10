@extends('admin.page.liste')
@section('liste')
@include('admin.page.ecolage.chart')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>Prix</th>
                            <th>Matieres</th>
                            <th>Modifier</th>
                            <th>Suprimmer</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                         <tr>
                            <th>Prix</th>
                            <th>Matieres</th>
                            <th>Modifier</th>
                            <th>Suprimmer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($ecolage as $ecolages)
                            
                            <tr class="tr"> 
                                <td> {{ $ecolages->prix }} </td>
                                <td> {{ $ecolages->matiere }} </td>
                                <td><a href="{{ url('modifierecolage/'.$ecolages->id) }}" class="nav-link"  >♻</a></td>
                                <td>
                                    <a href="{{ Route('suprimmerecolage',['id'=>$ecolages->id]) }}" class="nav-link" onsubmit="return confirm('Delete')">❌</a>
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