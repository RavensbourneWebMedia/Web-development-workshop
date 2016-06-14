function initForm()
{
	$("input#duration").val(scene.duration());
	$("input#offset").val(scene.offset());
	$("input#triggerElement").val("#" + scene.triggerElement().getAttribute("id"));
	$("input#triggerHook").val(scene.triggerHook());
	$("input#reverse").prop("checked", scene.reverse());
	// $("input#tweenChanges").prop("checked", scene.tweenChanges());

	$("div.slider+input").change(); // trigger change to init sliders.


	// form actions
	// update on change
	$("form #options input:not(#triggerElement)").on("change", function (e) {
		var val = $(this).is("[type=checkbox]") ? $(this).prop("checked") : $(this).val(),
				property = $(this).attr("id");
		scene[property](val);
	});
	// actions
	$("form #actions input[type=checkbox]").on("change", function (e) {
		var active = $(this).prop("checked"),
				type = $(this).attr("id");
		
		/*if (type == "tween") {
			if (active) {
				scene.setTween(tween);
			} else {
				scene.removeTween(true);
			}
		} else*/ if (type == "pin") {
			if (active) {
				scene.setPin("#target", {pushFollowers: false});
			} else {
				scene.removePin(true);
			}
		} else if (type == "enabled") {
			scene.enabled(active);
		}
	});
	// update triggerElement
	$("form #options button[name=triggerElement]").on("click", function (e) {
		e.preventDefault();
		var selector = $.trim($("input#triggerElement").val());
		if (selector === "") {
			scene.triggerElement(null);
		} else if ($(selector).length > 0) {
			scene.triggerElement(selector);
		} else {
			alert("No element was found using the selector \"" + selector + "\".");
			$("input#triggerElement").val("");
			scene.triggerElement(null);
		}
	});
	// triggerHook Buttons
	$("form #options button[name=triggerHook]").on("click", function (e) {
		e.preventDefault();
		$("input#triggerHook")
			.val($(this).val())
			.change();

	});
}
