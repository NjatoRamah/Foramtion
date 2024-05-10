
<div class="row">

    <div class="col-md-8 col-xl-8 col-lg-6">
                
        <div class="card-body">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statistique des payment ecolages</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    <hr>
                    statistique payments ecolages
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="col-md-4 col-xl-4 col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Nombre des étudiant a chaque formation</h6>
            </div>
            <div class="car-body">
                <div class="chart-area">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
            
        </div>
    </div>  --}}
</div>

  

@foreach ($ecolage as $item)
<input type="hidden" name="" value="{{ $item->prix }}" class="ecolage">
<input type="hidden" name="" value="{{ $item->matiere }}" class="mois">

@endforeach
<script>
    let ecolage = document.querySelectorAll(".ecolage")
    let data = []
    let mois = document.querySelectorAll(".mois")
    let label = []
    for (let i = 0; i < ecolage.length; i++) {
        data.push(ecolage[i].value)
        
    }
    for (let j = 0; j < mois.length; j++) {
        label.push(mois[j].value);
        
    }
</script>
<script src="{{ asset('admin/js/chart.js/Chart.bundle.js') }}"></script>
<script src="{{ asset('admin/js/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/chart.js/Chart.js') }}"></script>
<script src="{{ asset('admin/js/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
