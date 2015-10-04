(function ()
{
	// create maxshortcodes plugin
	tinymce.create("tinymce.plugins.maxshortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("maxPopup", function ( a, params )
			{
				var popup = params.identifier;

        var w = window.innerWidth;        // Get the inner window width
        var h = window.innerHeight;       // Get the inner window height

        w = (w * 90) / 100;               // Calculate the dialog width
        h = (h * 85) / 100;               // Calculate the dialog height

				// load thickbox
				tb_show("Insert Shortcode", url + "/popup.php?popup=" + popup + "&width="+w );

			});
		},

		createControl: function ( btn, e ){

			if ( btn == "max_button" ){

				var a = this;

				// adds the tinymce button
				btn = e.createMenuButton("max_button", {
					title: "Insert Shortcode",
					image: "../wp-content/themes/invictus_3.0.0/tinymce/images/icon.png",
					icons: false
				});

				// adds the dropdown to the button
				btn.onRenderMenu.add(function (c, b){

          // create the Columns menu
				  a.addWithPopup( b, "Columns", "columns" );
          b.addSeparator();

          // create the Typography menu
  				var typo = b.addMenu({
  				  title: 'Typography',
  				  id: 'typography'
  				});
				  a.addWithPopup( typo, "Highlight", "highlight" );
				  a.addWithPopup( typo, "Blockquote", "blockquote");
				  a.addWithPopup( typo, "Dropcap", "dropcap");
				  a.addWithPopup( typo, "Tooltip", "tooltip");
				  a.addWithPopup( typo, "Horizontal Line", "horizontalline");

          b.addSeparator();

          // create the Box, Toggles and Tabs
  				var typo = b.addMenu({
  				  title: 'Box, Toggles and Tabs',
  				  id: 'boxtogglestabs'
  				});
				  a.addWithPopup( typo, "Info Box", "boxinfo" );
				  a.addWithPopup( typo, "Toggle Box", "boxtoggle" );
          a.addWithPopup( typo, "Tab Box", "boxtabs" );

          b.addSeparator();

          // create the Media Tab
  				var typo = b.addMenu({
  				  title: 'Media',
  				  id: 'media'
  				});
				  a.addWithPopup( typo, "Image Float", "imagefloat" );
				  a.addWithPopup( typo, "Lightbox Image", "prettyimage");
				  a.addWithPopup( typo, "Lightbox Gallery", "prettygallery");
          a.addWithPopup( typo, "Caption Image", "captionimage");
          a.addWithPopup( typo, "YouTube Video", "videoyoutube");
          a.addWithPopup( typo, "Vimeo Video", "videovimeo");

          b.addSeparator();

          // create the Post Tab
  				var typo = b.addMenu({
  				  title: 'Posts',
  				  id: 'posts'
  				});
				  a.addWithPopup( typo, "Recent Posts", "recentposts" );

				});


				return btn;

			}

			return null;
		},

		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("maxPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},

		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},

		getInfo: function () {
			return {
				longname: 'max Shortcodes',
				author: 'Dennis Osterkamp',
				authorurl: 'http://themeforest.net/user/doitmax/',
				infourl: 'http://',
				version: "1.0"
			}
		}

	});

	// add maxshortcodes plugin
	tinymce.PluginManager.add("maxshortcodes", tinymce.plugins.maxshortcodes);
})();