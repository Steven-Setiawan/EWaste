<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm" style="background-color: #4e73df; color: white;">
            <div class="card-body d-flex align-items-center">
                <i class="bx bx-user bx-lg mr-4" style="font-size: 2rem; margin-right: 1.2rem"></i>
                <div>
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Total : {{ $userCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm" style="background-color: #1cc88a; color: white;">
            <div class="card-body d-flex align-items-center">
                <i class="bx bx-buildings bx-lg mr-4" style="font-size: 2rem; margin-right: 1.2rem"></i>
                <div>
                    <h5 class="card-title">Collection Centers</h5>
                    <p class="card-text">Total : {{ $collectionCenterCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm" style="background-color: #e74a3b; color: white;">
            <div class="card-body d-flex align-items-center">
                <i class="bx bx-recycle bx-lg mr-4" style="font-size: 2rem; margin-right: 1.2rem"></i>
                <div>
                    <h5 class="card-title">Ewastes</h5>
                    <p class="card-text">Total : {{ $ewasteCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm" style="background-color: #f6c23e; color: white;">
            <div class="card-body d-flex align-items-center">
                <i class="bx bx-list-ul bx-lg mr-4" style="font-size: 2rem; margin-right: 1.2rem"></i>
                <div>
                    <h5 class="card-title">Item Types</h5>
                    <p class="card-text">Total : {{ $itemTypeCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm" style="background-color: #36b9cc; color: white;">
            <div class="card-body d-flex align-items-center">
                <i class="bx bx-world bx-lg mr-4" style="font-size: 2rem; margin-right: 1.2rem"></i>
                <div>
                    <h5 class="card-title">Cities</h5>
                    <p class="card-text">Total : {{ $cityCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
