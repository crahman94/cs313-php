// ta02.js
function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var textbox_id = "txtColor";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = textbox.value;
	div.style.backgroundColor = color;

}

rssfeed_url = new Array();
rssfeed_url[0]="http://www.soccernews.com/category/english-premier-league/feed/";
rssfeed_frame_width="400";
rssfeed_frame_height="500";
rssfeed_scroll="on";
rssfeed_scroll_step="6";
rssfeed_scroll_bar="off";
rssfeed_target="_blank";
rssfeed_font_size="12";
rssfeed_font_face="";
rssfeed_border="on";
rssfeed_css_url="http://feed.surfing-waves.com/css/style6.css";
rssfeed_title="on";
rssfeed_title_name="";
rssfeed_title_bgcolor="#3366ff";
rssfeed_title_color="#fff";
rssfeed_title_bgimage="http://";
rssfeed_footer="off";
rssfeed_footer_name="rss feed";
rssfeed_footer_bgcolor="#fff";
rssfeed_footer_color="#333";
rssfeed_footer_bgimage="http://";
rssfeed_item_title_length="50";
rssfeed_item_title_color="#666";
rssfeed_item_bgcolor="#fff";
rssfeed_item_bgimage="http://";
rssfeed_item_border_bottom="on";
rssfeed_item_source_icon="off";
rssfeed_item_date="off";
rssfeed_item_description="on";
rssfeed_item_description_length="120";
rssfeed_item_description_color="#666";
rssfeed_item_description_link_color="#333";
rssfeed_item_description_tag="off";
rssfeed_no_items="0";
rssfeed_cache = "29ad520974a0c42edd9c106192dead81";
