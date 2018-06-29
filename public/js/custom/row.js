$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        

        cols += '<td><input type="text" class="form-control" name="nameOfUniversity' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="degreeObtained' + counter + '"/></td>';
        cols += '<td><input type="date" class="form-control" name="dateGraduated' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
$(document).ready(function () {
    var counter = 0;

    $("#addrow1").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var newRow1 = $("<tr>");
        var cols1 = "";

        cols += '<td><input type="text" class="form-control" name="nameOfCertification' + counter + '"/></td>';
        cols += '<td><input type="date" class="form-control" name="dateIssued' + counter + '"/></td>';
        cols += '<td><input type="date" class="form-control" name="expiryDate' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel1 btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list1").append(newRow);
        counter++;
    });



    $("table.order-list1").on("click", ".ibtnDel1", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
