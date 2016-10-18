<?php
	session_start();
if(isset($_POST['userName'])) {
	$_SESSION['userName'] = $_POST['userName'];
}
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];

?>
<?php if(isset($_SESSION["userName"])){
?>
<html>
	<head>
	<link rel = " stylesheet" type ="text/css" href ="style.css">
	<title> CASCADING STYLE SHEETS</title>
	<script src ="script.js"></script>
	</head>
	<body>
	<img src ="saraswati.jpg" style="width: 4em; height: 4em;"><b id ="big">Vidyardhi.com</b>
				<div class = "nav" id ="navbar">
		<ul>
			<li  class="dropdown">
					<a href="htmldoc.php" class="dropbtn">HTML5</a>
					<div class="dropdown-content">
   						<a href ="basicdesc.html">Basics</a>
						<a href ="textdesc.html">Text</a>
						<a href ="listdesc.html">Lists</a>
						<a href ="imagesdesc.html">Images</a>
						<a href ="linksdesc.html">Links</a>
						<a href ="bgdesc.html">Backgrounds</a>
						<a href ="tablesdesc.html">Tables</a>
						<a href ="framesdesc.html">Frames</a>
						<a href ="formsdesc.html">Forms</a>
						<a href ="metadesc.html">Meta Tags</a>
						<a href ="hexdesc.html">Hexcolors</a>
						<a href ="emaildesc.html">Email</a>
				    </div>
			</li>
			<li class="dropdown">
				<a href="cssdoc.php">CSS</a>
				<div class="dropdown-content">
   						<a href ="cssbasicdesc.html">What is CSS</a>
						<a href ="csstextdesc.html">Text Styles</a>
						<a href ="csslistdesc.html">Lists</a>
						<a href ="cssmediadesc.html">Media</a>
						<a href ="csscascadedesc.html">Cascding and Inheritence</a>
						<a href ="cssseldesc.html">Selectors</a>
						<a href ="cssreaddesc.html">Readable CSS</a>
						<a href ="csscolorsdesc.html">Colors</a>
						<a href ="csscontentdesc.html">Contents</a>
						<a href ="cssboxdesc.html">Boxes</a>
						<a href ="csslayoutdesc.html">Layout</a>
						<a href ="csstablesdesc.html">Tables</a>
				    </div>
			</li>			
			<li class="dropdown">
					<a href="javascriptdoc.php"> Javascript</a>
					<div class="dropdown-content">
   						<a href ="jsbasicdesc.html">Basics</a>
						<a href ="jsformsdesc.html">Forms</a>
						<a href ="jsobjdesc.html">Objects</a>
						<a href ="jsfuncdesc.html">Functions</a>
						<a href ="jsdomdesc.html">HTML DOM</a>
						<a href ="jsbomdesc.html">Browser BOM</a>
						<a href ="jsexamdesc.html">Examples</a>
				    </div>
			</li>
			<li class="dropdown">
				<a href ="phpdoc.php" >PHP</a>
				<div class="dropdown-content">
   						<a href ="phpbasicdesc.html">Basics</a>
						<a href ="phpvardesc.html">Variable types,Constants, Operator types</a>
						<a href ="phpdmdesc.html">Decision making, Loop types</a>
						<a href ="phparrdesc.html">Arrays and strings</a>
						<a href ="phpwebdesc.html">Web concepts</a>
						<a href ="phpgetdesc.html">GET & POST</a>
						<a href ="phpfuncdesc.html">Functions</a>
						<a href ="phpcookiesdesc.html">Cookies and sessions</a>
						<a href ="phpcontentdesc.html">Contents</a>
						<a href ="phprexdesc.html">Regular Expressions</a>
						<a href ="phperrhdesc.html">Error handling</a>
						<a href ="phpemaildesc.html">Sending emails</a>
				    </div>
			</li>
			<li class="dropdown">
				<a href="mysqldoc.php">Mysql</a>
				<div class="dropdown-content">
   						<a href ="mybasicdesc.html">Basics</a>
						<a href ="myconndesc.html">PHP Syntax and Connection</a>
						<a href ="mycreatedesc.html">Create, Select and Drop DB</a>
						<a href ="mydatadesc.html">Datatypes</a>
						<a href ="mytablesdesc.html">Create and Drop Tables</a>
						<a href ="myseldesc.html">Select,Insert,Update and Delete Query</a>
						<a href ="myclausedesc.html">Like clauese</a>
						<a href ="mysortdesc.html">Sorting Results </a>
						<a href ="myjoindesc.html">Using Join, Transactions and Regexps</a>
						<a href ="mytempdesc.html">Temporary and Clone Tables</a>
						<a href ="mydupdesc.html">Handling Duplicates</a>
						<a href ="mysqldesc.html">SQL Injection</a>
						<a href ="mydbdesc.html">DB Export and Import</a>
				    </div>
			</li>
			<li class="dropdown">
				<a href="bootstrapdoc.php">Bootstrap</a>
				<div class="dropdown-content">
   						<a href ="bsbasicdesc.html">Basics</a>
						<a href ="bsdesc.html">Alerts,Buttons,Glyphicons</a>
						<a href ="bsbadgedesc.html">Badges/Labels and Progress bars</a>
						<a href ="bspagdesc.html">Pagination,Pager and List Groups</a>
						<a href ="bspaneldesc.html">Panels,Dropdowns and Collapse</a>
						<a href ="bstbadesc.html">Tbas/Pills, Navbar and Forms</a>
						<a href ="bsinpdesc.html">Inputs, Carousel,Modal and Tooltip</a>
						<a href ="bspopdesc.html">Popover,Scrollspy and Affix</a>
						<a href ="bsgriddesc.html">BS Grids</a>
						<a href ="bsthemesdesc.html">BS Themes</a>
				</div>
			</li>
			 <?php if(isset($_SESSION["userName"])){
				?>
			<li class="dropdown right">
				<a href="#name"><?php echo $_SESSION['userName'] ; ?></a>
					<div class="dropdown-content">
						<a href ="profiledb.php">profile</a>
						<a href ="allusersdb.php">View Users</a>
						<a href ="logout.php">logout</a>
					</div>
			</li>
			<?php	 } else { 
			?>
			<li class="right"><a href = "Login.php">Login/Register</a></li>
			<?php	} 
			?>
			<li class ="right"><a href="webDevelopment.php">home</a></li>
		</ul>
		</div>
		<h1 class="center">CASCADING STYLE SHEETS</h1>
		<div style="width: 100%;">
			<div id="sidebar1" class="vert">
				<table>
				<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'basics')">Basics</a></td></tr>
				<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'text')">Text Styles</a></td></tr>
				<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'lists')">Lists</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'media')">Media</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'cascade')">Cascading and Inheritence</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'sele')">Selectors</a></td></tr>
				<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'read')">Readable CSS</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'colors')">Colors</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'contents')">Contents</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'boxes')">Boxes</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'layouts')">Layout</a></td></tr>
				<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'tables')">Tables</a></td></tr>
				</table>
			</div>
			<div id ="sidebar2">
			<div id="basics" class="tabcontent">
				<h3>Basics</h3>
				<p>HTML stands for Hyper Text Markup Language</p>
				<p>A markup language is a set of markup tags</p>
				<p>HTML documents are described by HTML tags</p>
				<p>Each HTML tag describes different document content</p>
				<p>All HTML documents must start with a document type declaration: <!DOCTYPE html>.</p>
				<p>The HTML document itself begins with <html> and ends with </html>.</p>
				<p>The visible part of the HTML document is between <body> and </body>.</p>
			</div>
			<div id="text" class="tabcontent">
				<h3>Text</h3>
				<p>Setting the style of an HTML element, can be done with the style attribute.</p>
				<p>syntax: <br>tagname style="property:value;"</p>
			</div>
			<div id="lists" class="tabcontent">
				<h3>Lists</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
			<div id="media" class="tabcontent">
				<h3>Media</h3>
				<p>HTML stands for Hyper Text Markup Language</p>
				<p>A markup language is a set of markup tags</p>
				<p>HTML documents are described by HTML tags</p>
				<p>Each HTML tag describes different document content</p>
				<p>All HTML documents must start with a document type declaration: <!DOCTYPE html>.</p>
				<p>The HTML document itself begins with <html> and ends with </html>.</p>
				<p>The visible part of the HTML document is between <body> and </body>.</p>
			</div>
			<div id="cascade" class="tabcontent">
				<h3>cascade</h3>
				<p>Setting the style of an HTML element, can be done with the style attribute.</p>
				<p>syntax: <br>tagname style="property:value;"</p>
			</div>
			<div id="sele" class="tabcontent">
				<h3>Selectors</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
			<div id="read" class="tabcontent">
				<h3>Readable CSS</h3>
				<p>HTML stands for Hyper Text Markup Language</p>
				<p>A markup language is a set of markup tags</p>
				<p>HTML documents are described by HTML tags</p>
				<p>Each HTML tag describes different document content</p>
				<p>All HTML documents must start with a document type declaration: <!DOCTYPE html>.</p>
				<p>The HTML document itself begins with <html> and ends with </html>.</p>
				<p>The visible part of the HTML document is between <body> and </body>.</p>
			</div>
			<div id="contents" class="tabcontent">
				<h3>Contents</h3>
				<p>Setting the style of an HTML element, can be done with the style attribute.</p>
				<p>syntax: <br>tagname style="property:value;"</p>
			</div>
			<div id="colors" class="tabcontent">
				<h3>Colors</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
			<div id="boxes" class="tabcontent">
				<h3>Boxes</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
			<div id="layouts" class="tabcontent">
				<h3>Layouts</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
			<div id="tables" class="tabcontent">
				<h3>Tables</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
		</div>
		<div id ="sidebar3">
			What is <b>HTML</b>?<br><br> What is <b>CSS</b><br> When is <b>JacaScript</b> used?<br> Is <b>JQuery</b> useful?<br> When is <b>BootScrap</b> used? 
	    </div>	</body>
</html>
<?php	 } else { 
				echo "Please login to access CSS lessions!!";
				include "login.php";
			} 
			?>