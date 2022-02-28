<form action="?" method="get" class="form-inline">
    <div class="input-group ml-auto ">
        <input class="form-control" name="search" type="text" placeholder="Pencarian..."
            value="<?= request()->search ?>">

        <div class="input-group-append">
            <button type="submit" class="btn btn-outline-secondary">Cari</button>
        </div>
    </div>
</form>
