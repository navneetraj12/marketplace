<div class="sub-categories-area">
  <div class="container">
    <div class="row">
    	 <div class="col-lg-3 col-sm-4" id="filter-panel">  
      	 <div class="panel-collapse-icon visible-xs">
        	 <i class="fa fa-filter"></i>
        </div>
      	 <div class="panel-container">
        	 <div class="filter-area">

            <div class="row">
              <div class="col-xs-12">
                <h4>Browse by</h4>
              </div>
            <div class="col-xs-12">
              <div class="panel-group" id="browseby" role="tablist" aria-multiselectable="true">
              <?php if(!empty($category_listing)) {
                $i = 0;
                foreach($category_listing as $term => $listing) { $i++;?> 
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="browseby-heading3">
                      <h5 class="panel-title">
		                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#browseby"     href="#browseby-collapse-<?php print $i;?>" aria-expanded="false" aria-controls="browseby-collapse3">
                         <i class="fa fa-plus-square-o"></i> <?php print $term; ?>
                        </a>
		                    </h5>
                    </div>
                    <div id="browseby-collapse-<?php print $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        <ul class="filter-list type-dropdown">
                          <?php foreach($listing as $list) { $l3_level = taxonomy_get_children($list['tid']);?>
                            <li>
                              <?php print $list['name'];?>
                              <?php if (!empty($l3_level)) { ?>
																												    <ul class="sub-filter-list" style="display:block;">
                                  <?php foreach($l3_level as $l3_child) {  ?>
																														      <?php print '<li>'.l($l3_child->name, url('taxonomy/term/'.$l3_child->tid)).'</li>'; ?>
                                  <?php } ?>
																												    </ul>
                              <?php } ?>
                            </li>
                          <?php } ?>
																					   </ul>
                      </div>
                    </div>
                 </div>
              <?php } ?>
            <?php  } ?>
    </div>
  </div>
</div>

          </div>  
      		<div class="filter-area">
          <div class="row">
                <div class="col-xs-12">
              <h4>Filter by</h4>
            </div>
                <div class="col-xs-12">
              <div class="panel-group" id="filterby" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="filterby-heading1">
                    <h5 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#filterby" href="#filterby-collapse1" aria-expanded="true" aria-controls="filterby-collapse1"><i class="fa fa-plus-square-o"></i> Supplier Type </a> </h5>
                  </div>
                  <div id="filterby-collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body">
                        <ul class="filter-list">
                            <li><input type="checkbox">Anim pariatur <span class="count">213</span></li>
                            <li><input type="checkbox">Anim pariatur <span class="count">13</span></li>
                            <li><input type="checkbox">Anim pariatur <span class="count">21</span></li>
                            <li><input type="checkbox">Anim pariatur <span class="count">176</span></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="filterby-heading2">
                    <h5 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#filterby" href="#filterby-collapse2" aria-expanded="false" aria-controls="filterby-collapse2"><i class="fa fa-plus-square-o"></i> Dealer Type </a> </h5>
                  </div>
                  <div id="filterby-collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                        <ul class="filter-list">
                            <li><input type="checkbox">Anim pariatur <span class="count">213</span></li>
                            <li><input type="checkbox">Anim pariatur <span class="count">13</span></li>
                            <li><input type="checkbox">Anim pariatur <span class="count">21</span></li>
                            <li><input type="checkbox">Anim pariatur <span class="count">176</span></li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>        
      </div>
      
      		<div class="filter-area">
        	<div class="row">
            	<div class="col-xs-12">
          <h4>Location by</h4>
        </div>
        		<div class="col-xs-12">
          <div class="panel-group" id="locationby" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="locationby-heading1">
                <h5 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#locationby" href="#locationby-collapse1" aria-expanded="true" aria-controls="locationby-collapse1"><i class="fa fa-plus-square-o"></i> North India </a> </h5>
              </div>
              <div id="locationby-collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                <div class="panel-body">
                	<ul class="filter-list">
                    	<li><input type="checkbox">Anim pariatur <span class="count">213</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">13</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">21</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">176</span></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="locationby-heading2">
                <h5 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#locationby" href="#locationby-collapse2" aria-expanded="false" aria-controls="locationby-collapse2"><i class="fa fa-plus-square-o"></i> South India </a> </h5>
              </div>
              <div id="locationby-collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">
                	<ul class="filter-list">
                    	<li><input type="checkbox">Anim pariatur <span class="count">213</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">13</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">21</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">176</span></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="locationby-heading3">
                <h5 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#locationby" href="#locationby-collapse3" aria-expanded="false" aria-controls="locationby-collapse3"><i class="fa fa-plus-square-o"></i> East India </a> </h5>
              </div>
              <div id="locationby-collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                	<ul class="filter-list">
                    	<li><input type="checkbox">Anim pariatur <span class="count">213</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">13</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">21</span></li>
                        <li><input type="checkbox">Anim pariatur <span class="count">176</span></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
      </div>
        </div>
    </div>
    	<div class="col-lg-9 col-sm-8"> 
          <div class="row">
          	<div class="col-xs-12">
            	<!-- search bar area -->
              <div class="search-bar">
                <div class="slide-content">
                  <div class="row">
                    <?php print $search_form;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12">
            	<!-- breadcrumb -->
      			<div class="bread-crumb-area">
                	<span>Home</span> > <span>Category</span>
                </div>
            </div>
            <div class="col-md-12"><hr></div>
          </div>
<?php 
  if(!empty($category_listing)) {
    foreach($category_listing as $term => $listing) {?> 
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="sub-category-title"><?php print $term;?></span>
        </div>
        <div class="col-md-12">
          <ul class="top-categories-list sub-categories">
        <?php foreach($listing as $list) {?>
           <li><a><?php print $list['image']?><p><?php print $list['name']?></p></a></li>
        <?php } ?>
          </ul>
        </div>
        <div class="col-md-12"><hr></div>
      </div>
    <?php
    }
  }
?>
    	</div>
    </div>
  </div>
</div>