<!-- ++Begin Video Search Control Wizard Generated Code++ -->
<!--
// Created with a Google AJAX Search Wizard
// http://code.google.com/apis/ajaxsearch/wizards.html
-->

<!--
// The Following div element will end up holding the Video Search Control.
// You can place this anywhere on your page.
-->
<div id="videoControl">
<span style="color:#676767;font-size:11px;margin:10px;padding:4px;">Loading...</span>
</div>

<!-- Ajax Search Api and Stylesheet
// Note: If you are already using the AJAX Search API, then do not include it
//       or its stylesheet again
//
// The Key Embedded in the following script tag is designed to work with
// the following site:
// http://picopicobitzz.com/
-->
<script src="http://www.google.com/uds/api?file=uds.js&v=1.0&source=uds-vsw&key=ABQIAAAANSkBraw9rhxsjOrkQW15IRTTRfCWr_LwY5LKw009d8Lkvr5JcBS8f-CYRBS_yHH-fdmJLOh7StaBSg"
type="text/javascript"></script>
<style type="text/css">
@import url("http://www.google.com/uds/css/gsearch.css");
</style>

<!-- Video Search Control and Stylesheet -->
<script type="text/javascript">
window._uds_vsw_donotrepair = true;
</script>
<script src="http://www.google.com/uds/solutions/videosearch/gsvideosearch.js?mode=new"
type="text/javascript"></script>
<style type="text/css">
@import url("http://www.google.com/uds/solutions/videosearch/gsvideosearch.css");
</style>

<script type="text/javascript">
function LoadVideoSearchControl() {
    var options = {
twoRowMode : true
    };
    var videoSearch = new GSvideoSearchControl(
            document.getElementById("videoControl"),
            [{ query : "blue angels"}, { query : "vw gti"}, { query : "osborne lights"}, { query : "tv ads"}], null, null, options);
}
// arrange for this function to be called during body.onload
// event processing
GSearch.setOnLoadCallback(LoadVideoSearchControl);
</script>
<!-- --End Video Search Control Wizard Generated Code-- -->
