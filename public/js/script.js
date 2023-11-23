$(".nav-link a").on("click", function () {
    $(".nav-link a").removeClass("active");
    $(this).addClass("active");
});

new DataTable("#datatable");
