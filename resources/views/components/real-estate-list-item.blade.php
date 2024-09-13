<div class="col-12 col-lg-6 px-1">
    <div class="card">
        <img class="card-image" src="{{ $realEstate->image_url }}" loading="lazy">
        <div class="card-body">
            <h6>${{ number_format($realEstate->price) }}</h6>
            <p>{{ $realEstate->address }}</p>
            <div class="d-flex real-estate-card-info">
                <span><i class="fa-solid fa-bath"></i> {{ $realEstate->bathroom_count }}</span>
                <span><i class="fa-solid fa-bed"></i> {{ $realEstate->bedroom_count }}</span>
                <span><i class="fa-solid fa-expand"></i> {{ $realEstate->size }}<sup>2</sup>ft</span>
            </div>
        </div>
    </div>
</div>
