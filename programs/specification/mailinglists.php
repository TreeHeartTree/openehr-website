﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Mailing Lists';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The openEHR mailing lists are sited at <a href="http://www.mailmanhost.com/" target="_blank">dot.list</a>, a mailing list hoster run by one of the developers of the mailman software. </p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>List</th>
				<th>Name</th>
				<th>Description</th>
				<th>Access</th>
				<th>Moderated</th>
				<th>Admins</th>
			</tr>
			<tr>
				<th>Technical list</th>
				<td>openehr-technical</td>
				<td>This list is for technical discussions about any aspect of modelling, archetypes, software building relevant to the openEHR architecture and specifications.<br/>
				All reviews and discussions relating to new specifications and changes to existing specifications will be flagged on this list by the Specifications Program editorial committee.</td>
				<td><a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:openehr-technical@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/openehr-technical_lists.openehr.org/">archive</a></td>
				<td>No</td>
				<td></td>
			</tr>
			<tr>
				<th>ISO 13606 list</th>
				<td>openehr-13606</td>
				<td>This list is for discussions about the use of openEHR methods and technology for current and future revisions of the ISO 13606 standard.</td>
				<td>
				<a href="http://lists.openehr.org/mailman/listinfo/openehr-13606_lists.openehr.org">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:openehr-13606@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/openehr-13606_lists.openehr.org/">archive</a></td>
				<td>No</td>
				<td></td>
			</tr>
			</tbody>
			</table>
			
			<p>Other mailing lists you can find <a href="/community/mailinglists">here</a>.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>