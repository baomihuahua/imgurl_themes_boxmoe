!function(e) {
    "use strict";
	$('[data-toggle="tooltip"]').tooltip();
    e(window).on("load",
    function() {
        e("#preloader").addClass("loaded")
    }),
    e(".navbar-nav a, .btn").on("click",
    function(t) {
        var a = e(this);
        e('html, body').stop(true, true).animate({
            scrollTop: $(hash).offset().top - offset
        },
        1500),
        t.preventDefault()
    }),
    e(".navbar-toggler").on("click",
    function() {
        e("body").toggleClass("aside-open"),
        e(".ham").toggleClass("active"),
        e("body, html").toggleClass("overflow-hidden")
    }),
    e("#navbarCollapse").scrollspy({
        offset: 20
    });

    new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: !0,
        live: !0,
        callback: function(e) {},
        scrollContainer: null,
        resetAnimation: !0
    }).init();
    var t = e(".list-items-container");
    if (e("#filter li").on("click",
    function(a) {
        a.preventDefault(),
        e("#filter li").removeClass("active"),
        e(this).addClass("active");
        e(this).attr("data-group");
        var l = e(this).attr("data-group");
        t.shuffle("shuffle", l)
    }), e("#scene").length) {
        var a = document.getElementById("scene");
        new Parallax(a)
    }
   
} (window.jQuery);