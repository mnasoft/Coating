function Button_select_haracteristic_for_edit(i, btn_id, callback_param)
{
//  alert ("i=" + i + "\n" + "btn_id =" + btn_id );
  var id = window.parent.document.getElementById("id");
  var Suschnost_id = window.parent.document.getElementById("Suschnost_id");
  var TipDannyh_id = window.parent.document.getElementById("TipDannyh_id");
  var Razmernost_id = window.parent.document.getElementById("Razmernost_id");
  var Mnozitel_10_id = window.parent.document.getElementById("Mnozitel_10_id");
  
  var Naimenovanie = window.parent.document.getElementById("Naimenovanie");
  var Oboznachenie = window.parent.document.getElementById("Oboznachenie");
  
  var Chislo = window.parent.document.getElementById("Chislo");
  var Chislo_min = window.parent.document.getElementById("Chislo_min");
  var Chislo_max = window.parent.document.getElementById("Chislo_max");
  var Stroka = window.parent.document.getElementById("Stroka");
  
  var loc="add_edit_haracteristics.php";
  loc=loc + "?";
  if (btn_id === "id")
    loc=loc + "id"+ "=" + i;
  else
    loc=loc + "id"+ "=" + id.value;
  
  loc=loc + "&";
  
  if (btn_id === "Suschnost_id")
    loc=loc + "Suschnost_id"+ "=" + i;
  else
    loc=loc + "Suschnost_id"+ "=" + Suschnost_id.value;
  
  loc=loc + "&";
  
  if (btn_id === "TipDannyh_id")
    loc=loc + "TipDannyh_id"+ "=" + i;
  else
    loc=loc + "TipDannyh_id"+ "=" + TipDannyh_id.value;
  
  loc=loc + "&";
  
  if (btn_id === "Razmernost_id")
    loc=loc + "Razmernost_id"+ "=" + i;
  else
    loc=loc + "Razmernost_id"+ "=" + Razmernost_id.value;
  
  loc=loc + "&";
  
  if (btn_id === "Mnozitel_10_id")
    loc=loc + "Mnozitel_10_id"+ "=" + i;
  else
    loc=loc + "Mnozitel_10_id"+ "=" + Mnozitel_10_id.value;
  
  loc=loc + "&" + "Naimenovanie" + "=" + Naimenovanie.value;
  loc=loc + "&" + "Oboznachenie" + "=" + Oboznachenie.value;
  
  loc=loc + "&" + "Chislo"+ "=" + Chislo.value;
  loc=loc + "&" + "Chislo_min" + "=" + Chislo_min.value;
  loc=loc + "&" + "Chislo_max" + "=" + Chislo_max.value;
  loc=loc + "&" + "Stroka" + "=" + Stroka.value;
  loc=loc + "&" + "Action" + "=" + callback_param;
  
  window.parent.location=loc;
}

/*
function Button_click_1(i,btn_id,callback_param)
{
  var Suschnost_id_el = window.parent.document.getElementById("Suschnost_id");
  var TipDannyh_id_el = window.parent.document.getElementById("TipDannyh_id");
  var Razmernost_id_el = window.parent.document.getElementById("Razmernost_id");
  var Mnozitel_10_id_el = window.parent.document.getElementById("Mnozitel_10_id");
  
  var Naimenovanie_el = window.parent.document.getElementById("Naimenovanie");
  var Oboznachenie_el = window.parent.document.getElementById("Oboznachenie");
  
  var Chislo_el = window.parent.document.getElementById("Chislo");
  var Chislo_min_el = window.parent.document.getElementById("Chislo_min");
  var Chislo_max_el = window.parent.document.getElementById("Chislo_max");
  var Stroka_el = window.parent.document.getElementById("Stroka");
  
  var loc="add_edit_haracteristics.php";
  loc=loc + "?";
  if (btn_id === "Suschnost_id")
    loc=loc + "Suschnost_id"+ "=" + i;
  else
    loc=loc + "Suschnost_id"+ "=" + Suschnost_id_el.value;
  
  loc=loc + "&";
  
  if (btn_id === "TipDannyh_id")
    loc=loc + "TipDannyh_id"+ "=" + i;
  else
    loc=loc + "TipDannyh_id"+ "=" + TipDannyh_id_el.value;
  
  loc=loc + "&";
  
  if (btn_id === "Razmernost_id")
    loc=loc + "Razmernost_id"+ "=" + i;
  else
    loc=loc + "Razmernost_id"+ "=" + Razmernost_id_el.value;
  
  loc=loc + "&";
  
  if (btn_id === "Mnozitel_10_id")
    loc=loc + "Mnozitel_10_id"+ "=" + i;
  else
    loc=loc + "Mnozitel_10_id"+ "=" + Mnozitel_10_id_el.value;
  
  loc=loc + "&" + "Naimenovanie"+ "=" + Naimenovanie_el.value;
  loc=loc + "&" + "Oboznachenie"+ "=" + Oboznachenie_el.value;
  
  loc=loc + "&" + "Chislo"+ "=" + Chislo_el.value;
  loc=loc + "&" + "Chislo_min"+ "=" + Chislo_min_el.value;
  loc=loc + "&" + "Chislo_max"+ "=" + Chislo_max_el.value;
  loc=loc + "&" + "Stroka"+ "=" + Stroka_el.value;
  
  window.parent.location=loc;
}
*/

