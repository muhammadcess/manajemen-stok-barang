<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit="create" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Name Category</label>
                    <input type="text" wire:model="name" class="form-control" name="example-text-input" placeholder="Input placeholder">
                  </div>
                  <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
