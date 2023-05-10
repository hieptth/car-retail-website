<div class="container-fluid my-5">
    <div class="d-flex flex-row col-11 m-auto pt-2">
        <h1>Looking for something?</h1>
    </div>
    <div class="d-flex flex-row">
        <!-- <div class="col-lg-2 m-auto ps-2">
            <div class="card" style="width: min(200px, 100%);">
                <div class="card-header">
                    <h3>Hot Deals</h3>
                </div>
                <div class="card-body">
                    <div id="deals">
                        <button type="button" class="btn btn-primary" onclick="loadDeal()">Click here</button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="col-11 m-auto">
            <form class="form-inline" action="" id="sForm" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg w-75 rounded-0" name="search_box" onkeyup="handleSearch(this.value)" placeholder="Type here ...">
                    <button type="submit" id="btn_search" class="btn w-25 rounded-0">Search</button>
                    <span id="search_result" class="w-75"></span>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-11 m-auto">
            <h2>Our Featured</h2>
            <hr class="mx-auto">
        </div>
    </div>
    <div class="row mx-auto container pb-5" id="product-showcase"></div>
    <div id="pagination-link"></div>
</div>


<script src="/js/product.js"></script>

<!-- <script>
    function loadDeal() {

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("deals").innerHTML = this.responseText;
            }
        };

        xhttp.open("GET", '\\assets\\data\\deal.txt', true);
        xhttp.send();
    }
</script> -->