<div class="card">

    <div class="card-header bg-success">
        <h3 class="text-center"><i class="fas fa-layer-group"></i> Leads</h3>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $leads->count() }}</h5>
                    <span class="description-text">New {{ $leads->count() == 1 ? 'Lead' : 'Leads' }}</span>
                </div>

            </div>

            <div class="col-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $leads->count() }}</h5>
                    <span class="description-text">Active {{ $leads->count() == 1 ? 'Lead' : 'Leads' }}</span>
                </div>

            </div>

            <div class="col-4">
                <div class="description-block">
                    <h5 class="description-header">{{ $leads->count() }}</h5>
                    <span class="description-text">{{ $leads->count() == 1 ? 'City' : 'Cities' }}</span>
                </div>

            </div>

        </div>

    </div>
</div>