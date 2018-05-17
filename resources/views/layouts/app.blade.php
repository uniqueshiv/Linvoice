/*
Theme Name: Phoenix Chamber
Theme URI: https://webninjaz.com
Author: ThemeIsle
Author URI: https://themeisle.com
Description: Phonix metro chamber is event related site
Version: 1.8.5.29
License: GNU General Public License version 3
License URI: license.txt
Text Domain: Phonexi
Domain Path: /languages/
Tags: one-column, two-columns, right-sidebar,full-width-template,rtl-language-support,sticky-post,theme-options, custom-background, custom-menu, editor-style, featured-images, threaded-comments, translation-ready, footer-widgets, portfolio, e-commerce, blog
*/


/*--------------------------------------------------------------
1.0 - Reset
--------------------------------------------------------------*/

html {
    overflow-y: scroll; /* Keeps page centered in all browsers regardless of content height */
    font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */

    -webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
    -ms-text-size-adjust: 100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
}

.bypostauthor {}

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
font,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-family: inherit;
    font-weight: inherit;
    font-style: inherit;
    vertical-align: baseline;
}
*,
*:before,
*:after {
    /* apply a natural box layout model to all elements; see http://www.paulirish.com/2012/box-sizing-border-box-ftw/ */
    -webkit-box-sizing: border-box; /* Not needed for modern webkit but still used by Blackberry Browser 7.0; see http://caniuse.com/#search=box-sizing */
    -moz-box-sizing: border-box; /* Still needed for Firefox 28; see http://caniuse.com/#search=box-sizing */
    box-sizing: border-box;
}
body {
    background: #fff;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
nav,
section {
    display: block;
}
ol,
ul {
    list-style: none;
}
table {
    border-spacing: 0;
    /* tables still need 'cellspacing="0"' in the markup */
    border-collapse: separate;
}
caption,
th,
td {
    font-weight: normal;
    text-align: left;
}
blockquote:before,
blockquote:after {
    content: "";
}
blockquote {
    quotes: "" "";
}
q {
    quotes: "“" "”" "‘" "’";
}
q:before {
    content: open-quote;
}
q:after {
    content: close-quote;
}
a:focus {
    outline: thin dotted;
}
a:hover,
a:active {
    outline: 0;
}
a img {
    border: 0;
}
body {
    overflow-x: hidden;
    color: #808080;
    font-family: "Lato", Helvetica, sans-serif !important;
    font-size: 14px;
    font-weight: normal;
    line-height: 25px;
    text-align: center;
}

/* Internet Explorer 10 in Windows 8 and Windows Phone 8 Bug fix */
@-webkit-viewport {
    width: device-width;
}
@-moz-viewport {
    width: device-width;
}
@-ms-viewport {
    width: device-width;
}
@-o-viewport {
    width: device-width;
}
@viewport {
    width: device-width;
}

/* Other fixes*/
*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
i {
    vertical-align: middle;
}
ul,
ol {
    padding-left: 0 !important;
}

/* Selection colours (easy to forget) */
::selection {
    color: #fff;
    background: #fc6d6d;
}
::-moz-selection {
    color: #fff;
    background: #fc6d6d;
}
a {
    color: #28c2ba;
    -webkit-transition: all 700ms;
    transition: all 700ms;
}
a,
a:hover {
    text-decoration: none;
}
a:hover {
    color: #28c2ba;
}
p {
    margin: 0;
}
.full-width {
    width: 100%;
    margin: auto;
}

/* do not group these rules (placeholder colors) */
*::-webkit-input-placeholder {
    color: #000 !important;
}
*:-moz-placeholder {
    color: #000 !important;
}
*::-moz-placeholder {
    color: #000 !important;
}
*:-ms-input-placeholder {
    color: #000 !important;
}


/*--------------------------------------------------------------
2.0 Typography
--------------------------------------------------------------*/

body,
button,
input,
select,
textarea {
    color: #404040;
    font-family: sans-serif;
    font-size: 16px;
    font-size: 1.6rem;
    line-height: 1.5;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    clear: both;
}
p {
    margin-bottom: 1.5em;
}
b,
strong {
    font-weight: bold;
}
dfn,
cite,
em,
i {
    font-style: italic;
}
blockquote {
    margin: 0 1.5em;
}
blockquote {
    margin: 24px 40px;
    font-size: 18px;
    font-weight: 300;
    font-style: italic;
    line-height: 26px;
}
address {
    margin: 0 0 1.5em;
}
pre {
    overflow: auto;
    max-width: 100%;
    margin-bottom: 1.6em;
    padding: 1.6em;
    background: #eee;
    font-family: "Courier 10 Pitch", Courier, monospace;
    font-size: 15px;
    font-size: 1.5rem;
    line-height: 1.6;
}
code,
kbd,
tt,
var {
    font: 15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
}
abbr,
acronym {
    border-bottom: 1px dotted #666;
    cursor: help;
}
mark,
ins {
    background: #fff9c0;
    text-decoration: none;
}
sup,
sub {
    position: relative;
    height: 0;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}
sup {
    bottom: 1ex;
}
sub {
    top: 0.5ex;
}
small {
    font-size: 75%;
}
big {
    font-size: 125%;
}
dl {
    margin: 0 20px;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    display: block;
    clear: both;
    margin: 0;
    margin-bottom: 10px;
    padding: 0;
    border: 0;
    font: inherit;
    font-size: 100%;
    vertical-align: baseline;
}
h1,
h2 {
    font-family: "Montserrat", Helvetica, sans-serif;
    font-weight: 700;
    line-height: 35px;
}
h1,
h1 span {
    font-size: 30px;
}
h2 {
    font-size: 26px;
}
h3 {
    font-size: 24px;
}
h4 {
    font-size: 18px;
}
h5 {
    font-size: 17px;
}
h6 {
    font-size: 16px;
}


/*--------------------------------------------------------------
3.0 Buttons
--------------------------------------------------------------*/

.buttons {
    margin-top: 45px;
    text-align: center;
}
.button {
    display: inline-block;
    margin: 10px;
    padding: 10px 35px 10px 35px;
    border-radius: 4px;
    text-align: center;
    text-transform: uppercase;
}
.custom-button {
    display: inline-block !important;
    margin: 10px;
    padding: 13px 35px 13px 35px;
    border: none;
    border-radius: 4px;
    text-align: center;
    text-transform: uppercase;
}
.red-btn {
    background: #28c2ba;
}
.green-btn {
    background: #1e9e6b;
}
.blue-btn {
    background: #3ab0e2;
}
.yellow-btn {
    background: #e7ac44;
}
.red-btn,
.green-btn,
.blue-btn,
.yellow-btn {
    color: #fff !important;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.blue-btn:hover {
    color: #fff;
    background: #1288b9;
}
.red-btn:hover {
    color: #fff;
    background: #28c2ba;
}
.green-btn:hover {
    color: #fff;
    background: #069059;
}
.yellow-btn:hover {
    color: #fff;
    background: #d8951e;
}
.btn:hover {
    box-shadow: none;
}


/*--------------------------------------------------------------
3.0 Elements
--------------------------------------------------------------*/

hr {
    height: 1px;
    margin-bottom: 1.5em;
    border: 0;
    background-color: #ccc;
}
ul,
ol {
    margin: 0 0 1.5em 3em;
}
ul {
    list-style: disc;
}
ol {
    list-style: decimal;
}
li > ul,
li > ol {
    margin-bottom: 0;
    margin-left: 1.5em;
}
dt {
    font-weight: bold;
}
dd {
    margin: 0 1.5em 1.5em 0;
}
img {
    max-width: 100%; /* Adhere to container width. */
    height: auto; /* Make sure images are scaled correctly. */
}
figure {
    margin: 0;
}
.site-main p {
    margin: 0 0 24px;
}
table {
    width: 100%;
    margin: 0 0 20px;
    border-bottom: 1px solid #ededed;
    border-spacing: 0;
    border-collapse: collapse;
    font-size: 14px;
    line-height: 2;
}
caption,
th,
td {
    font-weight: normal;
    text-align: left;
}
caption {
    margin: 20px 0;
    font-size: 16px;
}
th {
    padding: 6px 10px 6px 0;
    border-top: 1px solid #ededed;
    font-weight: bold;
    text-transform: uppercase;
}
td {
    padding: 6px 10px 6px 0;
    border-top: 1px solid #ededed;
}
thead th {
    border: none;
}


/*---------------------------------------
 **   COLORS                         -----
-----------------------------------------*/

/** BACKGROUNDS **/
.red-bg {
    background: #28c2ba;
}
.green-bg {
    background: #34d293;
}
.blue-bg {
    background: #3ab0e2;
}
.yellow-bg {
    background: #e7ac44;
}
.dark-bg {
    background: #404040;
}
.white-bg {
    background: #fff;
}

/** FOR TEXTS AND ICON FONTS **/
.red-text {
    color: #28c2ba;
}
.green-text {
    color: #34d293;
}
.blue-text {
    color: #3ab0e2;
}
.yellow-text {
    color: #f7d861;
}
.dark-text {
    color: #404040;
}
.white-text {
    color: #fff;
}


/*---------------------------------------
 **   BORDER BOTTOMS                 -----
-----------------------------------------*/

.white-border-bottom:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 25%;
    width: 50%;
    height: 2px;
    margin: auto;
    background: #f5f5f5;
    content: "";
}
.dark-border-bottom:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 25%;
    width: 50%;
    height: 2px;
    margin: auto;
    background: #404040;
    content: "";
}
.red-border-bottom:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}
.green-border-bottom:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #34d293;
    content: "";
}
.blue-border-bottom:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #3ab0e2;
    content: "";
}
.yellow-border-bottom:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #f7d861;
    content: "";
}


/*---------------------------------------
 **   4.0 Forms                     -----
-----------------------------------------*/

button,
input,
select,
textarea {
    margin: 0; /* Addresses margins set differently in IE6/7, F3/4, S5, Chrome */
    font-size: 100%; /* Corrects font size not being inherited in all browsers */
    vertical-align: baseline; /* Improves appearance and consistency in all browsers */

    *vertical-align: middle; /* Improves appearance and consistency in IE6/IE7 */
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
    margin: 10px;
    padding: 13px 35px 13px 35px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background-color: #28c2ba;
    box-shadow: none;
    text-shadow: none;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    text-transform: uppercase;
    cursor: pointer;
}
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
    border-color: #ccc #bbb #aaa #bbb;
}
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
button:active,
input[type="button"]:active,
input[type="reset"]:active,
input[type="submit"]:active {
    border-color: #aaa #bbb #bbb #bbb;
}
input[type="checkbox"],
input[type="radio"] {
    padding: 0; /* Addresses excess padding in IE8/9 */
}
input[type="search"] {
    -webkit-box-sizing: content-box; /* Addresses box sizing set to border-box in S5, Chrome (include -moz to future-proof) */
    -moz-box-sizing: content-box;
    box-sizing: content-box;

    -webkit-appearance: textfield; /* Addresses appearance set to searchfield in S5, Chrome */
}
input[type="search"]::-webkit-search-decoration {
    /* Corrects inner padding displayed oddly in S5, Chrome on OSX */
    -webkit-appearance: none;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
    padding: 0;
    /* Corrects inner padding and border displayed oddly in FF3/4 www.sitepen.com/blog/2008/05/14/the-devils-in-the-details-fixing-dojos-toolbar-buttons/ */
    border: 0;
}
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
textarea {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0;
    color: #555;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
textarea:focus {
    color: #111;
}
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"] {
    padding: 3px;
}
textarea {
    overflow: auto; /* Removes default vertical scrollbar in IE6/7/8/9 */
    width: 98%;
    padding-left: 3px;
    vertical-align: top; /* Improves readability and alignment in all browsers */
}
.entry-content button,
.entry-content input[type="button"],
.entry-content input[type="reset"],
.entry-content input[type="submit"] {
    padding: 5px 20px 5px 20px;
}
.entry-content button:hover,
.entry-content input[type="button"]:hover,
.entry-content input[type="reset"]:hover,
.entry-content input[type="submit"]:hover {
    background: #28c2ba;
}
.input-box {
    display: inline-block;
    width: 274px;
    min-height: 46px;
    padding: 9px;
    padding-left: 15px !important;
    border: 0 !important;
    border-radius: 4px;
    background: rgba(255,255,255, 0.95);
    text-align: left;
    text-transform: none;
}
.textarea-box {
    display: inline-block;
    min-height: 250px;
    padding: 9px;
    padding-left: 15px;
    border: 0;
    border-radius: 4px;
    background: rgba(255,255,255, 0.95);
    text-align: left;
    text-transform: none;
}
textarea:hover,
input:hover,
textarea:active,
input:active,
textarea:focus,
input:focus {
    outline: 1 !important;
    outline-color: #28c2ba !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
input:focus,
textarea:focus {
    border: 1px solid rgba(0, 0, 0, 0.3);
    outline: 0;
}


/*---------------------------------------
 **   5.0 Navigation                 -----
-----------------------------------------*/


/*---------------------------------------
 **   5.1 Links                 -----
-----------------------------------------*/

a {
    color: #28c2ba;
}
a:visited {
    color: #28c2ba;
}
a:hover,
a:focus,
a:active {
    color: #28c2ba;
}


/*---------------------------------------
 **   5.2 Menus                  -----
-----------------------------------------*/

.main-navigation {
    display: block;
    float: left;
    clear: both;
    width: 100%;
}
.main-navigation ul {
    margin: 0;
    padding-left: 0;
    list-style: none;
}
.main-navigation li {
    float: left;
    position: relative;
}
.main-navigation a {
    display: block;
    text-decoration: none;
}
.main-navigation ul ul {
    display: none;
    float: left;
    position: absolute;
    z-index: 99999;
    top: 1.5em;
    left: 0;
    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
}
.main-navigation ul ul ul {
    top: 0;
    left: 100%;
}
.main-navigation ul ul a {
    width: 200px;
}

.main-navigation ul li:hover > ul {
    display: block;
}

.navbar-collapse {
    overflow: visible !important;
}
.navbar-inverse li.menu-item-open-left:hover > ul.sub-menu,
.navbar-inverse li.menu-item-open-left.link-focus > ul.sub-menu {
    right: 0;
}
.navbar-inverse li.menu-item-open-left li:hover > ul.sub-menu,
.navbar-inverse ul ul li.link-focus > ul.sub-menu {
    right: 100%;
    left: auto;
}
.site-main .comment-navigation,
.site-main .paging-navigation,
.site-main .post-navigation {
    overflow: hidden;
    margin: 0 0 1.5em;
}
.comment-navigation .nav-previous,
.paging-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
    float: left;
}
.comment-navigation .nav-next,
.paging-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
    float: right;
    width: 50%;
    text-align: right;
}
.nav-links a {
    color: #28c2ba;
}
.site-main .post-navigation {
    float: left;
    width: 100%;
}

.nav .has_children > a:after {
    margin: 0 0 0 6px;
    color: inherit;
    font-family: FontAwesome;
    content: "\f0d7";
}

.nav .sub-menu .has_children > a:after {
    content: "\f0da";
}


/*---------------------------------------
 **   6.0 Accessibility                   -----
-----------------------------------------*/

/* Text meant only for screen readers */
.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
}
.screen-reader-text:hover,
.screen-reader-text:active,
.screen-reader-text:focus {
    display: block;
    clip: auto !important;
    z-index: 100000; /* Above WP toolbar */
    top: 5px;
    left: 5px;
    width: auto;
    height: auto;
    padding: 15px 23px 14px;
    border-radius: 3px;
    color: #21759b;
    background-color: #f1f1f1;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
    font-size: 14px;
    font-weight: bold;
    line-height: normal;
    text-decoration: none;
}


/*---------------------------------------
 **   7.0 Alignments                   -----
-----------------------------------------*/

.alignleft {
    display: inline;
    float: left;
    margin-right: 1.5em;
}
.alignright {
    display: inline;
    float: right;
    margin-left: 1.5em;
}
.aligncenter {
    display: block;
    clear: both;
    margin: 0 auto;
}


/*---------------------------------------
 **   8.0 Clearings                   -----
-----------------------------------------*/

.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
    display: table;
    content: "";
}
.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
    clear: both;
}


/*---------------------------------------
 **   9.0 Widgets                   -----
-----------------------------------------*/

.sidebar-wrap {
    border-left: 1px solid rgba(0, 0, 0, 0.05);
}
.widget {
    /*margin: 0 0 1.5em;
    margin-bottom: 30px;*/
}
.widget .widget-title {
    float: none;
    position: relative;
    margin-top: 30px;
    margin-bottom: 30px;
    padding-bottom: 5px;
    color: #404040;
    font-size: 17px;
    font-weight: bold;
    text-align: left;
    text-transform: uppercase;
}
.widget .widget-title:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 0;
    width: 35%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}

.widget-area {
    float: left;
    width: 100%;
}
.widget-area .widget {
    clear: both;
}

/* Make sure select elements fit in widgets */
.widget select {
    width: 100%;
    max-width: 100%;
    padding: 10px;
    border: 1px solid #e9e9e9;
}
.tagcloud a {
    padding: 2px 5px;
    background: #fcfcfc;
}

/* Search widget */
.widget_search .search-submit {
    /*  display: none; */
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 46px;
    height: 46px;
    margin: 0;
    padding: 0;
    background: url(images/search_icon.png) no-repeat center center;
    text-indent: -9999999px;
}
.widget_search label {
    position: relative;
    width: 100%;
    margin-bottom: 5px;
}
.widget_search form {
    position: relative;
}
.widget_search input {
    width: 83%;
    padding: 12px 15% 12px 2%;
}
.widget ul {
    display: block;
    margin: 0;
    padding: 0;
}
.widget li {
    position: relative;
    margin: 15px 0;
    margin-left: 3%;
    padding-left: 10px;
    text-align: left;
    list-style: none;
}
.widget li:before {
    float: left;
    position: absolute;
    left: 0;
    width: 4px;
    height: 4px;
    margin-top: 11px;
    background: #e9e9e9;
    content: "";
}
.widget li a {
    color: #808080;
}
.widget li a:hover {
    color: #404040;
}


/*---------------------------------------
 **   10.0 Content                   -----
-----------------------------------------*/

.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
}
.site-content {
    background: #fff;
}
.home .site-content,
.page-template-template-frontpage .site-content {
    background: none;
}


/*---------------------------------------
 **   10.1 Posts and pages                   -----
-----------------------------------------*/

