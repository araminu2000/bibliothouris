$(function(){

    /* jQuery Tests File */

    test("Courses App Tests", function(){

        equal('object', typeof Courses, "Courses variable exists and is an object");
        equal('undefined', typeof Courses.CONFIGS, "Courses.CONFIG is private and cannot be accessed outside the Courses object.");
        equal('function', typeof Courses.Init, "Courses.Init() is a typeof function.");

        stop();
        Courses.LoadMembersListFromDb('http://www1.courses.ro/bibliothouris/members/ajax-list-members/', function(d){
            equal('object', typeof d, "JSON Data from server is Array.");
            ok($.fn.DataTable.fnIsDataTable(document.getElementById('members-list')), "Members DataTable is initialized");
            start();
        });
    });

});







