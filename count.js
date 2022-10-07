
     var xmlobj = new XMLHttpRequest();
     xmlobj.onreadystatechange= function(){
          if(this.responseText!=0&&this.responseText!=null){
               document.getElementById("count").innerHTML="User Count: "+this.responseText;
          }
     };
     xmlobj.open("GET","count.php",true);
     xmlobj.send();
