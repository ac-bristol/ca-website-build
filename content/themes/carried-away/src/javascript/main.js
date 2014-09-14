(function($) {

	if ($('body').hasClass('home')) {
		var page = 1;
		var $content = $("body.home #data-container");
		var $nextPage = ("<div id='full-range'><a href='/product/'>View entire range</a></div>");
		var $nextPost = $("#next-post");
		
		var load_posts = function(){
			$.ajax({
				type       : "GET",
				data       : {numPosts : 3, pageNumber: page},
				dataType   : "html",
				url        : "/content/themes/carried-away/loopHandler.php",
				success    : function(data){
					//console.log(page);
					$data = $(data);
					$data.hide();
					$content.append($data);
					$data.fadeIn(500);
					if($data.length && page >= 2){
						$content.append($nextPage);
					} 
				},
				error     : function(jqXHR, textStatus, errorThrown) {
					console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
				}
			})
			
			
		}
		
		var next_post = function(){ 
			page++;
			load_posts();
			$nextPost.remove();
			
		}
		
		$nextPost.click(function(e){ 
			e.preventDefault(); 
			next_post();
		});
		
		load_posts();
	}
})(jQuery);