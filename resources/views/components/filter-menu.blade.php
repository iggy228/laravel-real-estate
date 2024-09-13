<section id="filterMenu" class="filter-menu col-12 col-md-5 col-lg-4 h-auto pb-2">
    <div class="d-flex justify-content-between align-items-baseline filter-headline-row">
        <h3 id="filterMenuHeader" class="filter-headline flex-fill" data-bs-toggle="collapse"
            data-bs-target="#filterCollapse" aria-expanded="true" aria-controls="filterCollapse">
            Filters
        </h3>
        <div class="d-flex align-items-center">
            <button id="resetFilterBtn" class="btn d-flex align-items-baseline">
                <span class="reset-text">Reset filters</span>
                <div class="filter-count-box rounded-circle">
                    5
                </div>
            </button>
            <i id="collapseIndicator" class="fa-solid fa-chevron-down collapse-indicator d-md-none ms-1"
                data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="true"
                aria-controls="filterCollapse"></i>
        </div>
    </div>
    <div id="filterCollapse" class="accordion-collapse collapse show" data-bs-parent="#filterMenu">
        <form class="filter-form px-2" action="">
            <div class="d-flex flex-column">
                <h3 class="subtitle">Property type</h3>
                <x-checkbox-input name="type" label="House" value="house" id="house-checkbox" />
                <x-checkbox-input name="type" label="Apartment" value="apartment" id="apartment-checkbox" />
                <x-checkbox-input name="type" label="Room" value="room" id="room-checkbox" />
                <x-checkbox-input name="type" label="Townhall" value="townhall" id="townhall-checkbox" />
                <x-checkbox-input name="type" label="Parking" value="parking" id="parking-checkbox" />
            </div>
            <div class="d-flex flex-column">
                <h3 class="subtitle">Style of Home</h3>
                <x-checkbox-input name="style" label="A-Frame" value="a-frame" id="a-frame-checkbox" />
                <x-checkbox-input name="style" label="Bungalow" value="bungalow" id="bungalow-checkbox" />
                <x-checkbox-input name="style" label="Cottage" value="cottage" id="cottage-checkbox" />
                <x-checkbox-input name="style" label="Dome" value="dome" id="dome-checkbox" />
                <x-checkbox-input name="style" label="Spanish" value="spanish" id="spanish-checkbox" />
            </div>
            {{-- Select filters --}}
            <div class="d-flex flex-column select-filters">
                <div class="d-flex justify-content-between gap-10">
                    <div class="w-100">
                        <h3 class="subtitle">Min. Price</h3>
                        <select class="form-select" name="min-price">
                            <option value="any">Any</option>
                            <option value="1000000">$1,000,000</option>
                            <option value="1500000">$1,500,000</option>
                            <option value="2500000">$2,500,000</option>
                            <option value="5000000">$5,000,000</option>
                        </select>
                    </div>
                    <div class="w-100">
                        <h3 class="subtitle">Max. Price</h3>
                        <select class="form-select" name="max-price">
                            <option value="any">Any</option>
                            <option value="1000000">$1,000,000</option>
                            <option value="1500000">$1,500,000</option>
                            <option value="2500000">$2,500,000</option>
                            <option value="5000000">$5,000,000</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-between gap-10">
                    <div class="w-100">
                        <h3 class="subtitle">Bedroom</h3>
                        <select class="form-select" name="bedroom-count">
                            <option value="any">Any</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="w-100">
                        <h3 class="subtitle">Bathroom</h3>
                        <select class="form-select" name="bathroom-count">
                            <option value="any">Any</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-between gap-10">
                    <div class="w-100">
                        <h3 class="subtitle">Size (Min)</h3>
                        <select class="form-select" name="min-size">
                            <option value="any">Any</option>
                            <option value="1000">1000 Sq.ft</option>
                            <option value="2500">2500 Sq.ft</option>
                            <option value="4000">4000 Sq.ft</option>
                            <option value="5000">5000 Sq.ft</option>
                        </select>
                    </div>
                    <div class="w-100">
                        <h3 class="subtitle">Size (Max)</h3>
                        <select class="form-select" name="max-size">
                            <option value="any">Any</option>
                            <option value="1000">1000 Sq.ft</option>
                            <option value="2500">2500 Sq.ft</option>
                            <option value="4000">4000 Sq.ft</option>
                            <option value="5000">5000 Sq.ft</option>
                        </select>
                    </div>
                </div>

            </div>
            {{-- Accessibilty checkboxes --}}
            <div class="d-flex flex-column">
                <h3 class="subtitle">Accessibility Features</h3>
                <x-checkbox-input name="accessibility" label="Extra-wide doorways" value="extra-wide-doorways"
                    id="extra-wide-doorways-checkbox" />
                <x-checkbox-input name="accessibility" label="Ramps" value="ramps" id="ramps-checkbox" />
                <x-checkbox-input name="accessibility" label="Grab bars" value="grab-bars"
                    id="grab-bars-checkbox" />
                <x-checkbox-input name="accessibility" label="Lower counter heights" value="lower-counter-heights"
                    id="lower-counter-heights-checkbox" />
                <x-checkbox-input name="accessibility" label="Spanish" value="spanish"
                    id="spanish-accessibility-checkbox" />
            </div>
        </form>

        <hr class="d-md-none">
    </div>
</section>
