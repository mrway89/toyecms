! function(s) {
	"use strict";
	s.fn.exists = function() {
		return 0 < this.length
	}, s(".tm-preloader .tm-button").on("click", function() {
		s(".tm-preloader").fadeOut()
	}), s(window).on("load", function() {
		s(".tm-preloader").fadeOut()
	});
	var t = {
		databgImage: function() {
			s("[data-bgimage]").each(function() {
				var t = s(this).data("bgimage");
				s(this).css({
					"background-image": "url(" + t + ")"
				})
			})
		},
		meanmenuActivation: function() {
			s(".tm-header-nav").meanmenu({
				meanMenuContainer: ".tm-mobilenav",
				meanScreenWidth: "991",
				meanMenuOpen: '<i class="ion-android-menu"></i>',
				meanMenuClose: '<i class="ion-android-close"></i>'
			})
		},
		niceSelectActive: function() {
			s("select").niceSelect()
		},
		countdownActivation: function() {
			s(".tm-countdown").each(function() {
				var e = s(this),
					t = s(this).data("countdown");
				e.countdown(t, function(t) {
					e.html(t.strftime('<div class="tm-countdown-pack tm-countdown-day"><h2 class="tm-countdown-count">%-D</h2><h6>Days</h6></div><div class="tm-countdown-pack tm-countdown-hour"><h2 class="tm-countdown-count">%-H</h2><h6>Hours</h6></div><div class="tm-countdown-pack tm-countdown-minutes"><h2 class="tm-countdown-count">%M</h2><h6>Minutes</h6></div><div class="tm-countdown-pack tm-countdown-seconds"><h2 class="tm-countdown-count">%S</h2><h6>Seconds</h6></div>'))
				})
			})
		},
		scrollToSection: function() {
			s(".hash-scroll-link").on("click", function(t) {
				t.preventDefault();
				var e = s(this),
					i = s(".tm-header-bottomarea").height();
				s("html, body").stop().animate({
					scrollTop: s(e.attr("href")).offset().top - i
				}, 1e3)
			})
		},
		sliderActivations: {
			herosliderSliderActivation: function() {
				var t = s(".tm-heroslider-slider").slick({
					infinite: !0,
					autoplay: !0,
					pauseOnHover: !1,
					speed: 2e3,
					autoplaySpeed: 5e3,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: !0,
					prevArrow: '<button class="slick-prev slick-arrow"><i class="ion-ios-arrow-thin-left"></i></button>',
					nextArrow: '<button class="slick-next slick-arrow"><i class="ion-ios-arrow-thin-right"></i></button>',
					fade: !0,
					dots: !1
				});
				1 < s(".tm-heroslider-slider").find(".tm-heroslider").length && s(".tm-heroslider-area").find(".slides-numbers").show(), s(".tm-heroslider-slider").on("afterChange", function(t, e, i) {
					s(".tm-heroslider-area").find(".slides-numbers .active").html(i + 1);
					var o = 100 / s(".tm-heroslider-area").find(".slick-slide").not(".slick-cloned").length;
					s(".tm-heroslider-pagination .radialactive").attr("stroke-dasharray", (i + 1) * o + " 100")
				});
				t.slick("slickCurrentSlide");
				var e = s(".tm-heroslider-area").find(".slick-slide").not(".slick-cloned").length;
				s(".tm-heroslider-area").find(".slides-numbers .total").html(e)
			},
			testimonialSliderActivation: function() {
				s(".tm-testimonial-slider").slick({
					infinite: !0,
					autoplay: !0,
					pauseOnHover: !1,
					speed: 2e3,
					autoplaySpeed: 5e3,
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: !1,
					dots: !0,
					responsive: [{
						breakpoint: 992,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}]
				})
			},
			productsSliderActivation: function() {
				s(".tm-products-slider").slick({
					infinite: !0,
					autoplay: !0,
					pauseOnHover: !1,
					speed: 2e3,
					autoplaySpeed: 5e3,
					slidesToShow: 4,
					slidesToScroll: 4,
					arrows: !1,
					dots: !0,
					responsive: [{
						breakpoint: 1200,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3
						}
					}, {
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					}, {
						breakpoint: 576,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}]
				})
			},
			brandlogoSliderActivation: function() {
				s(".tm-brandlogo-slider").slick({
					infinite: !0,
					autoplay: !0,
					speed: 2e3,
					autoplaySpeed: 2e3,
					slidesToShow: 5,
					slidesToScroll: 1,
					pauseOnHover: !1,
					arrows: !1,
					dots: !1,
					responsive: [{
						breakpoint: 1200,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 1
						}
					}, {
						breakpoint: 992,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
					}, {
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					}, {
						breakpoint: 420,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}]
				})
			},
			teamMemberSlider: function() {
				s(".tm-member-slider").slick({
					infinite: !0,
					autoplay: !0,
					speed: 2e3,
					autoplaySpeed: 2e3,
					slidesToShow: 4,
					slidesToScroll: 1,
					arrows: !1,
					dots: !1,
					pauseOnHover: !1,
					responsive: [{
						breakpoint: 1200,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
					}, {
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					}, {
						breakpoint: 576,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}]
				})
			},
			productDetailsGallery: function() {
				s(".tm-prodetails-largeimages").slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: !1,
					fade: !0,
					loop: !1,
					asNavFor: ".tm-prodetails-thumbnails"
				}), s(".tm-prodetails-thumbnails").slick({
					slidesToShow: 4,
					slidesToScroll: 1,
					loop: !1,
					asNavFor: ".tm-prodetails-largeimages",
					dots: !1,
					centerMode: !0,
					centerPadding: "0",
					arrows: !1,
					focusOnSelect: !0
				})
			},
			blogSliderActivation: function() {
				s(".tm-blog-slider").slick({
					infinite: !0,
					autoplay: !0,
					pauseOnHover: !1,
					speed: 2e3,
					autoplaySpeed: 5e3,
					slidesToShow: 3,
					slidesToScroll: 1,
					arrows: !1,
					dots: !1,
					responsive: [{
						breakpoint: 1200,
						settings: {
							slidesToShow: 3
						}
					}, {
						breakpoint: 992,
						settings: {
							slidesToShow: 2
						}
					}, {
						breakpoint: 768,
						settings: {
							slidesToShow: 1
						}
					}]
				})
			},
			blogDetailsSliderActivation: function() {
				s(".tm-blog-imageslider").slick({
					infinite: !0,
					autoplay: !0,
					autoplaySpeed: 5e3,
					speed: 500,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: !0,
					prevArrow: '<button class="slick-prev slick-arrow"><i class="ion-arrow-left-c"></i></button>',
					nextArrow: '<button class="slick-next slick-arrow"><i class="ion-arrow-right-c"></i></button>',
					dots: !1,
					responsive: [{
						breakpoint: 992,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}, {
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							dots: !1
						}
					}]
				})
			},
			init: function() {
				this.herosliderSliderActivation(), this.testimonialSliderActivation(), this.productsSliderActivation(), this.brandlogoSliderActivation(), this.teamMemberSlider(), this.productDetailsGallery(), this.blogSliderActivation(), this.blogDetailsSliderActivation()
			}
		},
		fancyboxSlick: function() {
			s("[data-fancybox]").fancybox({
				beforeShow: function() {
					s(".tm-product-quickview .tm-prodetails-largeimages").slick("slickNext")
				}
			})
		},
		ajaxMailchimp: function() {
			s("#tm-mailchimp-form").ajaxChimp({
				language: "en",
				callback: function(t) {
					"success" === t.result ? (s(".tm-mailchimp-success").html("" + t.msg).fadeIn(900), s(".tm-mailchimp-error").fadeOut(400)) : "error" === t.result && s(".tm-mailchimp-error").html("" + t.msg).fadeIn(900)
				},
				url: "YOUR_MAILCHIMP_URL_HERE"
			})
		},
		searchForm: function() {
			s(window).width() < 576 && (s(".tm-header-searchform").fadeOut(), s(".tm-header-searchtrigger").on("click", function(t) {
				t.preventDefault(), s(".tm-header-searchform").fadeToggle()
			}))
		},
		stickyHeader: function() {
			if (s(".tm-header-sticky").exists()) {
				var t = s(".tm-header").height();
				s(".tm-heroslider-area, .tm-breadcrumb-area").css({
					marginTop: t + "px"
				}), s(window).on("scroll", function() {
					250 < s(this).scrollTop() ? s(".tm-header").addClass("is-sticky") : s(".tm-header").removeClass("is-sticky")
				})
			}
		},
		scrollToTop: function() {
			var e = s("#back-top-top");
			e.css({
				visibility: "hidden",
				opacity: 0
			}), e.on("click", function() {
				s("html, body").stop().animate({
					scrollTop: 0
				}, 1e3)
			}), s(window).on("scroll", function() {
				var t = s(window).scrollTop();
				s(window).height() < t ? e.css({
					visibility: "visible",
					opacity: 1
				}) : e.css({
					visibility: "hidden",
					opacity: 0
				})
			})
		},
		herosliderHeight: function() {
			var t = s(".tm-header").height();
			s(".tm-heroslider").css({
				"min-height": "calc(100vh - " + t + "px)"
			})
		},
		rangeSlider: function() {
			s(".tm-rangeslider").nstSlider({
				left_grip_selector: ".tm-rangeslider-leftgrip",
				right_grip_selector: ".tm-rangeslider-rightgrip",
				value_bar_selector: ".tm-rangeslider-bar",
				value_changed_callback: function(t, e, i) {
					s(this).parent().find(".tm-rangeslider-leftlabel").text(e), s(this).parent().find(".tm-rangeslider-rightlabel").text(i)
				}
			})
		},
		productRatingInput: function() {
			s(".tm-ratingbox-input").each(function() {
				s(this).find("span").on("mouseenter", function() {
					s(".tm-ratingbox-input span").addClass("is-active"), s(this).nextAll("span").removeClass("is-active")
				})
			})
		},
		productQuantityBox: function() {
			s(".tm-quantitybox").append('<div class="decrement-button tm-quantitybox-button">-</i></div><div class="increment-button tm-quantitybox-button">+</div>'), s(".tm-quantitybox-button").on("click", function() {
				var t, e = s(this),
					i = e.parent().find("input").val();
				t = "+" == e.text() ? parseFloat(i) + 1 : 1 < i ? parseFloat(i) - 1 : 1, e.parent().find("input").val(t)
			})
		},
		instafeedActive: function() {
			new Instafeed({
				get: "user",
				userId: 12620117360,
				accessToken: "12620117360.1677ed0.73a0ac15057c4edcada08b9df21cfa49",
				resolution: "low_resolution",
				limit: 6,
				template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" /><span class="tm-instaphotos-counter"><i class="ion-heart"></i> {{likes}}</span></a></li>'
			}).run()
		},
		scrollAnimation: function() {
			var e = new ScrollMagic.Controller;
			s(".tm-scrollanim").each(function(t) {
				new ScrollMagic.Scene({
					triggerElement: this,
					triggerHook: .8,
					reverse: !1
				}).setClassToggle(this, "scrollanim-action").addTo(e)
			})
		},
		differentAddressFormToggle: function() {
			s("#billform-dirrentswitch").on("change", function() {
				s(this).is(":checked") ? s(".tm-checkout-differentform").slideDown() : s(".tm-checkout-differentform").slideUp()
			})
		},
		checkoutPaymentMethod: function() {
			s('.tm-checkout-payment input[type="radio"]').each(function() {
				s(this).is(":checked") && s(this).siblings(".tm-checkout-payment-content").slideDown(), s(this).siblings("label").on("click", function() {
					s('.tm-checkout-payment input[type="radio"]').prop("checked", !1).siblings(".tm-checkout-payment-content").slideUp(), s(this).prop("checked", !0).siblings(".tm-checkout-payment-content").slideDown()
				})
			})
		},
		loginPassShower: function() {
			s('input[name="register-pass-show"]').on("change", function() {
				"password" == s('input[name="register-pass"]').attr("type") ? s('input[name="register-pass"]').attr("type", "text") : s('input[name="register-pass"]').attr("type", "password")
			})
		},
		menuOverflow: function() {
			s(".tm-header-nav ul li").on("mouseenter mouseleave", function(t) {
				if (s("ul", this).length) {
					var e = s("ul:first", this),
						i = e.offset().left - s("body").offset().left,
						o = e.width();
					e.find("ul").length && (o = 2 * e.width()), i + o <= s("body").width() ? s(this).removeClass("overflow-element") : s(this).addClass("overflow-element")
				}
			})
		},
		dropdownHasChildren: function() {
			s(".tm-header-nav-dropdown ul li").each(function() {
				s(this).children("ul").length && s(this).addClass("has-child")
			})
		},
		ajaxContactForm: function() {
			s(function() {
				var i = s("#tm-contactform"),
					o = s(".form-messages");
				s(i).submit(function(t) {
					t.preventDefault();
					var e = s(i).serialize();
					s.ajax({
						type: "POST",
						url: s(i).attr("action"),
						data: e
					}).done(function(t) {
						s(o).removeClass("error"), s(o).addClass("success"), s(o).text(t), s('#tm-contactform input:not([type="submit"]), #tm-contactform textarea').val("")
					}).fail(function(t) {
						s(o).removeClass("success"), s(o).addClass("error"), "" !== t.responseText ? s(o).text(t.responseText) : s(o).text("Oops! An error occured and your message could not be sent.")
					})
				})
			})
		},
		portfolioFilter: function() {
			s(".tm-portfolio-wrapper").imagesLoaded({
				background: !0
			}, function() {
				s(".tm-portfolio-wrapper").isotope({
					itemSelector: ".tm-portfolio-item",
					layoutMode: "masonry",
					masonry: {
						columnWidth: 1
					}
				})
			}), s(".tm-portfolio-filters button").on("click", function() {
				var t = s(this).attr("data-filter");
				s(".tm-portfolio-wrapper").isotope({
					filter: t
				}), s(".tm-portfolio-filters button").removeClass("is-active"), s(this).addClass("is-active")
			})
		},
		init: function() {
			t.databgImage(), t.meanmenuActivation(), t.niceSelectActive(), t.countdownActivation(), t.scrollToSection(), t.sliderActivations.init(), t.fancyboxSlick(), t.ajaxMailchimp(), t.searchForm(), t.stickyHeader(), t.scrollToTop(), t.herosliderHeight(), t.rangeSlider(), t.productRatingInput(), t.productQuantityBox(), t.instafeedActive(), t.scrollAnimation(), t.differentAddressFormToggle(), t.checkoutPaymentMethod(), t.loginPassShower(), t.menuOverflow(), t.dropdownHasChildren(), t.ajaxContactForm(), t.portfolioFilter()
		}
	};
	t.init()
}(jQuery);