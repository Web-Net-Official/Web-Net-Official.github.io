var ChatEngine=function(){
     var croom=" ";
     var name=" ";
     var msg="";
     var chatZone=document.getElementById("chatZone");
     var oldata ="";
     var sevr=" ";
     var xhr=" ";
     //initialzation
     this.init=function(){
          if(EventSource){
          this.setRoom();
          this.setName();
          this.initSevr();
          } else{
          alert("Use latest Chrome or FireFox");
        }
     };
     //Setting Chat Room
    this.setRoom=function(){
          //croom=prompt("Please enter Chat Room name:","ChatRoom");

             croom = "muffin";
          croom = croom.replace(/(<([^>]+)>)/ig,"");
     };
     //Setting user name
     this.setName=function(){
          name = prompt("Enter User Name!","");
          if (!name || name ==="") {
             name = "Chater";
          }
          name = name.replace(/(<([^>]+)>)/ig,"");
     };
     //For sending message
     this.sendMsg=function(){
          msg=document.getElementById("msg").value;
          chatZone.innerHTML+='<div class="chatmsg"><b>'+name+'</b>: '+msg+'<br/></div>';
          oldata='<div class="chatmsg"><b>'+name+'</b>: '+msg+'<br/></div>';
          this.ajaxSent();
          return false;
     };
     //sending message to server
     this.ajaxSent=function(){
          try{
               xhr=new XMLHttpRequest();
          }
          catch(err){
               alert(err);
          }
          xhr.open('GET','chatprocess.php?msg='+msg+'&name='+name+'&croom='+croom,false);
          xhr.onreadystatechange = function(){
               if(xhr.readyState == 4) {
                    if(xhr.status == 200) {
                         msg.value="";
                    }
               }
          };
          xhr.send();
     };
     //HTML5 SSE(Server Sent Event) initilization
     this.initSevr=function(){
          sevr = new EventSource('chatprocess.php?croom='+croom);
          sevr.onmessage = function(e){
          if(oldata!=e.data){
               chatZone.innerHTML+=e.data;
               oldata = e.data;
          }
          };
     };
};
// Createing Object for Chat Engine
var chat= new ChatEngine();
chat.init();
