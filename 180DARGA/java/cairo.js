
//array from images
var sliderimage=Array.from(document.querySelectorAll('.slider-container img'));
var slidecount=sliderimage.length;
var currentslide=1;
var slidenumber=document.getElementById('slide-number');

var nextbutton=document.getElementById('next');
var prevbutton=document.getElementById('prev');
nextbutton.onclick=nextslide;
prevbutton.onclick=prevslide;



// add numbers of pages
var paginationelement=document.createElement('ul');
paginationelement.setAttribute('id','pagination-ul')

for (var i=1 ;i<=slidecount; i++)
{
    var paginationitem=document.createElement('li');
    paginationitem.setAttribute('data-index',i);
    paginationitem.appendChild(document.createTextNode(i));
    paginationelement.appendChild(paginationitem);
}
document.getElementById('indicators').appendChild(paginationelement);
var createdul=document.getElementById('pagination-ul');

var paginationslide=Array.from(document.querySelectorAll('#pagination-ul li'));

//loop throw pagination
for(var i=0;i<paginationslide.length;i++)
{
    paginationslide[i].onclick=function()
{
    currentslide=parseInt(this.getAttribute('data-index'));
    checker();
    
}
    
}

checker();






function nextslide()
{
    if(nextbutton.classList.contains('disabled'))
    {

    }
    else
    {
        
        currentslide++;
    checker();
    }
    
}

function prevslide()
{
     if(prevbutton.classList.contains('disabled'))
    {
        
    }
    else
    {
        
        currentslide--;
    checker();
    }
}
//write numbers of pages
function checker()
{
     slidenumber.textContent=(currentslide)+'/'+(slidecount);
     removeactive();
     
//set active on slider
sliderimage[currentslide-1].classList.add('active');

//set active on pagination
createdul.children[currentslide-1].classList.add('active');

//check current slide and add disablled
if(currentslide==1)
{
    prevbutton.classList.add('disabled');
}
else
{
    prevbutton.classList.remove('disabled');
}


if(  currentslide==slidecount)
{
    nextbutton.classList.add('disabled');
}
else
{
    nextbutton.classList.remove('disabled');
}


}
//remove all active class from image and pagination
function removeactive()
{
    sliderimage.forEach(function(img) {
        
        img.classList.remove('active');
    });

    paginationslide.forEach(function (pag) {
        pag.classList.remove('active');       
    });

}

