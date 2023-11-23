$(document).ready(function () {
    var table = $("#datatable").DataTable({
        dom: "lrtip",
    });

    $("#month, #year").change(function () {
        table.draw();
    });

    $("#filter-search").keyup(function () {
        table.search($(this).val()).draw();
    });

    DataTable.ext.search.push(function (settings, data, dataIndex) {
        var month = parseInt($("#month").val(), 10);
        var year = parseInt($("#year").val(), 10);
        var date = data[3].split("-");
        console.log(year);
        if (
            (isNaN(year) && isNaN(month)) ||
            (isNaN(month) && year == date[0]) ||
            (date[1] == month && isNaN(year)) ||
            (date[1] == month && year == date[0])
        ) {
            return true;
        }
        return false;
    });
});
