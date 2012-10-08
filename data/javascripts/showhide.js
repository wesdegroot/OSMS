/*

              ```      `::`                        
          `.:.///:`   /::.                        
         `/:`......  `.`        ``.`             
         ./-.-.....-           `......`           
         `/......`.`           .......`           
           .::....              `....`            
                          ///.......`              
                         ..:.......:+`            
        ```              `/.......`/.             
      .:.....`            /..   `/`s`             
     .:........           /-.   `/`s`             
     ::........           :..   `-`s.             
     `........           -+``    ::/o`            
        ````            .s`       :/++            
                       .s`         :-/o`          
                      `o-  `..:::....`:o          
                      .o.osyhhhhhhhhyo//o`       
                     /oshhhhhhhhhyyhhdds:o`      
                    :oyhysssssooooooosyhy:+`     
                   .++hyssoooooooooooosyhs..      
                  .:.yhyysssooooooooosyyhy...     
                  `/:.:+syyhhhhhhhhhhhyyo//+..`   
                    `.:://+oooosssssso+/++:..``   
                         `....:::....`````        

                        WesDeGroot Projects
                               By
                          Wesley De Groot


                (c) 2001-2012, WesDeGroot Projects
             
                  http://www.wdgp.nl/#conditions
                      ^ Terms & Conditions ^
                         Please Read Them.

                       	NOTES:
                    SHOWHIDESCRIPT.

                MAY USE IN THE OSMS SYSTEM!!!
          IT IS FREE TO USE IF YOU LEAVE THE CREDITS

*/

function showhide(id)
  {
    if (document.getElementById)
      {
        obj = document.getElementById(id);

        if (obj.style.display == "none")
          {
          obj.style.display = "";
          }
        else
          {
            obj.style.display = "none";
          }
      }
  }