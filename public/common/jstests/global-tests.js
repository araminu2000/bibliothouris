$(function(){

    test("Courses App Tests", function(){
        equal('object', typeof Courses, "Courses variable exists and is an object");
        equal('undefined', typeof Courses.CONFIGS, "Courses.CONFIG is private and cannot be accessed outside the Courses object.");
        equal('function', typeof Courses.Init, "Courses.Init() is a typeof function.");
    });
});







