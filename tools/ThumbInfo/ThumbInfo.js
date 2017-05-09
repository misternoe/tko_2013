	
var rfPople = new(function(e) {
    var i = this,
        c = e("body"),
        b = c.find("#people-elements"),
        g = c.find(".main-nav"),
        d = 200,
        j = 700;
    i.init = function() {
        if (Modernizr.viewportWidth(320)) {
            i.initImagesRendered();
            i.initStandardBehaviors();
            e(window).load(function() {
                i.initUrlHashtag()
            });
            i.initGlobalFixes()
        }
        if (Modernizr.viewportWidth(768)) {}
        if (Modernizr.viewportWidth(1060)) {}
        if (!Modernizr.viewportWidth(1024)) {}
    };
    i.initImagesRendered = function() {
        b.find(".item .picture.default").each(function() {
            e(this).one("load", function() {
                var k = e(this).parent();
                Pixastic.process(this, "desaturate", null, function(l) {
                    e(l).removeAttr("tabindex").removeClass("blocked")
                })
            }).each(function() {
                if (this.complete && this.height) {
                    e(this).load()
                }
            })
        });
        b.find(".item .picture.lighted").each(function() {
            e(this).one("load", function() {
                Pixastic.process(this, "coloradjust", {
                    red: 0.3,
                    green: 0,
                    blue: -30
                }, function(k) {
                    e(k).removeAttr("tabindex").removeClass("active blocked")
                })
            }).each(function() {
                if (this.complete && this.height) {
                    e(this).load()
                }
            })
        })
    };
    i.initStandardBehaviors = function() {
        b.find(".item").each(function(l) {
            var m = e(this).find(".person");
            var k = e(this);
            if (m) {
                m.click(function(o) {
                    o.preventDefault();
                    if (!k.hasClass("selected")) {
                        rf.writeHashTag(k.attr("id"));
                        var n = a(b, 0);
                        h(k, n)
                    } else {
                        a(b, j)
                    }
                });
                k.find(".about article p").each(function(n) {
                    if (n != 0) {
                        e(this).addClass("disable")
                    }
                });
                k.find(".text-toggle").click(function(p) {
                    p.preventDefault();
                    if (e(this).hasClass("less")) {
                        e(this).removeClass("less").addClass("more");
                        var q = k.find(".person-data").height();
                        k.find(".about article p:not(p:first-child)").removeClass("disable");
                        var o = k.find(".person-data").height();
                        k.find(".person-data").height(q);
                        k.find(".person-data").animate({
                            height: o
                        }, function() {
                            e(this).css("height", "auto")
                        });
                        k.animate({
                            height: k.find(".person").height() + o
                        })
                    } else {
                        e(this).removeClass("more").addClass("less");
                        var o = k.find(".person-data").height();
                        k.find(".about article p:not(p:first-child)").addClass("disable");
                        var n = k.find(".person-data").height();
                        k.find(".person-data").height(o);
                        k.find(".person-data").animate({
                            height: n
                        }, function() {
                            e(this).css("height", "auto")
                        });
                        k.animate({
                            height: k.find(".person").height() + n
                        })
                    }
                })
            }
        });
        b.find(".item .close").each(function() {
            e(this).click(function(k) {
                k.preventDefault();
                a(b, j)
            })
        })
    };
    i.initUrlHashtag = function() {
        var k = document.location.hash.replace("!", "");
        if (k.length) {
            var l = b.find(".item#" + k);
            if (l.length) {
                h(l, false);
                f(k)
            }
        }
    };
    i.initGlobalFixes = function() {
        if (e("html").hasClass("no-borderradius")) {
            b.find(".picture-frame").each(function() {
                var k = e('<span class="ie-border-raidus-fix"></span>');
                e(this).prepend(k)
            })
        }
        if (e("html").hasClass("ie8")) {
            b.find(".item").each(function() {
                e(this).find(".picture.lighted").removeClass("active default blocked");
                var k = e('<span class="ie-filter-color-fix"></span>');
                e(this).find(".picture-frame .picture.lighted").before(k)
            })
        }
        if (Modernizr.android && !Modernizr.viewportWidth(768)) {
            b.find(".picture-frame").each(function() {
                var k = e('<span class="ie-border-raidus-fix"></span>');
                e(this).prepend(k)
            })
        }
    };
    var a = function(m, o) {
            var n = m.find("li.selected");
            var l = n.find(".person-data").height();
            var k = n.find(".person").height();
            n.animate({
                height: k
            }, o);
            n.find(".person-data").slideUp(o, function() {
                n.removeClass("selected").height("auto");
                e(this).removeAttr("style");
                if (!Modernizr.ie) {
                    rf.writeHashTag("")
                }
            });
            n.find(".picture.lighted").removeClass("active");
            n.find(".picture.default").addClass("active");
            return l
        };
    var h = function(l, k) {
            rf.writeHashTag(l.attr("id"));
            var o = l.find(".person");
            o.find(".picture.default").removeClass("active");
            o.find(".picture.lighted").addClass("active");
            var n = o.height() + l.find(".person-data").height();
            if (k) {
                l.height(k + l.height())
            } else {
                l.height(l.height())
            }
            l.find(".person-data").css({
                display: "block"
            });
            l.animate({
                height: parseInt(n)
            });
            l.addClass("selected");
            var m = l.find(".person-data").height();
            if (k) {
                l.find(".person-data").css({
                    height: k
                })
            } else {
                l.find(".person-data").css({
                    height: 0
                })
            }
            l.find(".person-data").animate({
                height: m
            }, function() {
                e(this).css("height", "auto")
            })
        };
    var f = function(k) {
            if (rf.iScrollContent) {
                rf.iScrollContent.scrollToElement(element, 400)
            } else {
                var l = e(k).offset().top - g.height();
                e("body,html").animate({
                    scrollTop: l
                }, 600)
            }
        }
})(jQuery);
$(function() {
    rfPople.init()
});