function Button_select_suschnost_for_edit(i,id)
{
  var TipSuschnosti_id_el = window.parent.document.getElementById("TipSuschnosti_id");
  var Naimenovanie_el = window.parent.document.getElementById("Naimenovanie");
  var Oboznachenie_el = window.parent.document.getElementById("Oboznachenie");
  var Primechanie_el  = window.parent.document.getElementById("Primechanie");
  
  var loc="add_edit_suschnost.php";
  loc=loc + "?";

  if (id === "id")
    loc=loc + "id"+ "=" + i;

  window.parent.location=loc;
}

function add_edit_suschnost_button_click(i,btn_id)
{
  // Диалог для задания свойств сущности (add_edit_suschnost.php).
  var id                = window.parent.document.getElementById("id");
  var TipSuschnosti_id  = window.parent.document.getElementById("TipSuschnosti_id");
  var Naimenovanie      = window.parent.document.getElementById("Naimenovanie");
  var Oboznachenie      = window.parent.document.getElementById("Oboznachenie");
  var Primechanie       = window.parent.document.getElementById("Primechanie");
  var loc="add_edit_suschnost.php";
  loc=loc + "?" + "id"+ "=" + id.value;
  if (btn_id === "TipSuschnosti_id")
    loc=loc + "&" + "TipSuschnosti_id"+ "=" + i;
  else
    loc=loc + "&" + "TipSuschnosti_id"+ "=" + TipSuschnosti_id.value;
  loc=loc + "&" + "Naimenovanie"+ "=" + Naimenovanie.value;
  loc=loc + "&" + "Oboznachenie"+ "=" + Oboznachenie.value;
  loc=loc + "&" + "Primechanie"+ "=" + Primechanie.value;
  
  window.parent.location=loc;
}

function add_edit_tipsuschnosti_button_click(i,btn_id, callback_param)
{
  // Диалог для задания свойств типа сущности (add_edit_tipsuschnosti.php).
  var loc="add_edit_tipsuschnosti.php";
  if ( btn_id === 'id')
    loc=loc + "?" + "id"+ "=" + i;
  window.parent.location=loc;
}

add_edit_tipsuschnosti_button_click

function toggle_visibility(id) 
{
  var e = document.getElementById(id);
  if(e.style.display == 'block') e.style.display = 'none';
  else e.style.display = 'block';
}

function Button_click(i,id)
{
  var el = window.parent.document.getElementById(id);
  el.value = i;
  alert(i . id . el );
}

function Haracteristic_list_frame_show(frame)
// frame = 'tbl_content';
{
  var Suschnost_id_el = document.getElementById("Suschnost_id");
  
  if (Suschnost_id_el.value !== "")
  {
    var src = "haracteristic_list.php?Suschnost_id=" + Suschnost_id_el.value;
    remove_by_id(frame);

    var canvas = document.createElement('iframe');
    canvas.id  = frame;
    canvas.src = src ; 
    
    document.body.appendChild(canvas);
  }
}

function Frame_show(frame, reference)
// frame = "content";
// reference = "suschnost.php";
{
  remove_by_id(frame);

  var canvas = document.createElement('iframe');
  canvas.id  = frame;
  canvas.src = reference; //select * from Сущность;
  
  document.body.appendChild(canvas);
}

function remove_by_id(id)
{
  var child = document.getElementById(id);
  if(child)
  {
    document.body.removeChild(child);
  }
}



var WW=400;
var HH=300;

function copyText()
{
  var canvas = document.createElement('canvas');
  canvas.id     = "BlackStrokeRect";
  
  var xx = canvas.width = WW;
  var yy = canvas.height = HH;
  
  canvas.style.zIndex   = 8;
  canvas.style.position = "absolute";
  canvas.style.border   = "3px double #ffff00";
  

  document.body.appendChild(canvas); 
  var ctx = canvas.getContext("2d");
  
  var w=xx < yy ? xx : yy ;
  w/=2;

  ctx.lineWidth=5;
  ctx.strokeRect (xx*0.5-w*0.5,yy*0.5-w*0.5,w,w);
}


function Mnozitel_frame_show_bak()
{
  var canvas = document.createElement('canvas');
  canvas.id     = "BlackStrokeRect";
  
  var xx = canvas.width = WW;
  var yy = canvas.height = HH;
  
  canvas.style.zIndex   = 8;
  canvas.style.position = "absolute";
  canvas.style.border   = "3px double #ffff00";
  

  document.body.appendChild(canvas); 
  var ctx = canvas.getContext("2d");
  
  var w=xx < yy ? xx : yy ;
  w/=2;

  ctx.fillStyle = "#ff0";
  ctx.fillRect(0,0,xx,yy);
  
  ctx.lineWidth=1;
  ctx.strokeRect (xx*0.5-w*0.5,yy*0.5-w*0.5,w,w);
}

