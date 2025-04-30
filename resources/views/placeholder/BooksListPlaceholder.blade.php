<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="mb-3">
                    <input type="text" wire:model.live.debounce.500ms="search" placeholder="Search" class="form-control">
                </div>

                <div class="d-flex flex-wrap">
                @for ($i = 0; $i < 6; $i++)
                    <div class="placeholder-glow">
                        <div class="card-img-top bg-secondary placeholder" style="width: 200px; height: 250px;"></div>
                        <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                                <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                                <span class="placeholder col-7"></span>
                            </p>
                            <p class="card-text placeholder-glow">
                                <span class="placeholder col-10"></span>
                            </p>
                            <div>
                                <button class="btn btn-primary disabled placeholder col-5"></button>
                                <button class="btn btn-danger disabled placeholder col-5"></button>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

            </div>
        </div>
    </div>

</div>