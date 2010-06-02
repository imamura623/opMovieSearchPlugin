<html>
<head>
<title>youtube search</title>
</head>
<body>
<!--<p>
<input type="text" id="query" />
<input type="submit" value="search" onClick="onClick()"/>
</p>-->

<div id="movieSerchFormLine" class="parts searchFormLine">
<input type="text" id="query" />
<input type="submit" value="search" onClick="onClick()"/>
</div>

<div class="parts">
<div class="partsHeading"><h3>Movie Search</h3></div>

<div id="result"></div>

<div class="block">
<div class="moreinfo">
</div>
</div>
</div>
</div>

<script type="text/javascript">
function onClick() {
    document.getElementById("result").innerHTML = "loading...";
    var query = document.getElementById("query").value;
    query = encodeURIComponent(query);
    var jsonpURL =
        "http://gdata.youtube.com/feeds/videos?vq=" + query + "&max-results=10&alt=json-in-script&callback=listVideos";
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = jsonpURL
        var head = document.getElementsByTagName("head")[0];
    head.appendChild(script);
}

function listVideos(data) {
    var html = '';
    if(data.feed.openSearch$totalResults.$t > 0) {
        var entries = data.feed.entry;
        for(var i=0;i<entries.length;i++) {
            html += entries[i].content.$t;
        }
    }else{
        html += "<p>not found</p>";
    }
    document.getElementById("result").innerHTML = html;
}

</script>
</body>
</html>
