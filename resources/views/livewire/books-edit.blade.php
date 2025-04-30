<div>
<div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="update({{$bookId}})">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" wire:model="title">
                                <p class="text-danger">@error('title'){{ $message }}@enderror</p>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" wire:model="author">
                                <p class="text-danger">@error('author'){{ $message }}@enderror</p>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" wire:model="description">
                                <p class="text-danger">@error('description'){{ $message }}@enderror</p>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="text" class="form-control" id="image" wire:model="image"> 
                                <img src="{{$image}}" style="width: 200px;" alt="">
                                <p class="text-danger">@error('image'){{ $message }}@enderror</p>   
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Submit
                                <span wire:loading class="spinner-border text-light" style="width: 15px; height: 15px;"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
