<table  border="1">
	<tr>
		<td style="font-weight:bold;"><?php
				print $node->title;
		?></td>
	</tr>
	<tr>
		<td><pre style="word-wrap: break-word;white-space: pre;white-space: -moz-pre-wrap; white-space: pre-wrap;white-space: pre\9;"><?php
				print $node->field_full_legislative_text['und'][0]['value'];
			?></pre></td>
	</tr>

</table>