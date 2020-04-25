//// The function to place the json outputs into the innerHTML
/// for the students and teachers table/tabs

$(document).ready(function(){

  // get data from snippet
  var xmlhttp = new XMLHttpRequest();
  var url = "get_snippets.php";


  ///////////////////////////////////////////////////////////////////

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this.responseText);
    }
  }
  xmlhttp.open("GET", url, true);
  xmlhttp.send();

  function myFunction(response) {
    var arr = JSON.parse(response);
    var s;
    var out = "<table class='ui very compact small celled table'>";

    for (s = 1; s < (arr[0].student_number_of_snippets + 1); s++) {
      ///ORIGINAL//// out += "<tr><td class='selectable'><a>" +
      out += "<tr><td id='" + arr[s].ID_student_s + "' class='selectable'><a>" +
        arr[s].snippet +
        "</a></td></tr>";
    }
    out += "</table>";
    document.getElementById("s").innerHTML = out;



    var t = arr[0].student_number_of_snippets + 1 //this is 15 + 1
    //which is 16 which is the index of teacher_number_of_snippets
    var out2 = "<table class='ui very compact small celled table'>";
    //need to go to 29
    for (i = t + 1; i < (arr[0].student_number_of_snippets + arr[t].teacher_number_of_snippets + 2); i++) {
    //for (i = 17; i < (arr[16].teacher_number_of_snippets + 1); i++) {
      ////out2 += "<tr><td class='selectable'><a>" +
      out2 += "<tr><td id='" + arr[i].ID_teacher_s + "' class='selectable'><a>" +

        arr[i].snippet +
        "</a></td></tr>";
    }
    out2 += "</table>";
    document.getElementById("t").innerHTML = out2;

  }

//////////////////////////////////////////////////////////////////


  //select cells and turn green
  $(document).on('click', ".selectable", function() {
    if ($(this).hasClass("positive")) {
      $(this).removeClass("positive");
    }else{
      $(this).addClass("positive");
    }
    //$(".selectable").not(this).removeClass("positive");
  });



  //highlight cell navigate between tabs
  $(document).on('click', "#student", function() {
    $(this).addClass("active");
    $("#s").addClass("active");
    $("#t").addClass("hide_me");
    $("#a").addClass("hide_me");
    $("#s").removeClass("hide_me");
    $("#teacher").removeClass("active");
    $("#assessment").removeClass("active");
    $("#t").removeClass("active");
    $("#a").removeClass("active");
  });

  $(document).on('click', "#teacher", function() {
    $(this).addClass("active");
    $("#t").addClass("active");
    $("#s").addClass("hide_me");
    $("#a").addClass("hide_me");
    $("#t").removeClass("hide_me");
    $("#student").removeClass("active");
    $("#assessment").removeClass("active");
    $("#s").removeClass("active");
    $("#a").removeClass("active");
  });

  $(document).on('click', "#assessment", function() {
    $(this).addClass("active");
    $("#a").addClass("active");
    $("#t").addClass("hide_me");
    $("#s").addClass("hide_me");
    $("#a").removeClass("hide_me");
    $("#teacher").removeClass("active");
    $("#student").removeClass("active");
    $("#t").removeClass("active");
    $("#s").removeClass("active");
  });


});
