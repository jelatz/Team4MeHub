$(document).ready(function () {
	// SIDEBAR NAV DTR AND SETTINGS DROPDOWN
	$("#dtrDropdown, #settingsDropdown").on("click", function () {
		$(".dtr-menu").removeAttr("style");
		$(".dropdown-nav-icon").toggleClass("rotate");
	});

	$("#history").on("click", function () {
		$(this).siblings(".dropdown-menu").css({
			position: "absolute",
			left: "-124px",
		});
	});

	$("#userDropdown").on("click", function () {
		$(this).siblings(".dropdown-menu").css({
			position: "absolute",
			left: "-140px",
		});
	});

	// HAMBURGER BUTTON
	$("#hamburger").on("click", function () {
		if ($(".sidebar-nav").css("width") == "60px") {
			$(".sidebar-nav").css("width", "230px");
			$(".navbar-nav li span").css("display", "initial");
			$(".navbar-nav li:first-child").css("display", "initial");
			$(".logo").css({ width: "230px" });
			$(".logo strong").css({ display: "initial" });
			$(".section").css("margin-left", "230px");
		} else {
			$(".sidebar-nav").css("width", "60px");
			$(".section").css("margin-left", "60px");
			$(".navbar-nav li span").css("display", "none");
			$(".navbar-nav>li:first-child").css("display", "none");
			$(".logo").css({ width: "60px" });
			$(".logo strong").css({ display: "none" });
		}
		// Correctly target <span> elements within .navbar list items
		// $(".navbar-nav li span").toggleClass("hide");
	});
});
