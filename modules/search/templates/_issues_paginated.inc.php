<?php include_template("search/{$templatename}", array('issues' => $issues, 'groupby' => $groupby, 'cc' => 1, 'prevgroup_id' => null)); ?>
<?php if ($ipp > 0 && $resultcount > $ipp): ?>
	<?php include_component('search/pagination', array('searchterm' => $searchterm, 'filters' => $filters, 'groupby' => $groupby, 'resultcount' => $resultcount, 'ipp' => $ipp, 'offset' => $offset)); ?>
<?php endif; ?>