.hentry {
    margin: 0 0 1.5em;
}
.byline,
.updated {
    display: none;
}
.single .byline,
.group-blog .byline {
    display: none;
}
.entry-meta-large .byline,
.entry-meta-large .updated {
    display: none;
}
.page-content,
.entry-content,
.entry-summary {
    margin: 1.5em 0 0;
}
.page-links {
    clear: both;
    margin: 0 0 1.5em;
}
.page-header {
    margin: 0 0 40px;
    border-bottom: none;
    text-align: left;
}
.search-results .page-header {
    margin: 0 0 40px;
}
.page-header .page-title {
    position: relative;
}
.page-header .page-title:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 0;
    width: 35%;
    height: 2px;
    margin: auto;
    background: #e9e9e9;
    content: "";
}
.taxonomy-description {
    margin-top: 15px;
}
.entry-title {
    position: relative;
}
.entry-title:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 0;
    width: 10%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}
.entry-meta {
    margin-top: 10px;
}
.content-area .entry-header {
    overflow: hidden;
}


/*---------------------------------------
 **   10.2 Asides                   -----
-----------------------------------------*/

.blog .format-aside .entry-title,
.archive .format-aside .entry-title {
    display: none;
}


/*---------------------------------------
 **   10.3 Comments                   -----
-----------------------------------------*/

.comment {
    margin-top: 10px;
    margin-bottom: 10px;
    list-style: none;
}
.comment a {
    color: #c7254e;
}
.comment-body {
    position: relative;
    padding-bottom: 10px;
    padding-left: 40px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    text-align: left;
}
.comment-content a {
    word-wrap: break-word;
}

.comment-form,
.comments-title,
.comment-reply-title {
    text-align: left;
}
.comment .reply a {
    font-size: 12px;
}
.comment-form p {
    margin: 10px 10px 10px 0;
}
.comment-form  label {
    width: 85px;
}
.comments-title {
    margin-bottom: 20px;
    font-size: 20px;
}
.comment-list {
    margin-left: 0;
}
.comment-list li {
    float: left;
    width: 100%;
    list-style: none;
}
.comment-reply-link {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.6em 1em 0.4em;
    padding: 3px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.5), inset 0 15px 17px rgba(255, 255, 255, 0.5), inset 0 -5px 12px rgba(0, 0, 0, 0.05);
    box-shadow: none;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
    text-shadow: none;
    font-family: sans-serif;
    font-size: 1.2rem;
    line-height: 1;
}
.comment-form #submit,
.comment-reply-link {
    border-color: #28c2ba;
    color: #fff !important;
    background: #28c2ba;
}
.comment-form #submit:hover,
.comment-form #submit:focus,
.comment-form #submit:active {
    background: #28c2ba;
}
.comment-meta {
    margin-top: 0 !important;
    padding-top: 0 !important;
}
.comment-metadata {
    position: absolute;
    top: -2px;
    right: 55px;
}
.comment-metadata,
.comment-metadata a {
    padding: 3px 0;
    color: #888;
    font-size: 12px;
    font-style: italic;
}
.comment-reply-link:hover {
    background: #28c2ba;
    box-shadow: none;
}
.comment-author img {
    position: absolute;
    left: 0;
    border-radius: 50%;
}
.comment-author b.fn {
    color: #000;
}


/*---------------------------------------
 **   11.0 Infinite scroll                    -----
-----------------------------------------*/

/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .paging-navigation,
/* Older / Newer Posts Navigation (always hidden) */
.infinite-scroll.neverending .site-footer {
    /* Theme Footer (when set to scrolling) */
    display: none;
}

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before */
.infinity-end.neverending .site-footer {
    display: block;
}


/*---------------------------------------
 **   12.0 Media                    -----
-----------------------------------------*/

.page-content img.wp-smiley,
.entry-content img.wp-smiley,
.comment-content img.wp-smiley {
    margin-top: 0;
    margin-bottom: 0;
    padding: 0;
    border: none;
}
.wp-caption {
    max-width: 100%;
    margin-bottom: 1.5em;
    border: 1px solid #ccc;
}
.wp-caption img[class*="wp-image-"] {
    display: block;
    max-width: 98%;
    margin: 1.2% auto 0;
}
.wp-caption-text {
    text-align: center;
}
.wp-caption .wp-caption-text {
    margin: 0.8075em 1.2%;
}
.site-main .gallery {
    margin-bottom: 1.5em;
}

.site-main .gallery a img {
    max-width: 90%;
    height: auto;
    border: none;
}
.site-main .gallery dd,
.site-main .gallery figcaption {
    margin: 0;
}

/* Make sure embeds and iframes fit their containers */
embed,
iframe,
object {
    max-width: 100%;
}


/*---------------------------------------
 **   6.5 Gallery                    -----
-----------------------------------------*/

.gallery {
    margin-bottom: 20px;
}
.gallery-item {
    float: left;
    overflow: hidden;
    position: relative;
    margin: 0 4px 4px 0;
}
.gallery-columns-1 .gallery-item {
    max-width: 100%;
}
.gallery-columns-2 .gallery-item {
    max-width: 48%;
    max-width: -webkit-calc(50% - 4px);
    max-width: calc(50% - 4px);
}
.gallery-columns-3 .gallery-item {
    max-width: 32%;
    max-width: -webkit-calc(33.3% - 4px);
    max-width: calc(33.3% - 4px);
}
.gallery-columns-4 .gallery-item {
    max-width: 23%;
    max-width: -webkit-calc(25% - 4px);
    max-width: calc(25% - 4px);
}
.gallery-columns-5 .gallery-item {
    max-width: 19%;
    max-width: -webkit-calc(20% - 4px);
    max-width: calc(20% - 4px);
}
.gallery-columns-6 .gallery-item {
    max-width: 15%;
    max-width: -webkit-calc(16.7% - 4px);
    max-width: calc(16.7% - 4px);
}
.gallery-columns-7 .gallery-item {
    max-width: 13%;
    max-width: -webkit-calc(14.28% - 4px);
    max-width: calc(14.28% - 4px);
}
.gallery-columns-8 .gallery-item {
    max-width: 11%;
    max-width: -webkit-calc(12.5% - 4px);
    max-width: calc(12.5% - 4px);
}
.gallery-columns-9 .gallery-item {
    max-width: 9%;
    max-width: -webkit-calc(11.1% - 4px);
    max-width: calc(11.1% - 4px);
}
.gallery-columns-1 .gallery-item:nth-of-type(1n),
.gallery-columns-2 .gallery-item:nth-of-type(2n),
.gallery-columns-3 .gallery-item:nth-of-type(3n),
.gallery-columns-4 .gallery-item:nth-of-type(4n),
.gallery-columns-5 .gallery-item:nth-of-type(5n),
.gallery-columns-6 .gallery-item:nth-of-type(6n),
.gallery-columns-7 .gallery-item:nth-of-type(7n),
.gallery-columns-8 .gallery-item:nth-of-type(8n),
.gallery-columns-9 .gallery-item:nth-of-type(9n) {
    margin-right: 0;
}
.gallery-columns-1.gallery-size-medium figure.gallery-item:nth-of-type(1n+1),
.gallery-columns-1.gallery-size-thumbnail figure.gallery-item:nth-of-type(1n+1),
.gallery-columns-2.gallery-size-thumbnail figure.gallery-item:nth-of-type(2n+1),
.gallery-columns-3.gallery-size-thumbnail figure.gallery-item:nth-of-type(3n+1) {
    clear: left;
}
.gallery-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    max-height: 50%;
    margin: 0;
    padding: 6px 8px;
    opacity: 0;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.7);
    font-size: 12px;
    line-height: 1.5;
    text-align: left;
}
.gallery-caption:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    min-height: 49px;
    content: "";
}
.gallery-item:hover .gallery-caption {
    opacity: 1;
}
.gallery-columns-7 .gallery-caption,
.gallery-columns-8 .gallery-caption,
.gallery-columns-9 .gallery-caption {
    display: none;
}
.gallery-item img {
    max-width: 100% !important;
}


/*---------------------------------------
 **   Header               -----
-----------------------------------------*/

/*** SECTION HEADERS ***/
.focus,
.works,
.about-us,
.features,
.packages,
.products,
.testimonial,
.contact-us {
    padding-top: 100px;
}
.section-header {
    padding-bottom: 75px;
    text-align: center;
}
.section-header h2,
#focus .section-header h2 a,
#team .section-header h2 a,
#aboutus .section-header h2 a,
#testimonials .section-header h2 a,
#contact .section-header h2 a {
    display: inline-block;
    position: relative;
    margin-top: 15px;
    margin-bottom: 0;
    padding-bottom: 10px;
    font-size: 45px;
    line-height: 40px;
    text-transform: uppercase;
}
.section-header .section-legend {
    margin-bottom: 0;
    padding-top: 0;
    color: #000;
    font-size: 16px;
}

/* PRE LOADER */
.preloader {
    overflow: hidden !important;
    position: fixed;
    z-index: 99999;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fefefe;
}
.status {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 200px;
    margin: -100px 0 0 -100px;
    background-image: url(images/loading.gif);
    background-repeat: no-repeat;
    background-position: center;
}
#parallax_move .layer {
    width: 100%;
    height: 100%;
    background-position: top center;
    background-size: cover;
}

.home-header-wrap {
    overflow: hidden;
    position: relative;
}


/*---------------------------------------
 **   Section: Home                  -----
-----------------------------------------*/

.header.header {
    min-height: 76px;
}
.header.header > .navbar {
    -webkit-box-shadow: 0 5px 11px 0 rgba(50, 50, 50, 0.08);
    box-shadow: 0 5px 11px 0 rgba(50, 50, 50, 0.08);
}
.header-content-wrap {
    position: relative;
    padding: 285px 0 210px;
    background: rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 0 5px 11px 0 rgba(50, 50, 50, 0.08);
    box-shadow: 0 5px 11px 0 rgba(50, 50, 50, 0.08);
}
.blog-header-content-wrap {
    position: relative;
    padding: 170px 0 90px;
    background-color: rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 0 5px 11px 0 rgba(50, 50, 50, 0.08);
    box-shadow: 0 5px 11px 0 rgba(50, 50, 50, 0.08);
}
.blog-header-subtitle {
    margin-bottom: 10px;
    color: #fff;
    font-size: 21px;
    font-weight: 100;
}
.header_title {
    float: left;
    height: 50px;
    margin-top: 10px;
}
.header_title h1 {
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 20px;
    line-height: 20px;
    text-align: center;
}
.header_title h2 {
    margin: 0;
    font-size: 15px !important;
    line-height: 15px;
}
.header_title a {
    color: #000;
}

/*----  SECTION:  HOME > TOP BAR   ----*/
#site-navigation {
    float: right;
    height: 1px;
    margin-right: 0;
    margin-left: 0;
}
.navbar {
    border: 0;
    border-radius: 0 !important;
    background: #fff;
    text-align: left;
}
#main-nav {
    position: fixed;
    z-index: 1000;
    width: 100%;
    min-height: 75px;
    margin-bottom: 0;
}
#main-nav.fixed {
    position: fixed;
    top: 0;
}
.navbar-inverse .navbar-nav {
    margin-right: 0;
    margin-left: 0;
}
.navbar-inverse .navbar-nav > li {
    display: inline;
    margin-top: 20px;
    margin-right: 20px;
}
.navbar-inverse .navbar-nav > li:last-child {
    margin-right: 0 !important;
}
.navbar-inverse .navbar-nav > li > a {
    padding: 0;
    color: #404040;
    line-height: 35px;
}
.navbar-inverse .main-navigation ul > li {
    display: inline;
    margin-top: 20px;
    margin-right: 20px;
}
.navbar-inverse .main-navigation > ul > li:last-child {
    margin-right: 0 !important;
}
.navbar-inverse .main-navigation > ul > li > a {
    padding: 0;
    color: #404040;
    line-height: 35px;
}
.navbar-inverse .navbar-nav ul.sub-menu {
    position: absolute;
    z-index: 9999;
    top: 100%;
    left: -999em;
    width: 200px;
    background: #fff;
    box-shadow: 3px 3px 2px rgba(50, 50, 50, 0.08);
}
.navbar-inverse .navbar-nav ul.sub-menu {
    margin: 0;
}
.navbar-inverse .navbar-nav ul.sub-menu ul.sub-menu {
    position: absolute;
    top: 0;
}
.navbar-inverse .navbar-nav ul.sub-menu li {
    float: none;
    position: relative;
    padding: 10px;
    list-style: none;
}
.navbar-inverse .navbar-nav ul.sub-menu li a {
    color: #404040;
}
.navbar-inverse .navbar-nav ul.sub-menu li:hover > a,
.navbar-inverse .navbar-nav ul.sub-menu li.link-focus > a {
    color: #28c2ba;
}
.navbar-inverse ul ul {
    left: -999em;
}
.navbar-inverse ul ul ul {
    top: 0;
    left: -999em;
}
.navbar-inverse ul li:hover > ul.sub-menu,
.navbar-inverse ul li.link-focus > ul.sub-menu {
    left: auto;
}
.navbar-inverse ul ul li:hover > ul.sub-menu,
.navbar-inverse ul ul li.link-focus > ul.sub-menu {
    left: 100%;
}
.navbar-brand {
    display: inline-block;
    position: relative;
    height: 76px;
    padding: 7px 15px;
    line-height: 60px;
    text-align: center;
}
.navbar-brand > a > img {
    width: auto;
    max-height: 100%;
}
.navbar-brand .site-title-tagline-wrapper {
    display: inline-block;
    vertical-align: middle;
}
.navbar-inverse .navbar-brand .site-title-tagline-wrapper .site-title > a:hover,
.navbar-inverse .navbar-brand .site-title-tagline-wrapper .site-title > a:focus {
    color: #28c2ba;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus,
.navbar-inverse .navbar-brand .site-title > a {
    color: #999;
    text-decoration: none;
}
.navbar-inverse .navbar-brand p.site-description,
.navbar-inverse .navbar-brand .site-title {
    margin-bottom: 0;
    color: #000;
    font-family: "Montserrat", Helvetica, sans-serif;
    font-size: 16px;
    font-weight: bold;
    line-height: normal;
}
.navbar-inverse .navbar-brand .site-title {
    margin-bottom: 5px;
}
.navbar-inverse .navbar-brand .site-title a {
    color: #000;
}

.navbar-inverse .navbar-brand p.site-description {
    font-size: 16px;
    line-height: normal;
}
.navbar-brand > img {
    max-height: 100%;
}
.navbar-brand:focus {
    border: 1px dotted black;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a.link-focus {
    outline: none;
    color: #28c2ba;
}
.navbar-toggle {
    margin-top: 23px;
    border: 0;
    background-color: #808080;
}
.navbar-toggle:focus {
    border: 1px dotted black;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
    opacity: 1;
    background-color: #28c2ba;
    box-shadow: none;

    filter: alpha(opacity=100);
}
.navbar-toggle.active {
    background-color: #28c2ba !important;
}
.navbar-toggle.collapsed {
    background-color: #808080 !important;
}
.menu-align-center #site-navigation {
    width: 100%;
}
.menu-align-center #site-navigation > ul {
    width: 100%;
    text-align: center;
}
.menu-align-center #site-navigation > ul ul {
    text-align: left;
}
.menu-align-center #site-navigation > ul > li {
    display: inline-block;
    float: none;
}
.menu-align-center .responsive-logo {
    width: 100%;
    text-align: center;
}
.menu-align-center .zerif_header_title {
    width: 100%;
}
.menu-align-center .navbar-inverse .navbar-nav > li {
    margin-top: 0;
    margin-bottom: 0;
}
.menu-align-center .responsive-logo > a {
    display: inline-block;
    float: none;
}
.menu-align-center .navbar-brand {
    float: none;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
    color: #28c2ba;
}
.navbar-inverse .navbar-nav > li.current > a {
    position: relative;
    outline: none;
    color: #28c2ba;
}
ul.nav > li.menu-item-home > a:before {
    display: none;
    content: "";
}
li.current > a:before {
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}
ul.nav > li.current > a:before,
.page ul.nav > li.current-menu-item > a:before,
.single-post ul.nav > li.current-menu-item > a:before,
.archive ul.nav > li.current-menu-item > a:before {
    display: block;
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}
ul.nav > li.current_page_item.menu-item-home > a:before {
    display: none;
    content: "";
}
ul.nav > li.current_page_item.current > a:before {
    display: block;
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}

/*----  SECTION:  HOME > INTRO AND SHORT MSGS   ----*/
.intro {
    float: none;
    z-index: 0;
    margin-top: 25%;
    color: #fff;
    font-size: 55px;
    line-height: 65px;
    text-align: center;
    text-transform: uppercase;
}
.intro-text,
.intro-text a {
    float: none;
    z-index: 0;
    color: #fff;
    font-size: 55px;
    line-height: 65px;
    text-align: center;
    text-transform: uppercase;
}

/* Short Messages */
.bottom-message-section {
    position: relative;
    margin-top: 14%;
}
.short-text {
    margin: auto;
    color: rgba(255,255,255,0.7);
    text-align: center;
    text-transform: uppercase;
}

/*----  SECTION:  HOME > LATEST NEWS   ----*/
.latest-news {
    padding-top: 100px;
    padding-bottom: 66px;
    background: #fff;
}
.carousel-inner {
    /*  margin: 0 30px; */
}
#carousel-homepage-latestnews .item {
    height: auto;
}
.latesnews-content p,
.latesnews-content {
    color: #777;
    font-size: 14px;
    line-height: 18px;
}
#carousel-homepage-latestnews .carousel-inner .item .latestnews-title {
    display: inline-block;
    float: none;
    position: relative;
    width: auto;
    margin-top: 15px;
    margin-bottom: 15px;
    margin-bottom: 30px;
    color: #404040;
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
}
#carousel-homepage-latestnews .carousel-inner .item .latestnews-title a {
    display: block;
    color: #404040;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
}
#carousel-homepage-latestnews .item .latestnews-box .latestnews-title a:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 12.5%;
    width: 75%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}
#carousel-homepage-latestnews .item .latestnews-box:nth-child(4n+1) .latestnews-title a:before {
    background: #28c2ba;
}
#carousel-homepage-latestnews .item .latestnews-box:nth-child(4n+2) .latestnews-title a:before {
    background: #34d293;
}
#carousel-homepage-latestnews .item .latestnews-box:nth-child(4n+3) .latestnews-title a:before {
    background: #3ab0e2;
}
#carousel-homepage-latestnews .item .latestnews-box:nth-child(4n) .latestnews-title a:before {
    background: #f7d861;
}
#carousel-homepage-latestnews .item .latestnews-box .latestnews-img .latestnews-img-a {
    display: block;
}
#carousel-homepage-latestnews {
    margin: 0 30px;
}
#carousel-homepage-latestnews .carousel-control {
    width: 45px;
    background: none;
}

