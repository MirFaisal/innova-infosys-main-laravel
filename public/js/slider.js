$(".solution-for").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  infinite: true,
  speed: 300,
  asNavFor: ".solution-nav",
});
$(".solution-nav").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: ".solution-for",
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000,
  focusOnSelect: true,
});
