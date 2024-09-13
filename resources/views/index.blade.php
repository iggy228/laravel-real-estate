<x-layout>
    <div class="container-fluid">
        <div class="main-page row">
            <main class="col-12 col-xl-8">
                <x-nav-bar />
                <!-- Map section on smaller screen than 1200px -->
                <img class="interactive-map interactive-map-full d-block d-xl-none rounded"
                    src="{{ asset('assets/images/map.png') }}" alt="interactive map">

                <div class="content row">
                    <!-- Filters menu -->
                    <x-filter-menu />

                    <section class="result-list col-12 col-md-7 col-lg-8">
                        <div class="d-flex justify-content-between mb-3">
                            <h4>Showing {{ count($realEstates) }} search results</h4>
                            <select class="form-select w-auto sort-select" name="sort" id="sort">
                                <option value="created-at-asc">Newest</option>
                                <option value="created-at-desc">Oldest</option>
                            </select>
                        </div>
                        <div class="row g-2 real-estate-grid">
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
    </div>
</x-layout>