.carousel-control:focus {
    outline: thin dotted #28c2ba;
    outline-offset: 0;
}

.carousel-control:active {
    outline: 0;
}

.carousel-control.left {
    margin-left: -45px;
}
.carousel-control.right {
    margin-right: -45px;
}

.carousel-control .glyphicon-chevron-right {
    right: auto;
}
#carousel-homepage-latestnews .glyphicon-chevron-left:before {
    float: left;
    width: 30px;
    height: 30px;
    background: url(images/left-arrow.png) no-repeat center center;
    content: "";
}
#carousel-homepage-latestnews .glyphicon-chevron-right:before {
    float: left;
    width: 30px;
    height: 30px;
    background: url(images/right-arrow.png) no-repeat center center;
    content: "";
}


/*---------------------------------------
 **   Section: Our focus             -----
-----------------------------------------*/

.focus-box .service-icon .pixeden {
    border-radius: 50%;
}
.focus {
    overflow: hidden;
    padding-bottom: 100px;
    background: #fff;
}
.focus .row {
    text-align: center;
}
.focus .row .focus-box,
.our-team .row .team-box {
    display: inline-block;
    float: none !important;
    margin-right: -4px;
    margin-bottom: 25px;
    vertical-align: top;
}

/* FOCUS BOX */
.focus-box .service-icon {
    display: block;
    position: relative;
    width: 145px;
    height: 145px;
    margin: auto;
    margin-bottom: 30px;
    margin-bottom: 20px;
    border: 10px solid #ececec;
    border-radius: 50%;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

/* ON HOVER COLORED ROUNDED CIRCLE AROUND ICONS */
/* ON HOVER COLORED ROUNDED CIRCLE AROUND ICONS */
.red,
.green,
.blue,
.yellow {
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
#focus span:nth-child(4n+1) .focus-box .service-icon:hover,
#focus span:nth-child(4n+1) .focus-box .service-icon:focus {
    border: 10px solid #28c2ba;
}
#focus span:nth-child(4n+2)  .focus-box .service-icon:hover,
#focus span:nth-child(4n+2)  .focus-box .service-icon:focus {
    border: 10px solid #34d293;
}
#focus span:nth-child(4n+3) .focus-box .service-icon:hover,
#focus span:nth-child(4n+3) .focus-box .service-icon:focus {
    border: 10px solid #3ab0e2;
}
#focus span:nth-child(4n+4) .focus-box .service-icon:hover,
#focus span:nth-child(4n+4) .focus-box .service-icon:focus {
    border: 10px solid #f7d861;
}
#focus span:nth-child(4n+1) .focus-box .red-border-bottom:before {
    background: #28c2ba;
}
#focus span:nth-child(4n+2) .focus-box .red-border-bottom:before {
    background: #34d293;
}
#focus span:nth-child(4n+3) .focus-box .red-border-bottom:before {
    background: #3ab0e2;
}
#focus span:nth-child(4n+4) .focus-box .red-border-bottom:before {
    background: #f7d861;
}
.focus-box h3 {
    display: inline-block;
    float: none;
    position: relative;
    width: auto;
    margin-bottom: 15px;
    margin-bottom: 30px;
    color: #404040;
    background: none;
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
}
.focus-box p {
    color: #808080;
    font-size: 14px;
}

/* Links used in sane defaults */

.focus a.zerif-default-links,
.our-team a.zerif-default-links {
    color: #404040;
}
.about-us a.zerif-default-links,
.separator-one a.zerif-default-links,
.testimonial a.zerif-default-links,
.contact-us a.zerif-default-links {
    color: #fff;
}
.testimonial #client-feedbacks a.zerif-default-links {
    color: #404040;
}
.focus a.zerif-default-links:hover,
.about-us a.zerif-default-links:hover,
.our-team a.zerif-default-links:hover,
.testimonial a.zerif-default-links:hover,
.contact-us a.zerif-default-links:hover {
    color: #28c2ba;
}
.separator-one a.zerif-default-links:hover,
.testimonial #client-feedbacks a.zerif-default-links:hover {
    color: #000;
}

/* END - Links used in sane defaults */
/*----OTHER FOCUSES ----*/
.other-focuses {
    margin-bottom: 25px;
    background: url(images/lines.png) repeat-x center;
}
.other-focuses .section-footer-title {
    padding: 0 15px;
    color: #404040;
    font-weight: bold;
}
.other-focus-list {
    margin-bottom: -17px;
    padding-top: 5px;
}
.other-focus-list ul li {
    display: inline-block;
    margin-right: 50px;
    padding-bottom: 15px;
    text-transform: uppercase;
}
.other-focus-list ul li:last-child {
    margin-right: 0;
}
.other-focus-list ul li i {
    margin-right: 8px;
}


/*---------------------------------------
 **   Secction:  Separator one        -----
-----------------------------------------*/

.separator-one {
    padding: 100px 0 100px 0;
    background: rgba(52, 210, 147, 0.8);
}
.separator-one .green-btn {
    background: #14a168;
}
.separator-one .green-btn:hover {
    background: #007345;
}
.separator-one .text {
    max-width: 800px;
    margin-top: 15px;
    margin-bottom: 20px;
    padding: 0;
    color: #fff;
    line-height: 34px;
}
.separator-one .text a {
    font-size: 24px;
}


/*---------------------------------------
 **   Section: Portfolio          -----
-----------------------------------------*/

.works {
    min-height: 800px;
    padding-bottom: 100px;
    background: #fff;
}

/* IMAGE GRID */
.cbp-rfgrid {
    position: relative;
    width: 100%;
    margin: auto;
    padding: 0;
    list-style: none;
}
.cbp-rfgrid li {
    float: left;
    overflow: hidden;
    position: relative;
    width: 25%; /* Fallback */
    width: -webkit-calc(100% / 4);
    width: calc(100% / 4);
    -webkit-transition: 0.4s all linear;
    transition: 0.4s all linear;
}
.cbp-rfgrid li a,
.cbp-rfgrid li a img {
    display: block;
    width: 100%;
    max-width: 100%;
    cursor: pointer;
    -webkit-transition: 0.4s all linear;
    transition: 0.4s all linear;
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    -webkit-transition-duration: 250ms;
    transition-duration: 250ms;
    -webkit-transform: scale(1,1);
    -ms-transform: scale(1,1);
    transform: scale(1,1);
}
.cbp-rfgrid li a:hover img {
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
    -webkit-transition-duration: 250ms;
    transition-duration: 250ms;
    -webkit-transform: scale(1.05,1.07);
    -ms-transform: scale(1.05,1.07);
    transform: scale(1.05,1.07);
}

/* Flexbox is used for centering the heading */
.cbp-rfgrid li a .project-info {
    position: absolute;
    top: 10px;
    right: 10px;
    bottom: 10px;
    left: 10px;
    padding-top: 25%;
    opacity: 0;
    background: rgba(0,0,0,0.5);
    text-align: center;
    -webkit-transition: all ease 0.25s;
    transition: all ease 0.25s;

    filter: alpha(opacity=0);
}
.cbp-rfgrid li a .project-info .project-details {
    position: relative;
    top: -29px;
    width: 100%;
    opacity: 0;
    -webkit-transition: all ease 0.25s;
    transition: all ease 0.25s;

    filter: alpha(opacity=0);
}
.cbp-rfgrid li a .project-info h5 {
    display: inline-block;
    position: relative;
    margin-top: 15px;
    margin-bottom: 15px;
    font-weight: bold;
    text-transform: uppercase;
}
.cbp-rfgrid li a:hover .project-info {
    opacity: 1;

    filter: alpha(opacity=100);
}
.cbp-rfgrid li a:hover .project-details {
    top: 0;
    opacity: 1;

    filter: alpha(opacity=100);
}
.cbp-rfgrid li a:hover .button {
    bottom: -50px;
    opacity: 1;

    filter: alpha(opacity=100);
}
.cbp-rfgrid li.cbp-rfgrid-open a .project-info {
    opacity: 1;

    filter: alpha(opacity=100);
}
.cbp-rfgrid-tr {
    position: absolute;
    z-index: 9;
    top: 0;
    width: 100%;
    height: 100%;
    margin-bottom: 0;
}
.cbp-rfgrid li.cbp-rfgrid-open a .project-info .project-details {
    top: 0;
    opacity: 1;
}

/****************************************************************/
/***********************  PIRATE FORMS style ********************/
/****************************************************************/

.pirate_forms {
    padding-bottom: 95px;
}
.pirate_forms input,
.pirate_forms textarea {
    width: 100%;
    margin: auto;
    border-radius: 4px !important;
}
.pirate_forms input {
    display: inline-block;
    min-height: 46px;
    padding: 9px;
    padding-left: 15px !important;
    border-radius: 4px;
    background: rgba(255,255,255, 0.95);
    text-align: left;
    text-transform: none;
}
.pirate_forms textarea {
    display: inline-block;
    width: 100% !important;
    min-height: 250px;
    padding: 9px;
    padding-left: 15px;
    border-radius: 4px;
    background: rgba(255,255,255, 0.95);
    text-align: left;
    text-transform: none;
}
.pirate_forms .custom-button {
    float: right;
    margin-right: 15px;
}
.pirate-forms-g-recaptcha {
    display: none;
}
.pirate_forms .notification p {
    display: inline-block;
    margin-bottom: 10px;
    padding: 5px 10px;
    border-radius: 3px;
    color: #fff;
}
.pirate_forms_error_box {
    text-align: center;
}
.pirate_forms_error_box p {
    display: inline-block;
    margin-bottom: 10px;
    padding: 5px 10px;
    border-radius: 3px;
    color: #fff;
    background: #28c2ba;
}
.pirate_forms_thankyou_wrap p {
    display: inline-block;
    margin-bottom: 10px;
    padding: 5px 10px;
    border-radius: 3px;
    color: #fff;
    background: #34d293;
}
.pirate_forms .pirate-forms-submit-button {
    float: right;
    margin-right: 0;
    color: #fff !important;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.pirate_forms .pirate-forms-submit-button:hover {
    color: #fff;
    background: #28c2ba;
}
.pirate_forms_wrap label {
    float: left;
    width: 100%;
    height: 1px;
}

.zerif_hidden_if_not_customizer {
    display: none !important;
}

.pixeden {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    height: 63px;
    margin: auto;
}

/* media queries:  change number of items per row */
@media screen and (max-width: 1190px) {
    .cbp-rfgrid li {
        width: 25%; /* Fallback */
        width: -webkit-calc(100% / 4);
        width: calc(100% / 4);
    }
}
@media screen and (max-width: 1024px) {
    .cbp-rfgrid li {
        width: 33.33333333333333%; /* Fallback */
        width: -webkit-calc(100% / 3);
        width: calc(100% / 3);
    }
}
@media screen and (max-width: 768px) {
    .cbp-rfgrid li {
        width: 50%; /* Fallback */
        width: -webkit-calc(100% / 2);
        width: calc(100% / 2);
    }
}
@media screen and (max-width: 480px) {
    .cbp-rfgrid li {
        width: 100%;
    }
}
@media screen and (max-width: 300px) {
    .cbp-rfgrid li {
        width: 100%;
    }
}

/* PROJECT DETAILS LOADER */
#back-button {
    display: none;
    margin: 10px;
    padding: 13px 35px 13px 35px;
    border-radius: 4px;
    text-align: center;
    text-transform: uppercase;
}
#back-button i {
    margin-right: 10px;
}
#loader {
    display: none;
    position: relative;
    min-height: 930px;
}
#loader .loader-icon {
    position: fixed;
    z-index: 10000;
    top: 50%;
    left: 50%;
    width: 44px;
    height: 44px;
    margin: -22px -22px;
    border-radius: 5px;
    background: url(images/loading.gif) no-repeat center center;
    background-color: #fff;
    -webkit-background-size: 30px 30px;
    background-size: 30px 30px;
}


/*---------------------------------------
 **   Section: About us;              -----
-----------------------------------------*/

.about-us {
    color: #fff;
    background: #272727;
}
.about-us .big-intro {
    margin-top: -15px;
    font-size: 60px;
    font-weight: 300;
    line-height: normal;
    text-align: right;
}
.about-us .section-header .section-legend {
    color: #fff;
}
.about-us p {
    color: #939393;
    font-size: 14px;
    line-height: 25px;
    text-align: left;
}
.about-us .column {
    margin-bottom: 78px;
}
.about-us .col-md-12.zerif-rtl-big-title .big-intro,
.about-us .col-md-12.zerif_about_us_center p {
    text-align: center;
}

/*--SKILLS --*/
.skills {
    margin: 0 0 0 0;
    text-align: left;
}
.skills .skill {
    display: block;
    clear: both;
    margin-top: 0;
    margin-bottom: 25px;
}
.skills .skill .skill-count {
    display: inline-block;
    float: left;
    height: 64px;
    margin-top: 3px;
    margin-right: 15px;
    margin-bottom: 25px;
}
.skills li:last-child {
    margin-bottom: 0;
}
.skills .skill .skill1,
.skill2,
.skill3,
.skill4 {
    font-size: 16px !important;
}
.skills .skill .section-legend {
    float: none;
    clear: none;
    width: auto;
    margin-top: 0;
    margin-bottom: 0;
    font-weight: 700;
    text-transform: uppercase;
}
.skills .skill p {
    color: #8f8f8f;
    font-size: 14px;
    line-height: 20px;
}

/*--OUR CLIENTS --*/
.our-clients {
    float: left;
    width: 100%;
    margin-bottom: 40px;
    background: url(images/lines-dark.png) repeat-x center;
}
.our-clients .section-footer-title {
    padding: 0 15px;
    color: #fff;
    background: #272727;
    font-size: 16px;
}
.our-clients h2 {
    float: none;
    margin-top: 0;
    margin-bottom: 0;
    font-weight: 700;
}
.client-list {
    float: left;
    width: 100%;
    margin-bottom: 78px;
    padding-top: 5px;
}
.client-list ul {
    margin: 0;
}
.client-list ul li {
    display: inline-block;
    margin-right: 24px;
    padding-bottom: 15px;
    vertical-align: middle;
    text-transform: uppercase;
}
.client-list ul li img {
    max-width: 130px;
    opacity: 0.8;
    -webkit-transition: all ease 0.55s;
    transition: all ease 0.55s;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
    filter: alpha(opacity=80);
}
.client-list ul li img:hover {
    opacity: 1;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
}
.client-list ul li:last-child {
    margin-right: 0;
}
.client-list ul li i {
    margin-right: 8px;
}
.client-list div {
    margin: 0;
}
.client-list div span {
    margin-right: 24px;
}
.client-list div a:last-child {
    margin-right: 0;
}
.client-list div img {
    max-width: 130px;
    padding-bottom: 15px;
    opacity: 0.8;
    -webkit-transition: all ease 0.55s;
    transition: all ease 0.55s;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
    filter: alpha(opacity=80);
}
.client-list div img:hover {
    opacity: 1;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
}
.client-list div a:last-child {
    margin-right: 0;
}


/*---------------------------------------
 **   Section: stats                 -----
-----------------------------------------*/

.stats {
    clear: both;
    padding: 100px 0 60px 0 !important;
    background: rgba(0, 0, 0, 0.5);
}
.stat {
    margin-bottom: 40px;
}
.stat .icon-top {
    height: 50px;
    font-size: 40px;
    line-height: 50px;
}
.stat .stat-text {
    display: inline-block;
    position: relative;
}
.stat h3 {
    display: inline-block;
    position: relative;
    margin-top: 20px;
    padding-bottom: 5px;
}
.stat .section-legend {
    margin-top: 15px;
    color: #d1d1d1;
}


/*---------------------------------------
 **   Section: Our team;              -----
-----------------------------------------*/

.our-team {
    padding-top: 100px;
    padding-bottom: 66px;
    background: #fff;
}
.team-member {
    overflow: hidden;
    position: relative;
    margin-bottom: 35px;
    border-radius: 4px;
}
.team-member .details {
    position: absolute;
    top: -200px;
    left: 0;
    width: 100%;
    height: 190px;
    padding: 15px;
    opacity: 0;
    font-size: 13px;
    line-height: 20px;
    text-align: left;
    -webkit-transition: all 500ms;
    transition: all 500ms;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
}
.team-member .member-details {
    display: inline-block;
    position: relative;
    padding-bottom: 5px;
}
.team-member:hover .details,
.team-member:focus .details {
    top: 0;
    opacity: 1;
    color: white;
    background: #333;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
}
.team-member.team-member-open .details {
    display: block;
    top: 0;
    opacity: 1;
    color: white;
    background: #333;
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    transition: none;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
}
.team-member .profile-pic {
    overflow: hidden;
    width: 174px;
    height: 174px;
    margin: auto;
    margin-bottom: 25px;
    border-radius: 50%;
}
.team-member .profile-pic img {
    width: 100%;
    height: 100%;
}
.team-member h3 {
    position: relative;
    margin-top: 15px;
    color: #404040;
    font-size: 17px;
    font-weight: 700;
    text-transform: uppercase;
}
.team-member .position {
    font-size: 13px;
}
.team-member .social-icons {
    margin-bottom: 25px;
}
.team-member .social-icons ul {
    margin: 0 0 1.5em 0;
}
.team-member .social-icons ul li {
    display: inline-block;
    margin: 6px;
    line-height: 32px;
}
.team-member .social-icons ul li a {
    border-radius: 50%;
    color: #808080;
    background: #fff;
    font-size: 18px;
}
.team-member .social-icons ul li a:hover {
    color: #28c2ba;
}
.our-team .row > span:nth-child(4n+1) .red-border-bottom:before {
    background: #28c2ba;
}
.our-team .row > span:nth-child(4n+2) .red-border-bottom:before {
    background: #34d293;
}
.our-team .row > span:nth-child(4n+3) .red-border-bottom:before {
    background: #3ab0e2;
}
.our-team .row > span:nth-child(4n+4) .red-border-bottom:before {
    background: #f7d861;
}


/*---------------------------------------
 **   Features            -----
-----------------------------------------*/

.features {
    padding-bottom: 51px;
    background: #fff;
    text-align: left;
}
.features .feature {
    margin-bottom: 55px;
}
.features .feature-icon {
    float: left;
    margin-top: 10px;
    margin-right: 25px;
    font-size: 55px;
}
.features .feature h5 {
    color: #404040;
    font-weight: bold;
    line-height: 28px;
}
.features .feature p {
    font-size: 14px;
}


/*---------------------------------------
 **   Packages               -----
-----------------------------------------*/

