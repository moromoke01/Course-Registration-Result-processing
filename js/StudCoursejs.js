$(document).ready(function () {
  $("#coursetable").hide();
 
//calling Department

// $("#deptbody").on("load", function () {
//   alert("hey");
//   $.post( "DeptCall.php", { Dept: "dept" },  DeptSent);
//   function DeptSent(data) {
   
//     $CallBackDept= $.parseJSON(data);
//     alert($CallBackDept);
    // $HtmlCode="";
    // for ($y = 0; $y < $CallBackDept.length; $y++) {
    //   $HtmlCode += '<tr>';
    //   for ($x = 0; $x < $CallBackDept[$y].length; $x++){
    //     $HtmlCode += "<td>" + $CallBackDept[$y][$x] + "</td>";
    //     $HtmlCode +='</tr>';
  //     }
  //   }
  //   $("#deptbody").html($HtmlCode);
  //  }
  // });
 
   //sending list of Courses
  // $.post(
  //   "getcourses.php",
  //   { course_title: $CourseT, course_code: $CourseC, course_unit: $CourseU },
  //   courseSent
  // );
  // function courseSent(data) {

  // }
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

    $("#sessionselect").html($opt);
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

    $("#semselect").html($opt);
  }

  //action with the submit button
  $("#courseform")
    .unbind("submit")
    .on("submit", function () {
      if (
        //all datails must be filled before navigating to register-courses page
        $("#Matric").val() == "" ||
        $("#sessionselect").val() == "" ||
        $("#semselect").val() == ""
      ) {
        alert("please fill all necessary details");
      } else {
        $coursevalues = $("#courseform").serialize();
        $mt = $("#Matric").val();
        $sess = $("#sessionselect").val();
        $sem = $("#semselect").val();

        $.post(
          "getmatricdetails.php",
          { Matric: $mt, Sess: $sess, Sem: $sem },
          getdetails
        );
        function getdetails(data) {
          
          //condition: if student's record is not found on database,must not be able to register course
          if (data.includes("No record")) {
            alert("Student Record does not exist");
          } else {
           //alert("jane jane");
            $("#studentinfo").hide();
            $("#coursetable").show();
           
            $StudentDetails = $.parseJSON(data);
          
            $("#stnm").text($StudentDetails[1]);
            $("#mtnb").text($mt);
            $("#sss").text($sess);
            $("#semeser").text($sem);

           $("#nam").val($StudentDetails[1]);
           $("#matric").val($mt);
           $("#smter").val($sem);
           $("#level").val($StudentDetails[2] +"Level");
           $("#dept").val($StudentDetails[3]);

            //Create another php file (like checkregisteredcourses.php, send the mtric number to the file nd retrieve all course codes registered by the mtric number)
            $.post(
              "checkregisteredcourses.php",
              { Matric: $mt, Sess: $sess, Sem: $sem },
              getall
            );
            function getall(data) {
              $alredyregistered = $.parseJSON(data);
              //alert( $alredyregistered);
              //getting record of all courses from DB through array format
              $.post("getcourses.php", { show: "show" }, Allcourses);
              function Allcourses(getall) {
                $HtmlCode = "";
                $Check = null;
                $listCourses = $.parseJSON(getall);
                //alert($listCourses);
                for ($y = 0; $y < $listCourses.length; $y++) {
                  if ($.inArray($listCourses[$y][0], $alredyregistered) != -1) {
                    $Check = true;
                  } else {
                    $Check = false;
                  }
                  //alert($listCourses[$y][2]);
                  $HtmlCode += '<tr data-code = "' + $listCourses[$y][2] + '"  data-id = "' + $listCourses[$y][0] + '">';
                  ///$help = "<button class='btn btn-success'>Add</button>";
                  for ($x = 0; $x < $listCourses[$y].length; $x++) {
                    $HtmlCode += "<td>" + $listCourses[$y][$x] + "</td>";
                  }
                  // $l = $Check ? false : true;
                  $bt = $Check ? "Added" : "Add";
                  $reg = $Check ? "registered" : "unregistered";
                  $dis = $Check ? "disabled" : "";
                  $HtmlCode +=
                    "<td><button class='btn btn-success addButton' id='add' "+$dis+" >" +
                    $bt +
                    "</button></td><td>" +
                    $reg +
                    "</td></tr>";

                  $PickedCourses = [];
                  $("#mybody").html($HtmlCode);
                  if ($Check) {
                  } else {
                  }
                  $(".addButton").click(function () {
                    $dscourse = $(this).closest("tr").data("id");
                    $PickedCourses.push($dscourse);
                    $(this).text("Added");
                    $(this).prop("disabled", true);
                    //$HtmlCode2 += <tr><td></td></tr>
                  });
                }

                $("#sveBtn").click(function () {
                  $.post(
                    "registeredcourse.php",
                    {
                      rcourses: $PickedCourses,
                      Mt: $mt,
                      Sess: $sess,
                      Sem: $sem,
                    },
                    CoursesSaved
                  );
                  function CoursesSaved(dt) {
                    alert(dt);
                  }
                  return false;
                });
              }
            }
          }
        }
      }
      return false;
    });
});
