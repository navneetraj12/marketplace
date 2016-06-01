jQuery(document).ready(function($){
    
    // jQuery sticky Menu
    
	//$(".mainmenu-area").sticky({topSpacing:0});
	
	smoothScroll.init();
    
    
    $('.product-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
		navText: ['',''],
		dots:false,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:5,
            }
        }
    });
	
	$("#owl-testi").owlCarousel
	({
		nav : false, // Show next and prev buttons
		loop:true,
		slideSpeed : 600,
		autoHeight : true,
		autoplay: true,
		singleItem:true,
		items:1
	});  
    
    $('.related-products-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
		dots:false,
        responsiveClass:true,
		navText: ['',''],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });  
    
    $('.brand-list').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
		dots:false,
        responsiveClass:true,
		navText: ['',''],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    }); 
	
	//filter-panel
	$('.panel-collapse-icon').click(function(){
		$("#filter-panel").toggleClass('open');
	}); 
	
	//dropdown for sub-category list 
	$(".type-dropdown li").click(function(){
		$(this).find('.sub-filter-list').slideToggle();		
		$(this).siblings('li').find('.sub-filter-list').slideUp();
	}); 
    
        
});

