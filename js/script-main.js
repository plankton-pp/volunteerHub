var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

var xmlHttp;
function createXMLHttpRequest() {
  if (window.ActiveXObject) { // Internet Explorer
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  } else { // Firefox, Opera 8.0+, Safari
    xmlHttp = new XMLHttpRequest();
  }
} //end function createXMLHttpRequest()
function showList(str) {
  createXMLHttpRequest();
  var search = str;
  var url = "volunteerDB.php";
  url = url+"?search="+search;
  xmlHttp.open("GET", url, true);
  xmlHttp.onreadystatechange = () => {
    if (xmlHttp.readyState == 4) {
      let result = xmlHttp.responseText;
      document.getElementById("table-card").innerHTML = result;
      
    }
  }
  xmlHttp.send(null);
}
function callResult() {
  createXMLHttpRequest();
  var search = 3;
  var url = "editFormResult.php";
  url = url+"?id="+search;
  xmlHttp.open("GET", url, true);
  xmlHttp.onreadystatechange = () => {
    if (xmlHttp.readyState == 4) {
      alert('success!');
    }
  }
  xmlHttp.send(null);
}
function searchName(str) {
  createXMLHttpRequest();
  var url = "searchName.php";
  url = url + "?search=" + str;
  xmlHttp.open("GET", url, true);
  xmlHttp.onreadystatechange = () => {
    var result = "";
    if (xmlHttp.readyState == 4) {
      let res = xmlHttp.responseText.split(',');
      for(suggest in res){
        result += "<option value="+res[suggest]+">" + res[suggest]+"</option>";
      }
      document.getElementById("namesugg").innerHTML = result;
      //alert(result);
    }
  };
  xmlHttp.send(null);
}