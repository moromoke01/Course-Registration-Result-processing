$(document).ready(function () {
    //alert("hello");
  $("#scoretable").hide();

  $.post("getsessions.php", { pop: "pop" }, mySession);
  function mySession(SS) {
    $AllSession = $.parseJSON(SS);
    $opt = "";

    for ($i = 0; $i < $AllSession.length; $i++) {
      $opt +=
        "<option value = '" +
        $AllSession[$i] +
        "'>" +
        $AllSession[$i] +
        "</option>";
    }

    $("#session").html($opt);
  }

  //getting list of SEMESTER from DB on select input
  $.post("getsemester.php", { show: "show" }, mySemester);
  function mySemester(sem) {
    $allSemester = $.parseJSON(sem);
    $opt = "";
    for ($i = 0; $i < $AllSession.length; $i++) {
      $opt +=
        "<option value = '" +
        $allSemester[$i] +
        "'>" +
        $allSemester[$i] +
        "</option>";
    }

    $("#semester").html($opt);
  }

  $("#requestform")
    .unbind("submit")
    .on("submit", function () {
      if (
        //all datails must be filled
        $("#course").val() == "" ||
        $("#session").val() == "" ||
        $("#semester").val() == ""
      ) {
        alert("please fill all details");
      } else {
        $Scorevalues = $("#requestform").serialize();
        $CC = $("#course").val();
        $sess = $("#session").val();
        $sem = $("#semester").val();
      }

      $.post("StudentForScore.php", {CourseCode:$CC, semester:$sem , session:$sess }, list);
      //alert("hey, Jane");
      

      function list(data){
      
       
        $("#scoreinfo").hide();
        $("#scoretable").show();

        $Listmatric = $.parseJSON(data);
        alert($Listmatric);
        
      }
    });
});
