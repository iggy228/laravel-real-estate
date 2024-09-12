<section id="filterMenu" class="filter-menu col-12 col-md-5 col-lg-4 h-auto pb-2">
    <div class="d-flex justify-content-between align-items-baseline filter-headline-row ">
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
                <span>
                    <input type="checkbox" name="type" value="house" id="house-checkbox">
                    <label for="house-checkbox">House</label>
                </span>
                <span>
                    <input type="checkbox" name="type" value="apartment" id="apartment-checkbox">
                    <label for="apartment-checkbox">Apartment</label>
                </span>
                <span>
                    <input type="checkbox" name="type" value="room" id="room-checkbox">
                    <label for="room-checkbox">Room</label>
                </span>
                <span>
                    <input type="checkbox" name="type" value="townhall" id="townhall-checkbox">
                    <label for="townhall-checkbox">Townhall</label>
                </span>
                <span>
                    <input type="checkbox" name="type" value="parking" id="parking-checkbox">
                    <label for="parking-checkbox">Parking</label>
                </span>
            </div>
            <div class="d-flex flex-column">
                <h3 class="subtitle">Style of Home</h3>
                <span>
                    <input type="checkbox" name="style" value="a-frame" id="a-frame-checkbox">
                    <label for="a-frame-checkbox">A-Frame</label>
                </span>
                <span>
                    <input type="checkbox" name="style" value="bungalow" id="bungalow-checkbox">
                    <label for="bungalow-checkbox">Bungalow</label>
                </span>
                <span>
                    <input type="checkbox" name="style" value="cottage" id="cottage-checkbox">
                    <label for="cottage-checkbox">Cottage</label>
                </span>
                <span>
                    <input type="checkbox" name="style" value="dome" id="dome-checkbox">
                    <label for="dome-checkbox">Dome</label>
                </span>
                <span>
                    <input type="checkbox" name="style" value="spanish" id="spanish-checkbox">
                    <label for="spanish-checkbox">Spanish</label>
                </span>
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
                <span>
                    <input type="checkbox" name="accessibility" value="extra-wide-doorways"
                        id="extra-wide-doorways-checkbox">
                    <label for="extra-wide-doorways-checkbox">Extra-wide Doorways</label>
                </span>
                <span>
                    <input type="checkbox" name="accessibility" value="ramps" id="ramps-checkbox">
                    <label for="ramps-checkbox">Ramps</label>
                </span>
                <span>
                    <input type="checkbox" name="accessibility" value="grab-bars" id="grab-bars-checkbox">
                    <label for="grab-bars-checkbox">Grab Bars</label>
                </span>
                <span>
                    <input type="checkbox" name="accessibility" value="lower-counter-heights"
                        id="lower-counter-heights-checkbox">
                    <label for="lower-counter-heights-checkbox">Lower counter heights</label>
                </span>
                <span>
                    <input type="checkbox" name="accessibility" value="spanish" id="spanish-accessibility-checkbox">
                    <label for="spanish-accessibility-checkbox">Spanish</label>
                </span>
            </div>
        </form>
    </div>
</section>
