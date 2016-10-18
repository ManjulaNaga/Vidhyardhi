<?php
	session_start();
if(isset($_POST['userName'])) {
	$_SESSION['userName'] = $_POST['userName'];
}
?>
<?php if(isset($_SESSION["userName"])){
?>
<html>
	<head>
		<link rel = " stylesheet" type ="text/css" href ="style.css">
		<title> MYSQL</title>
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
						<a href ="profile.php">profile</a>
						<a href ="allusers.php">View Users</a>
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
	<h1 class="center">BOOTSTRAP</h1>
		<div style="width: 100%;">  	 <br style="clear: left;" />

		<div id="sidebar1" class="vert">
			<table>
			<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'Basics')">Basics</a></tr></td>
			<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'Alerts')">Alerts,Buttons,Glyphicons</a></tr></td>
			<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'Badges')">Badges/Labels and Progress bars</a></tr></td>
			<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'Pagination')">Pagination,Pager and List Groups</a></tr></td>
			<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'Panels')">Panels,Dropdowns and Collapse</a></tr></td>
			<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'Tabs')">Tabs/Pills, Navbar and Forms</a></tr></td>
			<tr><td><a href ="#" class="tablinks"  onclick="opendetails(event,'Inputs')">Inputs, Carousel,Modal and Tooltip</a></tr></td>
			<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'Popovers')">Popover,Scrollspy and Affix</a></tr></td>
			<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'Grids')">BS Grids</a></tr></td>
			<tr><td><a href ="#" class="tablinks" onclick="opendetails(event,'Themes')">BS Themes</a></tr></td>
			</table>
		</div>
		</div>
		<div id ="sidebar2">
			<div id="Basics" class="tabcontent">
				<h3>Basics</h3>
				<p>HTML stands for Hyper Text Markup Language</p>
				<p>A markup language is a set of markup tags</p> 
				<p>HTML documents are described by HTML tags</p>
				<p>Each HTML tag describes different document content</p>
				<p>All HTML documents must start with a document type declaration: <!DOCTYPE html>.</p>
				<p>The HTML document itself begins with <html> and ends with </html>.</p>
				<p>The visible part of the HTML document is between <body> and </body>.</p>
			</div>
			<div id="Alerts" class="tabcontent">
				<h3>Style</h3>
				<p>Setting the style of an HTML element, can be done with the style attribute.</p>
				<p>syntax: <br>tagname style="property:value;"</p>
			</div>
			<div id="Badges" class="tabcontent">
				<h3>Badges</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
			<div id="Pagination" class="tabcontent">
				<h3>Pagination</h3>
				<p>HTML stands for Hyper Text Markup Language</p>
				<p>A markup language is a set of markup tags</p>
				<p>HTML documents are described by HTML tags</p>
				<p>Each HTML tag describes different document content</p>
				<p>All HTML documents must start with a document type declaration: <!DOCTYPE html>.</p>
				<p>The HTML document itself begins with <html> and ends with </html>.</p>
				<p>The visible part of the HTML document is between <body> and </body>.</p>
			</div>
			<div id="Panels" class="tabcontent">
				<h3>Panels</h3>
				<p>Setting the style of an HTML element, can be done with the style attribute.</p>
				<p>syntax: <br>tagname style="property:value;"</p>
			</div>
			<div id="Tabs" class="tabcontent">
				<h3>Tabs</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
			<div id="Inputs" class="tabcontent">
				<h3>Inputs</h3>
				<p>HTML stands for Hyper Text Markup Language</p>
				<p>A markup language is a set of markup tags</p>
				<p>HTML documents are described by HTML tags</p>
				<p>Each HTML tag describes different document content</p>
				<p>All HTML documents must start with a document type declaration: <!DOCTYPE html>.</p>
				<p>The HTML document itself begins with <html> and ends with </html>.</p>
				<p>The visible part of the HTML document is between <body> and </body>.</p>
			</div>
			<div id="Popovers" class="tabcontent">
				<h3>Popovers</h3>
				<p>Setting the style of an HTML element, can be done with the style attribute.</p>
				<p>syntax: <br>tagname style="property:value;"</p>
			</div>
			<div id="Grids" class="tabcontent">
				<h3>Grids</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
				<div id="Themes" class="tabcontent">
				<h3>Themes</h3>
				<p>An HTML table is defined with the 'table' tag.<br>
					Each table row is defined with the 'tr' tag.<br>
					A table header is defined with the 'th; tag. By default, table headings are bold and centered. A table data/cell is defined with the 'td' tag</p>
			</div>
		</div>
		<br style="clear: left;" />
		<div id ="sidebar3">
			What is <b>HTML</b>?<br><br> What is <b>CSS</b><br> When is <b>JacaScript</b> used?<br> Is <b>JQuery</b> useful?<br> When is <b>BootScrap</b> used? 
	    </div>
		   	 <br style="clear: left;" />
		 <script>
			$('.myhover').hover(function(){
			$(this).text("click here to accesss free course");
				}, function() {
					$(this).text("You won free online course!!! ");
				});
				
				(function(){
 var hexacode = ['#ffff00', '#ff0000', '#00ff00', '#0000ff', '#ffffff'],
 el = document.getElementById('autocolor').style,
 counter = -1,
 hexalen = hexacode.length;
 function auto(){
  el.backgroundColor = hexacode[counter = ++counter % hexalen];
 }
 setInterval(auto, 500);
})();
		 </script>
		</body>
</html>
<?php	 } else { 
				echo "Please login to access Bootstrap lessions !!";
				include "login.php";
			} 
			?>
			