<div class="container-fluid py-2">
    <div class="d-flex-row col-lg-10 m-auto">
        <h1>Search</h1>
    </div>
    <div class="d-flex-row">
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

        <div class="col-lg-10 m-auto">
            <form class="form-inline" action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg w-75 rounded-0" name="search_box" onkeyup="load_data(this.value)" placeholder="Type here ...">
                    <button type="submit" id="btn_search" class="btn btn-secondary w-25 rounded-0">Search</button>
                    <span id="search_result" class="w-75"></span>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="/js/product.js"></script>
<script>
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
</script>