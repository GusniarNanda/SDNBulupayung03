$(window).on("load", function () {
  var elem = document.querySelector(".masonry");
  var msnry = new Masonry(elem, {
    //options
    itemSelector: ".masonry-item",
    columnWidth: 200,
    gutter: 20,
    columnWidth: ".masonry-sizer",
    percentPosition: true,
  });

  $(".btn-to-top").click(function () {
    $("html", "body").animate(
      {
        scroolTop: 0,
      },
      2000,
      "easeInOutExpo"
    );
  });

  AOS.init();

  const portofolioIsotope = $(".portofolio-container").isotope({
    itemSelector: ".portofolio-item",
  });

  $(".portofolio-filters li").click(function () {
    $(".portofolio-filters li").removeClass("filter-active");
    $(".portofolio-filters li").removeClass("text-white");
    $(this).addClass("filter-active");
    $(this).addClass("text-white");

    portofolioIsotope.isotope({
        filter: $(this).data("filter"),
    });

    AOS.init();
  });
});
