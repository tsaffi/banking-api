<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>REST-API – PayUnit</title>
	<script src="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/mode/css/css.js"></script>
	<script src="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/mode/xml/xml.js"></script>
	<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/VZKEDW9wslPbEc9RmzMqaOAP/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-wyvEVSrAxo98MJGE0PuR2ri6k5qurqxA2/a+2Rdj2zI1XHJHSGLsoRS5ADozusAM"></script>
	<script src="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
	<script src="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/mode/javascript/javascript.js"></script>
	<script src="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/mode/clojure/clojure.js"></script>
	<script src="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/mode/shell/shell.js"></script>
	<script src="https://connect.facebook.net/signals/config/677369153120189?v=2.9.48&amp;r=stable" async=""></script>
	<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
	<script>
	var theplus_ajax_url = "https://payunit.net/wp-admin/admin-ajax.php";
	</script>
	<meta name="robots" content="max-image-preview:large">
	<link rel="dns-prefetch" href="//maps.googleapis.com">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//s.w.org">
	<link rel="alternate" type="application/rss+xml" title="PayUnit » Feed" href="https://payunit.net/feed/">
	<link rel="alternate" type="application/rss+xml" title="PayUnit » Comments Feed" href="https://payunit.net/comments/feed/">
	<link rel="alternate" type="application/rss+xml" title="PayUnit » REST-API Comments Feed" href="https://payunit.net/docs/rest-api/feed/">
	<script>
	window._wpemojiSettings = {
		"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
		"ext": ".png",
		"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
		"svgExt": ".svg",
		"source": {
			"concatemoji": "https:\/\/payunit.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.2"
		}
	};
	! function(e, a, t) {
		var n, r, o, i = a.createElement("canvas"),
			p = i.getContext && i.getContext("2d");

		function s(e, t) {
			var a = String.fromCharCode;
			p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
			e = i.toDataURL();
			return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
		}

		function c(e) {
			var t = a.createElement("script");
			t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
		}
		for(o = Array("flag", "emoji"), t.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
			if(!p || !p.fillText) return !1;
			switch(p.textBaseline = "top", p.font = "600 32px Arial", e) {
				case "flag":
					return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
				case "emoji":
					return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
			}
			return !1
		}(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
		t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
			t.DOMReady = !0
		}, t.supports.everything || (n = function() {
			t.readyCallback()
		}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
			"complete" === a.readyState && t.readyCallback()
		})), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
	}(window, document, window._wpemojiSettings);
	</script>
	<script src="https://payunit.net/wp-includes/js/wp-emoji-release.min.js?ver=5.7.2" type="text/javascript" defer=""></script>
	<style>
	img.wp-smiley,
	img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 .07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	</style>
	<link rel="stylesheet" id="astra-theme-css-css" href="https://payunit.net/wp-content/themes/astra/assets/css/minified/style.min.css?ver=3.7.2" media="all">
	<style id="astra-theme-css-inline-css">
	html {
		font-size: 93.75%;
	}
	
	a,
	.page-title {
		color: #f89623;
	}
	
	a:hover,
	a:focus {
		color: #52898b;
	}
	
	body,
	button,
	input,
	select,
	textarea,
	.ast-button,
	.ast-custom-button {
		font-family: 'Montserrat', sans-serif;
		font-weight: 400;
		font-size: 15px;
		font-size: 1rem;
	}
	
	blockquote {
		color: #000000;
	}
	
	.site-title {
		font-size: 35px;
		font-size: 2.3333333333333rem;
		display: none;
	}
	
	header .custom-logo-link img {
		max-width: 130px;
	}
	
	.astra-logo-svg {
		width: 130px;
	}
	
	.ast-archive-description .ast-archive-title {
		font-size: 40px;
		font-size: 2.6666666666667rem;
	}
	
	.site-header .site-description {
		font-size: 15px;
		font-size: 1rem;
		display: none;
	}
	
	.entry-title {
		font-size: 30px;
		font-size: 2rem;
	}
	
	h1,
	.entry-content h1 {
		font-size: 40px;
		font-size: 2.6666666666667rem;
	}
	
	h2,
	.entry-content h2 {
		font-size: 30px;
		font-size: 2rem;
	}
	
	h3,
	.entry-content h3 {
		font-size: 25px;
		font-size: 1.6666666666667rem;
	}
	
	h4,
	.entry-content h4 {
		font-size: 20px;
		font-size: 1.3333333333333rem;
	}
	
	h5,
	.entry-content h5 {
		font-size: 18px;
		font-size: 1.2rem;
	}
	
	h6,
	.entry-content h6 {
		font-size: 15px;
		font-size: 1rem;
	}
	
	.ast-single-post .entry-title,
	.page-title {
		font-size: 30px;
		font-size: 2rem;
	}
	
	::selection {
		background-color: #00ab9f;
		color: #ffffff;
	}
	
	body,
	h1,
	.entry-title a,
	.entry-content h1,
	h2,
	.entry-content h2,
	h3,
	.entry-content h3,
	h4,
	.entry-content h4,
	h5,
	.entry-content h5,
	h6,
	.entry-content h6 {
		color: #323232;
	}
	
	.tagcloud a:hover,
	.tagcloud a:focus,
	.tagcloud a.current-item {
		color: #000000;
		border-color: #f89623;
		background-color: #f89623;
	}
	
	input:focus,
	input[type="text"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="password"]:focus,
	input[type="reset"]:focus,
	input[type="search"]:focus,
	textarea:focus {
		border-color: #f89623;
	}
	
	input[type="radio"]:checked,
	input[type=reset],
	input[type="checkbox"]:checked,
	input[type="checkbox"]:hover:checked,
	input[type="checkbox"]:focus:checked,
	input[type=range]::-webkit-slider-thumb {
		border-color: #f89623;
		background-color: #f89623;
		box-shadow: none;
	}
	
	.site-footer a:hover + .post-count,
	.site-footer a:focus + .post-count {
		background: #f89623;
		border-color: #f89623;
	}
	
	.single .nav-links .nav-previous,
	.single .nav-links .nav-next {
		color: #f89623;
	}
	
	.entry-meta,
	.entry-meta * {
		line-height: 1.45;
		color: #f89623;
	}
	
	.entry-meta a:hover,
	.entry-meta a:hover *,
	.entry-meta a:focus,
	.entry-meta a:focus *,
	.page-links > .page-link,
	.page-links .page-link:hover,
	.post-navigation a:hover {
		color: #52898b;
	}
	
	#cat option,
	.secondary .calendar_wrap thead a,
	.secondary .calendar_wrap thead a:visited {
		color: #f89623;
	}
	
	.secondary .calendar_wrap #today,
	.ast-progress-val span {
		background: #f89623;
	}
	
	.secondary a:hover + .post-count,
	.secondary a:focus + .post-count {
		background: #f89623;
		border-color: #f89623;
	}
	
	.calendar_wrap #today > a {
		color: #000000;
	}
	
	.page-links .page-link,
	.single .post-navigation a {
		color: #f89623;
	}
	
	.widget-title {
		font-size: 21px;
		font-size: 1.4rem;
		color: #323232;
	}
	
	.main-header-menu .menu-link,
	.ast-header-custom-item a {
		color: #323232;
	}
	
	.main-header-menu .menu-item:hover > .menu-link,
	.main-header-menu .menu-item:hover > .ast-menu-toggle,
	.main-header-menu .ast-masthead-custom-menu-items a:hover,
	.main-header-menu .menu-item.focus > .menu-link,
	.main-header-menu .menu-item.focus > .ast-menu-toggle,
	.main-header-menu .current-menu-item > .menu-link,
	.main-header-menu .current-menu-ancestor > .menu-link,
	.main-header-menu .current-menu-item > .ast-menu-toggle,
	.main-header-menu .current-menu-ancestor > .ast-menu-toggle {
		color: #f89623;
	}
	
	.header-main-layout-3 .ast-main-header-bar-alignment {
		margin-right: auto;
	}
	
	.header-main-layout-2 .site-header-section-left .ast-site-identity {
		text-align: left;
	}
	
	.ast-logo-title-inline .site-logo-img {
		padding-right: 1em;
	}
	
	.site-logo-img img {
		transition: all 0.2s linear;
	}
	
	.ast-header-break-point .ast-mobile-menu-buttons-minimal.menu-toggle {
		background: transparent;
		color: #00ab9f;
	}
	
	.ast-header-break-point .ast-mobile-menu-buttons-outline.menu-toggle {
		background: transparent;
		border: 1px solid #00ab9f;
		color: #00ab9f;
	}
	
	.ast-header-break-point .ast-mobile-menu-buttons-fill.menu-toggle {
		background: #00ab9f;
	}
	
	.ast-page-builder-template .hentry {
		margin: 0;
	}
	
	.ast-page-builder-template .site-content > .ast-container {
		max-width: 100%;
		padding: 0;
	}
	
	.ast-page-builder-template .site-content #primary {
		padding: 0;
		margin: 0;
	}
	
	.ast-page-builder-template .no-results {
		text-align: center;
		margin: 4em auto;
	}
	
	.ast-page-builder-template .ast-pagination {
		padding: 2em;
	}
	
	.ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
		margin-top: 0;
	}
	
	.ast-page-builder-template .entry-header.ast-header-without-markup {
		margin-top: 0;
		margin-bottom: 0;
	}
	
	.ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
		margin-bottom: 0;
	}
	
	.ast-page-builder-template.single .post-navigation {
		padding-bottom: 2em;
	}
	
	.ast-page-builder-template.single-post .site-content > .ast-container {
		max-width: 100%;
	}
	
	.ast-page-builder-template.single-post .site-content > .ast-container {
		max-width: 100%;
	}
	
	.ast-page-builder-template .entry-header {
		margin-top: 4em;
		margin-left: auto;
		margin-right: auto;
		padding-left: 20px;
		padding-right: 20px;
	}
	
	.ast-page-builder-template .ast-archive-description {
		margin-top: 4em;
		margin-left: auto;
		margin-right: auto;
		padding-left: 20px;
		padding-right: 20px;
	}
	
	.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
		margin-left: 0;
		margin-right: 0;
	}
	
	.single.ast-page-builder-template .entry-header {
		padding-left: 20px;
		padding-right: 20px;
	}
	
	.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
		margin-left: 0;
		margin-right: 0;
	}
	
	.footer-adv .footer-adv-overlay {
		border-top-style: solid;
		border-top-color: #7a7a7a;
	}
	
	.wp-block-buttons.aligncenter {
		justify-content: center;
	}
	
	@media (min-width:1200px) {
		.wp-block-group .has-background {
			padding: 20px;
		}
	}
	
	@media (min-width:1200px) {
		.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-cover.alignwide,
		.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-cover.alignfull {
			padding-right: 0;
			padding-left: 0;
		}
	}
	
	@media (min-width:1200px) {
		.wp-block-cover-image.alignwide .wp-block-cover__inner-container,
		.wp-block-cover.alignwide .wp-block-cover__inner-container,
		.wp-block-cover-image.alignfull .wp-block-cover__inner-container,
		.wp-block-cover.alignfull .wp-block-cover__inner-container {
			width: 100%;
		}
	}
	
	@media (max-width:921px) {
		.ast-separate-container .ast-article-post,
		.ast-separate-container .ast-article-single {
			padding: 1.5em 2.14em;
		}
		.ast-separate-container #primary,
		.ast-separate-container #secondary {
			padding: 1.5em 0;
		}
		#primary,
		#secondary {
			padding: 1.5em 0;
			margin: 0;
		}
		.ast-left-sidebar #content > .ast-container {
			display: flex;
			flex-direction: column-reverse;
			width: 100%;
		}
		.ast-author-box img.avatar {
			margin: 20px 0 0 0;
		}
	}
	
	@media (min-width:922px) {
		.ast-separate-container.ast-right-sidebar #primary,
		.ast-separate-container.ast-left-sidebar #primary {
			border: 0;
		}
		.search-no-results.ast-separate-container #primary {
			margin-bottom: 4em;
		}
	}
	
	.wp-block-button .wp-block-button__link,
	{
		color: #ffffff;
	}
	
	.wp-block-button .wp-block-button__link:hover,
	.wp-block-button .wp-block-button__link:focus {
		color: #ffffff;
		background-color: #52898b;
		border-color: #52898b;
	}
	
	.wp-block-button .wp-block-button__link {
		border-style: solid;
		border-top-width: 0;
		border-right-width: 0;
		border-left-width: 0;
		border-bottom-width: 0;
		border-color: #00ab9f;
		background-color: #00ab9f;
		color: #ffffff;
		font-family: inherit;
		font-weight: inherit;
		line-height: 1;
		border-radius: 2px;
		padding-top: 10px;
		padding-right: 40px;
		padding-bottom: 10px;
		padding-left: 40px;
	}
	
	.menu-toggle,
	button,
	.ast-button,
	.ast-custom-button,
	.button,
	input#submit,
	input[type="button"],
	input[type="submit"],
	input[type="reset"] {
		border-style: solid;
		border-top-width: 0;
		border-right-width: 0;
		border-left-width: 0;
		border-bottom-width: 0;
		color: #ffffff;
		border-color: #00ab9f;
		background-color: #00ab9f;
		border-radius: 2px;
		padding-top: 10px;
		padding-right: 40px;
		padding-bottom: 10px;
		padding-left: 40px;
		font-family: inherit;
		font-weight: inherit;
		line-height: 1;
	}
	
	button:focus,
	.menu-toggle:hover,
	button:hover,
	.ast-button:hover,
	.ast-custom-button:hover .button:hover,
	.ast-custom-button:hover,
	input[type=reset]:hover,
	input[type=reset]:focus,
	input#submit:hover,
	input#submit:focus,
	input[type="button"]:hover,
	input[type="button"]:focus,
	input[type="submit"]:hover,
	input[type="submit"]:focus {
		color: #ffffff;
		background-color: #52898b;
		border-color: #52898b;
	}
	
	@media (min-width:544px) {
		.ast-container {
			max-width: 100%;
		}
	}
	
	@media (max-width:544px) {
		.ast-separate-container .ast-article-post,
		.ast-separate-container .ast-article-single,
		.ast-separate-container .comments-title,
		.ast-separate-container .ast-archive-description {
			padding: 1.5em 1em;
		}
		.ast-separate-container #content .ast-container {
			padding-left: 0.54em;
			padding-right: 0.54em;
		}
		.ast-separate-container .ast-comment-list li.depth-1 {
			padding: 1.5em 1em;
			margin-bottom: 1.5em;
		}
		.ast-separate-container .ast-comment-list .bypostauthor {
			padding: .5em;
		}
		.ast-search-menu-icon.ast-dropdown-active .search-field {
			width: 170px;
		}
		.site-branding img,
		.site-header .site-logo-img .custom-logo-link img {
			max-width: 100%;
		}
	}
	
	@media (max-width:921px) {
		.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
			display: inline-block;
		}
		.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
			margin: 0;
		}
		.ast-comment-avatar-wrap img {
			max-width: 2.5em;
		}
		.ast-separate-container .ast-comment-list li.depth-1 {
			padding: 1.5em 2.14em;
		}
		.ast-separate-container .comment-respond {
			padding: 2em 2.14em;
		}
		.ast-comment-meta {
			padding: 0 1.8888em 1.3333em;
		}
	}
	
	@media (min-width:545px) {
		.ast-page-builder-template .comments-area,
		.single.ast-page-builder-template .entry-header,
		.single.ast-page-builder-template .post-navigation,
		.single.ast-page-builder-template .ast-single-related-posts-container {
			max-width: 1240px;
			margin-left: auto;
			margin-right: auto;
		}
	}
	
	@media (max-width:921px) {
		.site-title {
			display: none;
		}
		.ast-archive-description .ast-archive-title {
			font-size: 40px;
		}
		.site-header .site-description {
			display: none;
		}
		.entry-title {
			font-size: 30px;
		}
		h1,
		.entry-content h1 {
			font-size: 30px;
		}
		h2,
		.entry-content h2 {
			font-size: 25px;
		}
		h3,
		.entry-content h3 {
			font-size: 20px;
		}
		.ast-single-post .entry-title,
		.page-title {
			font-size: 30px;
		}
	}
	
	@media (max-width:544px) {
		.site-title {
			display: none;
		}
		.ast-archive-description .ast-archive-title {
			font-size: 40px;
		}
		.site-header .site-description {
			display: none;
		}
		.entry-title {
			font-size: 30px;
		}
		h1,
		.entry-content h1 {
			font-size: 30px;
		}
		h2,
		.entry-content h2 {
			font-size: 25px;
		}
		h3,
		.entry-content h3 {
			font-size: 20px;
		}
		.ast-single-post .entry-title,
		.page-title {
			font-size: 30px;
		}
	}
	
	@media (max-width:921px) {
		html {
			font-size: 85.5%;
		}
	}
	
	@media (max-width:544px) {
		html {
			font-size: 85.5%;
		}
	}
	
	@media (min-width:922px) {
		.ast-container {
			max-width: 1240px;
		}
	}
	
	@font-face {
		font-family: "Astra";
		src: url(https://payunit.net/wp-content/themes/astra/assets/fonts/astra.woff) format("woff"), url(https://payunit.net/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"), url(https://payunit.net/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");
		font-weight: normal;
		font-style: normal;
		font-display: fallback;
	}
	
	@media (max-width:921px) {
		.main-header-bar .main-header-bar-navigation {
			display: none;
		}
	}
	
	.ast-desktop .main-header-menu.submenu-with-border .sub-menu,
	.ast-desktop .main-header-menu.submenu-with-border .astra-full-megamenu-wrapper {
		border-color: #00ab9f;
	}
	
	.ast-desktop .main-header-menu.submenu-with-border .sub-menu {
		border-top-width: 2px;
		border-right-width: 0px;
		border-left-width: 0px;
		border-bottom-width: 0px;
		border-style: solid;
	}
	
	.ast-desktop .main-header-menu.submenu-with-border .sub-menu .sub-menu {
		top: -2px;
	}
	
	.ast-desktop .main-header-menu.submenu-with-border .sub-menu .menu-link,
	.ast-desktop .main-header-menu.submenu-with-border .children .menu-link {
		border-bottom-width: 0px;
		border-style: solid;
		border-color: #eaeaea;
	}
	
	@media (min-width:922px) {
		.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover > .sub-menu,
		.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus > .sub-menu {
			margin-left: -0px;
		}
	}
	
	.ast-small-footer {
		border-top-style: solid;
		border-top-width: 1px;
		border-top-color: #7a7a7a;
	}
	
	.ast-small-footer-wrap {
		text-align: center;
	}
	
	.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .main-header-bar-navigation .ast-search-icon {
		display: none;
	}
	
	.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-form {
		padding: 0;
		display: block;
		overflow: hidden;
	}
	
	.ast-header-break-point .ast-header-custom-item .widget:last-child {
		margin-bottom: 1em;
	}
	
	.ast-header-custom-item .widget {
		margin: 0.5em;
		display: inline-block;
		vertical-align: middle;
	}
	
	.ast-header-custom-item .widget p {
		margin-bottom: 0;
	}
	
	.ast-header-custom-item .widget li {
		width: auto;
	}
	
	.ast-header-custom-item-inside .button-custom-menu-item .menu-link {
		display: none;
	}
	
	.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item .ast-custom-button-link {
		display: none;
	}
	
	.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item .menu-link {
		display: block;
	}
	
	.ast-header-break-point.ast-header-custom-item-outside .main-header-bar .ast-search-icon {
		margin-right: 1em;
	}
	
	.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-field,
	.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon.ast-inline-search .search-field {
		width: 100%;
		padding-right: 5.5em;
	}
	
	.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-submit {
		display: block;
		position: absolute;
		height: 100%;
		top: 0;
		right: 0;
		padding: 0 1em;
		border-radius: 0;
	}
	
	.ast-header-break-point .ast-header-custom-item .ast-masthead-custom-menu-items {
		padding-left: 20px;
		padding-right: 20px;
		margin-bottom: 1em;
		margin-top: 1em;
	}
	
	.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item {
		padding-left: 0;
		padding-right: 0;
		margin-top: 0;
		margin-bottom: 0;
	}
	
	.astra-icon-down_arrow::after {
		content: "\e900";
		font-family: Astra;
	}
	
	.astra-icon-close::after {
		content: "\e5cd";
		font-family: Astra;
	}
	
	.astra-icon-drag_handle::after {
		content: "\e25d";
		font-family: Astra;
	}
	
	.astra-icon-format_align_justify::after {
		content: "\e235";
		font-family: Astra;
	}
	
	.astra-icon-menu::after {
		content: "\e5d2";
		font-family: Astra;
	}
	
	.astra-icon-reorder::after {
		content: "\e8fe";
		font-family: Astra;
	}
	
	.astra-icon-search::after {
		content: "\e8b6";
		font-family: Astra;
	}
	
	.astra-icon-zoom_in::after {
		content: "\e56b";
		font-family: Astra;
	}
	
	.astra-icon-check-circle::after {
		content: "\e901";
		font-family: Astra;
	}
	
	.astra-icon-shopping-cart::after {
		content: "\f07a";
		font-family: Astra;
	}
	
	.astra-icon-shopping-bag::after {
		content: "\f290";
		font-family: Astra;
	}
	
	.astra-icon-shopping-basket::after {
		content: "\f291";
		font-family: Astra;
	}
	
	.astra-icon-circle-o::after {
		content: "\e903";
		font-family: Astra;
	}
	
	.astra-icon-certificate::after {
		content: "\e902";
		font-family: Astra;
	}
	
	:root .has-ast-global-color-0-color {
		color: var(--ast-global-color-0);
	}
	
	:root .has-ast-global-color-0-background-color {
		background-color: var(--ast-global-color-0);
	}
	
	:root .wp-block-button .has-ast-global-color-0-color {
		color: var(--ast-global-color-0);
	}
	
	:root .wp-block-button .has-ast-global-color-0-background-color {
		background-color: var(--ast-global-color-0);
	}
	
	:root .has-ast-global-color-1-color {
		color: var(--ast-global-color-1);
	}
	
	:root .has-ast-global-color-1-background-color {
		background-color: var(--ast-global-color-1);
	}
	
	:root .wp-block-button .has-ast-global-color-1-color {
		color: var(--ast-global-color-1);
	}
	
	:root .wp-block-button .has-ast-global-color-1-background-color {
		background-color: var(--ast-global-color-1);
	}
	
	:root .has-ast-global-color-2-color {
		color: var(--ast-global-color-2);
	}
	
	:root .has-ast-global-color-2-background-color {
		background-color: var(--ast-global-color-2);
	}
	
	:root .wp-block-button .has-ast-global-color-2-color {
		color: var(--ast-global-color-2);
	}
	
	:root .wp-block-button .has-ast-global-color-2-background-color {
		background-color: var(--ast-global-color-2);
	}
	
	:root .has-ast-global-color-3-color {
		color: var(--ast-global-color-3);
	}
	
	:root .has-ast-global-color-3-background-color {
		background-color: var(--ast-global-color-3);
	}
	
	:root .wp-block-button .has-ast-global-color-3-color {
		color: var(--ast-global-color-3);
	}
	
	:root .wp-block-button .has-ast-global-color-3-background-color {
		background-color: var(--ast-global-color-3);
	}
	
	:root .has-ast-global-color-4-color {
		color: var(--ast-global-color-4);
	}
	
	:root .has-ast-global-color-4-background-color {
		background-color: var(--ast-global-color-4);
	}
	
	:root .wp-block-button .has-ast-global-color-4-color {
		color: var(--ast-global-color-4);
	}
	
	:root .wp-block-button .has-ast-global-color-4-background-color {
		background-color: var(--ast-global-color-4);
	}
	
	:root .has-ast-global-color-5-color {
		color: var(--ast-global-color-5);
	}
	
	:root .has-ast-global-color-5-background-color {
		background-color: var(--ast-global-color-5);
	}
	
	:root .wp-block-button .has-ast-global-color-5-color {
		color: var(--ast-global-color-5);
	}
	
	:root .wp-block-button .has-ast-global-color-5-background-color {
		background-color: var(--ast-global-color-5);
	}
	
	:root .has-ast-global-color-6-color {
		color: var(--ast-global-color-6);
	}
	
	:root .has-ast-global-color-6-background-color {
		background-color: var(--ast-global-color-6);
	}
	
	:root .wp-block-button .has-ast-global-color-6-color {
		color: var(--ast-global-color-6);
	}
	
	:root .wp-block-button .has-ast-global-color-6-background-color {
		background-color: var(--ast-global-color-6);
	}
	
	:root .has-ast-global-color-7-color {
		color: var(--ast-global-color-7);
	}
	
	:root .has-ast-global-color-7-background-color {
		background-color: var(--ast-global-color-7);
	}
	
	:root .wp-block-button .has-ast-global-color-7-color {
		color: var(--ast-global-color-7);
	}
	
	:root .wp-block-button .has-ast-global-color-7-background-color {
		background-color: var(--ast-global-color-7);
	}
	
	:root .has-ast-global-color-8-color {
		color: var(--ast-global-color-8);
	}
	
	:root .has-ast-global-color-8-background-color {
		background-color: var(--ast-global-color-8);
	}
	
	:root .wp-block-button .has-ast-global-color-8-color {
		color: var(--ast-global-color-8);
	}
	
	:root .wp-block-button .has-ast-global-color-8-background-color {
		background-color: var(--ast-global-color-8);
	}
	
	:root {
		--ast-global-color-0: #0274be;
		--ast-global-color-1: #3a3a3a;
		--ast-global-color-2: #3a3a3a;
		--ast-global-color-3: #4B4F58;
		--ast-global-color-4: #F5F5F5;
		--ast-global-color-5: #FFFFFF;
		--ast-global-color-6: #F2F5F7;
		--ast-global-color-7: #424242;
		--ast-global-color-8: #000000;
	}
	
	.ast-breadcrumbs .trail-browse,
	.ast-breadcrumbs .trail-items,
	.ast-breadcrumbs .trail-items li {
		display: inline-block;
		margin: 0;
		padding: 0;
		border: none;
		background: inherit;
		text-indent: 0;
	}
	
	.ast-breadcrumbs .trail-browse {
		font-size: inherit;
		font-style: inherit;
		font-weight: inherit;
		color: inherit;
	}
	
	.ast-breadcrumbs .trail-items {
		list-style: none;
	}
	
	.trail-items li::after {
		padding: 0 0.3em;
		content: "\00bb";
	}
	
	.trail-items li:last-of-type::after {
		display: none;
	}
	
	h1,
	.entry-content h1,
	h2,
	.entry-content h2,
	h3,
	.entry-content h3,
	h4,
	.entry-content h4,
	h5,
	.entry-content h5,
	h6,
	.entry-content h6 {
		color: var(--ast-global-color-2);
	}
	
	.elementor-template-full-width .ast-container {
		display: block;
	}
	
	@media (max-width:544px) {
		.elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
			width: auto;
			margin: 0;
		}
		.elementor-element .woocommerce .woocommerce-result-count {
			float: none;
		}
	}
	
	.ast-header-break-point .main-header-bar {
		border-bottom-width: 1px;
	}
	
	@media (min-width:922px) {
		.main-header-bar {
			border-bottom-width: 1px;
		}
	}
	
	.ast-safari-browser-less-than-11 .main-header-menu .menu-item,
	.ast-safari-browser-less-than-11 .main-header-bar .ast-masthead-custom-menu-items {
		display: block;
	}
	
	.main-header-menu .menu-item,
	#astra-footer-menu .menu-item,
	.main-header-bar .ast-masthead-custom-menu-items {
		-js-display: flex;
		display: flex;
		-webkit-box-pack: center;
		-webkit-justify-content: center;
		-moz-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-webkit-flex-direction: column;
		-moz-box-orient: vertical;
		-moz-box-direction: normal;
		-ms-flex-direction: column;
		flex-direction: column;
	}
	
	.main-header-menu > .menu-item > .menu-link,
	#astra-footer-menu > .menu-item > .menu-link,
	{
		height: 100%;
		-webkit-box-align: center;
		-webkit-align-items: center;
		-moz-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-js-display: flex;
		display: flex;
	}
	
	.ast-primary-menu-disabled .main-header-bar .ast-masthead-custom-menu-items {
		flex: unset;
	}
	
	.main-header-menu .sub-menu .menu-item.menu-item-has-children > .menu-link:after {
		position: absolute;
		right: 1em;
		top: 50%;
		transform: translate(0, -50%) rotate(270deg);
	}
	
	.ast-header-break-point .main-header-bar .main-header-bar-navigation .page_item_has_children > .ast-menu-toggle::before,
	.ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle::before,
	.ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before,
	.ast-header-break-point .ast-mobile-header-wrap .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle::before {
		font-weight: bold;
		content: "\e900";
		font-family: Astra;
		text-decoration: inherit;
		display: inline-block;
	}
	
	.ast-header-break-point .main-navigation ul.sub-menu .menu-item .menu-link:before {
		content: "\e900";
		font-family: Astra;
		font-size: .65em;
		text-decoration: inherit;
		display: inline-block;
		transform: translate(0, -2px) rotateZ(270deg);
		margin-right: 5px;
	}
	
	.widget_search .search-form:after {
		font-family: Astra;
		font-size: 1.2em;
		font-weight: normal;
		content: "\e8b6";
		position: absolute;
		top: 50%;
		right: 15px;
		transform: translate(0, -50%);
	}
	
	.astra-search-icon::before {
		content: "\e8b6";
		font-family: Astra;
		font-style: normal;
		font-weight: normal;
		text-decoration: inherit;
		text-align: center;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}
	
	.main-header-bar .main-header-bar-navigation .page_item_has_children > a:after,
	.main-header-bar .main-header-bar-navigation .menu-item-has-children > a:after,
	.site-header-focus-item .main-header-bar-navigation .menu-item-has-children > .menu-link:after {
		content: "\e900";
		display: inline-block;
		font-family: Astra;
		font-size: .6rem;
		font-weight: bold;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		margin-left: 10px;
		line-height: normal;
	}
	
	.ast-mobile-popup-drawer .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
		transform: rotateX(180deg);
	}
	
	.ast-header-break-point .main-header-bar-navigation .menu-item-has-children > .menu-link:after {
		display: none;
	}
	
	.ast-separate-container .blog-layout-1,
	.ast-separate-container .blog-layout-2,
	.ast-separate-container .blog-layout-3 {
		background-color: transparent;
		background-image: none;
	}
	
	.ast-separate-container .ast-article-post {
		background-color: var(--ast-global-color-5);
		;
	}
	
	@media (max-width:921px) {
		.ast-separate-container .ast-article-post {
			background-color: var(--ast-global-color-5);
			;
		}
	}
	
	@media (max-width:544px) {
		.ast-separate-container .ast-article-post {
			background-color: var(--ast-global-color-5);
			;
		}
	}
	
	.ast-separate-container .ast-article-single:not(.ast-related-post),
	.ast-separate-container .comments-area .comment-respond,
	.ast-separate-container .comments-area .ast-comment-list li,
	.ast-separate-container .ast-woocommerce-container,
	.ast-separate-container .error-404,
	.ast-separate-container .no-results,
	.single.ast-separate-container .ast-author-meta,
	.ast-separate-container .related-posts-title-wrapper,
	.ast-separate-container.ast-two-container #secondary .widget,
	.ast-separate-container .comments-count-wrapper,
	.ast-box-layout.ast-plain-container .site-content,
	.ast-padded-layout.ast-plain-container .site-content,
	.ast-separate-container .comments-area .comments-title {
		background-color: var(--ast-global-color-5);
		;
	}
	
	@media (max-width:921px) {
		.ast-separate-container .ast-article-single:not(.ast-related-post),
		.ast-separate-container .comments-area .comment-respond,
		.ast-separate-container .comments-area .ast-comment-list li,
		.ast-separate-container .ast-woocommerce-container,
		.ast-separate-container .error-404,
		.ast-separate-container .no-results,
		.single.ast-separate-container .ast-author-meta,
		.ast-separate-container .related-posts-title-wrapper,
		.ast-separate-container.ast-two-container #secondary .widget,
		.ast-separate-container .comments-count-wrapper,
		.ast-box-layout.ast-plain-container .site-content,
		.ast-padded-layout.ast-plain-container .site-content,
		.ast-separate-container .comments-area .comments-title {
			background-color: var(--ast-global-color-5);
			;
		}
	}
	
	@media (max-width:544px) {
		.ast-separate-container .ast-article-single:not(.ast-related-post),
		.ast-separate-container .comments-area .comment-respond,
		.ast-separate-container .comments-area .ast-comment-list li,
		.ast-separate-container .ast-woocommerce-container,
		.ast-separate-container .error-404,
		.ast-separate-container .no-results,
		.single.ast-separate-container .ast-author-meta,
		.ast-separate-container .related-posts-title-wrapper,
		.ast-separate-container.ast-two-container #secondary .widget,
		.ast-separate-container .comments-count-wrapper,
		.ast-box-layout.ast-plain-container .site-content,
		.ast-padded-layout.ast-plain-container .site-content,
		.ast-separate-container .comments-area .comments-title {
			background-color: var(--ast-global-color-5);
			;
		}
	}
	
	:root {
		--e-global-color-astglobalcolor0: #0274be;
		--e-global-color-astglobalcolor1: #3a3a3a;
		--e-global-color-astglobalcolor2: #3a3a3a;
		--e-global-color-astglobalcolor3: #4B4F58;
		--e-global-color-astglobalcolor4: #F5F5F5;
		--e-global-color-astglobalcolor5: #FFFFFF;
		--e-global-color-astglobalcolor6: #F2F5F7;
		--e-global-color-astglobalcolor7: #424242;
		--e-global-color-astglobalcolor8: #000000;
	}
	
	.comment-reply-title {
		font-size: 24px;
		font-size: 1.6rem;
	}
	
	.ast-comment-meta {
		line-height: 1.666666667;
		color: #f89623;
		font-size: 12px;
		font-size: 0.8rem;
	}
	
	.ast-comment-list #cancel-comment-reply-link {
		font-size: 15px;
		font-size: 1rem;
	}
	
	.comments-count-wrapper {
		padding: 2em 0;
	}
	
	.comments-count-wrapper .comments-title {
		font-weight: normal;
		word-wrap: break-word;
	}
	
	.ast-comment-list {
		margin: 0;
		word-wrap: break-word;
		padding-bottom: 0.5em;
		list-style: none;
	}
	
	.ast-comment-list li {
		list-style: none;
	}
	
	.ast-comment-list li.depth-1 .ast-comment,
	.ast-comment-list li.depth-2 .ast-comment {
		border-bottom: 1px solid #eeeeee;
	}
	
	.ast-comment-list .comment-respond {
		padding: 1em 0;
		border-bottom: 1px solid #eeeeee;
	}
	
	.ast-comment-list .comment-respond .comment-reply-title {
		margin-top: 0;
		padding-top: 0;
	}
	
	.ast-comment-list .comment-respond p {
		margin-bottom: .5em;
	}
	
	.ast-comment-list .ast-comment-edit-reply-wrap {
		-js-display: flex;
		display: flex;
		justify-content: flex-end;
	}
	
	.ast-comment-list .ast-edit-link {
		flex: 1;
	}
	
	.ast-comment-list .comment-awaiting-moderation {
		margin-bottom: 0;
	}
	
	.ast-comment {
		padding: 1em 0;
	}
	
	.ast-comment-avatar-wrap img {
		border-radius: 50%;
	}
	
	.ast-comment-content {
		clear: both;
	}
	
	.ast-comment-cite-wrap {
		text-align: left;
	}
	
	.ast-comment-cite-wrap cite {
		font-style: normal;
	}
	
	.comment-reply-title {
		padding-top: 1em;
		font-weight: normal;
		line-height: 1.65;
	}
	
	.ast-comment-meta {
		margin-bottom: 0.5em;
	}
	
	.comments-area {
		border-top: 1px solid #eeeeee;
		margin-top: 2em;
	}
	
	.comments-area .comment-form-comment {
		width: 100%;
		border: none;
		margin: 0;
		padding: 0;
	}
	
	.comments-area .comment-notes,
	.comments-area .comment-textarea,
	.comments-area .form-allowed-tags {
		margin-bottom: 1.5em;
	}
	
	.comments-area .form-submit {
		margin-bottom: 0;
	}
	
	.comments-area textarea#comment,
	.comments-area .ast-comment-formwrap input[type="text"] {
		width: 100%;
		border-radius: 0;
		vertical-align: middle;
		margin-bottom: 10px;
	}
	
	.comments-area .no-comments {
		margin-top: 0.5em;
		margin-bottom: 0.5em;
	}
	
	.comments-area p.logged-in-as {
		margin-bottom: 1em;
	}
	
	.ast-separate-container .comments-count-wrapper {
		background-color: #fff;
		padding: 2em 6.67em 0;
	}
	
	@media (max-width: 1200px) {
		.ast-separate-container .comments-count-wrapper {
			padding: 2em 3.34em;
		}
	}
	
	.ast-separate-container .comments-area {
		border-top: 0;
	}
	
	.ast-separate-container .ast-comment-list {
		padding-bottom: 0;
	}
	
	.ast-separate-container .ast-comment-list li {
		background-color: #fff;
	}
	
	.ast-separate-container .ast-comment-list li.depth-1 {
		padding: 4em 6.67em;
		margin-bottom: 2em;
	}
	
	@media (max-width: 1200px) {
		.ast-separate-container .ast-comment-list li.depth-1 {
			padding: 3em 3.34em;
		}
	}
	
	.ast-separate-container .ast-comment-list li.depth-1 .children li {
		padding-bottom: 0;
		padding-top: 0;
		margin-bottom: 0;
	}
	
	.ast-separate-container .ast-comment-list li.depth-1 .ast-comment,
	.ast-separate-container .ast-comment-list li.depth-2 .ast-comment {
		border-bottom: 0;
	}
	
	.ast-separate-container .ast-comment-list .comment-respond {
		padding-top: 0;
		padding-bottom: 1em;
		background-color: transparent;
	}
	
	.ast-separate-container .ast-comment-list .pingback p {
		margin-bottom: 0;
	}
	
	.ast-separate-container .ast-comment-list .bypostauthor {
		padding: 2em;
		margin-bottom: 1em;
	}
	
	.ast-separate-container .ast-comment-list .bypostauthor li {
		background: transparent;
		margin-bottom: 0;
		padding: 0 0 0 2em;
	}
	
	.ast-separate-container .comment-respond {
		background-color: #fff;
		padding: 4em 6.67em;
		border-bottom: 0;
	}
	
	@media (max-width: 1200px) {
		.ast-separate-container .comment-respond {
			padding: 3em 2.34em;
		}
	}
	
	.ast-separate-container .comment-reply-title {
		padding-top: 0;
	}
	
	.comment-content a {
		word-wrap: break-word;
	}
	
	.ast-comment-list .children {
		margin-left: 2em;
	}
	
	@media (max-width: 992px) {
		.ast-comment-list .children {
			margin-left: 1em;
		}
	}
	
	.ast-comment-list #cancel-comment-reply-link {
		white-space: nowrap;
		font-size: 15px;
		font-size: 1rem;
		margin-left: 1em;
	}
	
	.ast-comment-avatar-wrap {
		float: left;
		clear: right;
		margin-right: 1.33333em;
	}
	
	.ast-comment-meta-wrap {
		float: left;
		clear: right;
		padding: 0 0 1.33333em;
	}
	
	.ast-comment-time .timendate,
	.ast-comment-time .reply {
		margin-right: 0.5em;
	}
	
	.comments-area #wp-comment-cookies-consent {
		margin-right: 10px;
	}
	
	.ast-page-builder-template .comments-area {
		padding-left: 20px;
		padding-right: 20px;
		margin-top: 0;
		margin-bottom: 2em;
	}
	
	.ast-separate-container .ast-comment-list .bypostauthor .bypostauthor {
		background: transparent;
		margin-bottom: 0;
		padding-right: 0;
		padding-bottom: 0;
		padding-top: 0;
	}
	
	@media (min-width:922px) {
		.ast-separate-container .ast-comment-list li .comment-respond {
			padding-left: 2.66666em;
			padding-right: 2.66666em;
		}
	}
	
	@media (max-width:544px) {
		.ast-separate-container .comments-count-wrapper {
			padding: 1.5em 1em;
		}
		.ast-separate-container .ast-comment-list li.depth-1 {
			padding: 1.5em 1em;
			margin-bottom: 1.5em;
		}
		.ast-separate-container .ast-comment-list .bypostauthor {
			padding: .5em;
		}
		.ast-separate-container .comment-respond {
			padding: 1.5em 1em;
		}
		.ast-separate-container .ast-comment-list .bypostauthor li {
			padding: 0 0 0 .5em;
		}
		.ast-comment-list .children {
			margin-left: 0.66666em;
		}
	}
	
	@media (max-width:921px) {
		.ast-comment-avatar-wrap img {
			max-width: 2.5em;
		}
		.comments-area {
			margin-top: 1.5em;
		}
		.ast-separate-container .comments-count-wrapper {
			padding: 2em 2.14em;
		}
		.ast-separate-container .ast-comment-list li.depth-1 {
			padding: 1.5em 2.14em;
		}
		.ast-separate-container .comment-respond {
			padding: 2em 2.14em;
		}
	}
	
	@media (max-width:921px) {
		.ast-comment-avatar-wrap {
			margin-right: 0.5em;
		}
	}
	</style>
	<link rel="stylesheet" id="astra-google-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C&amp;display=fallback&amp;ver=3.7.2" media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="https://payunit.net/wp-includes/css/dist/block-library/style.min.css?ver=5.7.2" media="all">
	<link rel="stylesheet" id="wc-blocks-vendors-style-css" href="https://payunit.net/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=5.5.1" media="all">
	<link rel="stylesheet" id="wc-blocks-style-css" href="https://payunit.net/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=5.5.1" media="all">
	<link rel="stylesheet" id="betterdocs-el-edit-css" href="https://payunit.net/wp-content/plugins/betterdocs/admin/assets/css/betterdocs-el-edit.css?ver=1.7.5" media="all">
	<link rel="stylesheet" id="betterdocs-css" href="https://payunit.net/wp-content/plugins/betterdocs/public/css/betterdocs-public.css?ver=1.0.0" media="all">
	<link rel="stylesheet" id="simplebar-css" href="https://payunit.net/wp-content/plugins/betterdocs/public/css/simplebar.css?ver=1.0.0" media="all">
	<link rel="stylesheet" id="woocommerce-layout-css" href="https://payunit.net/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-layout.min.css?ver=3.7.2" media="all">
	<link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://payunit.net/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-smallscreen.min.css?ver=3.7.2" media="only screen and (max-width: 921px)">
	<link rel="stylesheet" id="woocommerce-general-css" href="https://payunit.net/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce.min.css?ver=3.7.2" media="all">
	<style id="woocommerce-general-inline-css">
	.woocommerce span.onsale,
	.wc-block-grid__product .wc-block-grid__product-onsale {
		background-color: #00ab9f;
		color: #ffffff;
	}
	
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce .woocommerce-message a.button,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce input.button,
	.woocommerce input.button:disabled,
	.woocommerce input.button:disabled[disabled],
	.woocommerce input.button:disabled:hover,
	.woocommerce input.button:disabled[disabled]:hover,
	.woocommerce #respond input#submit,
	.woocommerce button.button.alt.disabled,
	.wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
	.wc-block-grid__product-onsale {
		color: #ffffff;
		border-color: #00ab9f;
		background-color: #00ab9f;
	}
	
	.woocommerce a.button:hover,
	.woocommerce button.button:hover,
	.woocommerce .woocommerce-message a.button:hover,
	.woocommerce #respond input#submit:hover,
	.woocommerce #respond input#submit.alt:hover,
	.woocommerce a.button.alt:hover,
	.woocommerce button.button.alt:hover,
	.woocommerce input.button.alt:hover,
	.woocommerce input.button:hover,
	.woocommerce button.button.alt.disabled:hover,
	.wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover {
		color: #ffffff;
		border-color: #52898b;
		background-color: #52898b;
	}
	
	.woocommerce-message,
	.woocommerce-info {
		border-top-color: #f89623;
	}
	
	.woocommerce-message::before,
	.woocommerce-info::before {
		color: #f89623;
	}
	
	.woocommerce ul.products li.product .price,
	.woocommerce div.product p.price,
	.woocommerce div.product span.price,
	.widget_layered_nav_filters ul li.chosen a,
	.woocommerce-page ul.products li.product .ast-woo-product-category,
	.wc-layered-nav-rating a {
		color: #323232;
	}
	
	.woocommerce nav.woocommerce-pagination ul,
	.woocommerce nav.woocommerce-pagination ul li {
		border-color: #f89623;
	}
	
	.woocommerce nav.woocommerce-pagination ul li a:focus,
	.woocommerce nav.woocommerce-pagination ul li a:hover,
	.woocommerce nav.woocommerce-pagination ul li span.current {
		background: #f89623;
		color: #ffffff;
	}
	
	.woocommerce-MyAccount-navigation-link.is-active a {
		color: #52898b;
	}
	
	.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
		background-color: #f89623;
	}
	
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce .woocommerce-message a.button,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce input.button,
	.woocommerce-cart table.cart td.actions .button,
	.woocommerce form.checkout_coupon .button,
	.woocommerce #respond input#submit,
	.wc-block-grid__products .wc-block-grid__product .wp-block-button__link {
		border-radius: 2px;
		padding-top: 10px;
		padding-right: 40px;
		padding-bottom: 10px;
		padding-left: 40px;
	}
	
	.woocommerce .star-rating,
	.woocommerce .comment-form-rating .stars a,
	.woocommerce .star-rating::before {
		color: #f89623;
	}
	
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before {
		background: #f89623;
	}
	
	.woocommerce a.remove:hover {
		color: #f89623;
		border-color: #f89623;
		background-color: #ffffff;
	}
	
	.ast-site-header-cart a {
		color: #323232;
	}
	
	.ast-site-header-cart a:focus,
	.ast-site-header-cart a:hover,
	.ast-site-header-cart .current-menu-item a {
		color: #f89623;
	}
	
	.ast-cart-menu-wrap .count,
	.ast-cart-menu-wrap .count:after {
		border-color: #f89623;
		color: #f89623;
	}
	
	.ast-cart-menu-wrap:hover .count {
		color: #ffffff;
		background-color: #f89623;
	}
	
	.ast-site-header-cart .widget_shopping_cart .total .woocommerce-Price-amount {
		color: #f89623;
	}
	
	.woocommerce a.remove:hover,
	.ast-woocommerce-cart-menu .main-header-menu .woocommerce-custom-menu-item .menu-item:hover > .menu-link.remove:hover {
		color: #f89623;
		border-color: #f89623;
		background-color: #ffffff;
	}
	
	.ast-site-header-cart .widget_shopping_cart .buttons .button.checkout,
	.woocommerce .widget_shopping_cart .woocommerce-mini-cart__buttons .checkout.wc-forward {
		color: #ffffff;
		border-color: #52898b;
		background-color: #52898b;
	}
	
	.site-header .ast-site-header-cart-data .button.wc-forward,
	.site-header .ast-site-header-cart-data .button.wc-forward:hover {
		color: #ffffff;
	}
	
	.below-header-user-select .ast-site-header-cart .widget,
	.ast-above-header-section .ast-site-header-cart .widget a,
	.below-header-user-select .ast-site-header-cart .widget_shopping_cart a {
		color: #323232;
	}
	
	.below-header-user-select .ast-site-header-cart .widget_shopping_cart a:hover,
	.ast-above-header-section .ast-site-header-cart .widget_shopping_cart a:hover,
	.below-header-user-select .ast-site-header-cart .widget_shopping_cart a.remove:hover,
	.ast-above-header-section .ast-site-header-cart .widget_shopping_cart a.remove:hover {
		color: #f89623;
	}
	
	.woocommerce ul.product-categories > li ul li:before {
		content: "\e900";
		padding: 0 5px 0 5px;
		display: inline-block;
		font-family: Astra;
		transform: rotate(-90deg);
		font-size: 0.7rem;
	}
	
	@media (min-width:545px) and (max-width:921px) {
		.woocommerce.tablet-columns-6 ul.products li.product,
		.woocommerce-page.tablet-columns-6 ul.products li.product {
			width: calc(16.66% - 16.66px);
		}
		.woocommerce.tablet-columns-5 ul.products li.product,
		.woocommerce-page.tablet-columns-5 ul.products li.product {
			width: calc(20% - 16px);
		}
		.woocommerce.tablet-columns-4 ul.products li.product,
		.woocommerce-page.tablet-columns-4 ul.products li.product {
			width: calc(25% - 15px);
		}
		.woocommerce.tablet-columns-3 ul.products li.product,
		.woocommerce-page.tablet-columns-3 ul.products li.product {
			width: calc(33.33% - 14px);
		}
		.woocommerce.tablet-columns-2 ul.products li.product,
		.woocommerce-page.tablet-columns-2 ul.products li.product {
			width: calc(50% - 10px);
		}
		.woocommerce.tablet-columns-1 ul.products li.product,
		.woocommerce-page.tablet-columns-1 ul.products li.product {
			width: 100%;
		}
		.woocommerce div.product .related.products ul.products li.product {
			width: calc(33.33% - 14px);
		}
	}
	
	@media (min-width:545px) and (max-width:921px) {
		.woocommerce[class*="columns-"].columns-3 > ul.products li.product,
		.woocommerce[class*="columns-"].columns-4 > ul.products li.product,
		.woocommerce[class*="columns-"].columns-5 > ul.products li.product,
		.woocommerce[class*="columns-"].columns-6 > ul.products li.product {
			width: calc(33.33% - 14px);
			margin-right: 20px;
		}
		.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n),
		.woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n),
		.woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n),
		.woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n) {
			margin-right: 0;
			clear: right;
		}
		.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n+1),
		.woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n+1),
		.woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n+1),
		.woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n+1) {
			clear: left;
		}
		.woocommerce[class*="columns-"] ul.products li.product:nth-child(n),
		.woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n) {
			margin-right: 20px;
			clear: none;
		}
		.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n),
		.woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n),
		.woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n),
		.woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n),
		.woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n),
		.woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n),
		.woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n),
		.woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n),
		.woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n),
		.woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n) {
			margin-right: 0;
			clear: right;
		}
		.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n+1),
		.woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n+1),
		.woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n+1),
		.woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n+1),
		.woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n+1),
		.woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n+1),
		.woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n+1),
		.woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n+1),
		.woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n+1),
		.woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n+1) {
			clear: left;
		}
		.woocommerce div.product .related.products ul.products li.product:nth-child(3n),
		.woocommerce-page.tablet-columns-1 .site-main ul.products li.product {
			margin-right: 0;
			clear: right;
		}
		.woocommerce div.product .related.products ul.products li.product:nth-child(3n+1) {
			clear: left;
		}
	}
	
	@media (min-width:922px) {
		.woocommerce #reviews #comments {
			width: 55%;
			float: left;
		}
		.woocommerce #reviews #review_form_wrapper {
			width: 45%;
			padding-left: 2em;
			float: right;
		}
		.woocommerce form.checkout_coupon {
			width: 50%;
		}
	}
	
	@media (max-width:921px) {
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart,
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart {
			padding-right: 0;
			padding-left: 0;
		}
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .main-header-bar {
			text-align: center;
		}
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-site-header-cart,
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-mobile-menu-buttons {
			display: inline-block;
		}
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-2.ast-mobile-header-inline .site-branding {
			flex: auto;
		}
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .site-branding {
			flex: 0 0 100%;
		}
		.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .main-header-container {
			display: flex;
			justify-content: center;
		}
		.woocommerce-cart .woocommerce-shipping-calculator .button {
			width: 100%;
		}
		.woocommerce div.product div.images,
		.woocommerce div.product div.summary,
		.woocommerce #content div.product div.images,
		.woocommerce #content div.product div.summary,
		.woocommerce-page div.product div.images,
		.woocommerce-page div.product div.summary,
		.woocommerce-page #content div.product div.images,
		.woocommerce-page #content div.product div.summary {
			float: none;
			width: 100%;
		}
		.woocommerce-cart table.cart td.actions .ast-return-to-shop {
			display: block;
			text-align: center;
			margin-top: 1em;
		}
	}
	
	@media (max-width:544px) {
		.ast-separate-container .ast-woocommerce-container {
			padding: .54em 1em 1.33333em;
		}
		.woocommerce-message,
		.woocommerce-error,
		.woocommerce-info {
			display: flex;
			flex-wrap: wrap;
		}
		.woocommerce-message a.button,
		.woocommerce-error a.button,
		.woocommerce-info a.button {
			order: 1;
			margin-top: .5em;
		}
		.woocommerce .woocommerce-ordering,
		.woocommerce-page .woocommerce-ordering {
			float: none;
			margin-bottom: 2em;
			width: 100%;
		}
		.woocommerce ul.products a.button,
		.woocommerce-page ul.products a.button {
			padding: 0.5em 0.75em;
		}
		.woocommerce table.cart td.actions .button,
		.woocommerce #content table.cart td.actions .button,
		.woocommerce-page table.cart td.actions .button,
		.woocommerce-page #content table.cart td.actions .button {
			padding-left: 1em;
			padding-right: 1em;
		}
		.woocommerce #content table.cart .button,
		.woocommerce-page #content table.cart .button {
			width: 100%;
		}
		.woocommerce #content table.cart .product-thumbnail,
		.woocommerce-page #content table.cart .product-thumbnail {
			display: block;
			text-align: center !important;
		}
		.woocommerce #content table.cart .product-thumbnail::before,
		.woocommerce-page #content table.cart .product-thumbnail::before {
			display: none;
		}
		.woocommerce #content table.cart td.actions .coupon,
		.woocommerce-page #content table.cart td.actions .coupon {
			float: none;
		}
		.woocommerce #content table.cart td.actions .coupon .button,
		.woocommerce-page #content table.cart td.actions .coupon .button {
			flex: 1;
		}
		.woocommerce #content div.product .woocommerce-tabs ul.tabs li a,
		.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a {
			display: block;
		}
		.woocommerce div.product .related.products ul.products li.product,
		.woocommerce.mobile-columns-2 ul.products li.product,
		.woocommerce-page.mobile-columns-2 ul.products li.product {
			width: calc(50% - 10px);
		}
		.woocommerce.mobile-columns-6 ul.products li.product,
		.woocommerce-page.mobile-columns-6 ul.products li.product {
			width: calc(16.66% - 16.66px);
		}
		.woocommerce.mobile-columns-5 ul.products li.product,
		.woocommerce-page.mobile-columns-5 ul.products li.product {
			width: calc(20% - 16px);
		}
		.woocommerce.mobile-columns-4 ul.products li.product,
		.woocommerce-page.mobile-columns-4 ul.products li.product {
			width: calc(25% - 15px);
		}
		.woocommerce.mobile-columns-3 ul.products li.product,
		.woocommerce-page.mobile-columns-3 ul.products li.product {
			width: calc(33.33% - 14px);
		}
		.woocommerce.mobile-columns-1 ul.products li.product,
		.woocommerce-page.mobile-columns-1 ul.products li.product {
			width: 100%;
		}
	}
	
	@media (max-width:544px) {
		.woocommerce[class*="columns-"].columns-3 > ul.products li.product,
		.woocommerce[class*="columns-"].columns-4 > ul.products li.product,
		.woocommerce[class*="columns-"].columns-5 > ul.products li.product,
		.woocommerce[class*="columns-"].columns-6 > ul.products li.product {
			width: calc(50% - 10px);
			margin-right: 20px;
		}
		.woocommerce ul.products a.button.loading::after,
		.woocommerce-page ul.products a.button.loading::after {
			display: inline-block;
			margin-left: 5px;
			position: initial;
		}
		.woocommerce.mobile-columns-1 .site-main ul.products li.product:nth-child(n),
		.woocommerce-page.mobile-columns-1 .site-main ul.products li.product:nth-child(n) {
			margin-right: 0;
		}
		.woocommerce #content div.product .woocommerce-tabs ul.tabs li,
		.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li {
			display: block;
			margin-right: 0;
		}
		.woocommerce[class*="columns-"] ul.products li.product:nth-child(n),
		.woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n) {
			margin-right: 20px;
			clear: none;
		}
		.woocommerce-page[class*=columns-].columns-3>ul.products li.product:nth-child(2n),
		.woocommerce-page[class*=columns-].columns-4>ul.products li.product:nth-child(2n),
		.woocommerce-page[class*=columns-].columns-5>ul.products li.product:nth-child(2n),
		.woocommerce-page[class*=columns-].columns-6>ul.products li.product:nth-child(2n),
		.woocommerce[class*=columns-].columns-3>ul.products li.product:nth-child(2n),
		.woocommerce[class*=columns-].columns-4>ul.products li.product:nth-child(2n),
		.woocommerce[class*=columns-].columns-5>ul.products li.product:nth-child(2n),
		.woocommerce[class*=columns-].columns-6>ul.products li.product:nth-child(2n) {
			margin-right: 0;
			clear: right;
		}
		.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(2n+1),
		.woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(2n+1),
		.woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(2n+1),
		.woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(2n+1) {
			clear: left;
		}
		.woocommerce-page[class*=columns-] ul.products li.product:nth-child(n),
		.woocommerce[class*=columns-] ul.products li.product:nth-child(n) {
			margin-right: 20px;
			clear: none;
		}
		.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n),
		.woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n),
		.woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n),
		.woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n),
		.woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n),
		.woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n),
		.woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n),
		.woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n),
		.woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n),
		.woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n),
		.woocommerce div.product .related.products ul.products li.product:nth-child(2n) {
			margin-right: 0;
			clear: right;
		}
		.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n+1),
		.woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n+1),
		.woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n+1),
		.woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n+1),
		.woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n+1),
		.woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n+1),
		.woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n+1),
		.woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n+1),
		.woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n+1),
		.woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n+1),
		.woocommerce div.product .related.products ul.products li.product:nth-child(2n+1) {
			clear: left;
		}
	}
	
	@media (min-width:922px) {
		.woocommerce #content .ast-woocommerce-container div.product div.images,
		.woocommerce .ast-woocommerce-container div.product div.images,
		.woocommerce-page #content .ast-woocommerce-container div.product div.images,
		.woocommerce-page .ast-woocommerce-container div.product div.images {
			width: 50%;
		}
		.woocommerce #content .ast-woocommerce-container div.product div.summary,
		.woocommerce .ast-woocommerce-container div.product div.summary,
		.woocommerce-page #content .ast-woocommerce-container div.product div.summary,
		.woocommerce-page .ast-woocommerce-container div.product div.summary {
			width: 46%;
		}
		.woocommerce.woocommerce-checkout form #customer_details.col2-set .col-1,
		.woocommerce.woocommerce-checkout form #customer_details.col2-set .col-2,
		.woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-1,
		.woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-2 {
			float: none;
			width: auto;
		}
	}
	
	.woocommerce a.button,
	.woocommerce button.button.alt,
	.woocommerce-page table.cart td.actions .button,
	.woocommerce-page #content table.cart td.actions .button,
	.woocommerce a.button.alt,
	.woocommerce .woocommerce-message a.button,
	.ast-site-header-cart .widget_shopping_cart .buttons .button.checkout,
	.woocommerce button.button.alt.disabled,
	.wc-block-grid__products .wc-block-grid__product .wp-block-button__link {
		border: solid;
		border-top-width: 0;
		border-right-width: 0;
		border-left-width: 0;
		border-bottom-width: 0;
		border-color: #00ab9f;
	}
	
	.woocommerce a.button:hover,
	.woocommerce button.button.alt:hover,
	.woocommerce-page table.cart td.actions .button:hover,
	.woocommerce-page #content table.cart td.actions .button:hover,
	.woocommerce a.button.alt:hover,
	.woocommerce .woocommerce-message a.button:hover,
	.ast-site-header-cart .widget_shopping_cart .buttons .button.checkout:hover,
	.woocommerce button.button.alt.disabled:hover,
	.wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover {
		border-color: #52898b;
	}
	
	.widget_product_search button {
		flex: 0 0 auto;
		padding: 10px 20px;
		;
	}
	
	@media (min-width:922px) {
		.woocommerce.woocommerce-checkout form #customer_details.col2-set,
		.woocommerce-page.woocommerce-checkout form #customer_details.col2-set {
			width: 55%;
			float: left;
			margin-right: 4.347826087%;
		}
		.woocommerce.woocommerce-checkout form #order_review,
		.woocommerce.woocommerce-checkout form #order_review_heading,
		.woocommerce-page.woocommerce-checkout form #order_review,
		.woocommerce-page.woocommerce-checkout form #order_review_heading {
			width: 40%;
			float: right;
			margin-right: 0;
			clear: right;
		}
	}
	</style>
	<style id="woocommerce-inline-inline-css">
	.woocommerce form .form-row .required {
		visibility: visible;
	}
	</style>
	<link rel="stylesheet" id="codemirror-css" href="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/lib/codemirror.min.css?ver=5.40.5" media="all">
	<link rel="stylesheet" id="codemirror-blocks--css" href="https://payunit.net/wp-content/plugins/wp-codemirror-block/assets/blocks/blocks.style.build.min.css?ver=1622842221" media="all">
	<link rel="stylesheet" id="theplus-front-css-css" href="//payunit.net/wp-content/uploads/theplus-addons/theplus-post-597.min.css?ver=1639655629" media="all">
	<link rel="stylesheet" id="plus-icons-mind-css-css" href="//payunit.net/wp-content/plugins/theplus_elementor_addon/assets/css/extra/iconsmind.min.css?ver=4.1.10" media="all">
	<link rel="stylesheet" id="elementor-icons-css" href="https://payunit.net/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.11.0" media="all">
	<link rel="stylesheet" id="elementor-animations-css" href="https://payunit.net/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.1.4" media="all">
	<link rel="stylesheet" id="elementor-frontend-legacy-css" href="https://payunit.net/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.1.4" media="all">
	<link rel="stylesheet" id="elementor-frontend-css" href="https://payunit.net/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.1.4" media="all">
	<link rel="stylesheet" id="elementor-post-2591-css" href="https://payunit.net/wp-content/uploads/elementor/css/post-2591.css?ver=1635449602" media="all">
	<link rel="stylesheet" id="elementor-pro-css" href="https://payunit.net/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.2.1" media="all">
	<link rel="stylesheet" id="ooohboi-steroids-styles-css" href="https://payunit.net/wp-content/plugins/ooohboi-steroids-for-elementor/assets/css/main.css?ver=1.7.2050420217" media="all">
	<link rel="stylesheet" id="jet-tricks-frontend-css" href="https://payunit.net/wp-content/plugins/jet-tricks/assets/css/jet-tricks-frontend.css?ver=1.3.5" media="all">
	<link rel="stylesheet" id="font-awesome-5-all-css" href="https://payunit.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=4.6.3" media="all">
	<link rel="stylesheet" id="font-awesome-4-shim-css" href="https://payunit.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=4.6.3" media="all">
	<link rel="stylesheet" id="elementor-global-css" href="https://payunit.net/wp-content/uploads/elementor/css/global.css?ver=1630594448" media="all">
	<link rel="stylesheet" id="elementor-post-173-css" href="https://payunit.net/wp-content/uploads/elementor/css/post-173.css?ver=1630594448" media="all">
	<link rel="stylesheet" id="elementor-post-177-css" href="https://payunit.net/wp-content/uploads/elementor/css/post-177.css?ver=1630594448" media="all">
	<link rel="stylesheet" id="elementor-post-332-css" href="https://payunit.net/wp-content/uploads/elementor/css/post-332.css?ver=1630598905" media="all">
	<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.7.2" media="all">
	<script src="https://payunit.net/wp-includes/js/jquery/jquery.min.js?ver=3.5.1" id="jquery-core-js"></script>
	<script src="https://payunit.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
	<script src="https://payunit.net/wp-content/plugins/captcha-bank/assets/global/plugins/custom/js/front-end-script.js?ver=5.7.2" id="captcha-bank-front-end-script.js-js"></script>
	<!--[if IE]>
    <script src='https://payunit.net/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=3.7.2' id='astra-flexibility-js'></script>
    <script id='astra-flexibility-js-after'>
    flexibility(document.documentElement);
    </script>
    <![endif]-->
	<script src="//maps.googleapis.com/maps/api/js?key=&amp;sensor=false" id="gmaps-js-js"></script>
	<script src="https://payunit.net/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=4.6.3" id="font-awesome-4-shim-js"></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://payunit.net/xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://payunit.net/wp-includes/wlwmanifest.xml">
	<link rel="canonical" href="https://payunit.net/docs/rest-api/">
	<link rel="shortlink" href="https://payunit.net/?p=597">
	<link rel="alternate" type="application/json+oembed" href="https://payunit.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpayunit.net%2Fdocs%2Frest-api%2F">
	<link rel="alternate" type="text/xml+oembed" href="https://payunit.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpayunit.net%2Fdocs%2Frest-api%2F&amp;format=xml">
	<style type="text/css">
	.betterdocs-wraper.betterdocs-main-wraper {
		background-color: #ffffff;
	}
	
	.betterdocs-archive-wrap.betterdocs-archive-main {
		padding-top: 50px;
		padding-bottom: 50px;
		padding-left: 0px;
		padding-right: 0px;
	}
	
	.betterdocs-archive-wrap.betterdocs-archive-main {
		width: 100%;
		max-width: 1600px;
	}
	
	.betterdocs-categories-wrap.single-kb.layout-masonry .docs-single-cat-wrap {
		margin-bottom: 15px;
	}
	
	.betterdocs-categories-wrap.single-kb.layout-flex .docs-single-cat-wrap {
		margin: 15px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap {
		padding-top: 20px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap,
	.betterdocs-archive-main .docs-item-container {
		padding-right: 20px;
		padding-left: 20px;
	}
	
	.betterdocs-archive-main .docs-item-container {
		padding-bottom: 20px;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap,
	.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap.docs-cat-list-2-box {
		padding-top: 20px;
		padding-right: 20px;
		padding-left: 20px;
		padding-bottom: 20px;
	}
	
	.betterdocs-categories-wrap.betterdocs-category-box .docs-single-cat-wrap p {
		color: #566e8b;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap,
	.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-cat-title-wrap {
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap,
	.betterdocs-categories-wrap.single-kb .docs-single-cat-wrap .docs-item-container {
		border-bottom-right-radius: 5px;
		border-bottom-left-radius: 5px;
	}
	
	.betterdocs-category-list .betterdocs-categories-wrap .docs-single-cat-wrap,
	.betterdocs-category-box.white-bg .docs-single-cat-wrap,
	.betterdocs-categories-wrap.white-bg .docs-single-cat-wrap {
		background-color: #fff;
	}
	
	.betterdocs-category-box.single-kb.ash-bg .docs-single-cat-wrap {
		background-color: #f8f8fc;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap:hover,
	.betterdocs-categories-wrap.single-kb.white-bg .docs-single-cat-wrap.docs-cat-list-2-box:hover {
		background-color: #fff;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap img {
		margin-bottom: 20px;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
	.pro-layout-4.single-kb .docs-cat-list-2-box-content .docs-cat-title {
		margin-bottom: 15px;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap p {
		margin-bottom: 15px;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap span {}
	
	.docs-cat-title > img {
		height: 32px;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap img {
		height: 80px;
	}
	
	.single-kb .docs-cat-title-inner .docs-cat-heading,
	.betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
	.single-kb .docs-cat-list-2-box .docs-cat-title,
	.single-kb .docs-cat-list-2-items .docs-cat-title {
		font-size: 20px;
	}
	
	.docs-cat-title-inner .docs-cat-heading {
		color: #528ffe;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap .docs-cat-title,
	.single-kb .docs-cat-list-2 .docs-cat-title {
		color: #333333;
	}
	
	.docs-cat-title-inner {
		border-color: #528ffe;
	}
	
	.docs-cat-title-inner span {
		color: #ffffff;
		font-size: 15px;
	}
	
	.betterdocs-category-box.single-kb .docs-single-cat-wrap span,
	.single-kb .docs-cat-list-2-box .title-count span {
		color: #707070;
		font-size: 15px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-cat-title-wrap .docs-item-count span {
		font-size: 15px;
	}
	
	.betterdocs-categories-wrap .docs-item-count {
		background-color: #528ffe;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-cat-title-inner span {
		background-color: rgba(82, 143, 254, 0.44);
		width: 30px;
		height: 30px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-item-container {
		background-color: #ffffff;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-item-container li,
	.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat-title {
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		margin-left: 10px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-item-container li svg {
		fill: #566e8b;
		font-size: 15px;
		min-width: 15px;
	}
	
	.betterdocs-categories-wrap.single-kb li a {
		color: #566e8b;
		font-size: 15px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li a {
		color: #566e8b;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li a:hover {
		color: #566e8b;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat li svg {
		fill: #566e8b;
	}
	
	.betterdocs-categories-wrap.single-kb li a:hover {
		color: #566e8b;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-item-container .docs-sub-cat-title svg {
		fill: #566e8b;
		font-size: 15px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-sub-cat-title a {
		color: #566e8b;
		font-size: 17px;
	}
	
	.betterdocs-categories-wrap.single-kb .docs-sub-cat-title a:hover {
		color: #566e8b;
	}
	
	.docs-cat-link-btn,
	.docs-cat-link-btn:visited {
		background-color: #ffffff;
		font-size: 16px;
		color: #528ffe;
		border-color: #528ffe;
		border-top-left-radius: 50px;
		border-top-right-radius: 50px;
		border-bottom-right-radius: 50px;
		border-bottom-left-radius: 50px;
		padding-top: 10px;
		padding-right: 20px;
		padding-bottom: 10px;
		padding-left: 20px;
	}
	
	.docs-cat-link-btn:hover {
		background-color: #528ffe;
		color: #fff;
		border-color: #528ffe;
	}
	
	.betterdocs-single-bg .betterdocs-content-area,
	.betterdocs-single-bg .betterdocs-content-full {
		background-color: ;
	}
	
	.betterdocs-single-wraper .betterdocs-content-area {
		padding-top: 30px;
		padding-right: 25px;
		padding-bottom: 30px;
		padding-left: 25px;
	}
	
	.betterdocs-single-wraper .betterdocs-content-area .docs-single-main {
		padding-top: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		padding-left: 20px;
	}
	
	.betterdocs-single-layout2 .docs-content-full-main .doc-single-content-wrapper {
		padding-top: 0px;
		padding-right: 0px;
		padding-bottom: 0px;
		padding-left: 0px;
	}
	
	.betterdocs-single-layout3 .docs-content-full-main .doc-single-content-wrapper {
		padding-top: 0px;
		padding-right: 0px;
		padding-bottom: 0px;
		padding-left: 0px;
	}
	
	.docs-single-title .betterdocs-entry-title {
		font-size: 36px;
		color: #3f5876;
	}
	
	.betterdocs-breadcrumb .betterdocs-breadcrumb-item a {
		font-size: 16px;
		color: #566e8b;
	}
	
	.betterdocs-breadcrumb .betterdocs-breadcrumb-list .betterdocs-breadcrumb-item a:hover {
		color: #566e8b;
	}
	
	.betterdocs-breadcrumb .breadcrumb-delimiter {
		color: #566e8b;
	}
	
	.betterdocs-breadcrumb-item.current span {
		font-size: 16px;
		color: #f79623;
	}
	
	.betterdocs-toc {
		background-color: #fff;
		padding-top: 20px;
		padding-right: 25px;
		padding-bottom: 20px;
		padding-left: 20px;
	}
	
	.betterdocs-entry-content .betterdocs-toc {
		margin-bottom: 20px;
	}
	
	.sticky-toc-container {
		width: 320px;
	}
	
	.sticky-toc-container.toc-sticky {
		z-index: 2;
		margin-top: 0px;
	}
	
	.betterdocs-toc > .toc-title {
		color: #3f5876;
		font-size: 18px;
	}
	
	.betterdocs-entry-content .betterdocs-toc.collapsible-sm .angle-icon {
		color: #3f5876;
	}
	
	.betterdocs-toc > .toc-list a {
		color: #566e8b;
		font-size: 14px;
		margin-top: 5px;
		margin-right: 0px;
		margin-bottom: 5px;
		margin-left: 0px;
	}
	
	.betterdocs-toc > .toc-list li a:before {
		font-size: 12px;
		color: #566e8b;
	}
	
	.betterdocs-toc > .toc-list li:before {
		padding-top: 5px;
	}
	
	.betterdocs-toc > .toc-list a:hover {
		color: #f79623;
	}
	
	.feedback-form-link .feedback-form-icon svg,
	.feedback-form-link .feedback-form-icon img {
		width: 26px;
	}
	
	.betterdocs-toc > .toc-list a.active {
		color: #f79623;
	}
	
	.betterdocs-content {
		color: #4d4d4d;
		font-size: 16px;
	}
	
	.betterdocs-social-share .betterdocs-social-share-heading h5 {
		color: #566e8b;
	}
	
	.betterdocs-entry-footer .feedback-form-link {
		color: #566e8b;
		font-size: 15px;
	}
	
	.betterdocs-entry-footer .feedback-update-form .feedback-form-link:hover {
		color: #566e8b;
	}
	
	.betterdocs-entry-footer .feedback-form .modal-content .feedback-form-title {
		color: #3f5876;
		font-size: 21px;
	}
	
	.docs-navigation a {
		color: #3f5876;
		font-size: 16px;
	}
	
	.docs-navigation a:hover {
		color: #3f5876;
	}
	
	.docs-navigation a svg {
		fill: #f79623;
		min-width: 16px;
		width: 16px;
	}
	
	.betterdocs-entry-footer .update-date {
		color: #566e8b;
		font-size: 14px;
	}
	
	.betterdocs-credit p {
		color: #201d3a;
		font-size: 14px;
	}
	
	.betterdocs-credit p a {
		color: #528fff;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap,
	.betterdocs-category-wraper .betterdocs-full-sidebar-left {
		background-color: #ffffff;
	}
	
	.betterdocs-single-layout1 .betterdocs-sidebar-content .betterdocs-categories-wrap {
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
		border-bottom-left-radius: 5px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .docs-cat-title-wrap {
		background-color: #ffffff;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title > img {
		height: 24px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .docs-cat-heading {
		color: #3f5876;
		font-size: 16px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .docs-cat-heading:hover {
		color: #3f5876 !important;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-cat-title-inner .cat-list-arrow-down {
		color: #3f5876;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .active-title .docs-cat-title-inner .docs-cat-heading,
	.betterdocs-sidebar-content.betterdocs-category-sidebar .active-title .docs-cat-title-inner .docs-cat-heading,
	.betterdocs-category-wraper .betterdocs-full-sidebar-left .docs-cat-title-wrap::after {
		color: #3f5876;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-count {
		background-color: #05ab9f;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-count span {
		background-color: rgba(82, 143, 255, 0.2);
		color: #ffffff;
		font-size: 12px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-single-cat-wrap {
		margin-top: 5px;
		margin-right: 0px;
		margin-bottom: 5px;
		margin-left: 0px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap,
	.betterdocs-full-sidebar-left .betterdocs-categories-wrap {
		padding-top: 0px;
		padding-right: 0px;
		padding-bottom: 0px;
		padding-left: 0px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-single-cat-wrap .docs-cat-title-wrap {
		padding-top: 10px;
		padding-right: 15px;
		padding-bottom: 10px;
		padding-left: 15px;
	}
	
	.betterdocs-single-layout2 .betterdocs-full-sidebar-left .betterdocs-sidebar-content .betterdocs-categories-wrap .docs-cat-title-inner {
		background-color: #ffffff;
		padding-top: 10px;
		padding-right: 15px;
		padding-bottom: 10px;
		padding-left: 15px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-item-container {
		background-color: #ffffff;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .docs-single-cat-wrap .docs-cat-title-wrap.active-title {
		background-color: rgba(90, 148, 255, .1);
		border-color: #f79623;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap .docs-item-container li {
		padding-left: 0;
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		margin-left: 10px;
	}
	
	.betterdocs-single-layout2 .betterdocs-sidebar-content .betterdocs-categories-wrap .docs-item-container li {
		margin-right: 0 !important;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li a {
		color: #566e8b;
		font-size: 14px;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li a:hover {
		color: #f79623;
	}
	
	.betterdocs-sidebar-content.betterdocs-category-sidebar .betterdocs-categories-wrap li svg {
		fill: #566e8b;
		font-size: 14px;
	}
	
	.betterdocs-sidebar-content .betterdocs-categories-wrap li a.active,
	.betterdocs-sidebar-content .betterdocs-categories-wrap li.sub-list a.active {
		color: #f79623;
	}
	
	.betterdocs-category-wraper.betterdocs-single-wraper {}
	
	.betterdocs-category-wraper.betterdocs-single-wraper .docs-listing-main .docs-category-listing {
		background-color: #ffffff;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 0px;
		margin-left: 0px;
		padding-top: 30px;
		padding-right: 30px;
		padding-bottom: 30px;
		padding-left: 30px;
		border-radius: 5px;
	}
	
	.betterdocs-category-wraper .docs-category-listing .docs-cat-title .docs-cat-heading {
		color: #52898b;
		font-size: 20px;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 20px;
		margin-left: 0px;
	}
	
	.betterdocs-category-wraper .docs-category-listing .docs-cat-title p {
		color: #566e8b;
		font-size: 14px;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 20px;
		margin-left: 0px;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li,
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title {
		margin-top: 10px;
		margin-right: 0px;
		margin-bottom: 10px;
		margin-left: 0px;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li svg {
		fill: #566e8b;
		font-size: 16px;
		min-width: 16px;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li a {
		color: #566e8b;
		font-size: 14px;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list ul li a:hover {
		color: #f79623;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li a {
		color: #566e8b;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li a:hover {
		color: #566e8b;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat li svg {
		fill: #566e8b;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title svg {
		fill: #566e8b;
		font-size: 15px;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title a {
		color: #566e8b;
		font-size: 17px;
	}
	
	.betterdocs-category-wraper .docs-listing-main .docs-category-listing .docs-list .docs-sub-cat-title a:hover {
		color: #566e8b;
	}
	
	.betterdocs-search-form-wrap {
		background-color: #f7f7f7;
		padding-top: 50px;
		padding-right: 20px;
		padding-bottom: 50px;
		padding-left: 20px;
	}
	
	.betterdocs-search-heading h2 {
		line-height: 1.2;
		font-size: 40px;
		color: #566e8b;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 20px;
		margin-left: 0px;
	}
	
	.betterdocs-search-heading h3 {
		line-height: 1.2;
		font-size: 16px;
		color: #566e8b;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 20px;
		margin-left: 0px;
	}
	
	.betterdocs-searchform {
		background-color: #ffffff;
		border-radius: 8px;
		padding-top: 22px;
		padding-right: 15px;
		padding-bottom: 22px;
		padding-left: 15px;
	}
	
	.betterdocs-searchform .betterdocs-search-field {
		font-size: 18px;
		color: #595959;
	}
	
	.betterdocs-searchform svg.docs-search-icon {
		fill: #444b54;
		height: 30px;
	}
	
	.docs-search-close path.close-line {
		fill: #ff697b;
	}
	
	.docs-search-close path.close-border {
		fill: #444b54;
	}
	
	.docs-search-loader {
		stroke: #444b54;
	}
	
	.betterdocs-searchform svg.docs-search-icon:hover {
		fill: #444b54;
	}
	
	.betterdocs-live-search .docs-search-result {
		width: 100%;
		max-width: 800px;
		background-color: #fff;
		border-color: #f1f1f1;
	}
	
	.betterdocs-search-result-wrap::before {
		border-color: transparent transparent #fff;
	}
	
	.betterdocs-live-search .docs-search-result li {
		border-color: #f5f5f5;
	}
	
	.betterdocs-live-search .docs-search-result li a {
		font-size: 16px;
		color: #444444;
		padding-top: 10px;
		padding-right: 10px;
		padding-bottom: 10px;
		padding-left: 10px;
	}
	
	.betterdocs-live-search .docs-search-result li:only-child {
		font-size: 16px;
		color: #444444;
	}
	
	.betterdocs-live-search .docs-search-result li:hover {
		background-color: #f5f5f5;
	}
	
	.betterdocs-live-search .docs-search-result li a:hover {
		color: #444444;
	}
	
	.betterdocs-category-box.pro-layout-3 .docs-single-cat-wrap img,
	.docs-cat-list-2-box img {
		margin-right: 20px;
	}
	
	.betterdocs-wraper .betterdocs-search-form-wrap.cat-layout-4 {
		padding-bottom: 130px;
	}
	
	.elementor-heading-title,
	.elementor-heading-title a {
		color: #52898B;
		font-family: "Montserrat", Sans-serif;
		font-weight: 600;
	}
	</style>
	<!--<script>
            jQuery(document).ready(function() {
                var masonryGrid = jQuery(".betterdocs-categories-wrap.layout-masonry");
                var columnPerGrid = jQuery(".betterdocs-categories-wrap.layout-masonry").attr('data-column');
                var masonryItem = jQuery(".betterdocs-categories-wrap.layout-masonry .docs-single-cat-wrap");
                var doc_page_column_space = ;
                var total_margin = columnPerGrid * doc_page_column_space;
                if (masonryGrid.length) {
                    masonryItem.css("width", "calc((100% - "+total_margin+"px) / "+parseInt(columnPerGrid)+")");
                    masonryGrid.masonry({
                        itemSelector: ".docs-single-cat-wrap",
                        percentPosition: true,
                        gutter: doc_page_column_space
                    });
                }
            });
        </script>-->
	<style></style>
	<noscript>
		<style>
		.woocommerce-product-gallery {
			opacity: 1 !important;
		}
		</style>
	</noscript>
	<!-- Facebook Pixel Code -->
	<script>
	! function(f, b, e, v, n, t, s) {
		if(f.fbq) return;
		n = f.fbq = function() {
			n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
		};
		if(!f._fbq) f._fbq = n;
		n.push = n;
		n.loaded = !0;
		n.version = '2.0';
		n.queue = [];
		t = b.createElement(e);
		t.async = !0;
		t.src = v;
		s = b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t, s)
	}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '677369153120189');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=677369153120189&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
	<style>
	.recentcomments a {
		display: inline !important;
		padding: 0 !important;
		margin: 0 !important;
	}
	</style>
	<link rel="icon" href="https://payunit.net/wp-content/uploads/2020/11/PayUnit-icon-100x100.png" sizes="32x32">
	<link rel="icon" href="https://payunit.net/wp-content/uploads/2020/11/PayUnit-icon.png" sizes="192x192">
	<link rel="apple-touch-icon" href="https://payunit.net/wp-content/uploads/2020/11/PayUnit-icon.png">
	<meta name="msapplication-TileImage" content="https://payunit.net/wp-content/uploads/2020/11/PayUnit-icon.png">
	<style id="wp-custom-css">
	html,
	body {
		overflow-x: hidden;
	}
	
	.run-code {
		display: none;
	}
	</style>
	<link rel="stylesheet" id="CodeMirror-theme-material-css" href="https://payunit.net/wp-content/plugins/wp-codemirror-block/vendor/codemirror/theme/material.css">
	<style>
	.plus-smooth-scroll-tras .magic-scroll .parallax-scroll,
	.plus-smooth-scroll-tras .magic-scroll .scale-scroll,
	.plus-smooth-scroll-tras .magic-scroll .both-scroll {
		-webkit-transition: -webkit-transform 0s ease .0s;
		-ms-transition: -ms-transform 0s ease .0s;
		-moz-transition: -moz-transform 0s ease .0s;
		-o-transition: -o-transform 0s ease .0s;
		transition: transform 0s ease .0s;
		will-change: transform;
	}
	</style>
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/3/common.js"></script>
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/3/util.js"></script>
</head>

<body>
	<div class="elementor-row">
		<div class="jet-sticky-column elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-10966e03 sticky-parent"></div>
		<div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-6d2b9620">
			<div class="elementor-element elementor-element-713f0c39 elementor-widget elementor-widget-betterdocs-content is-mac" data-id="713f0c39" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="betterdocs-content.default">
				<h1 id="betterdocs-entry-title" class="product_title entry-title elementor-heading-title">REST-API</h1>
				<div class="elementor-widget-container">
					<div class="betterdocs-print-pdf"> <span class="betterdocs-print-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="20px"><path fill="#66798f" d="M14 16H66V24H14z"></path><path fill="#b0c1d4" d="M8,63.5c-3,0-5.5-2.5-5.5-5.5V26c0-3,2.5-5.5,5.5-5.5h64c3,0,5.5,2.5,5.5,5.5v32 c0,3-2.5,5.5-5.5,5.5H8z"></path><path fill="#66798f" d="M72,21c2.8,0,5,2.2,5,5v32c0,2.8-2.2,5-5,5H8c-2.8,0-5-2.2-5-5V26c0-2.8,2.2-5,5-5H72 M72,20H8 c-3.3,0-6,2.7-6,6v32c0,3.3,2.7,6,6,6h64c3.3,0,6-2.7,6-6V26C78,22.7,75.3,20,72,20L72,20z"></path><path fill="#fff" d="M16.5 2.5H63.5V23.5H16.5z"></path><path fill="#788b9c" d="M63,3v20H17V3H63 M64,2H16v22h48V2L64,2z"></path><path fill="#8bb7f0" d="M22,41.5c-3,0-5.5-2.5-5.5-5.5V20.5h47V36c0,3-2.5,5.5-5.5,5.5H22z"></path><path fill="#4e7ab5" d="M63,21v15c0,2.8-2.2,5-5,5H22c-2.8,0-5-2.2-5-5V21H63 M64,20H16v16c0,3.3,2.7,6,6,6h36 c3.3,0,6-2.7,6-6V20L64,20z"></path><path fill="#fff" d="M16.5 50.5H63.5V77.5H16.5z"></path><path fill="#788b9c" d="M63,51v26H17V51H63 M64,50H16v28h48V50L64,50z"></path><path fill="#d6e3ed" d="M17 52H63V56H17z"></path><path fill="#788b9c" d="M26 59H54V60H26zM26 67H54V68H26z"></path><g><path fill="#ffeea3" d="M70 28A2 2 0 1 0 70 32A2 2 0 1 0 70 28Z"></path></g><path fill="#66798f" d="M17,56v-4h46v4h2c1.7,0,3-1.3,3-3l0,0c0-1.7-1.3-3-3-3H15c-1.7,0-3,1.3-3,3l0,0c0,1.7,1.3,3,3,3H17z"></path></svg></span> </div>
					<div id="betterdocs-single-content" class="betterdocs-entry-content">
						<div id="betterdocs-single-content" class="betterdocs-content">
							<h3 id="block-e13965f9-74c5-4d08-aedb-635548746b43" class="betterdocs-content-heading"><br>Pre-requisites <a href="#0-toc-title" class="anchor" data-clipboard-text="https://payunit.net/docs/rest-api/#0-toc-title" data-title="Copy URL">#</a></h3>
							<!-- <ul id="block-745220f9-1a63-4a85-910c-ec27086b3fde">
								<li>Create an account on Payunit as a merchant. Click <a href="https://app.payunit.net/#/">to create an account</a>.</li>
								<li>Get the merchant Api User, merchant API key, and merchant API Password from the merchant dashboard under the credentials section</li>
							</ul> -->
							<!-- <figure class="wp-block-image size-large"><img loading="lazy" width="1659" height="571" src="https://payunit.net/wp-content/uploads/2021/04/Untitled-2.jpg" alt="" class="wp-image-1856"></figure> -->
							<p></p>
							<p>The Banking REST API provides a restful interface for frontend developers to make API calls.</p>
							<!-- <div class="wp-block-codemirror-blocks-code-block code-block" id="0">
                                <pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-0" style="display: none;">{
                                    "transaction_id:"6465464",
                                    "transaction_amount":"5000",
                                    "transaction_status":"SUCCESS",
                                    "error":null,
                                    "message":"Transaction of 5000 XAF was successfully completed"
                                    }
                                </pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 216px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">{</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-string">"transaction_id:"</span><span class="cm-number">6465464</span><span class="cm-string">",</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"</span>transaction_amount<span class="cm-string">":"</span><span class="cm-number">5000</span><span class="cm-string">",</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"</span>transaction_status<span class="cm-string">":"</span>SUCCESS<span class="cm-string">",</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"</span>error<span class="cm-string">":null,</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"</span>message<span class="cm-string">":"</span>Transaction of <span class="cm-number">5000</span> XAF was successfully completed<span class="cm-string">"</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-string">}</span></span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 216px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 246px;"></div>
									</div>
								</div>
							</div> -->
							<h3 class="betterdocs-content-heading" id="1-toc-title">Making the API calls<span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"></span></span></span></span></span></span></span></span></span></span> <a href="#1-toc-title" class="anchor" data-clipboard-text="https://payunit.net/docs/rest-api/#1-toc-title" data-title="Copy URL">#</a></h3>
							<p><strong>Base URL</strong> : <a href="http://127.0.0.1:8000/api">http://127.0.0.1:8000/api</a></p>
							<p><strong>Http Headers :</strong></p>
							<p>Specifications HTTP headers for <strong>non auth</strong> API calls</p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td>Http header</td>
											<td>Description</td>
										</tr>
										<tr>
											<td>Content-Type</td>
											<td>Content type supported is :&nbsp; application/json</td>
										</tr>
										<tr>
											<td>x-api-key</td>
											<td>Your api key</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p>Specifications HTTP headers for <strong>auth</strong> API calls</p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td>Http header</td>
											<td>Description</td>
										</tr>
										<tr>
											<td>Content-Type</td>
											<td>Content type supported is :&nbsp; application/json</td>
										</tr>
										<tr>
											<td>Authorization</td>
											<td>Http basic Auth encoded in Base 64 and formatted as follow :&nbsp;Basic Base64(apiUser:apiPassword)</td>
										</tr>
										<tr>
											<td>x-api-key</td>
											<td>Your api key</td>
										</tr>
									</tbody>
								</table>
							</figure>
                            <ol>
								<li><strong>Create a user</strong></li>
							</ol>
							<ul>
								<li><strong>End point</strong>: {BASE_URL}/register</li>
								<li>Request method: POST</li>
							</ul>
							<p></p>
							<p></p>
							<p><strong>Request body :&nbsp;</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Mandatory</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>name</td>
											<td>yes</td>
											<td>The name of the user</td>
										</tr>
										<tr>
											<td>email</td>
											<td>yes</td>
											<td>The email of the user</td>
										</tr>
                                        <tr>
											<td>password</td>
											<td>yes</td>
											<td>The password of the user</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p></p>
							<p></p>
							<p><strong>Example</strong>:</p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="1">
                                <pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;clojure&quot;,&quot;mime&quot;:&quot;text/x-clojure&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Clojure&quot;,&quot;modeName&quot;:&quot;clojure&quot;}" id="code-block-1" style="display: none;">curl -X POST \
                                    '{BASE_URL}/register' \
                                    -H 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDJlODYzZjMxYmM3ZGY2M2MzZDM3OTgyZmI1NWY0YzRhZDJlYjBlM2IzNzcxMTc3YmJhMDIzODA5MGQxNjllODRiZjhmNjU2ZTM5ZjVmYjkiLCJpYXQiOjE2Mzk3MDU0ODIuMDk0NTE2LCJuYmYiOjE2Mzk3MDU0ODIuMDk0NTIxLCJleHAiOjE2NzEyNDE0ODIuMDg3MTA2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.ZCxoAyBqIxiMuZeUciWLK1hv80oF0TVt1Njp0FG-MIEmQcBNjwys9xMLSFsAWDeISFWLKLmWGPAVQm1w1si7xAQVbgbUQzQxb5R70yCg0PKfCpmzdVYyvw8fHM5zA7OIU66PHfKJP1wwOkSfKtvlytPMOwrUdN2X_HtTu6lctqbYzWjWz3AYrHEEhHHAQ1uS4YmqiMO8X77Y9vcOZZagOd87ZiTW4x0JZSlAFI8HextBa6hcKYg77NOyQutCT291--yebuxq137fOHrqhryTrZzshGl8atkblGNsqp96wTpgM9Y-xp4xt1dFURb2_ug4H83zEobZ9gcrQ6FLE8qtpaTnxLGlqmpCbRkY_aJH55HVgPeHrmI9xghx4rq40nCN-Eo5DF9sQqT6VAFgTmQlGJNy9qhd86_FkwC-V1wxuppJeFbLPYoborHw0OOF4VFXuFuqxgbh4-J3kfj5r_LOZ3XuFlGQs018MK630uoidfoiCh4f5r74Z0FvTwxyoJGrmEXB-CuQ6vlyoZG8yl6dSYWCb3QmxhOURMdcTHQqiyLo0JKv4CB2pN7QpTgN-b6BjuTGr7FmbH5ylYLjiIqjfa_9p25Z4nl7wmfUUZ0o_Jjnzfj0yK12iYWuzvOO7m7wZy47zPTyhN8Tz7HY_dgdCVBlYEo6FyEGuuGf9l8NJ7M' \
                                    -H 'Content-Type: application/json' \
                                    -H 'x-api-key: your_api_key' \
                                    -H 'mode: test' \
                                    -d '{
                                    "total_amount" : "amount_to_be_pay",
                                    "currency" : "XAF",
                                    "transaction_id" : "unique_id_in_your_system",
                                    "return_url" : "https://my.website.com/payunit/return",
                                    "description" : "your_description", 
                                    "purchaseRef" : "any_reference_number", 
                                    "name": "your_app_name" 
                                    }'
                                </pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none; bottom: 0px;">
										<div style="height: 238.353px; top: 0px;"></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 320px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-variable">curl</span> <span class="cm-variable">-X</span> <span class="cm-variable">POST</span> <span class="cm-string-2">\</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; <span class="cm-meta">'</span><span class="cm-bracket">{</span><span class="cm-variable">BASE_URL</span><span class="cm-bracket">}</span><span class="cm-variable">/register'</span> <span class="cm-string-2">\</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> <span class="cm-tab" role="presentation" cm-text="	">   </span><span class="cm-variable">-H</span> <span class="cm-meta">'</span><span class="cm-variable">Authorization:</span> <span class="cm-variable">Bearer</span> <span class="cm-variable">cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3...'</span> <span class="cm-string-2">\</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-variable">-H</span> <span class="cm-meta">'</span><span class="cm-variable">Content-Type:</span> <span class="cm-variable">application/json'</span> <span class="cm-string-2">\</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-variable">-H</span> <span class="cm-meta">'</span><span class="cm-variable">x-api-key:</span> <span class="cm-variable">your_api_key'</span> <span class="cm-string-2">\</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-variable">-d</span> <span class="cm-meta">'</span><span class="cm-bracket">{</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-string">"name"</span> <span class="cm-atom">:</span> <span class="cm-string">"name"</span><span class="cm-error">,</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-string">"email"</span> <span class="cm-atom">:</span> <span class="cm-string">"email"</span><span class="cm-error">,</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-string">"password"</span> <span class="cm-atom">:</span> <span class="cm-string">"password"</span><span class="cm-error">,</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-bracket">}</span><span class="cm-meta">'</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div>
                                                    </div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 483px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 513px;"></div>
									</div>
								</div>
							</div>
							<p></p>
							<p></p>
							<p><strong>Response body :</strong></p>
							<!-- <figure class="wp-block-table is-style-regular">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>t_id</td>
											<td>The transaction id that has been encrypted</td>
										</tr>
										<tr>
											<td>t_sum</td>
											<td>The amount that has been encrypted</td>
										</tr>
										<tr>
											<td>t_url</td>
											<td>The return url that has been encrypted</td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>This transaction should be unique per request and it should be a string.
												<br>This id should be alphanumeric and less than 20 characters</td>
										</tr>
										<tr>
											<td>transaction_url&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>The return url that takes a user to the payment platform</td>
										</tr>
									</tbody>
								</table>
								<figcaption>
									<br> </figcaption>
							</figure> -->
							<p><strong>Example:&nbsp;</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="2">
                                <pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-2" style="display: none;">
                                    {
                                        "status": "SUCCESS",
                                        "statusCode": 201,
                                        "message": "Successful registration"
                                    }
                                </pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none; bottom: 0px;">
										<div style="height: 315.894px; top: 0px;"></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 100px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
                                                        <div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">{</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-string">"status"</span>: <span class="cm-string">"SUCCESS"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-string">"statusCode"</span>: <span class="cm-number">201</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-string">"message"</span>: <span class="cm-string">"Successful registration."</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">}</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 424px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 454px;"></div>
									</div>
								</div>
							</div>
							<p> </p>
							<p><strong>2 – User Authentication</strong></p>
							<p>Authenticate the user.</p>
							<ul>
								<li>End point: {BASE_URL}/login</li>
								<li>Request method: POST</li>
							</ul>
							<p><strong>Request parameter :&nbsp;</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Mandatory</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>t_id</td>
											<td>yes</td>
											<td>The transaction id that has been encrypted</td>
										</tr>
										<tr>
											<td>t_sum</td>
											<td>yes</td>
											<td>The amount that has been encrypted</td>
										</tr>
										<tr>
											<td>t_url</td>
											<td>yes</td>
											<td>The return url that has been encrypted</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Example:</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="3"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;javascript&quot;,&quot;mime&quot;:&quot;application/typescript&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;TypeScript&quot;,&quot;modeName&quot;:&quot;typescript&quot;}" id="code-block-3" style="display: none;">curl -X GET \
        '{BASE_URL}/gateway/gateways?t_url=tyty*****&amp;t_id=ytyy*****&amp;t_sum=ytyty*****' \
        -H 'Content-Type: application/json' \
        -H 'Authorization: Basic cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3' \
        -H 'x-api-key: your_api_key' \
        -H 'mode: test' 
        </pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 216px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-variable">curl</span> <span class="cm-operator">-</span><span class="cm-variable">X</span> <span class="cm-variable">GET</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-string">'{BASE_URL}/gateway/gateways?t_url=tyty*****&amp;t_id=ytyy*****&amp;t_sum=ytyty*****'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-operator">-</span><span class="cm-variable">H</span> <span class="cm-string">'Content-Type: application/json'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-operator">-</span><span class="cm-variable">H</span> <span class="cm-string">'Authorization: Basic cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-operator">-</span><span class="cm-variable">H</span> <span class="cm-string">'x-api-key: your_api_key'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-operator">-</span><span class="cm-variable">H</span> <span class="cm-string">'mode: test'</span> </span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 216px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 246px;"></div>
									</div>
								</div>
								<iframe class="output-block-frame" src="" style="height: 100px;"></iframe>
							</div>
							<p><strong>Response body :</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>statusCode</td>
											<td>The statusCode of the request:
												<br>– 20x for success
												<br>– 400 or 500 for failed&nbsp;</td>
										</tr>
										<tr>
											<td>message</td>
											<td>The message sent back by the system</td>
										</tr>
										<tr>
											<td>created_at</td>
											<td>creation date</td>
										</tr>
										<tr>
											<td>updated_at</td>
											<td>updated date</td>
										</tr>
										<tr>
											<td>privider_id</td>
											<td>id of the provider</td>
										</tr>
										<tr>
											<td>provider_name</td>
											<td>name of the provider</td>
										</tr>
										<tr>
											<td>privider_logo</td>
											<td>logo of the provider</td>
										</tr>
										<tr>
											<td>provider_short_tag</td>
											<td>provider short tag</td>
										</tr>
										<tr>
											<td>provider_status</td>
											<td>status of the provider</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Example</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="4"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;htmlmixed&quot;,&quot;mime&quot;:&quot;text/html&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;HTML&quot;,&quot;modeName&quot;:&quot;html&quot;}" id="code-block-4" style="display: none;">{
        "status": "SUCCESS",
        "statusCode": 200,
        "message": "ok",
        "data": [
            {
                "create_time": "2020-10-12 15:22:57",
                "update_time": "2020-10-12 15:22:57",
                "provider_id": "3",
                "provider_name": "MTN MOMO",
                "provider_logo": "https://core.payunit.net/resources/flags/mtn.png",
                "provider_short_tag": "mtnmomo",
                "provider_status": "ACTIVE",
                "delete_time": null,
                "service_accounts_account_id": null,
                "service_accounts_users_user_id": null,
                "providers_provider_id": null
            },
            {
                "create_time": "2020-10-12 15:26:38",
                "update_time": "2020-11-05 06:14:05",
                "provider_id": "5",
                "provider_name": "EXPRESS UNION MOBILE",
                "provider_logo": "https://core.payunit.net/resources/flags/eu.png",
                "provider_short_tag": "eu",
                "provider_status": "ACTIVE",
                "delete_time": null,
                "service_accounts_account_id": null,
                "service_accounts_users_user_id": null,
                "providers_provider_id": null
            },
            
        ]
        }</pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none; bottom: 0px;">
										<div style="height: 116.675px; top: 0px;"></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 1018px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">{</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  "status": "SUCCESS",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  "statusCode": 200,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  "message": "ok",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  "data": [</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  {</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "create_time": "2020-10-12 15:22:57",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "update_time": "2020-10-12 15:22:57",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_id": "3",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_name": "MTN MOMO",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_logo": "https://core.payunit.net/resources/flags/mtn.png",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_short_tag": "mtnmomo",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_status": "ACTIVE",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "delete_time": null,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "service_accounts_account_id": null,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "service_accounts_users_user_id": null,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "providers_provider_id": null</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  },</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  {</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "create_time": "2020-10-12 15:26:38",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "update_time": "2020-11-05 06:14:05",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_id": "5",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_name": "EXPRESS UNION MOBILE",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_logo": "https://core.payunit.net/resources/flags/eu.png",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_short_tag": "eu",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "provider_status": "ACTIVE",</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "delete_time": null,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "service_accounts_account_id": null,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "service_accounts_users_user_id": null,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  "providers_provider_id": null</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  },</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp;</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  ]</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">}</span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 1018px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 1048px;"></div>
									</div>
								</div>
								<iframe class="output-block-frame" src="" style="height: 100px;"></iframe>
							</div>
							<p></p>
							<p><strong>2-2-2  Make payment on PayUnit</strong></p>
							<ul>
								<li>End point: {BASE_URL}/gateway/makepayment</li>
								<li>Request method: POST</li>
							</ul>
							<p><strong>Request Body :&nbsp;</strong></p>
							<p></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Mandatory</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>gateway</td>
											<td>yes</td>
											<td>provider short tag</td>
										</tr>
										<tr>
											<td>amount</td>
											<td>yes</td>
											<td>The amount to be pay</td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>yes</td>
											<td>This transaction should be unique per request</td>
										</tr>
										<tr>
											<td>notify_url</td>
											<td>no</td>
											<td>Payment result notification to your server</td>
										</tr>
										<tr>
											<td>name</td>
											<td>no</td>
											<td>Name of the merchant</td>
										</tr>
										<tr>
											<td>phone_number</td>
											<td>yes</td>
											<td>The phone number of you customer</td>
										</tr>
										<tr>
											<td>currency</td>
											<td>yes</td>
											<td>The currency you want to use: XAF</td>
										</tr>
										<tr>
											<td>paymentType</td>
											<td>yes</td>
											<td>Payment Type</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Example</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="5"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;application/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-5" style="display: none;">curl -X POST \
        '{BASE_URL}/gateway/makepayment' \
        -H 'Authorization: Basic  cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3' \
        -H 'Content-Type: application/json' \
        -H 'x-api-key: your_api_key' \
        -H 'mode: test' \
        -d '{
        "gateway" : "mtnmomo",
        "amount" : 15000,
        "transaction_id" : "unique_id_in_your_system",
        "return_url" : "https://my.website.com/payunit/return",
        "phone_number" : "655487***", 
        "currency" : "XAF", 
        "paymentType": "button"
        "name": "your_app_name" 
        }'</pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none; bottom: 0px;">
										<div style="height: 238.353px; top: 0px;"></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 483px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-builtin">curl</span> <span class="cm-attribute">-X</span> POST \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; <span class="cm-string">'{BASE_URL}/gateway/makepayment'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> <span class="cm-tab" role="presentation" cm-text="	">   </span><span class="cm-attribute">-H</span> <span class="cm-string">'Authorization: Basic  cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-attribute">-H</span> <span class="cm-string">'Content-Type: application/json'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-attribute">-H</span> <span class="cm-string">'x-api-key: your_api_key'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-attribute">-H</span> <span class="cm-string">'mode: test'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-attribute">-d</span> <span class="cm-string">'{</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"gateway" : "mtnmomo",</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"amount" : 15000,</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"transaction_id" : "unique_id_in_your_system",</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"return_url" : "https://my.website.com/payunit/return",</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"phone_number" : "655487***", </span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"currency" : "XAF", </span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-string"> &nbsp;  "paymentType": "button"</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>"name": "your_app_name" </span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" class="cm-tab-wrap-hack" style="padding-right: 0.1px;"><span class="cm-string"><span class="cm-tab" role="presentation" cm-text="	">    </span>}'</span></span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 483px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 513px;"></div>
									</div>
								</div>
							</div>
							<p></p>
							<p><strong>Response body for Mtn Psp :</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>payment_ref</td>
											<td> Reference of the Payment</td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>Id of the transaction</td>
										</tr>
										<tr>
											<td>pay_token</td>
											<td>Payment token</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Example</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="6"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-6" style="display: none;">{
        "status": "SUCCESS",
        "statusCode": 200,
        "message": "Please confirm the Transaction on your mobile by dialing *126#",
        "data": {
            "payment_ref": "b725d5e6-4612-4e33-89c6-cf3188b57c80",
            "transaction_id": "5222fg525rtrtrt22",
            "pay_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSMjU2In0.eyJjbGllbn*****"
        }
        }</pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 243.9px; left: 532.109px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 305px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors" style="">
															<div class="CodeMirror-cursor" style="left: 532.109px; top: 207.9px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">{</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-string">"status"</span>: <span class="cm-string">"SUCCESS"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-string">"statusCode"</span>: <span class="cm-number">200</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-string">"message"</span>: <span class="cm-string">"Please confirm the Transaction on your mobile by dialing *126#"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-string">"data"</span>: {</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="cm-string">"payment_ref"</span>: <span class="cm-string">"b725d5e6-4612-4e33-89c6-cf3188b57c80"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="cm-string">"transaction_id"</span>: <span class="cm-string">"5222fg525rtrtrt22"</span>,</span></pre>
															<div class="" style="position: relative;"><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="cm-string">"pay_token"</span>: <span class="cm-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJSMjU2In0.eyJjbGllbn*****"</span></span></pre></div>
															<div class="" style="position: relative;"><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  }</span></pre></div>
															<div class="" style="position: relative;"><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">}</span></pre></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 305px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 335px;"></div>
									</div>
								</div>
							</div>
							<p></p>
							<p><strong>Response body for Orange Psp :</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>auth-token</td>
											<td> authorization token</td>
										</tr>
										<tr>
											<td>x-token</td>
											<td>x token</td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>Id of the transaction</td>
										</tr>
										<tr>
											<td>paytoken</td>
											<td>Payment token</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Example</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="7"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-7" style="display: none;">{
        status: "PENDING",
        statusCode: 200,
        message: "Merchant payment successfully initiated. Enter your PIN on your mobile to confirm.",
        data: {
            auth-token: "b725d5e6-4612-4e33-89c6-cf3188b57c80",
            transaction_id: "5222fg525rtrtrt22",
            init: "Payment done.The customer will have to confirm the payment by entering his PIN and then you will receive an SMS. Thank you for using Orange Money service."
            x-token:"hjhhjhkjkkjhkjh",
            message: "Merchant payment successfully initiated"
            paytoken: "eyJ0eXAiOiJKV1QiLCJI6ImU3N2E3NmQ5LTg4MTEtNDhlZC******"
            redirect_url: "https://core.payunit.net/gateway/callback/orange/MTYyNjE4NDA0MDI3OQ=="
        }
        }</pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none; bottom: 0px;">
										<div style="height: 307.654px; top: 0px;"></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 513px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">{</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  status: <span class="cm-string">"PENDING"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  statusCode: <span class="cm-number">200</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  message: <span class="cm-string">"Merchant payment successfully initiated. Enter your PIN on your mobile to confirm."</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  data: {</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  auth-token: <span class="cm-string">"b725d5e6-4612-4e33-89c6-cf3188b57c80"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  transaction_id: <span class="cm-string">"5222fg525rtrtrt22"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  init: <span class="cm-string">"Payment done.The customer will have to confirm the payment by entering his PIN and then you will receive an SMS. Thank you for using Orange Money service."</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  x-token:<span class="cm-string">"hjhhjhkjkkjhkjh"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  message: <span class="cm-string">"Merchant payment successfully initiated"</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  paytoken: <span class="cm-string">"eyJ0eXAiOiJKV1QiLCJI6ImU3N2E3NmQ5LTg4MTEtNDhlZC******"</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  redirect_url: <span class="cm-string">"https://core.payunit.net/gateway/callback/orange/MTYyNjE4NDA0MDI3OQ=="</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  }</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">}</span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 513px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 543px;"></div>
									</div>
								</div>
							</div>
							<p></p>
							<p></p>
							<p></p>
							<p>3. <strong>Getting the payment transaction status on PayUnit</strong></p>
							<p>3-1 Get Transaction status for Mtn Psp</p>
							<ul>
								<li>End point: <span style="color:#f89623" class="has-inline-color">{BASE_URL}<a href="https://core.payunit.net/gateway/transaction/{transaction_id}">/</a>gateway/paymentstatus/{gateway}/{transaction_id}pay_token=${pay_token}&amp;payment_ref=${payment_ref}</span></li>
								<li>Request method: GET</li>
							</ul>
							<p><strong>Request parameter :&nbsp;</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Mandatory</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>gateway</td>
											<td>yes</td>
											<td>provider short tag</td>
										</tr>
										<tr>
											<td>payment_ref</td>
											<td>yes</td>
											<td>Reference of the Payment</td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>yes</td>
											<td>Transaction id</td>
										</tr>
										<tr>
											<td>pay_token</td>
											<td>yes</td>
											<td>Payment token</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Example</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="8"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-8" style="display: none;">curl -X GET \
        '{BASE_URL}/gateway/paymentstatus/mtnmomo/Sp2021155212553819?pay_token=P4KfPXly_gWtHWlCsDkJVRV6TVVzdsR5w3Yhz22vQ&amp;payment_ref=ac8b3aa2-01b6-495a-ab06-eee267c7bbdd' \
        -H 'Content-Type: application/json' \
        -H 'x-api-key: your_api_key' \
        -H 'Authorization: Basic cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3' \
        -H 'mode: test' 
        </pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 275px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-builtin">curl</span> <span class="cm-attribute">-X</span> GET \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-string">'{BASE_URL}/gateway/paymentstatus/mtnmomo/Sp2021155212553819?pay_token=P4KfPXly_gWtHWlCsDkJVRV6TVVzdsR5w3Yhz22vQ&amp;payment_ref=ac8b3aa2-01b6-495a-ab06-eee267c7bbdd'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-attribute">-H</span> <span class="cm-string">'Content-Type: application/json'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-attribute">-H</span> <span class="cm-string">'x-api-key: your_api_key'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-attribute">-H</span> <span class="cm-string">'Authorization: Basic cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-attribute">-H</span> <span class="cm-string">'mode: test'</span> </span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 275px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 305px;"></div>
									</div>
								</div>
							</div>
							<p></p>
							<p><strong>Response body :</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>Id of the transaction</td>
										</tr>
										<tr>
											<td>transactions</td>
											<td> the transaction</td>
										</tr>
										<tr>
											<td>status</td>
											<td>Transaction Status:
												<br> -SUCCESSFUL for Payment successful
												<br> – FAILED for Payment failed</td>
										</tr>
										<tr>
											<td>callback_url</td>
											<td>The url or endpoint to be called upon payment completion</td>
										</tr>
										<tr>
											<td>transaction_amount</td>
											<td>Amount of the transactions</td>
										</tr>
										<tr>
											<td>statusCode</td>
											<td>The statusCode of the request:
												<br>&nbsp;– 20x for success
												<br>– 400 or 500 for failed
												<br> </td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Response Example:</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="9"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-9" style="display: none;">{
        status: "SUCCESSFUL",
        statusCode: 200,
        message: "Your transaction completed successfully",
        data: {
                transaction_id: "5222fg525rtrtrt22",
                callback_url:"http://localhost:4200/home/gateway/initialize"
        }
        }</pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 275px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">{</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  status: <span class="cm-string">"SUCCESSFUL"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  statusCode: <span class="cm-number">200</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  message: <span class="cm-string">"Your transaction completed successfully"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  data: {</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  transaction_id: <span class="cm-string">"5222fg525rtrtrt22"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  callback_url:<span class="cm-string">"http://localhost:4200/home/gateway/initialize"</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  }</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">}</span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 275px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 305px;"></div>
									</div>
								</div>
							</div>
							<p></p>
							<p>3-2 Get Transaction status for Orange Psp</p>
							<ul>
								<li>End point:
									<mark class="kt-highlight"><span style="color:#f89623" class="has-inline-color">{BASE_URL}<a href="https://core.payunit.net/gateway/transaction/{transaction_id}">/</a>gateway/paymentstatus/{gateway}/{transaction_id}?paytoken=${payToken}&amp;auth-token=${authToken}&amp;x-token=${Xtoken}</span></mark>
								</li>
								<li>Request method: GET</li>
							</ul>
							<p><strong>Request parameter :&nbsp;</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Mandatory</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>gateway</td>
											<td>yes</td>
											<td>provider short tag</td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>yes</td>
											<td>Transaction id</td>
										</tr>
										<tr>
											<td>paytoken</td>
											<td>yes</td>
											<td>Payment token</td>
										</tr>
										<tr>
											<td>x-token</td>
											<td>yes</td>
											<td>x-token</td>
										</tr>
										<tr>
											<td>auth-token</td>
											<td>yes</td>
											<td>authorization token</td>
										</tr>
									</tbody>
								</table>
							</figure>
							<p><strong>Example</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="10"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-10" style="display: none;">curl -X GET \
        '{BASE_URL}/gateway/paymentstatus/orange/Sp2021155212553819?paytoken=P4KfPXly_gWtHWlCsDkJVRV6TVVzdsR5w3Yhz22vQ&amp;auth-token=ac8b3aa2-01b6-495a-ab06-eee267c7bbdd&amp;x-token=jhlsjsjhdsjhdskjkjk'\
        -H 'Content-Type: application/json' \
        -H 'x-api-key: your_api_key' \
        -H 'Authorization: Basic cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3' \
        -H 'mode: test' 
        </pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 275px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-builtin">curl</span> <span class="cm-attribute">-X</span> GET \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-string">'{BASE_URL}/gateway/paymentstatus/orange/Sp2021155212553819?paytoken=P4KfPXly_gWtHWlCsDkJVRV6TVVzdsR5w3Yhz22vQ&amp;auth-token=ac8b3aa2-01b6-495a-ab06-eee267c7bbdd&amp;x-token=jhlsjsjhdsjhdskjkjk'</span>\</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-tab" role="presentation" cm-text="	">    </span><span class="cm-attribute">-H</span> <span class="cm-string">'Content-Type: application/json'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-attribute">-H</span> <span class="cm-string">'x-api-key: your_api_key'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-attribute">-H</span> <span class="cm-string">'Authorization: Basic cGF5dW5pdF9UU5LTg1MjMtZTEwZDZmMDg1ODk3'</span> \</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp;<span class="cm-attribute">-H</span> <span class="cm-string">'mode: test'</span> </span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 275px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 305px;"></div>
									</div>
								</div>
							</div>
							<p></p>
							<p><strong>Response body :</strong></p>
							<figure class="wp-block-table">
								<table>
									<tbody>
										<tr>
											<td><strong>Parameter</strong></td>
											<td><strong>Description</strong></td>
										</tr>
										<tr>
											<td>transaction_id</td>
											<td>Id of the transaction</td>
										</tr>
										<tr>
											<td>transactions</td>
											<td> the transaction</td>
										</tr>
										<tr>
											<td>status</td>
											<td>Transaction Status:
												<br> -SUCCESSFUL for Payment successful
												<br> – FAILED for Payment failed</td>
										</tr>
										<tr>
											<td>callback_url</td>
											<td>The url or endpoint to be called upon payment completion</td>
										</tr>
										<tr>
											<td>statusCode</td>
											<td>The statusCode of the request:
												<br>&nbsp;– 20x for success
												<br>– 400 or 500 for failed
												<br> </td>
										</tr>
									</tbody>
								</table>
								<figcaption>https://hostedpages.payunit.net/#/</figcaption>
							</figure>
							<p><strong>Response Example:</strong></p>
							<div class="wp-block-codemirror-blocks-code-block code-block" id="11"><pre class="CodeMirror" data-setting="{&quot;mode&quot;:&quot;shell&quot;,&quot;mime&quot;:&quot;text/x-sh&quot;,&quot;theme&quot;:&quot;material&quot;,&quot;lineNumbers&quot;:false,&quot;styleActiveLine&quot;:true,&quot;lineWrapping&quot;:true,&quot;readOnly&quot;:true,&quot;language&quot;:&quot;Shell&quot;,&quot;modeName&quot;:&quot;shell&quot;}" id="code-block-11" style="display: none;">{
        status: "SUCCESSFULL",
        statusCode: 200,
        message: "Paiement de SEVEN ACADEMY reussi ..........",
        data: {
                transaction_id: "5222fg525rtrtrt22",
                transaction_amount: 200
                callback:"http://localhost:4200/home/gateway/initialize"
        }
        }</pre>
								<div class="CodeMirror CodeMirror-wrap CodeMirror-simplescroll cm-s-material">
									<div class="CodeMirror-panel">
										<div class="info-panel"><span></span>
											<div class="control-panel"><span class="tool" data-tip="Full Screen"><b class="fullscreen maximize"></b></span><span class="tool" data-tip="Copy Code"><b class="copy"></b></span></div>
										</div>
									</div>
									<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 36px; left: 4px;">
										<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
									</div>
									<div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-simplescroll-vertical adjest-top" cm-not-content="true" style="display: none;">
										<div></div>
									</div>
									<div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
									<div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
									<div class="CodeMirror-scroll" tabindex="-1">
										<div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: 0px; border-right-width: 30px; min-height: 305px; padding-right: 0px; padding-bottom: 0px;">
											<div style="position: relative; top: 0px;">
												<div class="CodeMirror-lines" role="presentation">
													<div role="presentation" style="position: relative; outline: none;">
														<div class="CodeMirror-measure"><pre><span>xxxxxxxxxx</span></pre></div>
														<div class="CodeMirror-measure"></div>
														<div style="position: relative; z-index: 1;"></div>
														<div class="CodeMirror-cursors">
															<div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 29.7031px;">&nbsp;</div>
														</div>
														<div class="CodeMirror-code" role="presentation" style=""><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">{</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  status: <span class="cm-string">"SUCCESSFULL"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  statusCode: <span class="cm-number">200</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  message: <span class="cm-string">"Paiement de SEVEN ACADEMY reussi .........."</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  data: {</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  transaction_id: <span class="cm-string">"5222fg525rtrtrt22"</span>,</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  transaction_amount: <span class="cm-number">200</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  callback:<span class="cm-string">"http://localhost:4200/home/gateway/initialize"</span></span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"> &nbsp;  }</span></pre><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;">}</span></pre></div>
													</div>
												</div>
											</div>
										</div>
										<div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent; top: 305px;"></div>
										<div class="CodeMirror-gutters" style="display: none; height: 335px;"></div>
									</div>
								</div>
							</div>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
</body>

</html>