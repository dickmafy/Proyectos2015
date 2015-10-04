        var panel_to_move = 1;
		var current_panel = 1;
        var switch_in_progress = 0;
        var timer;
        var num_panels = 0;
		var divs_max = 0;
		
        function carousel_slideshow() {
            switch_panels(1);
            timer = setTimeout("carousel_slideshow()", 8000);
        }
        
        function switch_panels_manual(direction) {
            clearTimeout(timer);
            switch_panels(direction);
        }
    
        function switch_panels(direction) {
            if (switch_in_progress == 0) {
                if (direction == -1) {

                    switch_in_progress = 1;
                    if (current_panel == 1) { new_panel = num_panels; } else { new_panel = current_panel-1; }
                    old_panel_name = 'panel'+current_panel;
                    new_panel_name = 'panel'+new_panel;
                
                    panel_to_move = document.getElementById(new_panel_name);
                    panel_to_move.style.left = '-980px';
                    panel_to_move.style.top = '0';
                
                    new Effect.Move(old_panel_name, { duration: 0.6, x: 980, y: 0, mode: 'relative' });
                    new Effect.Fade(old_panel_name, { duration: 0.6 });
                    new Effect.Move(new_panel_name, { duration: 0.6, x: 980, y: 0, mode: 'relative' });
                    new Effect.Appear(new_panel_name, { duration: 0.6, afterFinish: function() { switch_in_progress = 0; current_panel = new_panel; update_indicator(current_panel); $('#gthumbs img.selected').removeClass('selected'); $('#gthumbs img[rel='+new_panel+']').addClass('selected'); $('#galleria #lupa').attr('href', $('#galleria .panel:visible img').attr('src')); } });

                } else if (direction == 1) {
                    
                    switch_in_progress = 1;
                    if (current_panel == num_panels) { new_panel = 1; } else { new_panel = current_panel+1; }
                    old_panel_name = 'panel'+current_panel;
                    new_panel_name = 'panel'+new_panel;
                
                    panel_to_move = document.getElementById(new_panel_name);
                    panel_to_move.style.left = '980px';
                    panel_to_move.style.top = '0';
                
                    new Effect.Move(old_panel_name, { duration: 0.6, x: -980, y: 0, mode: 'relative' });
                    new Effect.Fade(old_panel_name, { duration: 0.6 });
                    new Effect.Move(new_panel_name, { duration: 0.6, x: -980, y: 0, mode: 'relative' });
                    new Effect.Appear(new_panel_name, { duration: 0.6, afterFinish: function() { switch_in_progress = 0; current_panel = new_panel; update_indicator(current_panel); $('#gthumbs img.selected').removeClass('selected'); $('#gthumbs img[rel='+new_panel+']').addClass('selected'); $('#galleria #lupa').attr('href', $('#galleria .panel:visible img').attr('src')); } });
                    
                } else {
                    // do nothing
                }
            }
        }
        
        function update_indicator(panel) {
            for (var i = 1; i <= num_panels; i++) {
                if (i == panel) {
                    $('#pi'+i).addClass('active');
                } else {
                    $('#pi'+i).removeClass('active');
                }
            }
        }
        
        function dyn_link() {
            if (switch_in_progress == 0) { window.location = carouselLinks[current_panel-1]; }
        }
        
        function checkMouseLeave(element, evt) {
            if (element.contains && evt.toElement) {
                t = !element.contains(evt.toElement);
                return t;
            }
            else if (evt.relatedTarget) {
                return (evt.relatedTarget.className && evt.relatedTarget.className != 'ctrl' && evt.relatedTarget.className != 'linker');
                //return !containsDOM( element, evt.relatedTarget );
            }
        }
        
        function raise_controls() {
            //Effect.Appear('c_ctrl', { to: 1.0, duration: 0.2 });
        }

        function dim_controls() {
            if (document.getElementById('c_ctrl') != undefined) { Effect.Fade('c_ctrl', { to: 0.3, duration: 0.5 }); }
        }

		function click_colorway(selection) {
			switch_panels_product(selection);
		}
		
		function switch_panels_product(selection) {
			if (selection < current_panel && switch_in_progress == 0) {
					switch_in_progress = 1;
					old_panel_name = 'panel'+current_panel;
					new_panel_name = 'panel'+selection;
					
					panel_to_move = document.getElementById(new_panel_name);
					panel_to_move.style.left = '-760px';
					panel_to_move.style.top = '0';
					
					new Effect.Move(old_panel_name, { duration: 0.4, x: 760, y: 0, mode: 'relative' });
					new Effect.Fade(old_panel_name, { duration: 0.4 });
					new Effect.Move(new_panel_name, { duration: 0.4, x: 760, y: 0, mode: 'relative' });
					new Effect.Appear(new_panel_name, { duration: 0.4, afterFinish: function() { switch_in_progress = 0; current_panel = selection; $('#gthumbs img.selected').removeClass('selected'); $('#gthumbs img[rel='+selection+']').addClass('selected'); } });
			} else if (selection > current_panel && switch_in_progress == 0) {
					switch_in_progress = 1;
					old_panel_name = 'panel'+current_panel;
					new_panel_name = 'panel'+selection;
					
					panel_to_move = document.getElementById(new_panel_name);
					panel_to_move.style.left = '760px';
					panel_to_move.style.top = '0';
					
					new Effect.Move(old_panel_name, { duration: 0.4, x: -760, y: 0, mode: 'relative' });
					new Effect.Fade(old_panel_name, { duration: 0.4 });
					new Effect.Move(new_panel_name, { duration: 0.4, x: -760, y: 0, mode: 'relative' });
					new Effect.Appear(new_panel_name, { duration: 0.4, afterFinish: function() { switch_in_progress = 0; current_panel = selection; $('#gthumbs img.selected').removeClass('selected'); $('#gthumbs img[rel='+selection+']').addClass('selected'); } });
			} else {
			}
		}