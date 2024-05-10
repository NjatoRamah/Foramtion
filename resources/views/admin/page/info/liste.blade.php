@extends('admin.page.liste')
@section('liste')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive col-lg-12 col-xs-12">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #36b9cc;">
                        <tr>
                            <th>email</th>
                            <th>adresse</th>
                            <th>numero</th>
                            <th>site</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #36b9cc;">
                         <tr>
                            <th>email</th>
                            <th>adresse</th>
                            <th>numero</th>
                            <th>site</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($info as $infos)
                            
                            <tr class="tr"> 
                                <td> {{ $infos->email }} </td>
                                <td> {{ $infos->Adresse }} </td>
                                <th>{{ $infos->numero }}</th>
                                <th>{{ $infos->site }}</th>
                                <td><a href="{{ url('modifierinfos/'.$infos->id) }}" class="nav-link"  >♻</a></td>
                                <td>
                                    <form action="{{ url('suprimmerinfos/'.$infos->id) }}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('Delete')">
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