.packages {
    padding-bottom: 50px;
    background: rgba(0, 0, 0, 0.5);
}
.package {
    margin-top: 25px;
    margin-bottom: 50px;
    padding-bottom: 15px;
    border-radius: 4px;
    background: #fff;
}
.package-header {
    height: 57px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    color: #fff;
    line-height: 57px;
}
.package-header h5 {
    font-weight: bold;
    text-transform: uppercase;
}
.price {
    height: 100px;
    color: #fff;
    font-weight: 400;
    line-height: 120px;
}
.price h4 {
    display: inline;
    margin-bottom: 0;
    font-size: 40px;
    line-height: normal;
}
.price h4 .dollar-sign {
    font-size: 17px;
    vertical-align: super;
}
.price .price-meta {
    color: #9f9f9f;
    line-height: normal;
    text-transform: uppercase;
}
.package ul li {
    width: 80%;
    margin: auto;
    padding-top: 10px;
    padding-bottom: 10px;
    border-bottom: 1px dotted #dadada;
}
.package ul li:last-child {
    border-bottom: 0;
}
.best-value .package {
    margin-top: 0;
}
.best-value .package-header {
    height: 82px !important;
    padding-top: 17px;
}
.best-value .package-header h4 {
    font-weight: bold;
    line-height: 29px;
    text-transform: uppercase;
}
.best-value .package-header .meta-text {
    font-size: 13px;
    line-height: normal;
}
.best-value .package-header {
    height: 72px;
}
.package ul li i {
    margin-right: 5px;
    font-size: 13px;
}
.order {
    color: #404040;
    background: #d8ccba;
}
.package .order-now {
    display: block;
    max-width: 100%;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
    color: #fff;
    background: #404040;
    line-height: 45px;
    -webkit-transition: all 700ms;
    transition: all 700ms;
}
.package .order-now:hover {
    background: #28c2ba;
}


/*---------------------------------------
**   Producs            -----
-----------------------------------------*/

.products .color-overlay {
    margin-top: -100px;
    padding-top: 100px;
    padding-bottom: 70px;
    background: rgba(39,144,176, 0.96);
}

/*---ITEM STYLE ---*/
.item {
    display: block;
    overflow: hidden;
    position: relative;
    z-index: 5;
    width: 100%;
    height: 260px;
    margin: auto;
    margin-bottom: 30px;
    border-radius: 4px;
    -webkit-background-size: 100%;
    background-size: 100%;
    -webkit-backface-visibility: hidden;
}
.item-overlay {
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: background-color 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
}
.item-content {
    position: absolute;
    bottom: 0;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transform: translate(0,100%);
    -ms-transform: translate(0,100%);
    transform: translate(0,100%);
}
.item:hover .item-content {
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    transform: translate(0,0);
}
.item-top-content {
    position: relative;
}
.item-top-content-inner {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 10px 15px 10px 15px;
    background: rgba(255,255,255,0.95);
}
.item-add-content {
    padding: 0 15px 15px 15px;
    opacity: 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
}
.item:hover .item-add-content {
    opacity: 1;

    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
}
.item-add-content-inner {
    padding-top: 10px;
    border: 0 solid #dadada;
    border-top-width: 1px;
}
.item-top-title {
    text-align: left;
}
.item-top-title h5 {
    color: #404040;
    font-weight: 700;
}

/* ITEM DETAILS */
.item-product {
    float: left;
    width: 70%;
}
.item-product-price {
    float: right;
    width: 30%;
    text-align: right;
}
.subdescription {
    color: #7d7d7d;
    font-size: 14px;
    font-weight: 400;
}

/*---PRODUCT PRICE---*/
.item-product-price {
    position: relative;
    font-size: 1em;
    font-weight: 700;
}
.item-product-price .subdescription {
    color: #808080;
}
.old-price {
    position: absolute;
    right: -2px;
    bottom: 10px;
    width: 30px;
    margin-top: -11px;
    border: 0 solid #808080;
    border-bottom-width: 1px;
    -webkit-transform: rotate(-30deg);
    -ms-transform: rotate(-30deg);
    transform: rotate(-30deg);
}

/*---ITEM DESCRIPTION ---*/
.item-content {
    background: rgba(255,255,255,0.85);
}
.item-add-content {
    color: #808080;
    font-weight: 400;
}
.item-add-content .section {
    margin-bottom: 10px;
}
.item-add-content .section:last-of-type {
    margin-bottom: 0;
}
.item-add-content p {
    font-size: 14PX;
}


/*---------------------------------------
 **   Newsletter           -----
-----------------------------------------*/

.newsletter {
    padding-top: 62px;
    padding-bottom: 62px;
    background: rgba(0, 0, 0, 0.5);
}
.newsletter h3 {
    margin-bottom: 8px;
    font-family: "Montserrat", Helvetica, sans-serif;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
}
.newsletter .subscription {
    margin-top: 15px;
}
.newsletter .custom-button {
    margin-top: 7px;
}


/*----------------------------------------
 **   Testimonial           -----
-----------------------------------------*/

.testimonial {
    padding-bottom: 90px;
    background: #8c7620;
}
.testimonial .section-header .section-legend {
    color: #fff;
}
#client-feedbacks .feedback-box,
.testimonial .widget_zerif_testim-widget {
    display: inline-block;
    z-index: 5;
    width: 30%;
    margin: 13px;
    padding: 25px;
    border-radius: 4px;
    background: #fff;
    -webkit-box-shadow: none;
    box-shadow: none;
    text-align: left;
    vertical-align: top;
}
.feedback-box .message,
.testimonial .widget_zerif_testim-widget .message {
    color: #000;
    font-size: 15px;
}
.feedback-box .client,
.testimonial .widget_zerif_testim-widget .client {
    position: relative;
    height: 73px;
    margin-top: 30px;
}
.feedback-box .quote,
.testimonial .widget_zerif_testim-widget .quote {
    float: left;
    font-size: 45px;
    line-height: 80px;
}
.feedback-box .client-info,
.testimonial .widget_zerif_testim-widget .client-info {
    float: left;
    margin-left: 18px;
    padding-top: 15px;
}
.feedback-box .client-info .client-name,
.testimonial .widget_zerif_testim-widget .client-name {
    color: #404040;
    font-family: "Homemade Apple", serif;
}
.feedback-box .client-info .client-company,
.testimonial .widget_zerif_testim-widget .client-company {
    margin-top: -3px;
    font-size: 13px;
}
.feedback-box .client-image,
.testimonial .widget_zerif_testim-widget .client-image {
    float: right;
    overflow: hidden;
    width: 73px;
    height: 73px;
    border: 3px solid #f6f6f6;
    border-radius: 50%;
}
.feedback-box .client-image img,
.testimonial .widget_zerif_testim-widget .client-image img {
    width: 100%;
    height: 100%;
}
.customNavigation {
    text-align: center;
}
.owl-theme .owl-controls .owl-page span {
    border-radius: 50%;
    background: #886e0e;
}
.customNavigation a {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;

    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.zerif_grid_col_4 > div,
.zerif_grid_col_3 > div,
.zerif_grid_col_2 > div,
.zerif_grid_col_1 > div {
    margin-bottom: 30px;
    text-align: center;
}
.zerif_grid_col_4 {
    float: left;
    width: 23%;
    margin: 0 1.25% 0 1.25%;
}
.zerif_grid_col_3 {
    float: left;
    width: 31.5%;
    margin: 0 1.25% 0 1.25%;
}
.zerif_grid_col_2 {
    float: left;
    width: 48%;
    margin: 0 1.75% 0 1.75%;
}
.zerif_grid_col_1 {
    float: left;
    width: 100%;
}
.zerif_grid_first {
    margin-left: 0;
    padding-left: 0;
}
.zerif_grid_last {
    margin-right: 0;
    padding-right: 0;
}
#client-feedbacks.zerif_grid .feedback-box {
    width: 100%;
}


/*----------------------------------------
 **   Purchase now           -----
-----------------------------------------*/

.purchase-now {
    padding-top: 70px;
    padding-bottom: 70px;
    background: #28c2ba;
}
.purchase-now h3 {
    margin-top: 14px;
    line-height: 40px;
    text-align: left;
}
.purchase-now .red-btn {
    float: right;
    background: #db5a4a;
}
.purchase-now .red-btn:hover {
    background: #bf3928;
}
.ribbon-without-button h3 {
    text-align: center;
}
.ribbon-without-button .col-md-9 {
    width: 100%;
}


/*----------------------------------------
 **   Contact us             -----
-----------------------------------------*/

.contact-us {
    padding-bottom: 95px;
    background: rgba(0, 0, 0, 0.5);
}
.contact-us .section-header .section-legend {
    color: #fff;
}
.contact-us .input-box,
textarea {
    width: 100%;
    margin: auto;
    margin-bottom: 20px;
    border-radius: 4px;
}
.contact-us textarea {
    border: 1px solid transparent;
}
.contact-us .custom-button {
    float: right;
    margin-right: 15px;
}
.zerif-g-recaptcha {
    display: none;
    margin-left: 15px;
}
.contact-us .notification p {
    display: inline-block;
    margin-bottom: 10px;
    padding: 5px 10px;
    border-radius: 3px;
    color: #fff;
}
.contact-us .error p {
    background: #28c2ba;
}
.contact-us .success p {
    background: #34d293;
}
.contact_submit_wrap {
    float: right;
}


/*---------------------------------------
 **   Footer           -----
-----------------------------------------*/

#footer {
    background: #272727;
    line-height: 20px;
}
.company-details {
    padding-top: 67px;
    padding-bottom: 30px;
    color: #939393;
}
.company-details a {
    color: #939393;
    text-decoration: none;
}

.company-details a:hover {
    color: #28c2ba;
}
.company-details .icon-top {
    margin-bottom: 10px;
    font-size: 30px;
}
.copyright {
    padding-top: 68px;
    padding-bottom: 68px;
    background: #171717;
}
.social {
    margin: 0 0 1.5em 0 !important;
}
.social li {
    display: inline-block;
    margin: 5px;
}
.social li a {
    color: #939393;
    font-size: 18px;
}
.social li a:hover {
    color: #28c2ba;
}
.copyright p {
    margin-bottom: 0;
    color: #939393;
}
.footer-widget-wrap > .container {
    text-align: center;
}
.footer-widget {
    display: inline-block;
    float: none;
    vertical-align: top;
}
.footer-widget ul {
    margin-left: 0;
    padding-left: 0;
}
.footer-widget li {
    margin-left: 0;
    list-style: none;
}
.footer-widget-wrap {
    background: rgba(255,255,255,0.05);
}
.footer-widget-wrap .widget .widget-title {
    color: #fff;
}
.footer-widget-wrap .widget li a {
    color: #ccc;
}
.footer-widget-wrap .widget li a:hover {
    color: #fff;
}
.footer-widget-wrap .widget {
    padding-bottom: 30px;
    color: #ccc;
}
.footer-widget-wrap .widget_calendar tbody td {
    background-color: rgba(249, 249, 249, 0.75);
}
.footer-widget-wrap .tagcloud a {
    padding: 2px 5px;
    color: #ccc;
    background: none;
}
.footer-widget-wrap .tagcloud a:hover {
    color: #fff;
}
.footer-widget-wrap .widget #wp-calendar {
    color: #333;
}


/*---------------------------------------
 **   Single page           -----
-----------------------------------------*/

.single-project {
    margin-bottom: 25px;
    text-align: left;
}
.single-project .project-image {
    float: left;
    width: 100%;
    margin-bottom: 25px;
    text-align: left;
}
.single-project h3 {
    margin-bottom: 10px;
    padding-bottom: 7px;
    border-bottom: 1px dotted #dadada;
    line-height: 40px;
}
.single-project .project-description {
    margin-bottom: 25px;
}
.single-project .button {
    margin-left: 0;
}
.single-project .project-information {
    margin-bottom: 10px;
}
.single-project .project-information ul li {
    margin-top: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #dadada;
}
.single-project .project-information ul li span {
    margin-right: 5px;
    font-weight: 700;
}


/*---------------------------------------
 **   Section blog            -----
-----------------------------------------*/

.blog {
    overflow: hidden;
    position: relative;
    min-height: 175px;
}
.blog-list {
    background: #fff;
}
.post-img-wrap {
    display: inline-block;
    float: left;
    overflow: hidden;
    margin-right: 20px;
}

