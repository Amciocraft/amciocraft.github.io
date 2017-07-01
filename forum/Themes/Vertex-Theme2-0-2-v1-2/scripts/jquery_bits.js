$(document).ready(function() {

	// for our quick search field
	// Put something in the quick search bar so people know what it is for and add a class
	var quick_search_resting_text = "Szukaj...";
	$("#quick_search_field_text_input").attr("value",quick_search_resting_text);
	$("#quick_search_field_text_input").addClass("quick_search_field_text_input_resting");
	
	$("#quick_search_field_text_input").focus( function() {
		if($("#quick_search_field_text_input").attr("value") == quick_search_resting_text)
		{
			$("#quick_search_field_text_input").attr("value", "");
			$("#quick_search_field_text_input").removeClass("quick_search_field_text_input_resting");
		}
	});
	
	$("#quick_search_field_text_input").focusout( function() {
		if($("#quick_search_field_text_input").attr("value") == "")
		{
			$("#quick_search_field_text_input").attr("value", quick_search_resting_text);
			$("#quick_search_field_text_input").addClass("quick_search_field_text_input_resting");
		}
	});

	// for our quick search context menu
	$("#quick_search_context_choice").click( function() {
		var pos = $("#quick_search_context_choice").offset();
		var width = $("#quick_search_context_choice").width();
		var height = $("#quick_search_context_choice").height();
		
		var x_pos = pos.left + width/2;
		var y_pos = pos.top + height + 3;
		
		$(".quick_search_context_options").fadeToggle();
		$(".quick_search_context_options").css({"position": "absolute", "left": x_pos, "top": y_pos});
	});
	
	// close the menu if you click outside of the menu
	$(document).click(function(event) {
		if(!$(event.target).is("#quick_search_context_choice") && !$(event.target).is(".quick_search_context_options"))
		{
			$(".quick_search_context_options").fadeOut();
		}
	});
	
	// change the text if you click another radio and make the radios one at a time
	$(".quick_search_context_item").click(function() {
		var quick_search_context_choice_text = $(this).attr("title");
		$("#quick_search_context_choice").text(quick_search_context_choice_text);

		$("input.quick_search_context_item_input").prop("checked", false);
		$(this).find(".quick_search_context_item_input").prop("checked", true);
	});
	
	
	
	
	
	
	// Drop Down menu
	$("ul.subnav").parent().append("<span class=\"drop_down_token noLava\"></span>"); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.subnav*)

	$("ul.topnav li span").click(function() { //When trigger is clicked...

		//Following events are applied to the subnav itself (moving subnav up and down)
		$(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

		$(this).parent().hover(function() {
		}, function(){
			$(this).parent().find("ul.subnav").slideUp('slow', "easeInQuint"); //When the mouse hovers out of the subnav, move it back up
		});

		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() {
			$(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});
	
	
	// for our nice lava menu in the nav
	$('ul#menu_nav').lavaLamp( {
		target: "li"
	});


	
});