function progressHOME(){

    window.location.href="http://localhost/index.html";
} 
function progressTA(){

    window.location.href="http://localhost/TA.html";
} 
function progressDeliver(){

    window.location.href="http://localhost/deliver.html";
} 
function progressSitOrder(){

    window.location.href="http://localhost/sit_order.html";
} 
function progressMenu(){

    window.location.href="http://localhost/menu.html";
} 
function progressUserManger(){
    window.location.href="http://localhost/user.html";
    } 
function progressClubMenbers(){

    window.location.href="http://localhost/club_members.html";
} 
function progressFeedback(){

    window.location.href="http://localhost/feedback.html";
} 
function progressJobs(){

    window.location.href="http://localhost/jobs.html";
} 
 function progressMangerAcsess(){

     window.location.href="http://localhost/edit_menu.html";
 } 
 function progressOrderChoosh(){

  window.location.href="http://localhost/Orderchoose.html";
} 

function progresLocationss(){
  window.location.href=("http://localhost/locationss.html");
}
function button3(){
  window.location.href=("http://localhost/page3.html");
}
function button5(){
  window.location.href=("http://localhost/page5.html");
}
function button4(){
  window.location.href=("http://localhost/page4.html");
}
function video(){
  window.location.href=("http://localhost/page2.html");
}
function insert_manger(){
  alert("המנה הוסרה בהצלחה")
  window.location.href="http://localhost/edit_menu.html";
  } 

function update_manger(){
  alert("המנה עודכנה בהצלחה")
  window.location.href="http://localhost/edit_menu.html";
 
} 
function add_manger(){
  alert("המנה נוספה בהצלחה")
  window.location.href="http://localhost/edit_menu.html";
 
} 
function GoHome(){
  alert("המשוב נשלח בהצלחה :) ")
  window.location.href="http://localhost/index.html";
} 
function jobs_button(){
  alert("פרטייך נקלטו בהצלחה , נצור קשר בהקדם האפשרי :) ")
  window.location.href="http://localhost/index.html";
}
function club_members1(){
  alert("הרשמה למועדון ההטבות בוצעה בהצלחה , ברוכים הבאים :) ")
  window.location.href="http://localhost/index.html";
}
function add_menu_manger(){
  alert("המנה נוספה בהצלחה :) ")
  window.location.href="http://localhost/edit_menu.html";
}
function update_manger(){
  alert(" המנה עודכנה בהצלחה  :) ")
  window.location.href="http://localhost/edit_menu.html";
}
function delete_manger(){
  alert("המנה הוסרה בהצלחה  :) ")
  window.location.href="http://localhost/edit_menu.html";
}


// show password
 function show_password() {
  var x = document.getElementById("userpassword");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
//  scrolls 
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 40px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "40px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
} 
  
// weather tel aviv
!function(d,s,id){
  var js,fjs=d.getElementsByTagName(s)[0];
  if(!d.getElementById(id)){
    js=d.createElement(s);
    js.id=id;
    js.src='https://weatherwidget.io/js/widget.min.js';
    fjs.parentNode.insertBefore(js,fjs);
  }
}
  (document,'script','weatherwidget-io-js');
// weather rosh-haayin 
    !function(d,s,id){
      var js,fjs=d.getElementsByTagName(s)[0];
      if(!d.getElementById(id)){js=d.createElement(s);
      js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';
      fjs.parentNode.insertBefore(js,fjs);
    }
  }
      (document,'script','weatherwidget-io-js');

// weather Kfar-saba
!function(d,s,id){
  var js,fjs=d.getElementsByTagName(s)[0];
  if(!d.getElementById(id)){
    js=d.createElement(s);
    js.id=id;
    js.src='https://weatherwidget.io/js/widget.min.js';
    fjs.parentNode.insertBefore(js,fjs);
  }
}
 (document,'script','weatherwidget-io-js');







