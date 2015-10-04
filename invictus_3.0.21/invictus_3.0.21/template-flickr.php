<?php
/**
 * Template Name: Portfolio Flickr Stream
 *
 * @package WordPress
 * @subpackage invictus
 * @since invictus 1.0
 */

//Get the page meta informations and store them in an array
$meta = max_get_cutom_meta_array($post->ID);

if ( !post_password_required() ) {
	wp_enqueue_script('isotope');
}

get_header();

$itemCaption = false;

?>

<style type="text/css">
	/** Masonry Portfolio **/
	.page-template-template-flickr-php #flickrPortfolio li {
		visibility: hidden;
	}

</style>


<div id="single-page" class="clearfix left-sidebar">

		<div id="primary" class="portfolio-three-columns" >
			<div id="content" role="main" class="clearfix">

				<header class="entry-header">

				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php
				// check if there is a excerpt
				if( max_get_the_excerpt() ){
				?>
				<h2 class="page-description"><?php max_get_the_excerpt(true) ?></h2>
				<?php } ?>

				</header><!-- .entry-header -->

				<?php /* -- added 2.0 -- */ ?>
				<?php the_content() ?>

				<?php if ( !post_password_required() ) { ?>
				<ul id="flickrPortfolio" class="clearfix portfolio-list">
				</ul>
				<?php } ?>
				<?php /* -- end -- */ ?>

			</div><!-- #content -->
		</div><!-- #container -->

		<?php if ( !post_password_required() ) : ?>
		<div id="sidebar">
		  <?php
		  wp_reset_query();
      /* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( max_get_custom_sidebar('sidebar-gallery-flickr')) );
      ?>
		</div>
		<?php endif; ?>

</div>

<?php if ( !post_password_required() ) { ?>
<script type="text/javascript">

		jQuery(function($){

			var settings = {

				id: 'flickrPortfolio',

				//Flickr
				source					:	<?php echo $meta['max_portfolio_flickr_source']; ?>,	//1-Set, 2-User, 3-Group
				<?php if( $meta['max_portfolio_flickr_source'] == 1 ){ ?>
				set						:	'<?php echo $meta['max_portfolio_flickr_set']; ?>', //Flickr set ID (found in URL)
				<?php } ?>
				<?php if( $meta['max_portfolio_flickr_source'] == 2 ){ ?>
				user					:	'<?php echo $meta['max_portfolio_flickr_user']; ?>', //Flickr user ID (http://idgettr.com/)
				<?php } ?>
				<?php if( $meta['max_portfolio_flickr_source'] == 3 ){ ?>
				group					:	'<?php echo $meta['max_portfolio_flickr_group']; ?>', //Flickr group ID (http://idgettr.com/)
				<?php } ?>
				total_slides			:	<?php echo $meta['max_portfolio_flickr_count'] ?>, //How many pictures to pull (Between 1-500)
				image_size              :   '<?php echo $meta['max_portfolio_flickr_size'] ?>', //Flickr Image Size - t,s,m,z,b  (Details: http://www.flickr.com/services/api/misc.urls.html)				new_window				: 	0,
				random					:	<?php $random = $meta['max_portfolio_flickr_sorting'] == 'true' ? '1' : '0'; echo $random; ?>,
				lightbox				:   <?php $lightbox = $meta['max_portfolio_flickr_target'] == 'true' ? '1' : '0'; echo $lightbox; ?>,
				slides 					: 	[{
											}],	//Initiate slides array
				/**
				FLICKR API KEY
				NEED TO GET YOUR OWN -- http://www.flickr.com/services/apps/create/
				**/
				api_key					:	'cb25d50569f4207a9efd2e9bd266c17a'		//Flickr API Key
			}

			//If links should open in new window
			var linkTarget = settings.new_window ? ' target="_blank"' : '';

			//Determine where to pull images from
			switch(settings.source){

				case 1:		//From a Set
					var flickrURL =  'http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key=' + settings.api_key + '&photoset_id=' + settings.set + '&per_page=' + settings.total_slides + '&format=json&jsoncallback=?';
					break;
				case 2:		//From a User
					var flickrURL =  'http://api.flickr.com/services/rest/?format=json&method=flickr.photos.search&api_key=' + settings.api_key + '&user_id=' + settings.user + '&per_page=' + settings.total_slides + '&jsoncallback=?';
					break;
				case 3:		//From a Group
					var flickrURL =  'http://api.flickr.com/services/rest/?format=json&method=flickr.photos.search&api_key=' + settings.api_key + '&group_id=' + settings.group + '&per_page=' + settings.total_slides + '&jsoncallback=?';
					break;
				case 4:		//From tags
					var flickrURL =  'http://api.flickr.com/services/rest/?format=json&method=flickr.photos.search&api_key=' + settings.api_key + '&tags=' + settings.tags + '&per_page=' + settings.total_slides + '&jsoncallback=?';
					break;

			}

			var flickrLoaded = false;
			$.ajaxSetup({ cache: false });
			$.ajax({ //request to Flickr
				type: 'GET',
				url: flickrURL,
				dataType: 'json',
				async: true,
				contentType: 'application/json',
				success: function(data){

					//Check if images are from a set
					var flickrResults = (settings.source == 1) ? data.photoset.photo : data.photos.photo;

					//Build slides array from flickr request
					$.each(flickrResults, function(i,item){

						//create image urls
						var photoURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_' + settings.image_size + '.jpg';
						var thumbURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_z.jpg';
						var	photoLink = "http://www.flickr.com/photos/" + item.owner + "/" + item.id + "/";
						if( settings.lightbox == 1){
							var lightbox = ' data-rel="prettyPhoto[flickr]';
							var hrefAttr = photoURL;
						}else{
							var lightbox = "";
							var hrefAttr = photoLink;
						}

						$('#'+settings.id).append(
							'<li class="item">'+
								'<div class="shadow">'+
									'<a href="' + hrefAttr + linkTarget + '"' + lightbox + '" title="' + item.title + '">'+
										'<img src="' + thumbURL + '" alt="' + item.title + '" />'+
									'</a>'+
								'</div>'+
								'<div class="item-caption">'+
									'<strong>' + item.title + '</strong><br />'+
								'</div>'+
							'</li>'
						);

					});

					//Shuffle slide order if needed
					if (settings.random){
						arr = settings.slides;
						for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);	//Fisher-Yates shuffle algorithm (jsfromhell.com/array/shuffle)
						settings.slides = arr;
					}

					/***End load initial images***/
					flickrLoaded = true;

					var container = $('#flickrPortfolio');

      		/* Isotope -------------------------------------*/
      		if( jQuery().isotope ) {

            // modified Isotope methods for gutters in masonry
            $.Isotope.prototype._getMasonryGutterColumns = function() {
                var gutter = this.options.masonry && this.options.masonry.gutterWidth || 0;
                containerWidth = this.element.width();

                this.masonry.columnWidth = this.options.masonry && this.options.masonry.columnWidth ||
                // or use the size of the first item
                this.$filteredAtoms.outerWidth(true) ||
                // if there's no items, use size of container
                containerWidth;

                this.masonry.columnWidth += gutter;

                this.masonry.cols = Math.floor((containerWidth + gutter) / this.masonry.columnWidth);
                this.masonry.cols = Math.max(this.masonry.cols, 1);
            };

            $.Isotope.prototype._masonryReset = function() {
                // layout-specific props
                this.masonry = {};
                // FIXME shouldn't have to call this again
                this._getMasonryGutterColumns();
                var i = this.masonry.cols;
                this.masonry.colYs = [];
                while (i--) {
                    this.masonry.colYs.push(0);
                }
            };

            $.Isotope.prototype._masonryResizeChanged = function() {
                var prevSegments = this.masonry.cols;
                // update cols/rows
                this._getMasonryGutterColumns();
                // return if updated cols/rows is not equal to previous
                return (this.masonry.cols !== prevSegments);
            };

  					jQuery('img', container).imagesLoaded(function(){
  						container.isotope({
      					masonry: {
        					gutterWidth: 0
      					}
  						});

  						// update columnWidth on window resize
  						jQuery(window).smartresize(function(){
  							container.isotope({
        					masonry: {
          					gutterWidth: 0
        					}
  							});
  						});

  						container.css({ background: 'none' }).find('li.item').css({ visibility: 'visible' });
  					})

  				}

				}//End AJAX Callback
			 });

});


</script>
<?php } ?>
<?php get_footer(); ?>
