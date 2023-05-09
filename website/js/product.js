handlePagination();

// prevent page from reloading on submit
document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("sForm").addEventListener("submit", function (event) {
        event.preventDefault() // Cancel the default action

        var query = document.getElementsByName('search_box')[0].value;

        handlePagination(query);
    });
});

function handlePagination(query = '', pageNumber = 1) {

    console.log('Query', query, 'Page', pageNumber);

    var form_data = new FormData();

    form_data.append("query", query);

    form_data.append("page", pageNumber);

    var ajax_req = new XMLHttpRequest();

    ajax_req.open("POST", "process_product.php");

    ajax_req.send(form_data);

    ajax_req.onreadystatechange = function () {
        if (ajax_req.readyState == 4 && ajax_req.status == 200) {

            var response = ajax_req.responseText;

            parser = new DOMParser();

            xmlDoc = parser.parseFromString(response, "text/xml");

            var html = '';

            if (xmlDoc.getElementsByTagName("Product").length !== 0) {

                var hint = xmlDoc.getElementsByTagName("Product");

                for (var i = 0; i < hint.length; i++) {
                    if (i.length !== 0) {

                        var name = hint[i].childNodes[0].nodeValue;

                        var price = hint[i].childNodes[1].childNodes[0].nodeValue;

                        html += '<div class="item text-center col-lg-3 col-md-4 col-12">'
                            + '<img class="img-fluid mb-3" style="width: min(300px,80%);" src="/assets/img/sample.png" alt="Sample">'
                            + '<div class="star">'
                            + '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>'
                            + '</div>'
                            + '<h5 class="p-name">' + name + '</h5>'
                            + '<h4 class="p-price">$' + price + '</h4>'
                            + '<button class="buy-btn">Buy now</button></div>';
                    }
                }
            }
            else {
                html += "<h2>No data found.</h2>";
            }

            document.getElementById("product-showcase").innerHTML = html;

            // document.getElementById('pagination-link').innerHTML = xmlDoc.getElementsByTagName('Pagination')[0].childNodes[0].nodeValue;

            console.log('Pagination', xmlDoc.getElementsByTagName('Pagination'));
        }
    }
}


function getSearchText(event) {

    var str = event.textContent;

    document.getElementsByName("search_box")[0].value = str;

    document.getElementById("search_result").innerHTML = "";
}


function handleSearch(query) {

    if (query.length > 0) {

        var form_data = new FormData();

        form_data.append("query", query);

        var ajax_req = new XMLHttpRequest();

        ajax_req.open("POST", "process_search.php");

        ajax_req.send(form_data);

        ajax_req.onreadystatechange = function () {
            if (ajax_req.readyState == 4 && ajax_req.status == 200) {

                var response = ajax_req.responseText;

                parser = new DOMParser();

                xmlDoc = parser.parseFromString(response, "text/xml");

                var html = '<div class="list-group">';

                if (xmlDoc.getElementsByTagName("Product").length !== 0) {

                    var hint = xmlDoc.getElementsByTagName("Product");

                    for (var i = 0; i < hint.length; i++) {
                        if (i.length !== 0) {
                            var suggestion = hint[i].childNodes[0].nodeValue;
                            html += '<a href="#" class="list-group-item list-group-item-action rounded-0" onclick="getSearchText(this)">' +
                                suggestion + "</a>";
                        }
                    }
                } else {
                    html += '<a href="#" class="list-group-item list-group-item-action rounded-0 disabled">No Data Found</a>';
                }

                html += "</div>";

                document.getElementById("search_result").innerHTML = html;
            }
        };
    } else {
        document.getElementById("search_result").innerHTML = "";
    }
}

