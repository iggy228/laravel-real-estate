<x-layout>
    <div class="main-page row">
        <main class="col-12 col-xl-8">
            <x-nav-bar />
            <!-- Map section on smaller screen than 1200px -->
            <img class="interactive-map d-block d-xl-none rounded" src="{{ asset('assets/images/map.png') }}"
                alt="interactive map">

            <div class="content row">
                <!-- Filters menu -->
                <section class="filter-menu col-12 col-md-5 col-lg-4">
                    <div class="row justify-content-between filter-headline-row">
                        <h3 class="filter-headline">Filters</h3>
                        <button class="button reset-filter">
                            <span class="reset-text">Reset filters</span>
                            <span class="filter-count">5</span>
                        </button>
                    </div>
                    <form class="filter-form" action="">
                        <div class="column">
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
                        <div class="column">
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
                        <div class="column select-filters">
                            <div class="row justify-content-between gap-10">
                                <div class="w-100">
                                    <h3 class="subtitle">Min. Price</h3>
                                    <select name="min-price">
                                        <option value="any">Any</option>
                                        <option value="1000000">$1,000,000</option>
                                        <option value="1500000">$1,500,000</option>
                                        <option value="2500000">$2,500,000</option>
                                        <option value="5000000">$5,000,000</option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <h3 class="subtitle">Max. Price</h3>
                                    <select name="max-price">
                                        <option value="any">Any</option>
                                        <option value="1000000">$1,000,000</option>
                                        <option value="1500000">$1,500,000</option>
                                        <option value="2500000">$2,500,000</option>
                                        <option value="5000000">$5,000,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-between gap-10">
                                <div class="w-100">
                                    <h3 class="subtitle">Bedroom</h3>
                                    <select name="bedroom-count">
                                        <option value="any">Any</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <h3 class="subtitle">Bathroom</h3>
                                    <select name="bathroom-count">
                                        <option value="any">Any</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-between gap-10">
                                <div class="w-100">
                                    <h3 class="subtitle">Size (Min)</h3>
                                    <select name="min-size">
                                        <option value="any">Any</option>
                                        <option value="1000">1000 Sq.ft</option>
                                        <option value="2500">2500 Sq.ft</option>
                                        <option value="4000">4000 Sq.ft</option>
                                        <option value="5000">5000 Sq.ft</option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <h3 class="subtitle">Size (Max)</h3>
                                    <select name="max-size">
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
                        <div class="column">
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
                                <input type="checkbox" name="accessibility" value="grab-bars"
                                    id="grab-bars-checkbox">
                                <label for="grab-bars-checkbox">Grab Bars</label>
                            </span>
                            <span>
                                <input type="checkbox" name="accessibility" value="lower-counter-heights"
                                    id="lower-counter-heights-checkbox">
                                <label for="lower-counter-heights-checkbox">Lower counter heights</label>
                            </span>
                            <span>
                                <input type="checkbox" name="accessibility" value="spanish"
                                    id="spanish-accessibility-checkbox">
                                <label for="spanish-accessibility-checkbox">Spanish</label>
                            </span>
                        </div>
                    </form>
                </section>

                <section class="result-list col-12 col-md-7 col-lg-8">
                    <div class="row w-100 justify-content-between">
                        <h4>Showing 0 search results</h4>
                        <select name="sort" id="sort">
                            <option value="created-at-asc">Newest</option>
                            <option value="created-at-desc">Oldest</option>
                        </select>
                    </div>
                    <div class="real-estate-grid">
                        @foreach ($realEstates as $realEstate)
                            <x-real-estate-list-item :realEstate="$realEstate" />
                        @endforeach
                    </div>
                </section>
            </div>
        </main>
        <!-- Map section -->
        <div class="col-lg-4 pt-3 d-xl-block d-none">
            <img src="{{ asset('assets/images/map.png') }}" alt="interactive map"
                class="interactive-map rounded w-100 h-100">
        </div>
    </div>
</x-layout>
