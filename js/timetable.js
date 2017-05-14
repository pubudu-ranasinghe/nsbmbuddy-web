/**
 * Created by Mewan Suriyaarachchi on 5/12/2017.
 */
var count=5;
//var firebaseref2=firebase.database().ref().child("TimeTable/"+count).orderByKey().limitToLast(6);
function update(name,ul) {
    var node = document.createElement("TD");
    var textnode = document.createTextNode(name);
    node.appendChild(textnode);
    document.getElementById(ul).appendChild(node);
}
function load(){
    firebaseref2=firebase.database().ref().child("TimeTable/"+count).orderByKey().limitToLast(6);
    document.getElementById("r1").innerHTML="";
    document.getElementById("r2").innerHTML="";
    document.getElementById("r3").innerHTML="";
    document.getElementById("r4").innerHTML="";
    firebaseref2.once('value',function(snapshot){
        snapshot.forEach(function(childSnapshot){
            var d=childSnapshot.val();
            update(d,'r1');
        });
    });
    count++;alert(count);
    firebaseref2=firebase.database().ref().child("TimeTable/"+count).orderByKey().limitToLast(6);
    firebaseref2.once('value',function(snapshot){
        snapshot.forEach(function(childSnapshot){
            var d=childSnapshot.val();
            update(d,'r2');
        });
    });
    count++;alert(count);
    firebaseref2=firebase.database().ref().child("TimeTable/"+count).orderByKey().limitToLast(6);
    firebaseref2.once('value',function(snapshot){
        snapshot.forEach(function(childSnapshot){
            var d=childSnapshot.val();
            update(d,'r3');
        });
    });
    count++;alert(count);
    firebaseref2=firebase.database().ref().child("TimeTable/"+count).orderByKey().limitToLast(6);
    firebaseref2.once('value',function(snapshot){
        snapshot.forEach(function(childSnapshot){
            var d=childSnapshot.val();
            update(d,'r4');
        });
    });

}
function send(){
    var val = [];
    val [0]=document.getElementById("batch").value;
    val [1]=document.getElementById("date").value;
    val [2]=document.getElementById("module").value;
    val [3]=document.getElementById("lecturer").value;
    val [4]=document.getElementById("hall").value;
    val [5]=document.getElementById("time").value;

    firebase.database().ref('TimeTable2').push({
        batch: val[0],
        batch_date: val[0]+"_"+val[1],
        date: val[1],
        hall: val[4],
        lecturer: val[3],
        module: val[2],
        time: val[5]
    });

    document.getElementById("batch").value=null;
    document.getElementById("date").value=null;
    document.getElementById("module").value=null;
    document.getElementById("lecturer").value=null;
    document.getElementById("hall").value=null;
    document.getElementById("time").value=null;

    init();
}
function next(){
    load();
    alert(count);
}
function prev(){
    count-=4;
    load();
    alert(count);
}
function init(){
    var round=1;
    var d=[];
    var firebaseref=firebase.database().ref().child("TimeTable2").limitToLast(10).orderByKey();
    firebaseref.once('value',function(snapshot){
        snapshot.forEach(function(childSnapshot){
            alert("wor");
            d[0]=childSnapshot.val().batch;
            d[1]=childSnapshot.val().date;
            d[2]=childSnapshot.val().hall;
            d[3]=childSnapshot.val().lecturer;
            d[4]=childSnapshot.val().module;
            d[5]=childSnapshot.val().time;
            appendToList(d,round);
            round++;
        });
    });
}
function appendToList(d,r){
    var msg="<td>"+d[0]+" </td> <td> "+d[1]+" </td> <td> "+d[2]+" </td> <td> "+d[3]+" </td> <td> "+d[4]+" </td> <td> "+d[5]+" </td>"
    document.getElementById(r.toString()).innerHTML=msg;
}
init();