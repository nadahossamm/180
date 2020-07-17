function com()
  {
    
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function()
    {
  if(this.readyState == 4 && this.status == 200 )
    {
    
    document.getElementById('about').innerHTML = this.responseText;
    
    
    }
  
  };
  xhr.open('get','../../180DARGA/html/pr.php',true);
  xhr.send();
  }
  