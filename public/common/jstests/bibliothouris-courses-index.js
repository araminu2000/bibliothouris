$(function(){

    test("Courses Listing Test", function(){
        stop();
        Courses.LoadCoursesListFromDb('/bibliothouris/courses/ajax-list-courses/', function(d){
            equal('object', typeof d, "JSON Data from server is Array.");
            ok($.fn.DataTable.fnIsDataTable(document.getElementById('courses-list')), "Courses DataTable is initialized");
            start();
        });
    });

});