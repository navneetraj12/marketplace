<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest-product">
					<h3 class="section-title"><?php print t('Search results');?></h3>
					<div class="title-line"></div>
					 <?php if ($search_results): ?>
						 <?php print $search_results;?> 
						 <?php print $pager; ?>
					 <?php else : ?>
							<h2><?php print t('Your search yielded no results');?></h2>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>
</div>