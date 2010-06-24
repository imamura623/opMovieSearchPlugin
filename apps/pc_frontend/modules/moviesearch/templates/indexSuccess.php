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

<!--Google AJAX search api key の読み込み-->
<?php use_javascript('http://www.google.com/uds/api?file=uds.js&v=1.0&source=uds-vsw&key='.$op_config['google_AJAX_search_api_key']) ?>

<!-- Ajax Search Api and Stylesheet
// Note: If you are already using the AJAX Search API, then do not include it
//       or its stylesheet again
//
// The Key Embedded in the following script tag is designed to work with
// the following site:
-->
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
var defaultTags = [
        { query : 'PicoBitzz' },
        { query : 'mtv' },
        { query : 'primus' },
        { query : 'super junky monky' }
    ];


function LoadTags()
    {    
        return GSvideoSearchControl_JSON.stringify(defaultTags);
    }    
     

function SaveTags(tags)
    {
        alert(tags);
    }

function OnLoad()
    {
        var container = document.getElementById('videoControl');
        var options = { twoRowMode : true };
        var videoSearchControl = new GSvideoSearchControl(
                container,      // 検索コントロールを表示する要素
                defaultTags,    // 既定の検索語の配列
                LoadTags,       // タグ編集時に呼び出す関数
                SaveTags,       // タグ保存時に呼び出す関数
                options         // オプション
                );
    }

// arrange for this function to be called during body.onload
// event processing
GSearch.setOnLoadCallback(OnLoad);
</script>
