<!----

function spawn(expr,qty,reversed){
var spawnee=[expr];
for(s=1;s<qty;s++){
spawnee[s]=expr+spawnee[s-1]
}
if(reversed){
return spawnee.reverse()
}else{
return spawnee
}
}
function generateTrail(divider){
if(!divider) {divider=" : "}
var m=location.toString(),h="";
m=m.substring(m.indexOf("/")+1);
m=m.split("/");
var howmany=spawn("../",m.length,true);
howmany[m.length]="index.shtml";
for(i=1;i<m.length-1;i++){
h+=("<a href="+howmany[i+2]+">"+unescape( m[i]+"</a>"+divider))
}
h += document.title;
return h
}