.post-img-wrap a img {
    width: 200px;
    height: auto;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3 ease-out;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.post-img-wrap a:hover img {
    -webkit-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    -o-transition: all 0.5s ease-out;
    transition: all 0.5 ease-out;
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}
article.hentry {
    float: left;
    width: 100%;
    margin-bottom: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
article.sticky {
    padding: 10px;
    background: #f9f9f9;
}
article {
    text-align: left;
}
article .entry-meta a {
    color: #888;
    font-style: italic;
}
article .posted-on a:hover {
    color: #28c2ba;
}
.entry-footer a {
    color: #888;
    font-style: italic;
}
.entry-footer a:hover {
    color: #28c2ba;
}
.entry-title,
.entry-title a,
.widget-title,
.widget-title a {
    color: #404040;
    font-size: 20px;
    line-height: 22px;
}
.entry-title a:hover {
    color: #28c2ba;;
}
.clear {
    clear: both;
}
.content-left-wrap {
    padding-top: 60px;
}
.sidebar-wrap.content-left-wrap {
    margin-top: 60px;
    padding-top: 0;
}
.debar-wrap {
    margin-top: 50px;
}

.listpost-content-wrap h1.entry-title,
.list-post-top h1.entry-title {
    float: none;
    clear: none;
    margin-top: 0;
}
.listpost-content-wrap .entry-title:before {
    display: none;
    content: "";
}
.entry-title:after {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 0;
    width: 10%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}
.listpost-content-wrap .entry-title a:after {
    display: none;
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 0;
    width: 35%;
    width: 50px;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}

.listpost-content-wrap h1.entry-title a {
    float: none;
    position: relative;
}
.listpost-content-wrap-full {
    width: 100%;
}
.listpost-content-wrap-full .list-post-top {
    min-height: 1px;
}
.entry-title {
    margin-top: 0;
    padding-top: 0;
    font-size: 20px;
}
.listpost-content-wrap .entry-content {
    margin-top: 1em;
}
.listpost-content-wrap .entry-footer {
    padding-top: 10px;
}
.listpost-content-wrap-full .entry-footer > span,
.listpost-content-wrap .entry-footer > span {
    padding-right: 15px;
}
.listpost-content-wrap .entry-content p {
    min-height: 90px;
    margin-bottom: 0;
}
.entry-content {
    line-height: 20px;
}
.list-post-top {
    min-height: 130px;
}
.search .list-post-top {
    min-height: 1px;
}
.entry-footer {
    background: transparent;
}
.entry-footer-large a {
    color: #8b8b8b;
    font-style: italic;
}
.entry-footer-large a:hover {
    color: #28c2ba;
}
.entry-footer-large {
    float: left;
    position: relative;
    width: 100%;
    padding: 0 0 20px 0;
    padding-right: 200px;
    background: transparent;
}
.entry-footer-large > span {
    padding-right: 5px;
}
.entry-footer-large-left {
    float: left;
}
.large-container .entry-content p {
    margin: 4px 20px 0 0;
    text-align: justify;
}
.entry-content {
    margin: 1em 0 0;
}
.row {
    float: left;
    width: 100%;
    margin-right: 0;
    margin-left: 0;
}

/* Calendar style */
/* Calendar Widget */
.widget_calendar table,
.widget_calendar td {
    border: 0;
    border-spacing: 1px;
    border-collapse: separate;
}
.widget_calendar caption {
    margin: 0;
    margin-bottom: 6px;
    font-size: 14px;
}
.widget_calendar th,
.widget_calendar td {
    padding: 0;
    text-align: center;
}
.widget_calendar a {
    display: block;
    color: #28c2ba;
    background: #f9f9f9;
}
.widget_calendar a:hover {
    color: #fff;
    background-color: #28c2ba;
}
.widget_calendar tbody td {
    background-color: #f9f9f9;
}
.site-footer .widget_calendar tbody td {
    background-color: rgba(255, 255, 255, 0.05);
}
.widget_calendar tbody .pad,
.site-footer .widget_calendar tbody .pad {
    background-color: transparent;
}
.widget_calendar thead th {
    border: none;
    background: #e9e9e9;
}


/*----------------------------------------
 **   SiteOrigin Page Builder styles -----
-----------------------------------------*/

.siteorigin-panels.page-template-template-fullwidth-no-title .content-left-wrap {
    padding-top: 0;
}

.siteorigin-panels.page-template-template-fullwidth-no-title .type-page .entry-content {
    margin-top: 0;
}

.siteorigin-panels.page-template-template-fullwidth-no-title article.hentry {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.siteorigin-panels.page-template-template-fullwidth-no-title .hentry {
    margin: 0;
}

.siteorigin-panels .widget li::before {
    display: none;
}

/* ====================== Large TEMPLATE ============================== */
.entry-meta-large {
    float: right;
    position: absolute;
    top: 0;
    right: 0;
}
.entry-content p {
    text-align: justify;
}
.entry-content blockquote {
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    padding-left: 15px;
    border-left: 3px solid #28c2ba;
}
.post-img-wrap-large a img {
    width: 100%;
    max-width: 100%;
    height: auto;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3 ease-out;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.listpost-content-wrap-large {
    position: absolute;
    bottom: 0;
    width: 100%;
    min-height: 50px;
    padding: 15px 20px 0 20px;
    border-top: 2px solid #fff;
    background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
}
.large-container {
    float: left;
    position: relative;
    width: 95%;
    margin: 0 0 35px 0;
    border-radius: 4px;
    background-color: #fff;
}
.large-container .list-post-top {
    min-height: 130px;
}

/* woocommerce v2.3.5 */
*:focus {
    outline: 0;
}
.woocommerce-page .page-description {
    float: left;
    margin-top: 20px;
    text-align: justify;
}
.woocommerce-page h1.page-title {
    position: relative;
    color: #404040;
    font-size: 20px;
    font-size: 20px;
    line-height: 22px;
    text-align: left;
}
.woocommerce-page .page-title:before {
    position: absolute;
    z-index: 1;
    bottom: -9px;
    left: 0;
    width: 10%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}
.woocommerce span.onsale {
    position: absolute;
    top: -20px;
    left: -20px;
    width: 55px;
    height: 55px;
    padding: 0;
    border: 4px solid #34d293;
    border-radius: 50%;
    color: #000;
    background: rgba(255,255,255,0.9);
    text-shadow: none;
    font-size: 13px;
    line-height: 46px;
    text-transform: uppercase;
}
.woocommerce ul.products li.product .onsale {
    top: -20px;
    left: -20px;
}
.woocommerce-page .woocommerce-ordering select {
    padding: 12px 15px 12px 10px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0;
    color: #a0a0a0;
}
.woocommerce-page .products .product > a:first-child {
    display: block;
    position: relative;
    text-align: center;
}
.woocommerce-page .products a.button {
    display: inline-block;
    margin: 10px;
    margin: 0;
    padding: 10px 20px 10px 20px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background: #28c2ba;
    font-size: 12px;
    text-align: center;
    text-transform: uppercase;
}
.woocommerce-page .products a.button:hover {
    background: #28c2ba;
}
.woocommerce-page .products h3,
.woocommerce-page .products h2 {
    display: inline-block;
    float: none;
    position: relative;
    width: auto;
    min-height: 42px;
    margin: 0;
    color: #404040;
    font: inherit;
    font-size: 12px;
    font-weight: bold;
    line-height: 14px;
    text-transform: uppercase;
}
.woocommerce-page .products a .price {
    float: left;
    width: 100%;
    height: auto;
    min-height: 40px;
    padding: 10px 0;
    color: #000 ;
    line-height: 20px;
    text-align: center;
}
.woocommerce-page .products a .price del {
    display: block;
    line-height: 20px;
}
.woocommerce ul.products li.product .price {
    color: #000;
    font-size: 16px;
}
.woocommerce-page .products a .price ins {
    display: block;
    color: #28c2ba;
    background: none;
    font-weight: bold;
    line-height: 20px;
}
.woocommerce-page .products .star-rating {
    overflow: hidden;
    position: relative;
    position: relative;
    width: 100px;
    height: 20px;
    margin: 0 auto;
    background: url(images/woostars.png);
    background-repeat: no-repeat;
    background-position: top left;
    text-indent: 99999px;
}
.woocommerce-page .products .star-rating span {
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 20px;
    padding: 1px;
    background: url(images/woostars.png);
    background-repeat: no-repeat;
    background-position: bottom left;
}
.woocommerce-page .products .price {
    padding: 5px 0;
}
.woocommerce-page .products .added_to_cart {
    display: inline-block;
    margin: 0;
    padding: 10px 20px 10px 20px;
    border: none;
    border-radius: 4px;
    color: #28c2ba;
    font-size: 12px;
    text-align: center;
    text-transform: uppercase;
}
.woocommerce-page .woocommerce-result-count {
    float: left;
    margin-top: 20px;
    font-size: 14px;
    line-height: 46px;
}
.woocommerce-page .woocommerce-ordering {
    float: right;
    margin-top: 20px;
}
.woocommerce-page .product-type-simple {
    position: relative;
}
.woocommerce-page .product .images {
    float: left;
    width: 50%;
}
.woocommerce-page .product .entry-summary {
    float: right;
    width: 50%;
    margin-top: 0;
    padding-left: 5%;
}
.woocommerce-page .product .quantity {
    display: block;
    float: left;
    margin-bottom: 15px;
}
.woocommerce-page .product .quantity input {
    width: 78px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
.woocommerce-page #content .quantity input.minus {
    float: left;
    position: relative;
    position: absolute;
    top: 15px;
    right: 5px;
    width: 15px;
    height: 15px;
    margin-left: 0;
    padding: 0;
    border: none;
    color: #fff;
    background: #ccc;
    text-shadow: none;
}
.woocommerce-page #content .quantity input.plus {
    float: left;
    position: relative;
    position: absolute;
    top: 0;
    right: 5px;
    width: 15px;
    height: 15px;
    margin-left: 0;
    padding: 0;
    border: none;
    color: #fff;
    background: #ccc;
    text-shadow: none;
}
.woocommerce #content .quantity,
.woocommerce .quantity,
.woocommerce-page #content .quantity,
.woocommerce-page .quantity {
    position: relative;
}
.woocommerce #content .quantity input.qty,
.woocommerce .quantity input.qty,
.woocommerce-page #content .quantity input.qty,
.woocommerce-page .quantity input.qty {
    height: 30px;
}
.woocommerce-page .quantity.buttons_added {
    width: auto;
}
.woocommerce-page .product .product_meta a {
    color: #28c2ba;
}
.woocommerce-page .product_title {
    margin-top: 0;
    text-align: left;
}
.woocommerce-page .product .price {
    margin-bottom: 0;
    padding: 30px 0;
    text-align: left;
}
.woocommerce-page .product div[itemprop="description"] {
    float: left;
    text-align: justify;
}
.woocommerce-page .product .stock,
.woocommerce-page .product .cart,
.woocommerce-page .product .product_meta {
    float: left;
    clear: left;
    text-align: left;
}
.woocommerce-page .product .cart .button {
    float: left;
    clear: left;
    margin: 0;
    margin-bottom: 25px;
}
.woocommerce-page .product .cart .button:hover {
    background: rgb(203, 67, 50);
    box-shadow: none;
}
.woocommerce-page .product .images .thumbnails {
    width: 100%;
}
.woocommerce-page .product .images .thumbnails a {
    display: inline-block;
    float: left;
}
.woocommerce-page .woocommerce-tabs {
    float: left;
    width: 100%;
    margin-top: 50px;
}
.woocommerce-page .woocommerce-tabs .tabs {
    margin: 0;
    padding: 0;
    border-bottom: 2px solid #ccc;
}
.woocommerce-page .woocommerce-tabs .tabs li {
    display: inline-block;
    margin-bottom: -2px;
    padding: 10px 20px;
    list-style: none;
}
.woocommerce-page .woocommerce-tabs .tabs li.active {
    border-bottom: 2px solid #28c2ba;
}
.woocommerce-page .woocommerce-tabs .tabs li.active a,
.woocommerce-page .woocommerce-tabs .tabs li a:hover {
    color: #28c2ba;
    text-decoration: none;
}
.woocommerce-page .woocommerce-tabs .tabs li a {
    color: rgb(64, 64, 64);
    font-size: 18px;
}
.woocommerce-page .woocommerce-tabs .entry-content {
    margin-bottom: 50px;
    box-shadow: none;
    text-align: justify;
}
.woocommerce-page h3.comment-reply-title {
    min-height: auto;
}
.woocommerce-page .product .price {
    float: left;
    width: 100%;
    height: auto;
    min-height: 40px;
    color: #000;
    line-height: 20px;
}
.woocommerce div.product p.price {
    color: #000;
    font-size: 16px;
}
.woocommerce-page .product .price del {
    display: block;
    line-height: 20px;
}
.woocommerce-page .product .price ins {
    display: block;
    color: #28c2ba;
    background: none;
    font-weight: bold;
    line-height: 20px;
}
.woocommerce-page .product .comment-form input {
    border-radius: 3px;
}
.woocommerce-page .product .comment-form input[type="submit"] {
    margin-left: 0;
}
.woocommerce-page .product .comment-form label {
    float: left;
    width: auto;
    line-height: 32px;
}
.woocommerce-page .product .comment-form .comment-form-rating label {
    line-height: 20px;
}
.woocommerce-page .product .comment-form-author label,
.woocommerce-page .product .comment-form-email label {
    width: 100px;
}

.woocommerce-page .product .comment-form .star-rating {
    float: right;
    width: 100px;
    height: 20px;
    background: url(images/woostars.png) repeat-x left bottom;
}
.woocommerce-page .product .comment-form .star-rating span {
    float: left;
    overflow: hidden;
    height: 0;
    padding-top: 16px;
    background: url(images/woostars.png) repeat-x left top;
}
.woocommerce-page .product .comment-form .hreview-aggregate .star-rating {
    margin: 10px 0 0 0;
}
.woocommerce-page .product .comment-form #review_form #respond {
    position: static;
    width: auto;
    margin: 0;
    padding: 0 0 0;
    border: 0;
    background: transparent none;
}
.woocommerce-page .product .comment-form #review_form #respond:after {
    display: block;
    clear: both;
    content: "";
}
.woocommerce-page .product .comment-form #review_form #respond p {
    margin: 0 0 10px;
}
.woocommerce-page .product .comment-form #review_form #respond .form-submit input {
    left: auto;
}
.woocommerce-page .product .comment-form #review_form #respond textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
}
.woocommerce-page .product .comment-form p.stars:after {
    display: block;
    clear: both;
    content: "";
}
.woocommerce-page .product .comment-form p.stars span {
    float: left;
    position: relative;
    width: 100px;
    height: 20px;
    margin-left: 10px;
    background: url(images/woostars.png) repeat-x left 0;
}
.woocommerce-page .product .comment-form p.stars span a {
    float: left ;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 0;
    padding-top: 20px;
}
.woocommerce-page .product .comment-form p.stars span a:hover,
.woocommerce-page .product .comment-form p.stars span a:focus {
    background: url(images/woostars.png) repeat-x left bottom;
    -webkit-transition: initial;
    -moz-transition: initial;
    -o-transition: initial;
    transition: initial;
}
.woocommerce-page .product .comment-form p.stars span a.active {
    background: url(images/woostars.png) repeat-x left bottom ;
}
.woocommerce-page .product .comment-form p.stars span a.star-1 {
    z-index: 10;
    width: 20px;
}
.woocommerce-page .product .comment-form p.stars span a.star-1:after {
    content: "";
}
.woocommerce-page .product .comment-form p.stars span a.star-2 {
    z-index: 9;
    width: 40px;
}
.woocommerce-page .product .comment-form p.stars span a.star-2:after {
    content: "";
}
.woocommerce-page .product .comment-form p.stars span a.star-3 {
    z-index: 8;
    width: 60px;
}
.woocommerce-page .product .comment-form p.stars span a.star-3:after {
    content: "";
}
.woocommerce-page .product .comment-form p.stars span a.star-4 {
    z-index: 7;
    width: 80px;
}
.woocommerce-page .product .comment-form p.stars span a.star-4:after {
    content: "";
}
.woocommerce-page .product .comment-form p.stars span a.star-5 {
    z-index: 6;
    width: 100px;
}
.woocommerce-page .product .comment-form p.stars span a.star-5:after {
    content: "";
}
.woocommerce-page .product .comment-form p.stars span a {
    border: none;
}
.woocommerce-page .comment-form-rating {
    float: left;
    width: 100%;
    margin-top: 15px;
}
.woocommerce-page .product #review_form_wrapper {
    float: left;
    width: 100%;
}
.woocommerce-page .woocommerce-tabs .commentlist {
    margin: 0;
    padding: 0;
}
.woocommerce-page .woocommerce-tabs .commentlist .comment {
    float: left;
    clear: left;
    width: 100%;
}
.woocommerce-page .woocommerce-tabs .comment-text {
    display: inline-block;
}
.woocommerce-page .woocommerce-tabs .description {
    width: 100%;
}
.woocommerce-page .woocommerce-product-rating,
.woocommerce div.product .woocommerce-product-rating {
    float: left;
    margin-top: 30px;
    margin-bottom: 0;
    text-align: left;
}
.woocommerce-page .woocommerce-product-rating .star-rating {
    overflow: hidden;
    position: relative;
    position: relative;
    width: 100px;
    height: 20px;
    background: url(images/woostars.png);
    background-repeat: no-repeat;
    background-position: top left;
    text-indent: 99999px;
}
.woocommerce-page .woocommerce-product-rating .star-rating span {
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 20px;
    padding: 1px;
    background: url(images/woostars.png);
    background-repeat: no-repeat;
    background-position: bottom left;
}
.woocommerce-page .woocommerce-product-rating .woocommerce-review-link,
.woocommerce-page .woocommerce-product-rating .woocommerce-review-link span {
    color: #eca420;
    font-size: 11px;
}
.woocommerce-page .comment-text .star-rating {
    overflow: hidden;
    position: relative;
    position: relative;
    width: 100px;
    height: 20px;
    background: url(images/woostars.png);
    background-repeat: no-repeat;
    background-position: top left;
    text-indent: 99999px;
}
.woocommerce-page .comment-text .star-rating span {
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 20px;
    padding: 1px;
    background: url(images/woostars.png);
    background-repeat: no-repeat;
    background-position: bottom left;
}
.woocommerce-page .woocommerce-tabs .comment-text {
    width: 100%;
}
.woocommerce-page .woocommerce-tabs .comment_container {
    position: relative;
    padding-left: 50px;
}
.woocommerce-page .woocommerce-tabs .comment_container > img {
    position: absolute;
    top: 0;
    left: 0;
}
.woocommerce-page .woocommerce-message:before {
    color: #38c28b;
}
.woocommerce-page .woocommerce-message {
    margin: 0 0 40px;
    border-top-color: #38c28b;
    border-radius: 3px;
    color: #38c28b;
    background: #f5f5f5;
    text-align: left;
    list-style: none;
}
.woocommerce-page .woocommerce-message a {
    padding: 6px 14px;
    color: #fff;
    background-color: #38c28b;
    font-size: 12px;
}
.woocommerce-page .woocommerce-error {
    float: left;
    width: 100%;
    margin: 0 0 40px;
    padding: 0;
    border: none;
    border-radius: 3px;
    color: #fff;
    background: #28c2ba;
    list-style: none;
}
.woocommerce-page .woocommerce-error a {
    padding: 6px 14px;
    color: #fff;
    background-color: #f47565;
    font-size: 12px;
}
.woocommerce-page .woocommerce .woocommerce-error:before {
    color: #fff;
}
.woocommerce-page .woocommerce-info {
    float: left;
    width: 100%;
    margin: 0 0 40px;
    margin-top: 25px !important;
    padding: 0;
    border: none;
    border-radius: 3px;
    color: #fff;
    background: #3ab0e2;
    list-style: none;
}
.woocommerce-page .woocommerce-info a {
    padding: 6px 14px;
    color: #fff;
    background-color: #5fb8dd;
    font-size: 12px;
}
.woocommerce-page .woocommerce-info:before {
    color: #fff;
}
.woocommerce-page .woocommerce-info {
    float: left;
    padding-top: 30px;
    text-align: left;
}
.woocommerce-page .woocommerce .woocommerce-info {
    margin-bottom: 40px;
    border: none;
    border-radius: 3px;
    color: #fff;
    background: rgb(58, 176, 226);
}
.woocommerce-page .woocommerce .woocommerce-info a {
    opacity: 0.9;
    color: #fff;
}
.woocommerce-page .woocommerce .woocommerce-info:before {
    color: #fff;
}
.woocommerce-page .woocommerce input {
    padding: 10px 5px;
    border-radius: 3px;
}
.woocommerce-page .woocommerce .woocommerce-error {
    padding: 1em 2em 1em 3.5em!important;
    border-top-color: #b81c23;
    border-radius: 3px;
}
.woocommerce-page .woocommerce .products .product h3 {
    float: none;
    color: #404040;
}
.woocommerce-page .woocommerce .added_to_cart,
.woocommerce .button {
    display: inline-block;
    margin: 10px;
    padding: 13px 35px 13px 35px;
    border: none;
    border-radius: 4px;
    color: #000;
    background: #f3f3f3;
    text-align: center;
    text-transform: uppercase;
}
.woocommerce-page .woocommerce .add_to_cart_button,
.woocommerce .checkout-button,
.woocommerce .single_add_to_cart_button,
.woocommerce #place_order,
.woocommerce div.product form.cart .button {
    display: inline-block;
    margin: 10px;
    margin-left: 0;
    padding: 13px 35px 13px 35px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background: #28c2ba;
    text-align: center;
    text-transform: uppercase;
}
.woocommerce-page .woocommerce-tabs .tabs {
    border-bottom: 1px solid #ccc;
}
.woocommerce-page .woocommerce .add_to_cart_button:hover,
.woocommerce .checkout-button:hover,
.woocommerce .single_add_to_cart_button :hover,
.woocommerce #place_order:hover,
.woocommerce div.product form.cart .button:hover {
    background: #bf3928;
}
.woocommerce-page .woocommerce .price del {
    display: block;
}
.woocommerce-page .woocommerce .price {
    height: auto;
    line-height: normal;
}
.woocommerce-page .woocommerce .price ins {
    color: #000;
    font-size: 20px;
    font-weight: bold;
}
.woocommerce-page .woocommerce #coupon_code {
    min-width: 110px;
    margin-top: 2px;
    padding: 6px 10px;
    padding: 6px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0;
    border-radius: 5px!important;
    color: #a0a0a0;
}
.woocommerce-page .woocommerce .product-name a {
    color: #404040;
}
.woocommerce div.product form.cart {
    margin-bottom: 0;
}
.woocommerce-page .woocommerce .cart_totals tr.cart-subtotal th,
.woocommerce-page .woocommerce .cart_totals tr.order-total th {
    width: 50%;
}
.woocommerce-page .woocommerce .entry-title {
    text-align: left;
}
.woocommerce .woocommerce-info:before,
.woocommerce-page .woocommerce-info:before,
.woocommerce .woocommerce-error:before,
.woocommerce-page .woocommerce-error:before {
    padding: 0;
}
.woocommerce-page .woocommerce .checkout input,
.woocommerce-page .woocommerce .checkout textarea,
.woocommerce-page .woocommerce .checkout select {
    padding: 12px 15% 12px 2%;
}
.woocommerce-page .woocommerce ul.payment_methods {
    padding-left: 1em;
}
.woocommerce-page ul.products {
    float: left;
    width: 100%;
    margin-top: 40px;
}
.woocommerce-page .woocommerce .summary,
.woocommerce-page .woocommerce .entry-summary,
.woocommerce-page .woocommerce div.product .woocommerce-tabs .panel {
    text-align: justify;
}
.woocommerce-page .woocommerce .quantity input.input-text {
    width: 100px;
    height: 42px;
    margin-right: 10px;
}
.woocommerce-page .woocommerce form.cart button.single_add_to_cart_button {
    margin: 0;
}
.woocommerce-page .woocommerce .comment-form label {
    width: 100%;
}
.woocommerce-page .woocommerce .woocommerce-message {
    float: left;
    width: 100%;
    border: none;
    border-radius: 3px;
    color: white;
    background: #20aa80;
    text-align: left;
}
.woocommerce-page .woocommerce .woocommerce-message a.button {
    margin: 0;
    padding: 7px 17px;
}
.woocommerce-page .woocommerce .woocommerce-message:before {
    color: #fff;
}
.woocommerce-page .woocommerce ul.products li.product .star-rating {
    font-size: inherit;
}
.woocommerce-page .woocommerce input[type="submit"],
.woocommerce-page #content input.button,
.woocommerce input.button.alt,
.woocommerce-page #content input.button.alt,
.woocommerce-page input.button.alt {
    display: inline-block;
    margin: 10px;
    margin: 0;
    padding: 10px 20px 10px 20px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background: #28c2ba;
    text-shadow: none;
    font-size: 12px;
    text-align: center;
    text-transform: uppercase;
}
.woocommerce-page .woocommerce input[type="submit"]:hover,
.woocommerce-page #content input.button:hover,
.woocommerce input.button.alt:hover,
.woocommerce-page #content input.button.alt:hover,
.woocommerce-page input.button.alt:hover {
    color: #fff;
    background: #28c2ba;
    box-shadow: none;
}
.woocommerce-page .woocommerce .product-quantity input.qty {
    width: 60px;
    height: 30px;
    margin-right: 0;
    padding: 0 0 0 5px;
    text-align: left;
}
.woocommerce a.button.alt {
    color: #fff;
    background: #28c2ba;
}
.woocommerce a.button.alt:hover {
    color: #fff;
    background: #28c2ba;
}
.woocommerce-page .woocommerce a.remove:hover {
    color: #fff !important;
    background: #28c2ba;
    line-height: 20px;
}
.woocommerce-page .woocommerce a.remove {
    color: #28c2ba !important;
    line-height: 20px;
}
.woocommerce-page .woocommerce-info {
    width: 100%;
}
.woocommerce-page .woocommerce-checkout .col-1,
.woocommerce-page .woocommerce-checkout .col-2 {
    float: left;
    width: 100%;
}
.woocommerce-page .woocommerce-checkout-review-order {
    clear: left;
}
.woocommerce-page .woocommerce .checkbox {
    float: left;
    padding-left: 0;
}
.woocommerce-page .woocommerce .input-checkbox {
    margin: 15px 0 0 10px;
}
.woocommerce-page .woocommerce-checkout #payment {
    background: #fafafa;
}
.woocommerce-page .woocommerce-checkout #payment div.payment_box {
    background-color: #ececec;
}
.woocommerce-page .woocommerce-checkout #payment div.payment_box:after {
    margin: -13px 0 0 2em;
    border: 8px solid #ececec;
    border-top-color: transparent;
    border-right-color: transparent;
    border-left-color: transparent;
    content: "";
}
.woocommerce-page .woocommerce .order_details li.order {
    background: #fff;
}
.woocommerce-page .products a.button {
    text-decoration: none;
}
.woocommerce-page .product .cart .button {
    color: #fff;
}
.woocommerce-page .woocommerce {
    margin-top: 25px;
}
.woocommerce-page .woocommerce .order {
    background: #fff;
}
.woocommerce-page .woocommerce table.my_account_orders .order-actions .button {
    font-size: 12px;
}
.woocommerce-page .woocommerce #payment ul.payment_methods {
    margin: 0;
    padding: 1em!important;
    border-bottom: 1px solid #d3ced2;
    text-align: left;
    list-style: outside none none;
}
.woocommerce-page .woocommerce #payment ul.payment_methods li {
    margin-left: 2em;
    font-weight: 400;
    line-height: 2;
    text-align: left;
}
.woocommerce-page .woocommerce #payment {
    background: none repeat scroll 0 0 #fafafa;
}
.woocommerce-page .woocommerce #payment div.payment_box {
    position: relative;
    width: 96%;
    margin: 1em 0;
    padding: 1em 2%;
    border-radius: 2px;
    color: #515151;
    background-color: #dfdcde;
    font-size: 0.92em;
    line-height: 1.5;
}
.woocommerce-page .woocommerce #payment div.payment_box {
    background-color: #ececec;
}
.woocommerce-page .woocommerce #payment div.payment_box p {
    margin-bottom: 0;
}
.woocommerce-page .woocommerce #payment div.payment_box:after {
    position: absolute;
    top: -3px;
    left: 0;
    margin: -13px 0 0 2em;
    border-width: 8px;
    border-style: solid;
    border-color: transparent transparent #ececec;
    border-image: none;
    content: "";

    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
}
.woocommerce-page .woocommerce #payment h3 {
    padding-left: 20px;
}
.woocommerce-page .woocommerce a.button {
    margin-left: 0;
    font-size: 14px;
}
.woocommerce-page .woocommerce button.button {
    margin-left: 0;
    padding: 13px 35px 13px 35px;
    font-size: 12px;
}
.woocommerce button.button {
    width: 100%;
}
.woocommerce-page .woocommerce select {
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding: 10px 5px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    outline: 0;
    color: #a0a0a0;
    line-height: 1;
}
.woocommerce-page .woocommerce #order_review {
    clear: left;
}
.woocommerce-page .woocommerce .login {
    float: left;
    width: 100%;
}
.woocommerce-page .select2-drop {
    text-align: left;
}
.woocommerce-page .woocommerce-account .addresses .title .edit {
    float: left;
}
.woocommerce-page div.product .woocommerce-tabs ul.tabs li {
    padding-bottom: 0;
    border: none;
    background: none;
}
.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active:before {
    border: none;
    content: "";
}
.woocommerce-page div.product .woocommerce-tabs ul.tabs:before {
    display: none;
    content: "";
}
.woocommerce-page .woocommerce div.product .woocommerce-tabs ul.tabs li.active:after {
    display: none;
    content: "";
}
.woocommerce div.product .woocommerce-tabs ul.tabs li:after,
.woocommerce div.product .woocommerce-tabs ul.tabs li:before {
    display: none;
    content: "";
}
.woocommerce div.product .woocommerce-tabs ul.tabs {
    overflow: visible;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    margin-bottom: -1px;
    border-bottom: 2px solid #28c2ba;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li {
    box-shadow: none;
}
.woocommerce-page .comment-form {
    float: left;
    float: left;
    width: 100%;
    margin-top: 15px;
}
.woocommerce #review_form #respond .form-submit input {
    display: inline-block;
    margin: 10px;
    padding: 13px 35px 13px 35px;
    border: none;
    border-radius: 4px;
    background: #28c2ba;
    text-align: center;
    text-transform: uppercase;
}
.woocommerce #review_form #respond textarea {
    width: 100%;
    height: 130px;
}
.woocommerce #reviews #comments ol.commentlist li .comment-text {
    margin: 0;
}
.woocommerce-cart .cart-collaterals .cart_totals table {
    clear: left;
}
.woocommerce table.shop_table {
    clear: left;
    font-size: 16px;
}
.woocommerce #content div.product div.thumbnails a,
.woocommerce div.product div.thumbnails a,
.woocommerce-page #content div.product div.thumbnails a,
.woocommerce-page div.product div.thumbnails a {
    margin-bottom: 1em;
}
.woocommerce .upsells.products ul,
.woocommerce .upsells.products ul.products {
    float: left;
    clear: left;
}

