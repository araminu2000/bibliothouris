$(function(){

    test("Members Listing Test", function(){
        stop();
        Courses.LoadMembersListFromDb('/bibliothouris/members/ajax-list-members/', function(d){
            equal('object', typeof d, "JSON Data from server is Array.");
            ok($.fn.DataTable.fnIsDataTable(document.getElementById('members-list')), "Members DataTable is initialized");
            start();
        });
    });

});