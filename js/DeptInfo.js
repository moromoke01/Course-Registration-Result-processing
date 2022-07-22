$(document).ready(function () {
    //alert("haa");
    $("#deptform").ready(function () {
   // alert("i'm here");
  
   // $("#deptform").on("load", function (){

        $deptVal = $("#deptID").val();
        $.post("DeptCall.php", {Deptdata: $deptVal 
        }, getDeptList);
        $HtmlCode = "";
       // alert("haa");
        function getDeptList(data){
            $deptfromDB = $.parseJSON(data);
            //alert($deptfromDB);

            for ($y = 0; $y < $deptfromDB.length; $y++) {
                $HtmlCode += "<tr>";
                for ($x = 0; $x < $deptfromDB[$y].length; $x++) { 
                    $HtmlCode += "<td>" + $deptfromDB[$y][$x] + "</td>";
               } 
                $HtmlCode += "</tr>";
                //alert($HtmlCode);
                $("#deptbody").html($HtmlCode);
            }
        }
});
});
