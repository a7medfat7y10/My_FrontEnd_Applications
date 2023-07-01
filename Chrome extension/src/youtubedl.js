/*global console */
window.onload = function() {
    var videoUrls = window.ytplayer.config.args.url_encoded_fmt_stream_map.split(",").map(function(item){
        return item.split("&").reduce(function (pre , cur) {
            console.log(pre , cur);
            cur = cur.split("=");

            return Object.assign(pre , {[cur[0]]: decodeURIComponent(cur[1])});
        }, {});
    });

window.console.log("the extension's loaded" , videoUrls);

var container = document.getElementById('info');
var btn = document.createElement("button");
btn.className = "style-scope ytd-menu-renderer force-icon-button style-default size-default";
btn.setAttribute("role" , "button");
btn.innerText = "Download";
container.appendChild(btn);

}