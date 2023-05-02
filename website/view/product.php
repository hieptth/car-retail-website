<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Auto-complete Search box</h4>
                </div>
                <div class="card-body">
                    <form method="POST" class="form-inline">
                        <input type="text" class="form-control form-control-lg w-75" name="search_box"
                        onkeyup="load_data(this.value)" placeholder="Type here ...">
                        <span id="search_result"></span>
                        <button type="submit" id="btn_search" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/js/product.js"></script>