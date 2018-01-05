$.ajax({
  type:'POST',
  scriptCharset:'utf-8',
  url:'./php/fileget.php',
  data:{type:"week"},
  success:
    function(data){
      var rumor_week = data.split("\x0A");
      for(var i=0;i<rumor_week.length-1;i++){
        var rumor_week_info = rumor_week[i].split("\t");
        var element = document.createElement('div');
        element.className = "rumor_week";
        element.id = i;
        var form_start = '<form name="form_'+i+'" target="_blank" method="POST" action="./php/detailget.php" >';
        var form_end = '</form>';
        var link_tag = '<a href="" onclick="do_submit('+i+');return false;"><p>'+rumor_week_info[1]+'</p></a>';
        var input_tag = '<input type="hidden" name="url" value="'+rumor_week_info[2]+'">';
        element.innerHTML = form_start+link_tag+input_tag+form_end;
        var objBody = document.getElementById("rumor_week");
        objBody.appendChild(element);
      }
    }
});

$.ajax({
  type:'POST',
  scriptCharset:'utf-8',
  url:'./php/fileget.php',
  data:{type:"all"},
  success:
    function(data){
      var rumor_all = data.split("\x0A");
      for(var i=0;i<rumor_all.length-1;i++){
        var rumor_all_info = rumor_all[i].split("\t");
        var element = document.createElement('div');
        element.className = "rumor_all";
        element.id = i;
        var link_tag = "<a href='"+rumor_all_info[2]+"'target='_blank'>";
        element.innerHTML = "<p>"+link_tag+rumor_all_info[1]+"</a></p>";
        var objBody = document.getElementById("rumor_all");
        objBody.appendChild(element);
      }
    }
});
function do_submit(i) {
  var form_name = 'form_'+i;
  document.forms[form_name].submit();
}
