
// ============= HIDE SHOW FORM BUTTON ===================

var div = document.getElementById('navshow-pc');
var div2 = document.getElementById('navshow-mb');
var display = 0;

function hideshow() 
{
    if(display == 1)
    {
        div.style.display = 'none';
        div2.style.display = 'none';
        display = 0;  
    }
    else
    {
        div.style.display = 'flex';
        div2.style.display = 'flex';
        display = 1;
    }
}
