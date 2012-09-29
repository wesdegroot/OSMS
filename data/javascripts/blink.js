var spe = 500;
var na  = document.all.tags("blink");
var swi = 1;

KnipperTekst();

function KnipperTekst()
  {
    if (swi == 1) 
      {
        sho="visible";
        swi=0; 
      }
    else 
      {
        sho="hidden";
        swi=1;
      }

    for(i=0;i<na.length;i++)
      {
        na[i].style.visibility=sho;
      }

    setTimeout("KnipperTekst()", spe);
  }