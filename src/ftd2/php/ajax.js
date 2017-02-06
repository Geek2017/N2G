var data;
var request0;
request0 = new XMLHttpRequest();
request0.open('GET', 'json.json', true); 
request0.send(); 


 function call() {
  if (request0.status >= 200 && request0.status < 400) {

    data = JSON.parse(request0.responseText);
    console.log(data[0].count);
  } else {
   alert("error");
  }
};









function myAjax() {
call();
$.ajax( { type : 'POST',
          data : { },
          url  : 'new.php',              
          success: function ( data ) {
            alert( data );              
          },
          error: function ( xhr ) {
            alert( "error" );
          }
        });
}

function process(){
  if(document.getElementById("img1c1").value=="" && document.getElementById("img1c2").value=="" ||
     document.getElementById("img2c1").value=="" && document.getElementById("img2c2").value=="" || 
     document.getElementById("img3c1").value=="" && document.getElementById("img3c2").value=="" ||
     document.getElementById("img4c1").value=="" && document.getElementById("img4c2").value=="" ||
     document.getElementById("img5c1").value=="" && document.getElementById("img5c2").value==""){
     
     alert("Pls. Fill up all Coorditates");
call();
}else{
call();
$.ajax( { type : 'POST',
          data : { },
          url  : 'process.php',              
          success: function ( data ){
            alert( 'Data Save!' );                
          },
          error: function ( xhr ){
            alert( "error" );
          }
        });  
    }            
}

function go(url){
call(); 
var url0="../../src/ftd";
var url1=url0+data[0].count;
var win=window.open(url1, '_blank');
win.focus();
location.reload();
}