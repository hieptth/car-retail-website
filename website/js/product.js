function load_data(query) {

    document.getElementById('search_result').innerHTML = query;

    if (query.length > 0) {

        var form_data = new FormData();

        form_data.append('query', query);

        var ajax_req = new XMLHttpRequest();

        ajax_req.open('POST', 'process_data.php');

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
                            html += '<a href="#" class="list-group-item list-group-item-action rounded-0">'
                                + suggestion + '</a>';
                        }
                    }
                }
                else {
                    html += '<a href="#" class="list-group-item list-group-item-action rounded-0 disabled">No Data Found</a>';
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