@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Ajouter un nouveaux poste</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('ajoutpayments') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <div class="input-field">
                    <label for="">Mois</label>
                    <select name="mois" id="" class="form-control">
                        <option value="janvier">janvier</option>
                        <option value="fevrier">fevrier</option>
                        <option value="mars">mars</option>
                        <option value="avril">avril</option>
                        <option value="mais">mais</option>
                        <option value="juin">juin</option>
                        <option value="août">août</option>
                        <option value="septembre">septembre</option>
                        <option value="octobre">octobre</option>
                        <option value="novembre">novembre</option>
                        <option value="decembre">decembre</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <div class="input-field">
                    <label for="">Ecolage</label>
                    <select name="id_ecolages" id="" class="form-control">
                        @foreach ($ecolages as $ecolage)
                         <option value="{{ $ecolage->id }}">{{ $ecolage->prix }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <div class="input-field">
                    <label for="">Etudiant</label>
                    <select name="id_etudiants" id="" class="form-control">
                        @foreach ($etudiants as $etudiant)
                            <option value="{{ $etudiant->id }}">{{ $etudiant->matricule }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="poster!" name="ajoutpayment" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
{{-- <script src="https://www.paypal.com/sdk/js?client-id=AWQptJMfI6QdthzVLDG0Dc9xaU7cTP3eELM7kJA19WQTe6ZDXPrqD8bNRS_1Hl_hkx23rB3RNvCRhPOo" ></script>
        <script>
        paypal.Buttons(
            {
                    style: {
                size: 'small',
                color: 'gold',
                shape: 'pill',
                },
                    // Miketrika ny paiement
                    payment: function (data, actions) {
                        return actions.payment.create({
                            transactions: [{
                                amount: {
                                    total:'{{$ecolage->prix}}',
                                    currency: 'USD'
                                }
                            }]
                    });
                    },
                    // Miexecuter ny paiement
                    onAuthorize: function (data, actions) {
                        return actions.payment.execute()
                        .then(function () {
                            // Mampiseho ny mess de confirm anle mpividy
                            //window.alert('Merci pour votre achat!');
                    
                            // Mirediriger ny page de paiement
                            window.location = "{{route('succes')}}";
                        })
                        .catch(function (error) {
                            window.location = "{{route('paye')}}";
                        });
                    }
            }


        ).render("#paypal-boutons");
        </script> --}}

@endsection