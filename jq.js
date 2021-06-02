$(document).ready(function () {
    //    display ajax start here
    function showdata() {
        $.ajax({
            url: "read.php",
            type: "GET",
            success: function (data) {
                // console.log(data);
                $("#table").html(data);
            }
        })
    }
    showdata();
    // inset ajax start here
    $("#butid").click(function (e) {
        e.preventDefault();
        // console.log("button");
        let nm = $("#nameid").val();
        // console.log(nm)
        if (nm !== "") {
            $.ajax({
                url: "insert.php",
                type: "GET",
                data: {
                    name: nm
                },
                success: function (data) {
                    // console.log(data);
                    $("#myform")[0].reset()
                    showdata();
                }
            })
        } else {
            console.log("ALL FIELD REQUIRED")
        }
    })
    // Delete record to MySql from PHP using jQuery AJAX  
    $("#table").on("click", ".delete-btn", function () {
        if (confirm("Are you sure delete this ?")) {
            var id = $(this).data('sid');
            console.log(id);
            var element = this;
            $.ajax({
                url: "delete.php",
                type: "GET",
                data: { delete: id },
                success: function (data) {
                    if (data == 1) {
                        $(element).closest("tr").fadeOut();
                        alert("User record deleted successfully");
                    } else {
                        alert("Invalid User id");
                    }
                }
            });
        }
    });
    //update form start here
    $("#table").on("click", ".edit-btn", function () {
        console.log("uptade");
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: "fetch.php",
            type: "GET",
            data: { update: id },
            success: function (data) {
                $("#update").html(data)
                console.log(data);
            }
        })
    })
    // User record update to mysqli from php using jquery ajax  
    $("#update").on("click", "#editSubmit", function () {
        var edit_id = $("#editId").val();
        var name = $("#editName").val();
        console.log(edit_id);
        console.log(name);
        $.ajax({
            url: "update1.php",
            type: "GET",
            cache: false,
            data: { edit_id: edit_id, name: name },
            success: function (data) {
                if (data == 1) {
                    alert("User record updated successfully");
                    showdata();
                    $("#update_form")[0].remove();
                } else {
                    alert("Some thing went wrong");
                }
            }
        });
    });
    //    search bar start here
    $("#search").on("keyup", function () {
        var search = $(this).val();
        $.ajax({
            url: "search.php",
            type: "GET",
            data: {
                search: search
            },
            success: function (data) {
                $("#table").html(data);
            }
        })
    })
})



