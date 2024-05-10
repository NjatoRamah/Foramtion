<div class="card-body">
    <div class="chart-area">
        <canvas id="myBarChart"></canvas>
    </div>
    <hr>
    statistique des nombres d'etudiants
</div>
@foreach ($personnel as $item)
    <input type="hidden" name="" value="{{ $item->poste }}" class="personnel">
@endforeach


<script src="{{ asset('admin/js/demo/chart-bar-demo.js') }}"></script>
<script>

</script>