/**/
.woocommerce .woocommerce-message:before,
.woocommerce-page .woocommerce-message:before {
    padding: 0;
    content: "\2713";
}
.woocommerce .shipping_calculator h2 a {
    font-size: 18px;
}

/**/
.woocommerce-page .upsells.products ul li.product,
.woocommerce-page .upsells.products ul.products li.product {
    float: left;
    clear: none;
    position: relative;
    width: 22.05%;
    margin: 0 3.8% 2.992em 0;
    padding: 0;
}
.woocommerce .upsells.products ul li.product:nth-child(4),
.woocommerce-page ul.products li.product:nth-child(4) {
    margin-right: 0;
}
.woocommerce .upsells.products ul li.product:nth-child(4+1),
.woocommerce-page ul.products li.product:nth-child(4+1) {
    clear: left;
}

/*woocommerce pagination*/
.woocommerce nav.woocommerce-pagination {
    float: left;
    width: 100%;
    padding-bottom: 30px;
}
.woocommerce .woocommerce-pagination ul.page-numbers .current:before,
.woocommerce-page .woocommerce-pagination ul.page-numbers .current:before {
    display: none;
    content: "";
}
.woocommerce #content nav.woocommerce-pagination ul,
.woocommerce nav.woocommerce-pagination ul,
.woocommerce-page #content nav.woocommerce-pagination ul,
.woocommerce-page nav.woocommerce-pagination ul,
.woocommerce nav.woocommerce-pagination ul {
    border: none;
}
.woocommerce #content nav.woocommerce-pagination ul li,
.woocommerce-page #content nav.woocommerce-pagination ul li,
.woocommerce-page nav.woocommerce-pagination ul li
.woocommerce nav.woocommerce-pagination ul li {
    margin: 0 3px;
    border: none;
}
.woocommerce nav.woocommerce-pagination ul li a,
.woocommerce nav.woocommerce-pagination ul li span {
    width: 32px;
    min-width: 32px;
    border: none;
    border-radius: 4px;
    color: #000;
    background: rgb(236, 236, 236);
}
.woocommerce #content nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce-page #content nav.woocommerce-pagination ul li span.current,
.woocommerce-page nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce-page #content nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce #content nav.woocommerce-pagination ul li a:hover {
    color: #fff;
    background: rgb(233, 102, 86);
}
.woocommerce div.product form.cart label {
    color: #404040;
}
.woocommerce p.stars a:before,
.woocommerce p.stars a:hover ~ a:before {
    display: none;
    content: "";
}

/* Changes for woocommerce 3.0.0 */
.woocommerce div.product .related {
    clear: both;
}
.woocommerce div.product {
    float: left;
    width: 100%;
}
.woocommerce-product-details__short-description {
    clear: both;
    text-align: left;
}

.woocommerce-product-details__short-description ul {
    margin: 0 0 24px;
    list-style-position: inside;
}
.woocommerce div.product div.images .woocommerce-product-gallery__image:nth-child(n+2) {
    width: 30.75%;
}
.woocommerce div.product div.images .flex-control-thumbs li {
    float: left;
    width: 30.75%;
    padding-top: 1em;
}

.woocommerce div.product div.images .flex-control-thumbs li {
    margin-right: 3.8%;
}

.woocommerce div.product div.images .flex-control-thumbs li:nth-child(3n) {
    margin: 0;
}

.woocommerce-error,
.woocommerce-info,
.woocommerce-message {
    position: relative;
    width: auto;
    margin: 0 0 2em!important;
    padding: 1em 2em 1em 3.5em!important;
    word-wrap: break-word;
    list-style: none!important;
}

.woocommerce-checkout-payment ul.wc_payment_methods li.woocommerce-info {
    margin: 0 !important;
    margin-left: 2em !important;
    padding: 0 !important;
    color: inherit;
    background: transparent;
}

.woocommerce div.product form.cart .variations td,
.woocommerce div.product form.cart .variations th {
    vertical-align: inherit;
}

/* End changes for woocommerce 3.0.0*/

@media (max-width: 1200px) {
    .header-content-wrap,
    .blog-header-content-wrap {
        padding: 235px 0 150px;
    }
}

@media (max-width: 992px) {
    .woocommerce-page .woocommerce .cart-collaterals .cart_totals {
        width: 100%;
    }
    .woocommerce-page .products .product > a:first-child {
        /*      min-height: 325px; */
    }
    .large-container {
        width: 100%;
    }
}
@media (max-width: 767px) {
    .woocommerce-page .upsells.products ul li.product,
    .woocommerce-page .upsells.products ul.products li.product {
        float: left;
        clear: both;
        width: 48%;
        margin: 0 0 2.992em;
    }
    .woocommerce .upsells.products ul li.product:nth-child(4),
    .woocommerce-page ul.products li.product:nth-child(4) {
        margin: 0 0 2.992em;
    }
    .woocommerce .upsells.products ul li.product:nth-child(4+1),
    .woocommerce-page ul.products li.product:nth-child(4+1) {
        clear: none;
    }
    .woocommerce .upsells.products ul li.product:nth-child(even),
    .woocommerce-page ul.products li.product:nth-child(even) {
        float: right;
        margin-right: 0;
    }
    .woocommerce .upsells.products ul li.product:nth-child(odd),
    .woocommerce-page ul.products li.product:nth-child(odd) {
        clear: left;
    }
    .listpost-content-wrap-large {
        position: relative;
    }
    .menu-align-center .responsive-logo > a {
        float: left;
    }
}
@media (max-width: 600px) {
    .woocommerce-page .product .images {
        width: 100%;
    }
    .woocommerce-page .product .entry-summary {
        width: 100%;
        margin-top: 50px;
        padding-left: 0;
    }
    .woocommerce-page .woocommerce-tabs .tabs li a {
        font-size: 14px;
    }
    .woocommerce-page .woocommerce-tabs .tabs li {
        padding: 10px 10px;
    }
    .listpost-content-wrap-large {
        position: relative;
    }
    .listpost-content-wrap-large {
        padding: 20px 0 0 0;
    }
    body {
        position: initial !important;
    }
    .entry-meta-large {
        float: left;
        position: relative;
        width: 100%;
    }
    .entry-footer-large {
        padding-right: 0;
    }
}
@media (max-width: 480px) {
    .woocommerce ul.products li.product,
    .woocommerce-page ul.products li.product {
        width: 100%;
    }
    .woocommerce-page .woocommerce-result-count {
        width: 100%;
        margin-bottom: 0;
        text-align: center;
    }
    .woocommerce-page .woocommerce-ordering {
        float: none;
    }
    .woocommerce-page .products .product > a:first-child {
        width: 240px;
    }
    .woocommerce-page .woocommerce-tabs .tabs li {
        width: 100%;
    }
    .woocommerce-page .woocommerce-tabs .tabs li {
        width: 100%;
        border-bottom: 2px solid #ccc;
    }
    .woocommerce-page .woocommerce-tabs .tabs {
        border-bottom: 0;
    }
    .woocommerce-page .woocommerce-tabs .comment_container {
        position: relative;
        padding-top: 50px;
        padding-left: 0;
    }
    .woocommerce-page .comment-text .star-rating {
        float: left;
        width: 100%;
        margin-bottom: 5px;
    }
    .woocommerce-page .products .product > a:first-child {
        width: 100%;
    }

/* cart page */
    .woocommerce-page .woocommerce .product-quantity input.qty {
        width: 45px;
    }
    .woocommerce td.product-quantity {
        min-width: 40px;
    }
    .woocommerce-page .woocommerce input[type="submit"] {
        font-size: 10px;
    }
    .woocommerce-page .woocommerce .cart_totals tr.cart-subtotal th {
        font-size: 12px;
    }
    .woocommerce-cart .cart-collaterals .cart_totals tr th {
        font-size: 12px;
    }
    .woocommerce-cart .cart-collaterals .cart_totals table td,
    .woocommerce-cart .cart-collaterals .cart_totals table td span,
    .woocommerce-cart .cart-collaterals .cart_totals table td a {
        font-size: 12px;
    }
    .woocommerce form .form-row label {
        font-size: 12px;
    }
    .woocommerce-page .woocommerce .woocommerce-info,
    .woocommerce-page .woocommerce .woocommerce-info a {
        font-size: 12px;
    }
    .woocommerce-checkout-payment label {
        font-size: 14px;
    }
    .woocommerce-page .woocommerce #payment div.payment_box p {
        font-size: 12px;
        line-height: 16px;
        text-align: justify;
    }
    .woocommerce form .form-row {
        width: 100%;
    }
    .woocommerce-page .woocommerce .order_details li {
        width: 100%;
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 0 0 5px 0;
        border-right: none;
        border-bottom: 1px dashed #d3ced2;
    }
    .woocommerce-page address {
        font-size: 12px;
    }
    .woocommerce-page .woocommerce-error,
    .woocommerce-page .woocommerce-message,
    .woocommerce-page .woocommerce-error li {
        font-size: 12px;
    }
    .woocommerce-page .woocommerce .cart-collaterals .cart_totals a {
        width: 100%;
        margin-right: 0;
    }
    .woocommerce-page .woocommerce .checkbox {
        font-size: 16px;
    }
    .woocommerce-page .myaccount_address {
        font-size: 12px;
    }
    .woocommerce-page #content .quantity input.minus,
    .woocommerce-page #content .quantity input.plus {
        display: none;
    }
    .woocommerce-page .upsells.products ul li.product,
    .woocommerce-page .upsells.products ul.products li.product {
        width: 100%;
    }
}

/* [end] woocommerce */

/* bbpress style [version 2.5.8] */

.bbpress #subscription-toggle {
    float: right;
}

.bbpress .bbp-breadcrumb {
    margin: 10px 0;
}

#subscription-toggle {
    /** margin: 10px 0; */
}

#bbpress-forums div.bbp-template-notice img.avatar {
    margin-bottom: 2px;
}

div.bbp-template-notice.info {
    padding: 1px 5px;
    border: none;
    background-color: #f0f8ff;
}

div.bbp-template-notice,
div.indicator-hint {
    padding: 1px 5px;
    border: none;
    background-color: #fff7d6;
}

#bbpress-forums fieldset.bbp-form label {
    line-height: 30px;
}

div.bbp-template-notice a {
    color: #008ed6;
    text-decoration: none;
}

.bbp-pagination {
    float: left;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 0;
}

#bbpress-forums li.bbp-header {
    padding: 10px 0;
    background: #fbfbfb;
}

#bbpress-forums #bbp-search-form #bbp_search {
    padding: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#bbpress-forums .bbp-forum-info .bbp-forum-content,
#bbpress-forums p.bbp-topic-meta {
    font-size: 11px;
    line-height: 16px;
}

#bbpress-forums div.bbp-the-content-wrapper input {
    width: auto;
}

#bbpress-forums fieldset.bbp-form input {
    padding: 5px;
}

#bbpress-forums li.bbp-header,
#bbpress-forums li.bbp-footer {
    border-top: none;
}

#bbpress-forums li.bbp-header {
    background: none;
}

#bbpress-forums div.odd,
#bbpress-forums ul.odd {
    background: none;
}

#bbpress-forums input[type="submit"] {
    padding: 5px 30px 5px 30px;
}

#bbpress-forums li.bbp-header,
#bbpress-forums li.bbp-footer {
    background: none;
}

#bbpress-forums li.bbp-header {
    border-bottom: 2px solid #ececec;
}

#bbpress-forums li.bbp-footer {
    border-top: 3px solid #ececec;
}

.bbp-breadcrumb,
.bbp-breadcrumb a,
.bbp-breadcrumb p {
    color: #666;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
}

.bbp-topics-front ul.super-sticky,
.bbp-topics ul.super-sticky,
.bbp-topics ul.sticky,
.bbp-forum-content ul.sticky {
    background-color: #f9f9f9 !important;
}

#bbpress-forums ul.bbp-lead-topic,
#bbpress-forums ul.bbp-topics,
#bbpress-forums ul.bbp-forums,
#bbpress-forums ul.bbp-replies,
#bbpress-forums ul.bbp-search-results {
    color: #666;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
}

#bbpress-forums .bbp-forum-info .bbp-forum-content,
#bbpress-forums p.bbp-topic-meta {
    color: #666;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
}

