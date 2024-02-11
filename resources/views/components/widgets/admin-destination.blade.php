<div class="card">

    <div class="card-header bg-info">
        <h3 class="text-center"><i class="nav-icon fas fa-map-marked-alt"></i> Destinations</h3>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $destinations->where('type', 'country')->count() }}</h5>
                    <span class="description-text">{{ $destinations->where('type', 'country')->count() == 1 ? 'Country' : 'Countries' }}</span>
                </div>

            </div>

            <div class="col-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $destinations->where('type', 'state')->count() }}</h5>
                    <span class="description-text">{{ $destinations->where('type', 'state')->count() == 1 ? 'State' : 'States' }}</span>
                </div>

            </div>

            <div class="col-4">
                <div class="description-block">
                    <h5 class="description-header">{{ $destinations->where('type', 'city')->count() }}</h5>
                    <span class="description-text">{{ $destinations->where('type', 'city')->count() == 1 ? 'City' : 'Cities' }}</span>
                </div>

            </div>

        </div>

    </div>
</div>