
var request = new XMLHttpRequest();
var url = "dmd-website/FacebookEvents.php";
request.open("POST", url, true);
request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

request.onreadystatechange = function() {//Call a function when the state changes.
    if(request.readyState == 4 && request.status == 200) {
      console.log(request.responseText);
      // var data = JSON.parse(request.responseText);
      // console.log(data);
      var div = document.getElementById('fb-news');
      div.innerHTML = div.innerHTML + request.responseText;
    }
}
request.send();