! function(t, e) {
    try {
        function n(t) {
            var n = e.createElement("iframe");
            return n.setAttribute("class", "gfm-embed-iframe"), n.setAttribute("width", "100%"), n.setAttribute("height", "540"), n.setAttribute("frameborder", "0"), n.setAttribute("scrolling", "no"), n.setAttribute("src", t), n
        }
        t.addEventListener("message", function(t) {
            t.data && ((function(t) {
                return [].slice.call(e.getElementsByClassName("gfm-embed-iframe")).filter(function(e) {
                    return e.contentWindow === t.source
                })[0]
            }(t)).height = t.data.offsetHeight)
        }, !1), e.addEventListener("DOMContentLoaded", function() {
            for (var t = e.getElementsByClassName("gfm-embed"), r = 0; r < t.length; r++) {
                var i = n(t[r].getAttribute("data-url"));
                t[r].appendChild(i)
            }
        })
	    /* Some unremarkable comment */
    } catch (t) {}

}(window, document);