.bbp-forum-title,
.bbp-forum-title:visited {
    float: left;
    margin-bottom: 15px;
    color: #000;
    font-size: 18px;
    font-weight: 700;
    line-height: 22px;
}

.bbp-forum-title:hover {
    text-decoration: none;
}

.bbp-forum-title:after {
    display: block;
    width: 80px;
    height: 2px;
    margin-top: 5px;
    background: #008ed6;
    content: "";
}

#bbpress-forums li.bbp-body ul.forum,
#bbpress-forums li.bbp-body ul.topic {
    padding: 20px 5px !important;
    border-top: 1px solid #eee;
}

.bbp-forum-freshness p,
.bbp-forum-freshness a,
.bbp-forum-freshness span {
    color: #666;
    font-size: 14px;
    font-style: italic;
    line-height: 18px;
}

.bbp-forum-freshness a:hover {
    text-decoration: underline;
}

#bbpress-forums p.bbp-topic-meta img.avatar,
#bbpress-forums ul.bbp-reply-revision-log img.avatar,
#bbpress-forums ul.bbp-topic-revision-log img.avatar,
#bbpress-forums div.bbp-template-notice img.avatar,
#bbpress-forums .widget_display_topics img.avatar,
#bbpress-forums .widget_display_replies img.avatar {
    margin-bottom: 0;
}

#bbpress-forums .bbp-forum-info .bbp-forum-content,
#bbpress-forums p.bbp-topic-meta {
    clear: left;
    margin: 0;
    font-size: 14px;
    line-height: 24px;
}

#bbpress-forums li {
    font-size: 14px;
}

#bbpress-forums p.bbp-topic-meta,
#bbpress-forums p.bbp-topic-meta span {
    font-size: 14px;
    line-height: 18px;
    text-align: center;
}

.bbp-topic-started-by {
    float: left;
}

div.bbp-template-notice p,
div.bbp-template-notice a {
    font-size: 12px;
    line-height: 16px;
}

.bbp-topic-freshness,
.bbp-topic-freshness a {
    font-size: 14px;
    line-height: 18px;
    text-align: center;
}

.bbp-topic-freshness a {
    color: #666;
    font-style: italic;
}

a.bbp-author-name:hover,
.bbp-topic-freshness a:hover {
    text-decoration: underline;
}

#bbpress-forums ul.bbp-lead-topic,
#bbpress-forums ul.bbp-topics,
#bbpress-forums ul.bbp-forums,
#bbpress-forums ul.bbp-replies,
#bbpress-forums ul.bbp-search-results {
    border: none;
}

#bbpress-forums .bbp-author-name {
    color: #666;
    font-size: 14px;
    font-style: italic;
    line-height: 24px;
}

#bbpress-forums fieldset.bbp-form {
    margin-bottom: 0;
    padding: 0;
    border: none;
}

#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content {
    border: 1px solid #e7e7e7;
    -webkit-border-radius: 0 0 3px 3px;
    -moz-border-radius: 0 0 3px 3px;
    border-radius: 0 0 3px 3px;
    font-size: 14px;
}

#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar {
    border: 1px solid #e7e7e7;
    border-bottom: none;
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
}

#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar {
    border: 1px solid #e7e7e7;
    border-bottom: none;
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
}

li.bbp-forum-freshness,
li.bbp-topic-freshness {
    float: left;
    width: 25%;
    text-align: center;
}

#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar input {
    padding: 5px;
    border: 1px solid #e7e7e7;
    background-color: #fbfbfb;
    box-shadow: none;
}

#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar input:hover {
    color: #28c2ba;
}

#bbpress-forums fieldset.bbp-form input {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#bbpress-forums fieldset.bbp-form select {
    padding: 5px;
    border: 1px solid #dedede;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: #666;
}

.bbp-topics-front ul.super-sticky,
.bbp-topics ul.super-sticky,
.bbp-topics ul.sticky,
.bbp-forum-content ul.sticky {
    background: red;
}

#bbpress-forums div.bbp-topic-tags {
    float: left;
    width: 100%;
    margin-bottom: 15px;
}

#bbpress-forums .bbp-topic-description a {
    color: #666;
    font-size: 12px;
    font-style: italic;
}

#bbpress-forums .bbp-topic-description a:hover {
    text-decoration: underline;
}

#bbpress-forums fieldset.bbp-form legend {
    padding: 5px 0;
}

div.bbp-forum-header,
div.bbp-topic-header,
div.bbp-reply-header,
li.bbp-body div.hentry {
    padding: 8px 0;
}

#bbpress-forums div.bbp-reply-header {
    background: none;
}

#bbpress-forums .bbp-admin-links {
    color: transparent;
}

#bbpress-forums .bbp-admin-links a:hover {
    color: #008ed6;
}

.bbp-forum-header a.bbp-forum-permalink,
.bbp-topic-header a.bbp-topic-permalink,
.bbp-reply-header a.bbp-reply-permalink {
    float: right;
    margin-left: 10px;
    color: #666;
    font-size: 12px;
    line-height: 32px;
}

.bbp-body a.bbp-topic-permalink {
    position: relative;
    color: #404040;
    font-size: 20px;
    line-height: 22px;
}

.bbp-body a.bbp-topic-permalink:hover {
    color: #28c2ba;
}

.bbp-body .bbp-topic-permalink:after {
    position: absolute;
    z-index: 1;
    bottom: -4px;
    left: 0;
    width: 50px;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}

#bbpress-forums #bbp-user-wrapper h2.entry-title {
    font-size: 30px;
    line-height: 34px;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a {
    opacity: 0.8;
    color: #fff;
    background: #008ed6;
}

#bbpress-forums #bbp-your-profile fieldset fieldset.password span.description {
    line-height: 18px;
}

#bbpress-forums .bbp-forum-description .bbp-author-name {
    font-size: 12px;
}

.bbp-pagination-count {
    float: left;
    border: 1px solid transparent;
    font-size: 12px;
}

.bbp-topic-tags a {
    color: #949494;
    font-style: italic;
}

.bbp-topic-tags a:hover {
    color: #28c2ba;
}

#bbpress-forums div.bbp-topic-author a.bbp-author-name,
#bbpress-forums div.bbp-reply-author a.bbp-author-name {
    display: inline-block;
    clear: left;
    color: #28c2ba;
}

.bbp-reply-post-date {
    font-size: 12px;
}

.bbp-template-notice.error strong {
    font-size: 12px;
}

.bbp-body > ul:nth-child(4n) .bbp-forum-title:after {
    background: #34d293;
    content: "";
}

.bbp-body > ul:nth-child(4n+1) .bbp-forum-title:after {
    background: #3ab0e2;
    content: "";
}

.bbp-body > ul:nth-child(4n+2) .bbp-forum-title:after {
    background: #f7d861;
    content: "";
}

.bbp-body > ul:nth-child(4n+3) .bbp-forum-title:after {
    background: #28c2ba;
    content: "";
}

.bbp-body > ul:nth-child(4n) .bbp-topic-permalink:after {
    background: #34d293;
    content: "";
}

.bbp-body > ul:nth-child(4n+1) .bbp-topic-permalink:after {
    background: #3ab0e2;
    content: "";
}

.bbp-body > ul:nth-child(4n+2) .bbp-topic-permalink:after {
    background: #f7d861;
    content: "";
}

.bbp-body > ul:nth-child(4n+3) .bbp-topic-permalink:after {
    background: #28c2ba;
    content: "";
}

.bbp-meta {
    float: left;
    width: 100%;
    padding: 0 5px;
    border-bottom: 1px solid #f5f5f5;
    -moz-border-radius: 3px;
    border-radius: 3px;

    webkit-border-radius: 3px;
}

span.bbp-admin-links a {
    color: #666;
}

span.bbp-admin-links a:hover {
    color: #28c2ba !important;
}

#favorite-toggle a,
#subscription-toggle a {
    color: #666;
    font-style: italic;
}

#favorite-toggle a:hover,
#subscription-toggle a:hover {
    color: #28c2ba;
}

#bbpress-forums #bbp-user-wrapper h2.entry-title {
    clear: none;
    margin: 0;
    padding-top: 0;
    padding-bottom: 0;
    font-size: 1.4em;
}

#bbpress-forums #bbp-user-wrapper h2.entry-title:before {
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 0;
    width: 10%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}

.bbp-user-section {
    margin-top: 20px;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation a {
    color: #666;
    background: none !important;
    -webkit-transition: all 0s;
    -moz-transition: all 0s;
    -o-transition: all 0s;
    transition: all 0s;
}

#bbpress-forums #bbp-user-wrapper ul.bbp-topics {
    clear: left;
}

.bbp-topic-started-in a {
    color: #666;
    font-size: 12px;
    font-style: italic;
}

.bbp-topic-started-in a:hover {
    text-decoration: underline;
}

#bbpress-forums #bbp-user-wrapper ul.bbp-replies {
    clear: left;
}

#bbpress-forums li.bbp-body .bbp-meta .bbp-header {
    float: left;
    clear: left;
    font-size: 13px;
}

#bbpress-forums li.bbp-body .bbp-meta .bbp-header .bbp-topic-permalink {
    font-size: 13px;
    font-style: italic;
}

#bbpress-forums li.bbp-body .bbp-meta .bbp-header .bbp-topic-permalink:after {
    display: none;
    content: "";
}

#bbpress-forums li.bbp-body .bbp-meta .bbp-reply-post-date {
    float: left;
}

#bbpress-forums fieldset.bbp-form legend {
    float: left;
    position: relative;
    margin-top: 50px;
    margin-bottom: 30px;
    color: #404040;
    font-family: "Montserrat", Helvetica, sans-serif;
    font-size: 20px;
    font-weight: 400;
    line-height: 22px;
}

#bbpress-forums fieldset.bbp-form legend:before {
    position: absolute;
    z-index: 1;
    bottom: -5px;
    left: 0;
    width: 10%;
    height: 2px;
    margin: auto;
    background: #28c2ba;
    content: "";
}

#bbpress-forums .is-favorite a {
    color: #28c2ba;
}

#bbpress-forums .bbp-reply-title h3 {
    float: left;
}

#bbpress-forums .bbp-reply-title h3 a {
    font-size: 16px;
    font-style: italic;
}

#bbpress-forums .bbp-reply-title h3 a.bbp-topic-permalink:after {
    display: none;
    content: "";
}

#bbpress-forums div.bbp-forum-header {
    padding-bottom: 0;
    background: none;
}

#bbpress-forums div.bbp-forum-header .bbp-forum-title {
    padding-left: 5px;
}

#bbpress-forums div.bbp-topic-header {
    background: none;
}

#bbpress-forums div.bbp-topic-title h3 {
    float: left;
    padding-left: 5px;
}

#bbpress-forums div.bbp-topic-header .bbp-meta .bbp-topic-permalink {
    float: right;
    margin-left: 10px;
    color: #666;
    font-size: 12px;
    line-height: 32px;
}

#bbpress-forums div.bbp-topic-header .bbp-meta .bbp-topic-permalink:after {
    display: none;
    content: "";
}

#bbpress-forums div.bbp-topic-header .bbp-topic-title .bbp-topic-title-meta {
    float: left;
    margin-left: 5px;
    line-height: 33px;
}

#bbpress-forums div.bbp-forum-header .bbp-forum-title:after {
    display: none;
    content: "";
}

li.bbp-body div.hentry {
    padding: 0;
}

#bbpress-forums li.bbp-body div.hentry .bbp-forum-content {
    padding-top: 0;
}

/* [end] bbpress */

/* Easy Digital Downloads style [version 2.4.9] */
.edd_download {
    float: left;
    width: 33%;
}
.edd_download:nth-child(4n+1) {
    clear: both;
}
.edd_download_excerpt p {
    text-align: justify;
}
.edd-submit.button.red span,
.edd-submit.button.blue span,
.edd-submit.button.green span,
.edd-submit.button.orange span,
.edd-submit.button.dark-gray span {
    color: #fff;
}

#edd-purchase-button,
.edd-submit,
input[type=submit].edd-submit {
    border: none;
}

#edd_checkout_cart td,
#edd_checkout_cart thead,
#edd_checkout_cart th.edd_cart_total,
#edd_checkout_cart th:last-child,
#edd_checkout_cart .edd_checkout_cart_item_title {
    border: none;
    color: #666;
    font-size: 14px;
    font-weight: 400;
    line-height: 18px;
}

#edd_checkout_cart a,
.edd_discount_link a,
.edd-lost-password a {
    color: #f73f2e;
}

#edd_login_form input[type="submit"] {
    margin-left: 0;
}

#edd_checkout_form_wrap select.edd-select {
    display: block;
    width: 70%;
}

.edd-cart-added-alert {
    width: 100%;
    color: #d9534f;
}

.edd_errors.edd-alert.edd-alert-error,
.edd-alert-error {
    border: none;
    border: none;
    border-bottom: 3px solid #c84e54;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: #fff;
    background-color: #e86a6a;
}

.edd-alert-error,
p.edd-alert-error,
.edd-alert-error a {
    color: #fff;
}

.edd-alert-error a:hover {
    text-decoration: underline;
}

#edd_checkout_form_wrap fieldset p:last-child {
    color: rgba(255,255,255,0.8);
}

.edd_download_inner {
    margin: 0 15px;
    margin-bottom: 30px;
    padding: 15px;
    background: #fff;
    text-align: center;
    list-style: none;
    transition: all ease 0.55s;
}

.edd_download_inner:hover {
    border-bottom-color: #008ed6;
}

.edd_download_title a,
.edd_download_title {
    color: #404040;
    font-size: 1em;
    font-weight: bold;
    line-height: 24px;
}

.edd_download_title {
    margin-top: 10px;
    margin-bottom: 10px;
}

#edd_checkout_form_wrap legend,
#edd_login_form legend,
.edd_form legend {
    border-bottom: 0;
}

#edd_profile_billing_address_wrap input,
#edd_profile_billing_address_wrap select {
    margin-bottom: 10px;
}

#edd_new_user_pass1,
#edd_profile_editor_form select,
#edd_profile_editor_form input[type="text"],
#edd_profile_editor_form input[type="text"],
#edd_profile_editor_form input[type="email"],
#edd_profile_editor_form input[type="url"],
#edd_profile_editor_form input[type="password"],
#edd_profile_editor_form input[type="search"],
#edd_profile_editor_form textarea {
    width: 221px;
    margin-bottom: 10px;
    padding: 12px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    color: #555;
}

#edd_profile_editor_form input[type="submit"] {
    margin-left: 0;
}

#edd_profile_billing_address_wrap legend {
    margin-top: 50px;
}

#edd_login_form legend {
    margin-top: 50px;
}

#edd_address_country,
#edd_display_name {
    width: 192px;
}

#edd_user_history,
#edd_checkout_cart,
#edd_checkout_form_wrap fieldset,
#edd_discounts_list {
    width: 100%;
    margin: 0 -1px 24px 0;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 5px;
    border-collapse: separate;
    text-align: left;
}

#edd_user_history th,
#edd_checkout_cart .edd_cart_header_row th {
    padding: 9px 12px;
    border: none;
    background: transparent;
}

#edd_user_history td,
#edd_checkout_cart td {
    padding: 6px 12px;
    border-top: 1px solid rgba(0,0,0,0.1);
    border-bottom: none;
}

.edd_cart_footer_row,
#edd_checkout_cart th.edd_cart_total,
#edd_checkout_cart tfoot th:last-child {
    border-top: 1px solid rgba(0,0,0,0.1);
}

#edd_checkout_cart .edd_checkout_cart_item_title,
#edd_checkout_cart td {
    font-size: 16px;
    line-height: 22px;
}

#edd_checkout_cart td {
    border-right: none;
    border-left: none;
}

#edd_discounts_list .edd_discount {
    padding: 6px 12px;
    border-top: 1px solid rgba(0,0,0,0.1);
    border-bottom: none;
    list-style: none;
}

#edd_discounts_list .edd_discount:nth-child(1) {
    border-top: none;
}

#edd_checkout_form_wrap input[type=email],
#edd_checkout_form_wrap input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

#edd_profile_editor_form legend {
    display: block;
    width: 100%;
    margin-top: 30px;
    margin-bottom: 20px;
    color: #333;
    font-size: 120%;
    font-weight: 700;
    line-height: 1;
}

.edd_price_options.edd_multi_mode ul {
    width: 100%;
    margin: 0 -1px 24px 0;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 5px;
    border-collapse: separate;
    text-align: left;
}

.edd_price_options.edd_multi_mode ul li {
    padding: 6px 12px;
    border-top: 1px solid rgba(0,0,0,0.1);
}

.edd_price_options.edd_multi_mode ul li:nth-child(1) {
    border-top: none;
}

.edd-image-wrap {
    float: right;
    width: 100%;
    max-width: 50%;
    padding: 0 0 15px 15px;
}

.edd-image-wrap img {
    width: 100%;
    height: auto;
}

/* WP MegaMenu */
.wr-megamenu-container .preview-text,
.wr-megamenu-container .preview-text p {
    color: #808080;
    font-size: 14px;
    font-weight: normal;
}
.wr-megamenu-container .block-sub-menu a {
    padding: 5px;
    color: #808080;
}
.wr-element-submenu .submenu-items a {
    padding: 6px 5px 6px 20px !important;
}
.wr-megamenu-container {
    margin-top: 12px;
}
.it-responsive-mega {
    display: none !important;
}
.jsn-bootstrap3 .glyphicon {
    margin-right: 2px;
    font-size: 10px;
}
.wr-element-container {
    padding: 5px 0;
}
.jsn-bootstrap3 .glyphicon.glyphicon-chevron-right {
    display: none !important;
}
.wr-element-container ul.sub-menu li a > i,
.wr-element-container ul.submenu-items li a > i {
    margin-right: 7px;
}
@media only screen and (max-width: 783px) {
    .wr-mega-menu .wr-menu-down {
        margin: -43px 5px 0 0 !important;
    }
}

@media (max-width: 992px) {
    .edd_download a.edd-add-to-cart.button.red.edd-submit.edd-has-js {
        padding: 10px;
        color: #fff;
        font-size: 12px;
    }
    .edd_download a.edd-add-to-cart.button.red.edd-submit.edd-has-js span {
        font-size: 12px;
    }
    .zerif_about_us_center p,
    .about-us .col-md-6.zerif_about_us_center.text_and_skills p {
        text-align: center;
    }
}

@media (max-width: 768px) {
    .edd_download {
        width: 100% !important;
    }
}

/* [end] Easy Digital Downloads */

body.custom-background {
    background-attachment: fixed !important;
    background-position: top center !important;
}

.blog .blog-site-content.site-content {
    background: #fff;
}

