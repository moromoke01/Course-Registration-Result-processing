$(document).ready(function () {
   // alert("hey");
    $("#courseItemize").hide();

      //getting list of SESSIONS from DB on select input
  $.post("getsessions.php", { pop: "pop" }, mySession);
  function mySession(Sess) {
    $AllSession = $.parseJSON(Sess);
    $opt = "";

    for ($i = 0; $i < $AllSession.length; $i++) {
      $opt +=
        "<option value = '" +
        $AllSession[$i] +
        "'>" +
        $AllSession[$i] +
        "</option>";
    }

    $("#Session").html($opt);
  }

  //getting list of SEMESTER from DB on select input
  $.post("getsemester.php", { show: "show" }, mySemester);
  function mySemester(mysem) {
    $allSemester = $.parseJSON(mysem);
    $opt = "";
    for ($i = 0; $i < $AllSession.length; $i++) {
      $opt +=
        "<option value = '" +
        $allSemester[$i] +
        "'>" +
        $allSemester[$i] +
        "</option>";
    }

    $("#Semester").html($opt);
  }

  
//table for Student registered courses
$("#myCoursepage").unbind("submit").on("submit", function(){
  // $.post(
  //   "getmatricdetails.php",
  //   { Matric: $mt, Sess: $sess, Sem: $sem },
  //   getInfo
  //   );
  //   function getInfo(info) {
  //     $stdentinfo=parseJSON(info);
  //     $("#nm").text( $stdentinfo[0]);
  //     $("#mt").text( $stdentinfo[2]);
  //   }
    if (
        //
        $("#matric").val() == "" ||
        $("#session").val() == "" ||
        $("#semester").val() == ""
      ) {
        alert("please fill all necessary details");
      } else {
        $coursevalues = $("#myCoursepage").serialize();
   
  
        $matric = $("#Matric").val();
        $sessn = $("#Session").val();
        $smter = $("#Semester").val();

        $.post("MyCourses.php", {Matric:$matric, session:$sessn, semester:$smter}, getmycourses);
        $("#AccessCoursesForm").hide();
        $("#courseItemize").show();
      
  
        function getmycourses(datacourse){
          $HtmlCode="";
           
           $coursecalled =$.parseJSON(datacourse);
           //alert($coursecalled);
            
            for($y=0; $y < $coursecalled.length; $y++) {
              $HtmlCode += "<tr>";
              for($x=0; $x < $coursecalled[$y].length; $x++) {
                $HtmlCode += "<td>"+ $coursecalled[$y][$x]+"</td>";
              }
                $HtmlCode +=  "<td><button class='btn btn-danger' data-id=''>Delete</button>"+
                "</td>";
               
              }
            
            $HtmlCode +=  "</tr>";
            $("#Coursetable").html($HtmlCode);

          
        }
      
    }
      return false;
});
});