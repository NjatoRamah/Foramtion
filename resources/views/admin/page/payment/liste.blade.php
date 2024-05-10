@extends('admin.page.liste')
@section('liste')
@include('admin.page.payment.chart')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>Mois</th>
                            <th>Ecolages</th>
                            <th>Matricule</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                            
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                         <tr>
                            <th>Mois</th>
                            <th>Ecolages</th>
                            <th>Matricule</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach ($payment as $payments)
                            <tr class="tr">
                                <td> {{ $payments->mois }} </td> 
                                <td> {{ $payments->prix }} </td>
                                <td> {{ $payments->matricule }} </td>
                                <td><a href="{{ url('modifierpayment/'.$payments->id) }}" class="nav-link"  >♻</a></td>
                                <td>
                                    <a href="{{ route('suprimmerpayment',['id'=>$payments->id]) }}" class="nav-link" onsubmit="return confirm('Delete')">❌</a>
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