.zerif_team:nth-child(4n+1),
.our-team .col-lg-3:nth-child(4n+1) {
    clear: both;
}

.dropdownmenu {
    display: none;
}

/* mobile background fix */
.mobile-bg-fix-wrap {
    overflow: hidden;
    width: 100%;
}

.mobile-bg-fix-wrap .mobile-bg-fix-img-wrap {
    position: fixed;
    z-index: 0;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.mobile-bg-fix-wrap .mobile-bg-fix-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 125%;
    background-size: cover;
}

.mobile-bg-fix-wrap .mobile-bg-fix-whole-site {
    position: relative;
    z-index: 1;
}


/*---------------------------------------
 **   Max Mega Menu                 -----
-----------------------------------------*/

#mega-menu-wrap-primary .mega-menu-toggle + #mega-menu-primary {
    display: block !important;
    margin-top: 15px;
}

#mega-menu-wrap-primary .mega-menu-toggle {
    display: none !important;
}

.menu-align-center #mega-menu-wrap-primary #mega-menu-primary {
    text-align: center;
}

.blog-header-wrap .customize-partial-edit-shortcut-zerif_blog_header_title_subtitle {
    float: left;
    top: 150px;
}


/*---------------------------------------
 **   Responsive            -----
-----------------------------------------*/

@media (max-width: 1200px) {
    .header-content-wrap,
    .blog-header-content-wrap {
        padding: 235px 0 150px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    /* TOP BAR ELEMENTS */

    /* HOME */
    .intro {
        margin-top: 40%;
        font-size: 45px;
        line-height: 55px;
    }

/* ABOUT US */
    .big-intro {
        text-align: center !important;
    }
    .about-us .column {
        margin-bottom: 40px;
    }
    .skills {
        margin-bottom: 78px !important;
    }

/* TEAM */
    .team-member .profile-pic {
        width: 128px;
        height: 128px;
    }
    .team-member .details {
        line-height: 18px;
    }

/* PURCHASE NOW */
    .purchase-now {
        margin: auto;
        text-align: center !important;
    }
    .purchase-now h3 {
        margin-bottom: 20px;
        text-align: center;
    }
    .purchase-now .button {
        float: none;
    }

/* FOOTER */
    .container .company-details {
        width: 33%;
        padding-top: 40px;
    }
}

@media (max-width: 992px) {
    .purchase-now .red-btn {
        float: none;
    }
    .skills {
        margin-left: 0;
    }
    #client-feedbacks .feedback-box {
        width: 100%;
        margin-right: 0;
        margin-left: 0;
    }
    .header-content-wrap,
    .blog-header-content-wrap {
        padding-top: 26%;
    }
    .intro-text {
        font-size: 45px;
        line-height: 55px;
    }
    .section-header h2 {
        font-size: 35px;
    }
    .section-header {
        padding-bottom: 30px;
    }
    .focus,
    .works,
    .about-us,
    .features,
    .packages,
    .products,
    .testimonial,
    .contact-us {
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .header-content-wrap,
    .blog-header-content-wrap {
        padding: 225px 0 150px;
    }
    .about-us .big-intro {
        text-align: center;
    }
    .company-details {
        padding-top: 0;
        padding-bottom: 33px;
    }
    .container .company-details:first-child {
        padding-top: 40px;
    }
    .copyright {
        width: 100%;
        padding-top: 33px;
        padding-bottom: 33px;
    }
    .container .company-details {
        width: 100%;
    }
}
@media (max-width: 767px) {
    /* HEADER */
    .bs-navbar-collapse {
        border: 0;
    }
    #main-nav {
        overflow: visible;
    }
    #main-nav,
    #main-nav.fixed {
        position: relative;
    }
    .navbar-inverse .navbar-nav {
        padding-left: 10px;
        line-height: normal;
        text-align: center;
    }
    .navbar-inverse .navbar-nav > li {
        display: inline-block;
        margin-bottom: 0;
    }
    .navbar-inverse .navbar-nav > li {
        position: relative;
        width: 100%;
        margin: 8px 0 0 0;
        padding: 0 0 8px 0;
        border-bottom: 1px solid #ededed;
    }
    .navbar-inverse .navbar-nav > li  a {
        text-align: left;
    }
    .navbar-inverse .navbar-nav ul.sub-menu {
        display: none !important;
        position: relative;
        top: 0;
        width: 100%;
        box-shadow: none;
    }
    .navbar-inverse .navbar-nav li.this-open > ul {
        display: block !important;
    }
    .navbar-inverse .navbar-nav ul.sub-menu li {
        float: left;
        width: 100%;
    }
    .navbar-inverse .navbar-nav ul.sub-menu li a {
        float: left;
        width: 100%;
        padding: 8px 25px 8px 0;
        border-bottom: 1px solid #ededed;
    }
    .navbar-inverse .navbar-nav ul.sub-menu li:last-child a {
        border-bottom: none;
    }
    .navbar-inverse .navbar-nav ul.sub-menu ul.sub-menu {
        position: relative;
        top: 0;
        left: 0;
    }
    .navbar-inverse .navbar-brand {
        float: left;
    }
    .rtl .navbar-inverse .navbar-brand {
        float: right;
    }
    #main-nav {
        overflow: hidden;
    }
    #main-nav,
    #main-nav.fixed {
        position: relative;
    }
    .navbar-collapse {
        max-height: 100%;
    }
    .navbar-inverse .navbar-nav ul.sub-menu li {
        padding-left: 20px;
    }
    .navbar-inverse .navbar-nav ul.sub-menu li {
        padding-top: 0;
        padding-bottom: 0;
    }
    .dropdownmenu {
        display: block;
        position: absolute;
        z-index: 9;
        top: 5px;
        right: 0;
        width: 25px;
        height: 25px;
        margin: 0;
        padding: 0;
        border-radius: 3px;
        background: url(images/menu-icon.png) center center no-repeat #28c2ba;
    }
    .navbar-inverse .navbar-nav ul.sub-menu li {
        margin-right: 0;
        padding-right: 0;
    }
    .navbar-inverse .navbar-nav > li > a:hover {
        color: #404040 !important;
    }
    .this-open > a {
        color: #28c2ba !important;
    }
    li.current > a:before {
        display: none !important;
        content: "";
    }
    ul.nav > li.current_page_item > a:before {
        left: 0;
        width: 50px;
        content: "";
    }
    .menu-align-center #site-navigation > ul ul {
        left: 0;
    }

/* HOME */
    .header {
        min-height: inherit;
        padding-bottom: 0 !important;
    }
    .intro {
        font-size: 6.5vw;
        line-height: 8vh;
    }
    .header-content-wrap,
    .blog-header-content-wrap {
        padding-top: 30%;
    }
    .intro-text {
        font-size: 41px;
        line-height: 49px;
    }
    .focus-box {
        margin-bottom: 75px;
    }
    .section-header {
        float: left;
        width: 100%;
    }
    .pirate-forms-g-recaptcha > div {
        display: inline-block;
    }
    .pirate_forms .pirate-forms-submit-button {
        display: inline-block;
        float: none;
        text-align: center;
    }
    .contact_submit_wrap {
        text-align: center;
    }

/* ABOUT US */
    .big-intro {
        font-size: 8vw !important;
        text-align: center !important;
    }
    .about-us .column {
        margin-bottom: 40px;
    }
    .skills {
        margin-bottom: 78px !important;
    }
    .our-clients {
        float: left;
        width: 100%;
    }

/* PURCHASE NOW */
    .purchase-now {
        margin: auto;
        text-align: center !important;
    }
    .purchase-now h3 {
        margin-bottom: 20px;
        text-align: center;
    }
    .purchase-now .button {
        float: none;
    }

/* FOOTER */
    .company-details {
        padding-top: 0;
        padding-bottom: 33px;
    }
    .copyright {
        width: 100%;
        padding-top: 33px;
        padding-bottom: 33px;
    }
    footer.entry-footer {
        padding-top: 0;
    }

/* comments */
    .comment-metadata {
        position: relative;
        top: 0;
        right: 0;
    }
}
@media (max-width: 480px) {
    /* HOME */
    .intro {
        margin-top: 60%;
        font-size: 6.5vw;
        line-height: 6vh;
    }

    .header-content-wrap,
    .blog-header-content-wrap {
        padding-top: 40%;
    }
    .intro-text {
        font-size: 32px;
        line-height: 37px;
    }
    h2 {
        font-size: 6.5vw !important;
    }
    .other-focus-list ul li {
        display: block;
        margin-right: 0;
        text-align: left;
    }

/* blog */
    .post-img-wrap {
        width: 100%;
    }
    .listpost-content-wrap {
        float: left;
        width: 100%;
        margin-top: 20px;
    }
    .post-img-wrap a {
        float: none;
        width: 250px;
        height: 250px;
        margin: 0 auto;
    }
    .post-img-wrap {
        margin-right: 0;
        text-align: center;
    }
    .post-img-wrap a img {
        width: auto;
    }

/* comments */
    .comment-reply-link {
        position: relative;
        margin-top: 10px;
    }
    .post-img-wrap a img {
        width: 250px;
        height: auto;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3 ease-out;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }
    .post-img-wrap a:hover img {
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3 ease-out;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }
}
@media (max-width: 320px) {
    .intro {
        font-size: 7vw;
        line-height: 25px;
    }
    .header-content-wrap,
    .blog-header-content-wrap {
        padding-top: 50%;
    }
    .intro-text {
        font-size: 22px;
        line-height: 30px;
    }
    .client-list ul li {
        display: block;
    }
    .listpost-content-wrap-large {
        position: relative;
    }
    .post-img-wrap-large {
        display: none;
    }
}

.zerif-copyright {
    color: #939393!important;
}

.zerif-copyright-box {
    width: 100%;
    color: #666;
}

/* print */
@media print {
    body {
        font-size: 11.25pt;
    }
    a:link:after,
    a:visited:after {
        content: "";
    }
    header.header {
        min-height: 0 !important;
    }
    #main-nav {
        position: relative;
    }
    .header-content-wrap,
    .blog-header-content-wrap {
        padding: 30px 0 15px;
    }

    .buttons {
        margin-top: 0;
        margin-bottom: 0;
        text-align: center;
    }
    .focus,
    .works,
    .about-us,
    .features,
    .packages,
    .products,
    .testimonial,
    .contact-us {
        padding-top: 15px;
    }
    .focus {
        padding-bottom: 0;
    }
    .focus .row .focus-box,
    .zerif_about_us_center,
    .zerif-rtl-skills .skills,
    #testimonials > .container > .row,
    .zerif-rtl-contact-name,
    .zerif-rtl-contact-email,
    .zerif-rtl-contact-subject,
    #contact > .container > .row .col-lg-12.col-sm-12,
    .purchase-now > .container > .row .col-md-9,
    .purchase-now > .container > .row .col-md-3,
    .separator-one > .color-overlay .container.text,
    .separator-one > .color-overlay > div {
        opacity: 1 !important;
        -webkit-transform: translatex(0px) !important;
        -moz-transform: translatex(0px) !important;
        -ms-transform: translatex(0px) !important;
        transform: translatex(0px) !important;
    }
    .focus .row .focus-box {
        width: 23% !important;
        margin-right: 0;
        margin-bottom: 0;
        margin-left: 0;
        padding: 0 1.5%;
        padding-left: 0;
    }
    .about-us {
        padding-bottom: 0;
    }
    .about-us .column {
        float: left;
        width: 100%;
        margin-right: 0;
        margin-bottom: 0;
        margin-bottom: 0;
        margin-left: 0;
        padding-left: 0;
    }
    .about-us .big-intro {
        margin-top: 0;
        text-align: center;
    }
    .zerif-rtl-big-title,
    .zerif-rtl-skills,
    .zerif-rtl-skills .skills {
        width: 100%;
    }
    .zerif-rtl-skills .skills li.skill {
        display: inline-block;
        float: left;
        clear: none;
        width: 25%;
        margin-bottom: 0;
    }
    .about-us p {
        text-align: center;
    }
    .our-team {
        padding-top: 30px;
        padding-bottom: 0;
    }
    .our-team .row {
        opacity: 1 !important;
        -webkit-transform: translatex(0px) !important;
        -moz-transform: translatex(0px) !important;
        -ms-transform: translatex(0px) !important;
        transform: translatex(0px) !important;
    }
    .our-team .col-lg-3.col-sm-3 {
        width: 23% !important;
        margin-right: 0;
        margin-left: 0;
        padding: 0 1.5%;
        padding-left: 0;
    }
    .team-member .profile-pic {
        width: 100%;
        height: auto;
    }
    #client-feedbacks .feedback-box {
        width: 30%;
        margin: 1.5%;
        padding: 0;
    }
    .feedback-box .quote {
        display: none;
    }
    .feedback-box .client-info {
        margin-left: 0;
    }
    .section-header {
        padding-bottom: 15px;
    }
    .testimonial {
        padding-bottom: 0;
    }
    .feedback-box .client {
        margin-top: 0;
    }
    .contact-us {
        padding-bottom: 0;
    }
    .contact-us .input-box,
    textarea {
        border: 1px solid #000 !important;
        box-shadow: none;
    }
    .footer-box {
        width: 23% !important;
        margin-right: 0;
        margin-left: 0;
        padding: 0 1.5%;
        padding-left: 0;
    }
    .latestnews-box {
        float: left;
        width: 50%;
        margin: 0;
        padding: 0;
        padding-right: 2%;
        padding-left: 2%;
    }
    #carousel-homepage-latestnews .item {
        height: auto !important;
    }
    .company-details {
        float: left;
        width: 33% !important;
        margin-right: 0;
        margin-left: 0;
        padding: 0 1.5%;
        padding-left: 0;
    }
    .copyright {
        width: 100%;
    }
    .separator-one,
    .purchase-now {
        padding: 15px 0 15px 0;
    }
    .latest-news {
        padding-top: 15px;
        padding-bottom: 15px;
    }

/* inner page */
    .content-left-wrap {
        padding-top: 0;
    }
}

/* Nivo slider basic styling */
.nivo-controlNav {
    position: relative;
    bottom: 30px;
    text-align: center;
}
.nivo-controlNav a,
.nivo-directionNav a {
    margin: 0 10px;
    padding: 5px 10px;
    opacity: 0.85;
    color: #fff;
    background-color: rgba(10, 10, 10, 0.9);
    cursor: pointer;
    transition: 0.3s ease;
}

.nivo-controlNav a.active {
    color: #333;
    background: #fff;
}

.nivo-controlNav a:hover,
.nivo-directionNav a:hover {
    opacity: 1;
}

.nivo-directionNav {
    position: relative;
    z-index: 100;
    bottom: 40px;
    width: 100%;
}

.nivo-directionNav .nivo-prevNav {
    float: left;
}

.nivo-directionNav .nivo-prevNav:before {
    content: "\00AB ";
}

.nivo-directionNav .nivo-nextNav {
    float: right;
}

.nivo-directionNav .nivo-nextNav:after {
    content: " \00BB";
}

.home-slider-plugin {
    margin-bottom: -34px;
}

/* END Nivo slider basic styling */

/* custom style start */
.nav .has_children > a:after {
    content: "";
}
article.hentry {
    margin-bottom: 0px;
    padding-bottom: 0px;
   
}
.content-left-wrap {
    padding-top: 0px;
}

@font-face {
    font-family: 'Conv_MBEmpire-Italic';
    src: url('//webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MBEmpire-Italic/MBEmpire-Italic.eot');
    src: local('☺'), url('//webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MBEmpire-Italic/MBEmpire-Italic.woff') format('woff'), url('//webninjaz.info/jason/pmcc/wp-content/themes/Phoenix/assets/fonts/MBEmpire-Italic/MBEmpire-Italic.ttf') format('truetype'), url('//webninjaz.info/jason/pmcc/wp-content/themes/Phoenix/assets/fonts/MBEmpire-Italic/MBEmpire-Italic.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Conv_MBEmpire-Bold';
    src: url('//webninjaz.info/jason/pmcc/wp-content/themes//PHOENIX/fonts/MB-bold/MBEmpire-Bold.eot');
    src: url('//webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-bold/MBEmpire-Bold.woff') format('woff'), url('//webninjaz.info/jason/pmcc/wp-content/themes/Phoenix/assets/fonts/MB-bold/MBEmpire-Bold.ttf') format('truetype'), url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-bold/MBEmpire-Bold.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Conv_MBEmpire-Medium';
    src: url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB_Empire/MBEmpire-Medium.eot');
    src: url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB_Empire/MBEmpire-Medium.woff') format('woff'), url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB_Empire/MBEmpire-Medium.ttf') format('truetype'), url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB_Empire/MBEmpire-Medium.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Conv_MBEmpire-Black';
    src: url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-black/MBEmpire-Black.eot');
    src: url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-black/MBEmpire-Black.woff') format('woff'), url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-black/MBEmpire-Black.ttf') format('truetype'), url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-black/MBEmpire-Black.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {

    font-family: 'Conv_MBEmpire-Regular';
    src: url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-regular/MBEmpire-Regular.eot');
    src: url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-regular/MBEmpire-Regular.woff') format('woff'), url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/fonts/MB-regular/MBEmpire-Regular.ttf') format('truetype'), url('http://webninjaz.info/jason/pmcc/wp-content/themes/PHOENIX/MB-regular/MBEmpire-Regular.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}

body{
font-family: 'Conv_MBEmpire-Medium',Sans-Serif !important;
}
#main-nav {
    background-color: #e9082a;
}
.navbar-inverse .navbar-nav > li > a {
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
}
.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
    color: #fff;
}
.navbar-inverse .navbar-nav ul.sub-menu {
    background: #e9082a;
}
.navbar-inverse .navbar-nav ul.sub-menu li:hover > a, .navbar-inverse .navbar-nav ul.sub-menu li.link-focus > a {
    color: #fff;
}
.navbar-inverse .navbar-nav ul.sub-menu li a {
    color: #fff;
}
.section_head{
  font-family: 'Conv_MBEmpire-Bold' !important;
  font-size: 20pt;
  color:#4b4949;
  line-height:1.9;
}
.toppara{

text-align: center;
    font-weight: 300;
    font-size: 16pt;
    line-height: 1.5;
color:#ffffff;
}
.secondpara{
    font-family: 'Conv_MBEmpire-Medium'!important;
    font-size: 16px;
}
.parahead{
    margin-top: 0px;
    font-family: 'Conv_MBEmpire-Black'!important;
    font-size: 16px !important;
    font-weight: 300 !important;
}
.paratext {
    font-family: 'Conv_MBEmpire-Medium',Sans-Serif !important;
font-size:14px;
}

