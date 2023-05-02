function load_data(query) {
    if (query.length > 0) {
        var form_data = new FormData();

        form_data.append('query', query);

        var ajax_req = new XMLHttpRequest();

        ajax_req.open('POST', 'process_data.php');

        ajax_req.send(form_data);

        ajax_req.onreadystatechange = function () {
            if (ajax_req.readyState == 4 && ajax_req.status == 200) {

                //var response = JSON.parse(ajax_req.responseText); // problem here
                var response = ajax_req.responseXML;

                var html = '<div class="list-group">';

                if (response.length > 2) {

                    var hint = xml.getElementsByTagName("id");

                    for (var i = 0; i < id.length; i++) {
                        var suggestion = id[i].Product_name;
                        html += '<a href="#" class="list-group-item list-group-item-action"'
                            + suggestion + '</a>';
                    }

                    // for (var i = 0; i < response.length; i++) {
                    //     html += '<a href="#" class="list-group-item list-group-item-action"'
                    //         + response[i].Product_name + '</a>';
                    // }
                }
                else {
                    html += '<a href="#" class="list-group-item list-group-item-action disabled">No Data Found</a>';
                }

                html += '</div>';

                document.getElementById('search_result').innerHTML = html;
            }
        }
    }
    else {
        document.getElementById('search_result').innerHTML = '';
    }
}