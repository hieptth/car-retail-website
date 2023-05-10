<header class="masthead">
    <div class="d-flex d-flex-grow-1 justify-content-center">
        <div class="text-center">
            <h1 class="mx-auto my-0 text-uppercase">CAR DEALER</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">You need. We have!</h2>
        </div>
    </div>
</header>

<div class="container-fluid my-3">
    <div class="row pt-5">
        <div class="col-11 m-auto">
            <h1>Contact Us</h1>
            <hr class="mx-auto">
        </div>
    </div>
    <div class="d-flex flex-row col-11 mx-auto container pb-4">
        <div class="d-flex flex-column col-4 justify-content-center m-auto">
            <h3>Looking for your place?</h3>
            <small class="pb-2">Type in The coordinates and we will show you the way.</small>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">Latitude</span>
                </div>
                <input type="text" id="latitude" class="form-control rounded-0">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">Longitude</span>
                </div>
                <input type="text" id="longitude" class="form-control rounded-0">
            </div>
            <button type="button" class="coord-btn btn btn-secondary" onclick="initMap()">Show Map</button>
        </div>
        <div class="d-flex flex-row justify-content-end mx-auto">
            <div id="map"></div>
        </div>
    </div>
</div>

<!-- Test coordinates: 10.751037799726019, 106.6484542665327  or 10.801270490903818, 106.65047418187802 -->
<script>
    (g => {
        var h, a, k, p = "The Google Maps JavaScript API",
            c = "google",
            l = "importLibrary",
            q = "__ib__",
            m = document,
            b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}),
            r = new Set,
            e = new URLSearchParams,
            u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script"));
                e.set("libraries", [...r] + "");
                for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                e.set("callback", c + ".maps." + q);
                a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                d[q] = f;
                a.onerror = () => h = n(Error(p + " could not load."));
                a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                m.head.append(a)
            }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })
    ({
        key: "AIzaSyDCcpuriIsrvYMdx3ePjcO6HlxW9cegjgE",
        v: "weekly"
    });
</script>

<script src="/js/home.js"></script>