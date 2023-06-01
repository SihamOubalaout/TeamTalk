@php
        use App\Models\Departement;

        $departements = Departement::all();

    @endphp
    <div class="container">
        <div class="row">
            @foreach($departements as $departement)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">{{ $departement->designation }}</div>
                        <div class="card-body">
                            <p>{{ $departement->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>