---
---

captionOn = (elem) -> $(elem).find(".caption").show()
captionOff = (elem) -> $(elem).find(".caption").fadeOut(600)
captionVisible = (elem) -> $(elem).find(".caption").is(":visible")

$("document").ready ->
	$(".captioned").hover(
		-> captionOn(this)
		-> captionOff(this)
	)
	$(".captioned").click ->
		if captionVisible(this)
			captionOff(this)
		else
			captionOn(this)
  $(".post a").attr("target", "_blank")
